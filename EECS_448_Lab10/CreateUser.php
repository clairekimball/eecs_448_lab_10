<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c866k116", "jae9cieF", "c866k116");
if ($mysqli->connect_errno) 
{
printf("Connection failed: %s\n", $mysqli->connect_error);
exit();
}

$user_id = $_POST["user_id"];
$query = "INSERT INTO Users (user_id) VALUES ('" . $user_id . "');";
if (strlen($user_id)!=0) 
{
if ($result = $mysqli->query($query))
{
echo $user_id . " successfully stored in database";
$result->free();
}
else
{
echo $user_id . " NOT successfully stored in database";
}
$mysqli->close();
}
else
{
echo $user_id . " NOT successfully stored in database";
}


?>
