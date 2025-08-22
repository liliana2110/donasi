<?php

    session_start();
    include '../script/db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $stmt = $conn->prepare("SELECT id_user, nama, password, email, alamat, role FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($id, $name, $stored_password, $email, $alamat, $role);
            
        if($stmt -> num_rows > 0) {
            $stmt->fetch();
            if ($pass == $stored_password) {
                $_SESSION['status_login'] = true;
                $_SESSION['id_user'] = $id;
                $_SESSION['role'] = $role;
                $_SESSION['nama'] = $name;
                echo '<script>alert("Berhasil Masuk!, Selamat Datang.")</script>';
                echo '<script>window.location="../index.php"</script>';
            } else{
                echo '<script>alert("Username atau Password anda salah!")</script>';
                echo '<script>window.location="../login.php"</script>';
            }
        } else {
            echo
            '<script>alert("Gagal Masuk!")</script>';
        }
    }
?>