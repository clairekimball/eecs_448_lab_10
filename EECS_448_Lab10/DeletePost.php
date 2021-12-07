<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c866k116", "jae9cieF", "c866k116");
if ($mysqli->connect_errno) 
{
printf("Connection failed: %s\n", $mysqli->connect_error);
exit();
}

$select = $_POST['select'];
  if(empty($select)) 
  {
    echo("You didn't select anything to delete.");
  } 
  else 
  {
    $N = count($select);

    echo "The posts with the following post_ids were successfully deleted:<br>";
    for($i=0; $i < $N; $i++)
    {
	$query = "DELETE FROM Posts WHERE post_id='" . $select[$i] . "'";
	if ($result = $mysqli->query($query))
{
echo $select[$i] ;
echo "<br>";
}
else
{

}
     
    }
  }
$mysqli->close();
?>
