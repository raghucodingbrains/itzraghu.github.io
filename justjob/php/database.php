<?php
try{
	$db = new PDO('mysql:host=localhost;dbname=justjob', "root" , "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
	print "error in connection" . $e->getMessage();
}