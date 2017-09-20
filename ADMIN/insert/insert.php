<?php
$result=$_REQUEST['result'];
$description=$_REQUEST['description'];
$link=$_REQUEST['link'];

$link=mysql_connect("localhost","root","") or die("Cannot connect to the database");
mysql_select_db("kongu_search" , $link) or die ("cannot connect to database");
$query = "INSERT INTO  search_fields (result , description ,link) 
values('".$result."','".$description."','".$link."')";

if (!mysql_query($query, $link))
{
	die ("error");
}
else
{
	echo "sucess";
}
?>



