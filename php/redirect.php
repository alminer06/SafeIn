<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username == "admin" && $password == "admin"){
		header("Location: ../admin_page/managesupport(ViewVolunteers).html");	
	}else{
		header("Location: ../usernotification.html");		
	}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login redirect</title>
</head>

<body>
</body>
</html>