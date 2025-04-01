<?php 


$host="localhost";
$r="jewaprop_tenants";
$pass="J@m!!8.net";

$db="jewaprop_tenants";
	if (isset($_POST["Token"])) {
		 
		   $_uv_Token=$_POST["Token"];
		  // $b = $_POST["id"];
		   $conn = mysqli_connect($host, $r, $pass, $db) or die("Error connecting");
		   $q="INSERT INTO token_registration (Token) VALUES ( '$_uv_Token') "
              ." ON DUPLICATE KEY UPDATE Token = '$_uv_Token';";
             mysqli_query($conn,$q) or die(mysqli_error($conn));
                 mysqli_close($conn);
	}
	
	
 ?>