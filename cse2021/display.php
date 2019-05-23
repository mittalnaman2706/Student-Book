<html>

<table style="width:100%">
  <tr>
    <th>SID</th> 
    <th>Name</th>
    <th>E-Mail</th>
    <th>Phone_No</th>
  </tr>

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

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["Student_ID"]. "</td><td>". $row["Name"]. "</td><td>" . $row["Email_Adress"]. "</td><td>". $row["Phone_No"].  "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>

</html>


<style>
table, tr, th {
    background-color: #F1FFF1;
    text-align: left;
    padding: 20px;
	word-wrap:break-word;
}
th {
    text-align: left;
}
th, td {
    padding: 15px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
table, th, td {
    border: 2px solid black;
}
table {
    border-spacing: 5px;
.well-sm{
	size:50px;
}
}
</style>

