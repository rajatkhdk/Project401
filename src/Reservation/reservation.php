<?php
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "login";

$conn = new mysqli( $server_name , $username , $password , $db_name);

if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}
echo "Reservation successful";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$checkin = date('Y-m-d',strtotime($_POST['checkin']));
$checkout = date('Y-m-d',strtotime($_POST['checkout']));

$sql = "INSERT INTO reservation (First_name , Last_name , Email , Check_in , Check_out , Date) VALUES ('$fname' , '$lname' , '$email' , '$checkin' , '$checkout' , current_timestamp());";

mysqli_query($conn,$sql);

mysqli_close($conn); 
?>