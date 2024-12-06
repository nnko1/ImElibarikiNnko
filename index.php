<?php
  if(isset($_POST['submit'])){
  	$username=$_POST['username'];
  	$password=$_POST['password'];
    $email=$_POST['email'];


  	$localhost='localhost';
  	$db_user='root';
  	$db_pass='';
  	$db_name="data";

  	$conn=mysqli_connect($localhost,$db_user,$db_pass,$db_name);
  	if($conn){
  		echo "Connected Successfuly <br>";
  	}
  	else{
  		die("Fail to connect to database". mysql_error());
  	}
    
    
  	$sql="INSERT INTO users(username,password,email) VALUES('$username','$password','$email')";
  	if(!$sql){
  		die("Data not inserted Successfuly". mysql_error());
  	}
  	else{
  		echo "Data inserted Successfuly";
  	}
  	mysqli_query($conn,$sql);
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index Page</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
  <form method="POST" action="#">
    <fieldset>
    	<legend>FILL THE FORM BELOW:</legend>
    	<p>USERNAME: <input type="text" name="username" size="30"></p>
    	<p>PASSWORD: <input type="password" name="password" size="20"></p>
      <p>EMAIL: <input type="text" name="email" size="30"></p>
    	<p><input type="submit" name="submit" value="SUBMIT"></p>
    </fieldset>
  </form>
</body>
</html>
