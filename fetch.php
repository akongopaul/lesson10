<?php


include 'connect.php';

$sql="select * from users";

$data = array();

$results = mysql_query($sql);

while($r = mysql_fetch_row($results))
{
	$data[] = array ("id"=>$r[0], "names"=>$r[1], "email"=>$r[2], "age"=>$r[3]);
}
echo json_encode($data);


?>