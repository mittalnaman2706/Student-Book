<?php
$con=mysqli_connect("localhost","root","","nm");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<script src='https://www.google.com/recaptcha/api.js'></script>

<form name="person" action="details.php" method="get">
Enter an SID for extra details: <input type="text" pattern="[0-9]+" placeholder="Enter Integer Only" onsubmit="return checkInp()" name="Student_ID"><br>
<div method="post" class="g-recaptcha" data-sitekey="6Lctd4wUAAAAAHbpxuUBqphNRWdhSkd2sTzZZ5SQ"></div>
<input type="submit" value="submit">
</form>

<?php
$result = mysqli_query($con,"SELECT * FROM cse2021 where Student_ID>17103100");

echo "<table border='14'>
<tr>
<th>SID</th>
<th>Name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Student_ID'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>