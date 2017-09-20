<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student information system</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th {
	color: #990000;
}
</style>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../../css/menu.css" rel="stylesheet" type="text/css" />
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bgline"></div>        
<div class="fx1"><div class="banner"></div><div class="menubox">
<ul id="menu">

    
<li><a href="#" class="drop">HOME</a><!-- Begin Home Item -->

    
            

    <li><a href="#" class="drop">CREATE</a><!-- Begin 4 columns Item -->

    

        <div class="dropdown_4columns"><!-- Begin 4 columns container -->

        

            <div class="col_4">


                <h2>To create click below</h2>

            </div>

            

            <div  class="greybox">

            

                <h3>Enter details</h3>

                <ul>

                    <li><a href="#">Add students</a></li>
   </div>

    

            <div class=" greybox">

            

                <h3>Passed students</h3>

                <ul>

                    <li><a href="#">passed from +2</a>
                    </ul>   

                 

            </div>

    

          

    

            <div class=" greybox">

            

                <h3>New addmision</h3>

                <ul>

                    <li><a href="#">+1 or +2</a></li>

                    <li><a href="#">others</a></li>

                   

                </ul>   

                 

            </div>

            

        </div><!-- End 4 columns container -->

    

    <!-- End 4 columns Item -->




    <li><a href="#" class="drop">VIEW</a><!-- Begin 4 columns Item -->

    

        <div class="dropdown_4columns"><!-- Begin 4 columns container -->

        

            <div class="col_4">


                <h2>To View click below</h2>

            </div>

            

            <div  class="greybox">

            

                <h3>View status</h3>

                <ul>

                    <li><a href="#">View here</a></li>

                      </div>

    

            <div class=" greybox">

            

                <h3>HIGHER CLASSES</h3>

                <ul>

                    
                    <li><a href="#">passed from +2</a>
                    </ul>   

                 

            </div>

    

           

    

            <div class=" greybox">

            

                <h3>New addmision</h3>

                <ul>

                    <li><a href="#">+1 or +2</a></li>

                    <li><a href="#">others</a></li>
                </ul>   

                 

            </div>

            

        </div><!-- End 4 columns container -->

    

    </li><!-- End 4 columns Item -->




	<li><a href="../ADMIN/password/index.html">EDIT & DELETE</a>	</li>



    <li ><a href="#">ABOUT ME</a><!-- Begin 3 columns Item -->

    

        
    </li><!-- End 3 columns Item -->





</ul></div>








 
</div></div>







<div class="clear"></div>



<div style="margin: 0px auto ; width:1003px;">
<div class="contents">

<div class="marquee"><marquee  direction="left" >ADMIN WELCOMES YOU. NOW YOU ARE IN INSERT PAGE PLEASE INSERT THE CORRECT DETAILS AND CLICK SUBMIT TO CREATE</marquee></div><br /><br />
<?php
$id = $_REQUEST['id'];
$link=mysql_connect("localhost","root","") or die("Cannot connect to the database");
mysql_select_db("ghss", $link) or die ("cannot cnt to db");
$query = "SELECT * FROM passed WHERE id='".$id."'";
$resource=mysql_query($query , $link) or die ("error occured");
$result = mysql_fetch_array($resource);


?>

<form action="passededitaction.php" method="post">
<fieldset>

<legend>SCHOOL DETAILS :</legend>
<table width="600" border="0" cellspacing="10" cellpadding="10">
  <tr><input type="hidden" name="id" value="<?php echo $result['id']?>" />
    <td width="100">Add no :</td>
    <td width="430"><input type="text" name="adno"   value="<?php echo $result['adno']?>"/></td>
  </tr>
  <tr>
    <td>Name :</td>
    <td><input type="text" name="name"  value="<?php echo $result['name'] ?>"  placeholder="Enter name ..." /></td>
  </tr>
  <tr>
    <td>Std</td>
    <td>
    <select  name="std">
    <option value="<?php echo $result['std'] ?>" selected="selected"><?php echo $result['std'] ?></option>
     <option  value="select">SELECT</option>
    <option  value="6a">6-A</option>
     <option  value="6a">6-B</option>
      <option  value="7a">7-A</option>
       <option  value="7b">7-B</option>
        <option  value="8a">8-A</option>
         <option  value="8b">8-B</option>
          <option  value="9a">9-A</option>
           <option  value="9b">9-B</option>
            <option  value="10a">10-A</option>
             <option  value="10b">10-B</option>
              <option  value="11a">11-A</option>
               <option  value="11b">11-B</option>
                <option  value="11c">11-C</option>
                 <option  value="11d">11-D</option>
                  <option  value="12a">12-A</option>
                   <option  value="12b">12-B</option>
                    <option  value="12c">12-C</option>
                     <option  value="12d">12-D</option>
    
    </select>
    
    
    
    
    </td>
  </tr>
  <tr>
    <td>Group :</td>
    <td><input type="text" name="group1" value="<?php echo $result['group1'] ?>"/></td>
   
  </tr>
  <tr>
    <td>Date of Add :</td>
    <td><input type="text" name="dateofadd"  value="<?php echo $result['dateofadd'] ?>"/></td>
    
  </tr>
  <tr>
    <td>Std of Add :</td>
    <td><input type="text" name="stdofadd"  value="<?php echo $result['stdofadd'] ?>"/></td>
  </tr>
  <tr>
    <td>Date of leaving :</td>
    <td><input type="text" name="dateofleaving"  value="<?php echo $result['dateofleaving'] ?>" /></td>
  </tr>
  <tr>
    <td>TC no :</td>
    <td><input type="text" name="tcno"  value="<?php echo $result['tcno'] ?>"/></td>
  </tr>
  <tr>
    <td>Std of leaving :</td>
    <td><input type="text" name="stdofleaving"  value="<?php echo $result['stdofleaving'] ?>"/></td>
  </tr>
  <tr><td>Medium :</td>
  <td><select name="medium">
  <option value="<?php echo $result['medium'] ?>" selected="selected"><?php echo $result['medium'] ?></option>
 <option value="select" >SELECT</option>
 <option value="malayalam">MALAYALAM</option>
 <option value="tamil">TAMIL</option>
 <option value="english">ENGLISH</option>
 
  </select>
  </td></tr>
