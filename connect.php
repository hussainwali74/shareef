<?php 
	$host="localhost";
$username = "root";
$password = "";
$database = "urc";

if($conn = mysqli_connect($host,$username,$password,$database)){
    // echo "connected";
}else{
    echo $conn->error;
}

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 } 
?>