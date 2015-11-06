<?php
//save.php
include 'connect.php';
extract ($_POST);

$sql="insert into users values ('', '$names', '$email', '$age')";

$res =mysql_query($sql) or die (mysql_error());

if ($res)
{
	echo "Saved Successfully";
}

else
{
	echo "Failled To Save";
}

?>