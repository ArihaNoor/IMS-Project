<?php
require_once('C:\xampp\htdocs\PHP\IMS Project\Database\database.php');
$db = new Database();
$array = [
    'userName' => $_POST['userName'],
    'userPass' => $_POST['pwd'],
];
$username = $_POST['userName'];	
$pass = $_POST['pwd'];
$sql = "SELECT * FROM admin WHERE userName = '$username' AND userPass = '$pass'";
$result = $db->sql($sql);
$res = count($result);
if($res==1){
    session_start();
    $_SESSION['userName'] = $username;
    header('location: http://localhost/PHP/IMS%20Project/ControlPanel/sidePanel.php');
}else{
    header('location: http://localhost/PHP/IMS%20Project/Auth/frmLogin.php');
}
?>
