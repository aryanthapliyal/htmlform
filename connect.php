<?php 
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $tel = $_POST['tel'];
  $datetime = $_POST['datetime']
  $sc = $_POST['sc']
  $Gender = $_POST['Gender'];
  $hrd = $_POST['hrd'];

// Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into registration(firstName, lastName,  username, password,tel , datetime, sc,Gender,hrd) values(?, ?, ?, ?, ?, ? , ?, ?, ?)");
  $stmt->bind_param("sssssi", $firstName, $lastName, $username, $password, $tel , $datetime, $sc,$Gender,$hrd);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
}
?>