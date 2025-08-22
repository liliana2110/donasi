<?php 

session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUser = $_SESSION['id_user'];
    $idCategory = $_POST['idCategory'];
    $idType = $_POST['food-type'];
    $address = $_POST['alamat'];
    $foodName = $_POST['food'];

    // Memasukkan data ke database dengan peran default
    $insert_donasi = $conn->prepare("INSERT INTO donasi (id_user, id_kategori, id_jenis, alamat_donatur, nama_makanan) VALUES (?, ?, ?, ?, ?)");
    $insert_donasi->bind_param("sssss", $idUser, $idCategory, $idType, $address, $foodName);

    if ($insert_donasi->execute()) {
        // Donasi berhasil, tampilkan peringatan dan arahkan dengan JavaScript
        echo '<script>alert("Donasi berhasil."); 
        window.location.href = "../pages/donasi.php";</script>';
    } else {
        echo "Registrasi gagal. Silakan coba lagi.";
    }

    $insert_donasi->close();

$conn->close();
}
?>