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
	$c = $_POST["keyword"];
	$c = strtoupper($c);
$find = strip_tags($c);
$find = trim ($c);


	$sql =mysqli_query($conn,"select clink from searchtb where course = '".$find."' ");
	
	while($result = mysqli_fetch_array( $sql ))
            {
				$link = $result["clink"];
            echo $result["clink"];
			/*$link1 = "file:///C:/faseela/web%20design%20project/unica/unica/";*/
			
			 header("Location: $link");
			 exit;
			
            }

            //This counts the number or results - and if there wasn't any it gives them a     little     message explaining that
            $anymatches = mysqli_num_rows($sql);
            if ($anymatches == 0)
            {
            echo "Sorry, but we can not find an entry to match your query...<br><br>";
            }
        /*echo "<script type='text/javascript'>alert('$message');</script>";*/
	
		$conn->close();
	}

?>
</body>
</html>