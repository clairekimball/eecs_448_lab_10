<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c866k116", "jae9cieF", "c866k116");
if ($mysqli->connect_errno) 
{
printf("Connection failed: %s\n", $mysqli->connect_error);
exit();
}
$username = $_POST["username"];
$text = $_POST["text"];
$query = "INSERT INTO Posts (content, author_id) VALUES ('" . $text . "', '" . $username . "');";
if (strlen($text)!=0)
{
if ($result = $mysqli->query($query))
{
echo "Post successfully saved";
$result->free();
}
else
{
echo "Post NOT successfully saved";
}
$mysqli->close();
}
else
{
echo "Post NOT successfully saved";
}
?>
