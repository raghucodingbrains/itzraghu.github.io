<?php
session_start();

require_once 'database.php';

$username = $_SESSION['user'];
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];

$stmt = $db->prepare("SELECT password FROM admin WHERE username = ?");
$stmt->execute(array($username));
$row = $stmt->fetch(PDO::FETCH_COLUMN);
if($old_password == $row)
{
	$stmt = $db->prepare('UPDATE admin SET password = ? WHERE username = ?');
	$stmt->execute(array($new_password, $username));
	echo "Password is changed Successfully";
}

else
{
	echo "You have entered wrong old password..Try Again!";
}
