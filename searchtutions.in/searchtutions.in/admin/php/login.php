<?php 
session_start();
require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];


$stmt = $db->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
$stmt->execute(array($username, $password));
$row=$stmt->fetch(PDO::FETCH_NUM);
if ($row > 0) {
	$_SESSION['admin'] = $username;
	$stmt1 = $db->query("UPDATE admin set login_time = now()");
	echo "index";

}
else {
	echo "Login Failed";
}
