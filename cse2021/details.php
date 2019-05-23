<style>

.q{
	background-image : url("main.jpg");
	height : 100%;
	width : 100%;
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.b{
	margin-top : 150px;
}

h1 {
    color: red;
}

h2 {
    color: yellow;
}
h3 {
    color: blue;
}

.found{
	
	
	
}

.error{
	background-image : url("error.png");
	height : 100%;
	width : 100%;
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>

<html>
<body class="q">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nm";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<?php
$sid = $_GET["Student_ID"]; 

$sql ="select * from cse2021 where Student_ID=$sid";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()){
?>
	<div class="b">	<h1 align="center">Name : <?=$row['Name']?></h1>
        <h2 align="center">SID : <?=$row['Student_ID']?></h2>
        <h3 align="center">Phone : <?=$row['Phone_No']?></h3>
        <h4 align="center">Email : <?=$row['Email_Adress']?></h4></div>	
<?php 
    }
}
else
{
	?>
	<p class="error">Invalid SID</p>
<?php
}?>
</body>
</html>