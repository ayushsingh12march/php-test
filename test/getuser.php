<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}
table, td, th {
    border: 1px solid black;
    padding: 5px;
}
th {text-align: left;}
</style>
</head>
<body>

<?php
include('connect.php');
$q = $_GET['q'];
$sql="SELECT * FROM detail WHERE name = '$q'";
$result = mysqli_query($cont,$sql);
echo "<br><table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($cont);
?>
</body>
</html>