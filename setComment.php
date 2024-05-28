
<?php
$email= $_POST["email"];
$comment= $_POST["comment"];
$servername="localhost";
$hostname = "root";
$db="mydb";
$conn = mysqli_connect($servername,$hostname ,"",$db);
$sql= "insert into commentaire(email,comment) values('" . $email."','". $comment."');";
if (mysqli_query($conn,$sql)) {
   include "FORM.php";
}
?>