<?php
class Dao {

 private $host = "us-cdbr-iron-east-05.cleardb.net"; 
 private $db = "heroku_2833a8cbf5c03fd";
 private $user = "bb6b6e91e5cc93";
 private $pass = "b47a8a69";

 public function __construct(){

 }

 public function getConnection() {
	
     	try {
      $conn =
        new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
            $this->pass);
      return $conn;
    } catch (Exception $e) {
      

    }

 }

 public function newUser($username, $password, $email, $id){
	$conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
	if(!$conn){
		echo 'no connection';
	}
	$sql = "INSERT INTO users (id, username, password, email) VALUES ('$id', '$username', '$password', '$email')";
	if(!mysqli_query($conn,$sql)){
		echo 'not inserted';
		printf("error: %s\n", mysqli_error($conn));
	}
	else{
		echo 'inserted';
	}
	header("refresh:30; url=registration.php");

 }

 public function newOrder($business, $picturedesc, $editdesc, $id, $price){
	$conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
	if(!$conn){
		echo 'no connection';
	}
	$sql = "INSERT INTO `order` (`business`, `picturedesc`, `requestdesc`, `price`, `id`) VALUES ('$business', '$picturedesc', '$editdesc', '$price', '$id')";
	if(!mysqli_query($conn,$sql)){
		printf("error: %s\n", mysqli_error($conn));
	} 
	else{
		echo 'inserted';
	}
	header("refresh:30; url=registration.php");

	
 }


 public function createUser($username, $password, $email, $id){
	$conn = $this->getConnection();
	$query = $conn->prepare("INSERT INTO users (id, username, password, email) VALUES (:id, :username, :password, :email)");
	$query->bindParam(':id', $id);
	$query->bindParam(':username', $username);
	$query->bindParam(':password', $password);
	$query->bindParam(':email', $email);
	$query->execute();
 }

 public function createOrder($business, $picturedesc, $editdesc, $id, $price){
	$conn = $this->getConnection();
	$query = $conn->prepare("INSERT INTO `order` (`business`, `picturedesc`, `requestdesc`, `price`, `id`) VALUES (:business, :picturedesc, :editdesc, :price, :id)");
	$query->bindParam(':business', $business);
	$query->bindParam(':picturedesc', $picturedesc);
	$query->bindParam(':editdesc', $editdesc);
	$query->bindParam(':price', $price);
	$query->bindParam(':id', $id);
	$query->execute();
 }

 public function getUser($user, $pass) {
	$conn = $this->getConnection();
	$query = $conn->prepare("select * from users where username = '$user' and password = '$pass'");
	$query->setFetchMode(PDO::FETCH_ASSOC);
	$query->execute();
	$results = $query->fetchAll();
	return $results;
 }
}
?>
