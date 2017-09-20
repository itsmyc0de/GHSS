<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

$link=mysql_connect("localhost","root","") or die("Cannot connect to the database");
mysql_select_db("ghss", $link) or die ("cannot cnt to db");
?><br /><br /><br />
<center><form name="form2" method="post" action="">
    <p>
      NAME :
      <input type="text" name="name" ">
      </p>
    
    <p>
      <input type="submit" class="btn-success" name="submitresult" value="Submit">
      </p>
</form>
<?php
if(isset($_POST[submitresult]))
{
	 $searchstu = mysql_query("SELECT * FROM addstudent where (name LIKE '$_POST[name]')");
	
?>
<form name="form2" method="post" action="#">
  <table width="501" border="0" cellpadding="10" cellspacing="10">
    
    <tr>
      <td width="136"><strong>NAME</strong></td>
      <td width="88"><strong>STANDARD</strong></td>
 		<td  width="136"colspan="3"><strong><center>Action</center></strong></td>
      </tr>
   
    
     <?php
	 
      while($rowc = mysql_fetch_array($searchstu))
  {
  ?><tr>
      <td>&nbsp;<?php echo $rowc["name"];?></td>
      <td>&nbsp;<?php echo $rowc["std"];?></td>
      <td width="88"><a href="modi.php?id=<?php echo $rowc["id"];?>"><input type="submit" class="btn-danger" name="submitresult" value="View"></a></td>
      <td width="88"><a href="modi.php?id=<?php echo $rowc["id"];?>"><input type="submit" class="btn-success" name="submitresult" value="Edit"></a></td>
           <td width="88"><a href="modi.php?id=<?php echo $rowc["id"];?>"><input type="submit" class="btn-btn btn-warning" name="submitresult" value="Delete"></a></td>
     
     
    </tr>
     <?php
  }
  ?>
  </table>
  <?php
}
?>
  </form>
  <p>&nbsp;</p>
</form>
</center>
</body>
</html>