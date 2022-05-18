<?php 
$conn=new mysqli("localhost","root","","fashion");
if($conn->connect_error){
	die("Error :". $conn->connect_error);

}
else{
	//echo "connection.. ";
}


?>