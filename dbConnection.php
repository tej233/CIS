<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect("localhost","root","","entrydetails"); if(!$con)

die("Connection Failed!...");

$rst= "insert into visitorsdata values ('$firstname','$lastname','$email','$password')"; if(mysqli_query($con,$rst))
{
echo"<A href=#></A>";
}
else
echo"Error.	";

?>

<html>
<title>Register Successfully</title>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style> button{

display:flex;
justify-content:center; width:300px; height:60px;
font-size:35px;
background-color:rgba(var(--bs-danger-rgb)); border:none;
border-radius:26px; color:#fff;
margin-top:50px;
}

button:hover{
background-color:white; color:rgba(var(--bs-danger-rgb));
}
h1{

margin-top:250px;
 
}
body{

background-color:#D6D6D6;
}
a{
text-decoration: none; color:white;
}
a:hover{

color:rgba(var(--bs-danger-rgb));
}
</style>
</head>
<body>
<center><h1>Register Successfully
</h1>
<button><a href="Login.html">- Login Now -</a></button></center>

</body>
</html>
