<?php

$adno=$_REQUEST['adno'];
$name=$_REQUEST['name'];
$std=$_REQUEST['std'];
$group1=$_REQUEST['group1'];
$dateofadd=$_REQUEST['dateofadd'];
$stdofadd=$_REQUEST['stdofadd'];
$tcno=$_REQUEST['tcno'];
$laststudied=$_REQUEST['laststudied'];
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
$Phone=$_REQUEST['Phone'];
$ac=$_REQUEST['ac'];
$branch=$_REQUEST['branch'];
$micr=$_REQUEST['micr'];
$ifse=$_REQUEST['ifse'];


$link=mysql_connect("localhost","root","") or die("Cannot connect to the database");
mysql_select_db("ghss" , $link) or die ("cannot cnt to db");

$query = "INSERT INTO  `others` (adno,name,std , group1 ,dateofadd ,stdofadd,tcno,laststudied,medium,fname,mname,religion,address,dob,commu,gender,bg,state,Phone,ac,branch,micr,ifse) values('".$adno."','".$name."','".$std."' , '".$group1."' , '".$dateofadd."' ,'".$stdofadd."','".$tcno."','".$laststudied."','".$medium."','".$fname."','".$mname."','".$religion."','".$address."','".$dob."','".$commu."','".$gender."','".$bg."','".$state."','".$Phone."','".$ac."','".$branch."','".$micr."','".$ifse."')";

if (!mysql_query($query, $link))
{
	die ("error");
}
else
{
	echo "sucess";
}




?>