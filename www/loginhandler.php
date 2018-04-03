<?php
	session_start();
	require_once 'Dao.php';
	$dao = new Dao();

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$logged = false;
	$serialUser = serialize($username);
	$serialPass = serialize($password);
	$user = $dao->getUser($serialUser, $serialPass);
	foreach($user as $users){
		$getuser = unserialize($users['username']);
		echo $getuser;
		$getpass = unserialize($users['password']);
		echo $getpass;
		if($username == $getuser && $password == $getpass){
			header("Location: loginsuccess.php");
			exit;
		} else {
			if($username != $getuser){
				
			} else if($password != $getpass){
				
			}
			header("Location: login.php");
			exit;
		}
	}
	header("Location: login.php");
	exit;

?>
