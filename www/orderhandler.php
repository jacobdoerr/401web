<?php
	session_start();
	require_once 'Dao.php';
	$dao = new Dao();

	$business = $_POST['customerType'];
	$picturedesc = $_POST['picD'];
	$id = uniqid(rand()).uniqid();
	$editdesc = $_POST['editD'];
	$price = 8;
	
	$_SESSION['presets'] = array($_POST);

	$valid = true;
	$messages = array();
	if(empty($business)){
		$messages[] = "Customer Type Not Selected.";
		$valid = false;
	}

	if(empty($picturedesc)){
		$messages[] = "Please Provide A Picture Description.";
		$valid = false;
	}

	if(empty($editdesc)){
		$messages[] = "Please Provide An Edit Description.";
		$valid = false;
	}

	if(!$valid){
		$_SESSION['messages'] = $messages;
		header("Location: purchasing.php");
		exit;
	}

	$dao->createOrder($business, $picturedesc, $editdesc, $id, $price);
	header("Location: ordersuccess.php");
	exit;

?>
