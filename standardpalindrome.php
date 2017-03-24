<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Using string functions </title>
	</head>
	<body>
		<h1>Web Development Form – Lab 3 - task 2</h1>
		<?php 
		$str = $_POST['str'];
		$pattern = "/[^A-Za-z]/";
		
		$str = preg_replace($pattern, "", $str);
		echo $str;
		 if (strcmp($str,strrev($str)) ==0){
			 echo"<p>this is a standard palindrome</p>";
		 }
		 else
		 {
			 echo"<p>this is not a standard palindrome</p>";
		 }
		?>
	</body>
</html>