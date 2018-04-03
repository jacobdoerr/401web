<?php
	session_start();
	require_once 'Dao.php';
	$dao = new Dao();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$id = uniqid(rand()).uniqid();

	$_SESSION['presets'] = array($_POST);

	$valid = true;
	$messages = array();
	if(empty($username)){
		$messages[] = "Username Is Empty.";
		$valid = false;
	}

	if(empty($password)){
		$messages[] = "Password Is Empty.";
		$valid = false;
	}
	
	if(empty($email)){
		$messages[] = "Email Is Empty.";
		$valid = false;
	}

 	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
 	$email = (preg_match($regex, $email))?$email:"invalid email";
	if($email == "invalid email"){
		$messages[] = "Email Given Is An Invalid Email.";
		$valid = false;
	}

	if(!$valid){
		$_SESSION['messages'] = $messages;
		header("Location: registration.php");
		exit;
	}

	$messages[] = "Registration Successful! You May Now Log In Below!";
	$_SESSION['messages'] = $messages;
	$serialUser = serialize($username);
	$serialPass = serialize($password);
	$serialEmail = serialize($email);
	$dao->createUser($serialUser, $serialPass, $serialEmail, $id);
	header("Location: login.php");	
	exit;

?>
