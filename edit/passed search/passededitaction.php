<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><center>


<?php

$id=$_REQUEST['id'];
$adno=$_REQUEST['adno'];
$name=$_REQUEST['name'];
$std=$_REQUEST['std'];
$group1=$_REQUEST['group1'];
$dateofadd=$_REQUEST['dateofadd'];
$stdofadd=$_REQUEST['stdofadd'];
$dateofleaving=$_REQUEST['dateofleaving'];
$tcno=$_REQUEST['tcno'];
$stdofleaving=$_REQUEST['stdofleaving'];
$medium=$_REQUEST['medium'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$religion=$_REQUEST['religion'];
$address=$_REQUEST['address'];
$dob=$_REQUEST['dob'];
$commu=$_REQUEST['commu'];
$gender=$_REQUEST['gender'];
$bg=$_REQUEST['bg'];
$state=$_REQUEST['state'];
$phone=$_REQUEST['phone'];
$ac=$_REQUEST['ac'];
$branch=$_REQUEST['branch'];
$micr=$_REQUEST['micr'];
$ifse=$_REQUEST['ifse'];


$link=mysql_connect("localhost","root","") or die("Cannot connect to the database");
mysql_select_db("ghss", $link) or die ("cannot cnt to db");

$query="UPDATE `passed` SET adno='".$adno."', name='".$name."',std='".$std."',group1='".$group1."',dateofadd='".$dateofadd."',stdofadd='".$stdofadd."',dateofleaving='".$dateofleaving."',tcno='".$tcno."',stdofleaving='".$stdofleaving."',medium='".$medium."',fname='".$fname."',mname='".$mname."',religion='".$religion."',address='".$address."',dob='".$dob."',commu='".$commu."',gender='".$gender."',bg='".$bg."',state='".$state."',phone='".$phone."',ac='".$ac."',branch='".$branch."',micr='".$micr."',ifse='".$ifse."' WHERE id='".$id."'";

if(!mysql_query($query , $link))
{
	die ("error occured");}
	
	else {echo "RECORD UPDATED <bR /><bR />

<h3><a href=\"search/search11.php\">Back</a></h3><h3><a href=\"../../index.html\">Back to index</a></h3><center>" ;}


?>

</center>
</body>
</html>