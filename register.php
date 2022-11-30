<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "welcome";
$dbname = "enrolldb";
$conn  = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed" .$connect_error);
}
/*echo "registration success";*/
else
{
$c = $_POST["course"];
$g = $_POST["gender"];
$v = $_POST["visastatus"];
	$sql = "insert into enrolltb(name,guardian,nationality,gender,dob,mstatus,vstatus,qual,cmp,period,khda,contactno,email,course) values('".$_POST["name"]."','".$_POST["father_name"]."','".$_POST["nation"]."','".$g."','".$_POST["birth_date"]."','".$_POST["mstatus"]."','".$v."','".$_POST["qual"]."','".$_POST["cmp"]."','".$_POST["period"]."','".$_POST["certificate"]."',".$_POST["mob"].",'".$_POST["email"]."','".$c."')";
	
	if($conn->query($sql)==TRUE)
	{
		echo "registration success";
		
		$message = "registration success";
        echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{
		echo " error...";
		$conn->close();
	}
}

?>
</body>
</html>