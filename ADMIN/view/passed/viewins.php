<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body><center><h2>Govt higher secondary school Ambalamoola</h2><br /><h4>Student Details..</h4></center>
<?php
$id = $_REQUEST['id'];
$link=mysql_connect("localhost","root","") or die("Cannot connect to the database");
mysql_select_db("ghss", $link) or die ("cannot cnt to db");
$query = "SELECT * FROM passed WHERE id='".$id."'";
$resource=mysql_query($query , $link) or die ("error occured");
$result = mysql_fetch_array($resource);


?>

<center>

<table width="803" border="1" cellpadding="5" cellspacing="5">
  <tr>
    <td colspan="2">Name :<center><h4><?php echo $result['name'] ?></h4></center></td>
  </tr>
  <tr>
    <td colspan="2" align="center">SCHOOL DETAILS : </td>
  </tr>
  <tr>
    <td>Ad no :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['adno'] ?></td>
    <td>Std of Addmission :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['stdofadd']?></td>
  </tr>
  <tr>
    <td>Std :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['std']?></td>
    <td>Date of addmission :&nbsp;&nbsp;<?php echo $result['stdofadd']?></td>
  </tr>
  <tr>
    <td>Tc no :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['tcno']?></td>
    <td>Date of Leaving :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['dateofleaving'] ?></td>
  </tr>
  <tr>
    <td>Group :&nbsp;&nbsp;&nbsp;<?php echo $result['group1']?></td>
    <td>Std of leaving :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['stdofleaving']?></td>
  </tr>
  <tr>
    <td>Medium :&nbsp;<?php echo $result['medium'] ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">PERSONAL DETAILS </td>
  </tr>
  <tr>
    <td>Father name :&nbsp;&nbsp;<?php echo $result['fname'] ?></td>
    <td>Mother name :&nbsp;&nbsp;<?php echo $result['mname'] ?></td>
  </tr>
  <tr>
    <td>Religion :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['religion'] ?></td>
    <td>Address : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['address'] ?></td>
  </tr>
  <tr>
    <td>Date of birth :&nbsp;&nbsp;<?php echo $result['dob']?></td>
    <td>Community :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['commu']?></td>
  </tr>
  <tr>
    <td>Gender :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['gender'] ?></td>
    <td>Blood group :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['bg']?></td>
  </tr>
  <tr>
    <td>State :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['state']?></td>
    <td>Phone :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['phone']?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">BANK DETAILS :</td>
  </tr>
  <tr>
    <td>Account number :&nbsp;&nbsp;<?php echo $result['ac']?></td>
    <td>Branch :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['branch']?></td>
  </tr>
  <tr>
    <td>MICR number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result['micr']?></td>
    <td>IFSE code :&nbsp;&nbsp;<?php echo $result['ifse']?></td>
  </tr>
</table>
<button class="btn-success"><a href="search/search11.php">Go back</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn-danger"><a href="../../../index.html">Back to main</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn-small"  onclick="window.print() ">Print the current document</button>
</center>
</body>
</html>