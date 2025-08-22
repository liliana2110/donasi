<?php
include '../script/db.php';

$id_user_delete = $_GET['id_user'];

$sql = "DELETE FROM user WHERE id_user = '$id_user_delete'";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location: admin-user.php');
}
?>