<?php
require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$db = new Database();
$array = [
    'userFullName' => $_POST['fname'],
    'userName' => $_POST['userName'],
    'userPass' => $_POST['pwd'],
    'userEmail' => $_POST['email'],
];
$result = $db->Insert('admin', $array);
if($result==1){
    header('location: http://localhost/PHP/IMS%20Project/Auth/frmLogin.php');
}else{
    header('location: http://localhost/PHP/IMS%20Project/Auth/frmRegister.php');
}
?>