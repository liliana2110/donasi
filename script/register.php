<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $phone = $_POST['no_hp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['alamat'];
    $role = 'donatur'; // Mengatur peran default

    // Mengecek apakah username sudah digunakan
    $check_email = $conn->prepare("SELECT email FROM user WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $check_email->store_result();

    if ($check_email->num_rows > 0) {
        echo "email sudah digunakan.";
    } else {
        // Memasukkan data ke database dengan peran default
        $insert_user = $conn->prepare("INSERT INTO user (nama, no_hp, email, password, alamat, role) VALUES (?, ?, ?, ?, ?, ?)");
        $insert_user->bind_param("ssssss", $nama, $phone, $email, $password, $address, $role);

        if ($insert_user->execute()) {
            // Registrasi berhasil, tampilkan peringatan dan arahkan dengan JavaScript
            echo '<script>alert("Registrasi berhasil. Silakan login."); 
            window.location.href = "../pages/login.php";</script>';
        } else {
            echo "Registrasi gagal. Silakan coba lagi.";
        }

        $insert_user->close();
    }

    $check_email->close();
}

$conn->close();
?>

?>