<?php
include 'db.php';

$id_kategori = $_POST['id_kategori'];

$sql = "SELECT * FROM jenis_makanan WHERE id_kategori = '$id_kategori'";
$result = $conn->query($sql);

$options = '';
while ($type = mysqli_fetch_array($result)) {
    $options .= '<option value="'.$type['id_jenis'].'" class="bg-warna_aksen font-medium text-white">'.$type['jenis'].'</option>';
}

echo $options;