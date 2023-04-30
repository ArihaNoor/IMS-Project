<?php
session_start();
session_destroy();
header('location: http://localhost/PHP/IMS%20Project/Auth/frmLogin.php');
exit();
?>