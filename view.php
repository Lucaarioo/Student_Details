<html>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='css.css'>
<style>
input[type=submit]:hover {
    background-color: green;
}
</style>
<!--lOADING SCRIPT STARTS-->
<style>
div.float{
position:fixed;
bottom:50%;
right:0;
}
</style>
<script type="text/javascript" src='loading.js'></script>
<div id="loading" align=center class="loadings float">
<img width=15px height=15px src="loading.gif" width="50" height="35"><br>Loading</span>
</div>    
<!--LOADING ENDS-->

<body class="w3-theme-l5">
<div class=w3-theme>
<center>
STUDENT DETAILS
</div>
<header class="w3-container w3-theme-d5">
<script src="jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $('#semester').on('change', function() {
      if ( this.value == "I")
      //.....................^.......
      {
     $("#I").show();
	$("#II").hide();
$("#III").hide();
$("#IV").hide();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
      }
      else if ( this.value == "II")
      {
        $("#I").hide();
	$("#II").show();
$("#III").hide();
$("#IV").hide();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == "III")
      {
        $("#I").hide();
	$("#II").hide();
$("#III").show();
$("#IV").hide();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == 'IV')
      {
        $("#I").hide();
	$("#II").hide();
$("#III").hide();
$("#IV").show();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == 'V')
      {
        $("#I").hide();
	$("#II").hide();
$("#III").hide();
$("#IV").hide();
$("#V").show();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == "VI")
      {
        $("#I").hide();
	$("#II").hide();
$("#III").hide();
$("#IV").hide();
$("#V").hide();
$("#VI").show();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == "VII")
      {
        $("#I").hide();
	$("#II").hide();
$("#III").hide();
$("#IV").hide();
$("#V").hide();
$("#VI").hide();;
$("#VII").show();
$("#VIII").hide();
     }
else if ( this.value == "VIII")
      {
        $("#I").hide();
	$("#II").hide();
$("#III").hide();
$("#IV").hide();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").show();
     }
    });
});</script>

<?php
$username = $_POST['usn'];  
$name = $_POST['name'];
$name =strtoupper($name);  
$password = $_POST['password'];
$passwordn =$password;
$password = md5($password);
$username = strtoupper($username);  
// Theres your 'nice' variables  
$file = 'logdetails.txt';  
// Lets open it up:  
if (!$login = file($file))  
{  
    echo 'UNABLE TO OPEN LOG FILE. CONTACT LUCARIO.';  
    exit; 
} 
foreach ($login AS $members) 
{ 
    list($user, $pass, $rank) = split('-', trim($members)); 
    $members_array[$user] = array('password' => $pass); 
}  
if (array_key_exists($username, $members_array)) 
{ 
    if ($members_array[$username]['password'] == $password) 
    { 
        
?>
<?php
echo "<br>Welcome $name,<br>Your login is successfull.<br><p>

Name: $name<br>
USN : $username<p>";
?>
</header><center>
<?php
	  echo '<div class=w3-container><p><form name=myform action="Student_Details/'.$username.'.php" method=post onsubmit=myAccFunc("loading") >
<input type=hidden style=text-transform:uppercase  name=user value='.$username.' required>
<input type=hidden name=password value='.$password.' required>
<input type=submit value="VIEW DETAILS">
</form>';
if (file_exists('TimeTable/'.$username.'.html')) { 
echo '<form name=myform action="TimeTable/'.$username.'.html" method=post onsubmit=myAccFunc("loading")>
<input type=submit value="VIEW TIME TABLE"></input> </form>
<form name=myform action="ttedit.php" method=post onsubmit=myAccFunc("loading")>
<input type=hidden style=text-transform:uppercase  name=name value='.$name.' required>
<input type=hidden style=text-transform:uppercase  name=usn value='.$username.' required>
<input type=hidden name=password value='.$passwordn.' required>
<input type=submit value="EDIT TIME TABLE">
</form>
'; }
else
{
echo '<font color=indigo><strong>YOU HAVE NOT UPDATED YOUR TIME TABLE. UPDATE IT NOW</strong></font><br>
<form name=myform action="ttedit.php" method=post onsubmit=myAccFunc("loading")>
<input type=hidden style=text-transform:uppercase  name=name value='.$name.' required>
<input type=hidden style=text-transform:uppercase  name=usn value='.$username.' required>
<input type=hidden name=password value='.$passwordn.' required>
<input type=submit value="UPDATE TIME TABLE">
</form>';
}

?>
UPDATE SEM MARKS<select name="sem" id="semester">
<option selected="" value="I">I SEM</option>
<option selected="" value="II">II SEM</option>
<option selected="" value="III">III SEM</option>
<option selected="" value="IV">IV SEM</option>
<option selected="" value="V">V SEM</option>
<option selected="" value="VI">VI SEM</option>
<option selected="" value="VII">VII SEM</option>
<option selected="" value="VIII">VIII SEM</option>
<option selected="" value="#">SELECT</option>
</select>
<div style='display:none;' id='I'>
<form name="myform" action="1ISEMUPY.php" method="post" onclick=myAccFunc('loading')>
<?php include "SDCOMMON/SEMSELECT.html"; ?></div>
<div style='display:none;' id='II'>
<form name="myform" action="2IISEMUPY.php" method="post" onsubmit="myAccFunc('loading')">
<?php include "SDCOMMON/SEMSELECT.html"; ?></div>
<div style='display:none;' id='III'>
<form name="myform" action="3IIISEMUPY.php" method="post" onsubmit="myAccFunc('loading')">
<?php include "SDCOMMON/SEMSELECT.html"; ?></div>
<div style='display:none;' id='IV'>
<form name="myform" action="4IVSEMUPY.php" method="post" onsubmit=myAccFunc("loading")>
<?php include "SDCOMMON/SEMSELECT.html"; ?></div>
<div style='display:none;' id='V'>
<form name="myform" action="5VSEMUPY.php" method="post" onsubmit=myAccFunc("loading")>
<?php include "SDCOMMON/SEMSELECT.html"; ?></div>
<div style='display:none;' id='VI'>
<form name="myform" action="6VISEMUPY.php" method="post" onsubmit=myAccFunc("loading")>
<?php include "SDCOMMON/SEMSELECT.html"; ?></div>
<div style='display:none;' id='VII'>
<form name="myform" action="7VIISEMUPY.php" method="post" onsubmit=myAccFunc("loading")>
<?php include "SDCOMMON/SEMSELECT.html"; ?></div>
<div style='display:none;' id='VIII'>
<form name="myform" action="8VIIISEMUPY.php" method="post" onsubmit=myAccFunc("loading")>
<?php include "SDCOMMON/SEMSELECT.html"; ?></div>

</div>
<?php

 	  
 
    } 
    else 
    { 
        echo 'Incorrect Password, Please try again.<p>
		<a href=forgot.php><button><font color=black>Forgot password</font></button></a>'; 
    } 
} 
else 
{ 
    echo 'Incorrect username entered, Please try again.<p>
<a href=forgot.php><button><font color=black>Forgot username</font></button></a>';  
}
?>
<?php
// Receive form Post data and Saving it in variables


?>
<div class="w3-container w3-bottom w3-black">
 <font size=1>CREATED BY : LUCARIO (NANDAN) - TEAM SIGMA</font>
</div>
