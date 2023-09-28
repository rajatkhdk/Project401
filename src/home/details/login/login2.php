<?php
require("config.php");
$us=$_POST['username'];
$pd=$_POST['password'];
$qy="SELECT * FROM register where username='$us' && password='$pd'";
$inform=mysqli_query($conn,$qy);
$count=mysqli_num_rows($inform);
if($count==1)
{
    header("location: ../../../Reservation/reserve.html");
    echo "Success";
}
else{
    echo "User cannot be found.";
}
/*if($inform)
{
    echo "Success";
}
else{
    echo "Failed";
}*/
