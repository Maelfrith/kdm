

<?php
$q = $_REQUEST['q'];
$q2 = $_REQUEST['q2'];

$con = mysqli_connect('localhost','root','','kdm');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM severe_injury WHERE Location = '".$q."' AND Number = '".$q2."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
".$q." et ".$q2."
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Location'] . "</td>";
    echo "<td>" . $row['Number'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Text'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
