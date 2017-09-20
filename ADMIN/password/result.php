<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body><center>
<?php
$name=$_POST['name'];
$password=$_POST['password'];

if ($name == 'admin' and $password == 'head123')
{ echo
"sucess ! <br/> <h1>welcome to ADMIN</h1><br /><h3>Click Below</h3>
<br />
<h3>EDIT</h3>
<center>



<a href=\"../../edit/edit/search/search11.php\"><h3>Edit students</h3></a></center>
<a href=\"../../edit/passed search/search/search11.php\"><h3>passed students</h3></a>
<a href=\"../../edit/+1+2search/search/search11.php\"><h3>New addmission+1 and +2</h3></a>
<a href=\"../../edit/others search/search/search11.php\"><h3>Other new addmission</h3></a>    
 
                 <br /><h3>DELETE</h3>  
				  
<a href=\"../delete/search/addstddel.php\"><h3>Edit students</h3></a>
<a href=\"../delete/search/passed.php\"><h3>passed students</h3></a>
<a href=\"../delete/search/+1+2.php\"><h3>New addmission+1 and +2</h3></a>
<a href=\"../delete/search/others.php\"><h3>Other new addmission</h3></a>      
";
}

else {echo "<h3>sorry something went wrong please check username and password</h3><br><a href=\"index.html\">BACK</a>&nbsp;&nbsp;&nbsp;	<a href=\"../../index.html\">BACK TO MAIN</a>";}


?></center>
</body>
</html>