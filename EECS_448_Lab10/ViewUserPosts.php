<?php
$user = $_POST['users'];
echo $user . "'s posts:";
$mysqli = new mysqli("mysql.eecs.ku.edu", "c866k116", "jae9cieF", "c866k116");
if ($mysqli->connect_errno) 
{
printf("Connection failed: %s\n", $mysqli->connect_error);
exit();
}
$query = "SELECT content FROM Posts WHERE author_id='" . $user . "'";
if ($result = $mysqli->query($query)) 
{
echo "<table border = \"1\" style= border-collapse: collapse>";
while ($row = $result->fetch_assoc()) 
{
echo "<tr>";
echo "<td>";
echo $row['content'];
echo "</td>";
echo "<tr>";
}
echo "</table>";
$result->free();

}
else
{
echo "No users to display";
}
$mysqli->close();

?>
