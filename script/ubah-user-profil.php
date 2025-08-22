<?php 

session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $address = $_POST['address'];
    $userId = $_SESSION['id_user'];

    // Check if the email is unique
    $stmt = $conn->prepare('SELECT id_user FROM user WHERE email = ? AND id_user != ?');

    if ($stmt) {
        $stmt->bind_param('si', $email, $userId);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            // Email already exists for another user
            $_SESSION['email_exists'] = true;
            header('Location:../pages/ubah-user-profil.php');
            exit();
        }
        $stmt->close();
    } else {
        // Handle error
        echo "Error: " . $conn->error;
        exit();
    }    

    $stmt = $conn->prepare('UPDATE user SET nama = ?, no_hp = ?, email = ?, password = ?, alamat = ? WHERE id_user = ?');
    if ($stmt) {
        $stmt->bind_param('sssssi', $name, $phone, $email, $pass, $address, $_SESSION['id_user']); // Assuming you store the user id in the session
        $stmt->execute();
        $stmt->close();

        header('Location:../pages/user-profil.php');
        $_SESSION['ubah-sukses'] = true;
    } else {
        // Handle error
        echo "Error: " . $conn->error;
    }
}

?>