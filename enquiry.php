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
/*$c = $_POST["course"];
$g = $_POST["gender"];
$v = $_POST["visastatus"];*/
	$sql = "insert into enquirytb(name,email,subject,message,contactno) values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."',".$_POST["contactno"].")";
	
	if($conn->query($sql)==TRUE)
	{
		echo "enquiry success";
		
		$message = "your request is noted.....";
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