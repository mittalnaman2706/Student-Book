<html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nm";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Student_ID, Name, Email_Adress, Phone_No  FROM cse2021";
$result = $conn->query($sql);
?>

<form name="person" action="details.php" method="get">
SID: <input type="text" pattern="[0-9]+" placeholder="Enter Integer Only" onsubmit="return checkInp()" name="Student_ID"><br>
<input type="submit" value="submit">
</form>

<?php

while($row = $result->fetch_assoc()){
?>

    <?php $id = $row['Student_ID']; ?>
<br>
<a target="_parent" href="detail.php?cid=<?php echo $id; ?>"><?php echo ucwords($row['Name']); ?></a>

<?php 
    }
?>
</html>