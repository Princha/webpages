<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign in</title>
</head>

<body>
<?php
$username=$_POST["username"];
$password=$_POST["password"];
/*
$link = mysql_connect('127.0.0.1', 'root', '123456');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
else{
echo "Connected successfully";
}
mysql_close($link);
*/
if($username=="Princha"&&$password=="123456"){
	echo "sign in success!";	
}
else{
	echo "sign in fail!";	
}
?> 
</body>
</html>