</table>

</fieldset>
<fieldset>
<legend>
PERSONAL DETAILS :
</legend>

<table width="600" border="0" cellpadding="10" cellspacing="10">
  <tr>
    <td width="101">Father Name :</td>
    <td width="423"><input type="text" name="fname"  value="<?php echo $result['fname'] ?>"/></td>
  </tr>
  <tr>
    <td>Mother name :</td>
    <td><input type="text" name="mname"  value="<?php echo $result['mname'] ?>" /></td>
  </tr>
  <tr>
    <td>Religion</td>
    <td>
    <select name="religion">
    <option value="<?php echo $result['religion'] ?>" selected="selected"><?php echo $result['religion'] ?></option>
    <option value="select">SELECT</option>
    <option value="hindhu">HINDHU</option>
    <option value="christian">CHRISTIAN</option>
    <option value="muslim">MUSLIM</option>
    </select>
    
    </td>
  </tr>
  <tr>
    <td>Address :</td>
    <td><textarea name="address" cols="" rows="8"><?php echo $result['address'] ?></textarea></td>
  </tr>
  <tr>
    <td>Date of birth :</td>
    <td><input type="text" name="dob"  value="<?php echo $result['dob'] ?>" /></td>
  </tr>
  <tr>
    <td>COMMUNITY :</td>
    <td><input type="text" name="commu"  value="<?php echo $result['commu'] ?>"  /></td>
  </tr>
  <tr>
    <td>Gender :</td>
    <td><select name="gender">
    <option value="<?php echo $result['gender'] ?>" selected="selected"><?php echo $result['gender'] ?></option>
    <option value="SELECT">SELECT</option>
    <option value="male">MALE</option>
    <option value="female">FEMALE</option>
    
    </select></td>
  </tr>
  <tr>
    <td>Blood Group :</td>
    <td><input type="text" name="bg"  value="<?php echo $result['bg'] ?>"/></td>
  </tr>
  <tr>
    <td>State :</td>
    <td><input type="text" name="state"  value="<?php echo $result['state'] ?>"/></td>
  </tr>
  <tr>
    <td>Phone :</td>
    <td><input type="text" name="phone"  value="<?php echo $result['phone'] ?>" /></td>
  </tr>
</table>


</fieldset>

<fieldset>
<legend>BANK DETAILS :</legend>

<table width="600" border="0" cellpadding="10" cellspacing="10">
  <tr>
    <td width="104">A/c no :
     </td>
    <td width="426"> <input type="text" name="ac"  value="<?php echo $result['ac'] ?>" /></td>
  </tr>
  <tr>
    <td>Branch :</td>
    <td><input type="text" name="branch"  value="<?php echo $result['branch'] ?>" /></td>
  </tr>
  <tr>
    <td>MICR no</td>
    <td><input type="text" name="micr"  value="<?php echo $result['micr'] ?>" /></td>
  </tr>
  <tr>
    <td>IFSE code :</td>
    <td><input type="text" name="ifse"  value="<?php echo $result['ifse'] ?>" /></td>
  </tr>
</table>




</fieldset>

<br /><br /><br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" type="submit">submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn btn-danger" type="reset">reset all</button>

</form><br /><br /><br />


<div class="footer1"><center>&copy; All rights reserved to sudheesh 2013
</center><br /><center><a href="#"><div class="copyright">copyright info</div></a> &nbsp;&nbsp;<a href="#"><div class="copyright">terms of use</div></a></center></div>
</div></div>




<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
