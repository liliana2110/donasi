<?php
session_start();
session_destroy();
$_SESSION['logout'] = True;
echo '<script>window.location="../pages/login.php"</script>';



?>