<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<?php 

session_start(); 

$username = $_POST['usn']; 
$username = strtoupper($username); 
$name = $_POST['name'];  
$name = strtoupper($name);
$password = $_POST['password'];  
$password = md5($password);
// Theres your 'nice' variables  
$file = 'logdetails.txt';  

// Lets open it up:  
if (!$login = file($file))  
{  
    echo 'Unable to open file...';  
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
        $_SESSION['username'] = $username; 
        $_SESSION['password'] = $password; 
        echo "Welcome back $name,<br> Your login is successfull<br>";
	  ?>
<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<html>
<body>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='css.css'>
<link rel="stylesheet" href="font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<script src="jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $('#option').on('change', function() {
      if ( this.value == "old")
      //.....................^.......
      {
     $("#old").show();
	$("#cbcs").hide();
      }
	if(this.value == "cbcs")
	{
	$("#old").hide();
	$("#cbcs").show();
	} 
});
});</script>

<style>
input[type=choice], select {
    width: 50%;
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text], select {
    width: 77%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
<style>
input {
    width: 50px;
}
.other {
    width: auto;

}
</style>
<button onclick="myFunction('ISEM')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right">

</i> FIRST SEMESTER</button>
          <div id="ISEM" class="w3-accordion-content">
<div class=w3-container>          

SCHEME:<select name="scheme" id="option" required>
<option selected="" value="old">OLD</option>
<option selected="" value="cbcs">CBCS</option>
<option selected="" value="#">Select scheme</option>
</select>
<form style='display:none;' id='old' name="myform" action="marksave1.php" method="post">
<p>
NAME: <input class="other"  name="name" type="hidden" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" type="hidden" maxlength="10" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>

FIRST SEMESTER OLD SCHEME:<p>
<table>
<tr><td></td><td>INTERNAL MARKS</td><td>EXTERNAL MARKS</td></tr>
<tr><td>ENGINEERING MATHS I</td><td><input  type="text" name="fim1"></td><td><input  type="text" name="fm1"></td><tr>
<tr><td>ENGINEERING PHYSICS</td><td><input type="text" name="fim2"></td><td><input  type="text" name="fm2"></td></tr>
<tr><td>ELEMENTS OF CIVIL ENGG. & MECHANICS</td><td><input type="text" name="fim3"></td><td><input  type="text" name="fm3"></td></tr>
<tr><td>ELEMENTS OF MECHANICAL ENGG.</td><td><input type="text" name="fim4"></td><td><input  type="text" name="fm4"></td></tr>
<tr><td>BASIC ELECTRICAL ENGINEERING</td><td><input type="text" name="fim5"></td><td><input  type="text" name="fm5"></td></tr>
<tr><td>WORKSHOP PRACTICE</td><td><input type="text" name="fim6"></td><td><input  type="text" name="fm6"></td></tr>
<tr><td>ENGINEERING PHYSICS LAB</td><td><input type="text" name="fim7"></td><td><input  type="text" name="fm7"></td></tr>
<tr><td>CONST. OF INDIA, PROF. ETHICS & HUMAN RIGHTS</td><td><input type="text" name="fim8"></td><td><input  type="text" name="fm8"></td></tr>
</table>
<br>
<input type="submit" value=" Save "><br>
</form>
<form style='display:none;' id='cbcs' name="myform" action="cmarksave1.php" method="post">

FIRST SEMESTER CBCS SCHEME:<p>
<p>
NAME: <input class="other"  name="name" type="hidden" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>

<table>
<tr><td>SUBJECT NAME</td><td>CREDIT EARNED</td><td>GRADE POINTS</td>
<tr><td>ENGINEERING MATHS I</td><td><input  type="text" name="c1"></td><td><input  type="text" name="g1"></td></tr>
<tr><td>ENGINEERING PHYSICS</td><td><input  type="text" name="c2"></td><td><input type="text" name="g2"></td></tr>
<tr><td>ELEMENTS OF CIVIL ENGG. & MECHANICS</td><td><input type="text" name="c3"></td><td><input  type="text" name="g3"></td></tr>
<tr><td>ELEMENTS OF MECHANICAL ENGINEERING</td><td><input type="text" name="c4"></td><td><input  type="text" name="g4"></td></tr>
<tr><td>BASIC ELECTRICAL ENGINEERING</td><td><input type="text" name="c5"></td><td><input  type="text" name="g5"></td></tr>
<tr><td>WORKSHOP PRACTICE</td><td><input type="text" name="c6"></td><td><input  type="text" name="g6"></td></tr>
<tr><td>ENGINEERING PHYSICS LAB</td><td><input type="text" name="c7"></td><td><input  type="text" name="g7"></td></tr>
<tr><td>CONST. OF INDIA, PROF. ETHICS & HUMAN RIGHTS</td><td><select name="g8" id="option" required>
                                                             <option selected="" value="P">PASS</option>
                                                             <option selected="" value="F">FAIL</option>
                                                             <option selected="" value="#">PASS/FAIL</option>
                                                             </select></td></tr>
</table>
<input type="submit" value=" Save "><br>
</form>
</div>
</div>
<button onclick="myFunction('IISEM')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> SECOND SEMESTER</button>
          <div id="IISEM" class="w3-accordion-content">
          
<form name="myform" action="marksave2.php" method="post">
<p>
NAME: <input class="other"  type="hidden" name="name" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>

SECOND SEMESTER :<p>
<input  type="text" name="sm1"><br>
<input type="text" name="sm2"><br>
<input type="text" name="sm3"><br>
<input type="text" name="sm4"><br>
<input type="text" name="sm5"><br>
<input type="text" name="sm6"><br>
<input type="text" name="sm7"><br>
<input type="text" name="sm8"><br>
<br>
<input type="submit" value=" Save "><br>
</form>
</div>
<button onclick="myFunction('IIISEM')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> THIRD SEMESTER</button>
          <div id="IIISEM" class="w3-accordion-content">
          
<form name="myform" action="marksave3.php" method="post">
<p>
NAME: <input class="other"  type="hidden" name="name" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>

THIRD SEMESTER :<p>
<table><thead>
<tr><th>BRANCH </th><th><select name="branch" id="option" required>
<option selected="" value="CS">CS</option>
<option selected="" value="EC">EC</option>
<option selected="" value="CS">IS</option>
<option selected="" value="CV">CV</option>
<option selected="" value="ME">ME</option>
</select></th></tr>
<tr><th>MARKS CARD PATTERN</th><th>IA MARKS</th><th>EXTERNAL MARKS</th></tr>
<tr><th>SUBJECT 1 </th><th><input  type="text" name="im1"></th><th><input  type="text" name="tm1"></th></tr>
<tr><th>SUBJECT 2 </th><th><input  type="text" name="im2"></th><th><input type="text" name="tm2"></th></tr>
<tr><th>SUBJECT 3 </th><th><input  type="text" name="im3"></th><th><input type="text" name="tm3"></th></tr>
<tr><th>SUBJECT 4 </th><th><input  type="text" name="im4"></th><th><input type="text" name="tm4"></th></tr>
<tr><th>SUBJECT 5 </th><th><input  type="text" name="im5"></th><th><input type="text" name="tm5"></th></tr>
<tr><th>SUBJECT 6 </th><th><input  type="text" name="im6"></th><th><input type="text" name="tm6"></th></tr>
<tr><th>SUBJECT 7 </th><th><input  type="text" name="im7"></th><th><input type="text" name="tm7"></th></tr>
<tr><th>SUBJECT 8 </th><th><input  type="text" name="im8"></th><th><input type="text" name="tm8"></th></tr>
</thead>
</table>
<br>
<input type="submit" value=" Save "><br>
</form>
</div>
<button onclick="myFunction('IVSEM')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> FOURTH SEMESTER</button>
          <div id="IVSEM" class="w3-accordion-content">
          
<form name="myform" action="marksave4.php" method="post">
<p>
NAME: <input class="other"  type="hidden" name="name" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>

FOURTH SEMESTER :<p>
<table><thead>
<tr><th>BRANCH </th><th><select name="branch" id="option" required>
<option selected="" value="CS">CS</option>
<option selected="" value="EC">EC</option>
<option selected="" value="IS">IS</option>
<option selected="" value="CV">CV</option>
<option selected="" value="ME">ME</option>
</select></th></tr>
<tr><th>MARKS CARD PATTERN</th><th>IA MARKS</th><th>EXTERNAL MARKS</th></tr>
<tr><th>SUBJECT 1 </th><th><input  type="text" name="im1"></th><th><input  type="text" name="tm1"></th></tr>
<tr><th>SUBJECT 2 </th><th><input  type="text" name="im2"></th><th><input type="text" name="tm2"></th></tr>
<tr><th>SUBJECT 3 </th><th><input  type="text" name="im3"></th><th><input type="text" name="tm3"></th></tr>
<tr><th>SUBJECT 4 </th><th><input  type="text" name="im4"></th><th><input type="text" name="tm4"></th></tr>
<tr><th>SUBJECT 5 </th><th><input  type="text" name="im5"></th><th><input type="text" name="tm5"></th></tr>
<tr><th>SUBJECT 6 </th><th><input  type="text" name="im6"></th><th><input type="text" name="tm6"></th></tr>
<tr><th>SUBJECT 7 </th><th><input  type="text" name="im7"></th><th><input type="text" name="tm7"></th></tr>
<tr><th>SUBJECT 8 </th><th><input  type="text" name="im8"></th><th><input type="text" name="tm8"></th></tr>
</thead>
</table>
<br>
<input type="submit" value=" Save "><br>
</form>
</div>
<button onclick="myFunction('VSEM')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> FIFTH SEMESTER</button>
          <div id="VSEM" class="w3-accordion-content">
          
<form name="myform" action="marksave5.php" method="post">
<p>
NAME: <input class="other"  type="hidden" name="name" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>

FIFTH SEMESTER :
<table><thead>
<tr><th>BRANCH </th><th><select name="branch" id="option" required>
<option selected="" value="CS">CS</option>
<option selected="" value="EC">EC</option>
<option selected="" value="IS">IS</option>
<option selected="" value="CV">CV</option>
<option selected="" value="ME">ME</option>
</select></th></tr>
<tr><th>MARKS CARD PATTERN</th><th>IA MARKS</th><th>EXTERNAL MARKS</th></tr>
<tr><th>SUBJECT 1 </th><th><input  type="text" name="im1"></th><th><input  type="text" name="tm1"></th></tr>
<tr><th>SUBJECT 2 </th><th><input  type="text" name="im2"></th><th><input type="text" name="tm2"></th></tr>
<tr><th>SUBJECT 3 </th><th><input  type="text" name="im3"></th><th><input type="text" name="tm3"></th></tr>
<tr><th>SUBJECT 4 </th><th><input  type="text" name="im4"></th><th><input type="text" name="tm4"></th></tr>
<tr><th>SUBJECT 5 </th><th><input  type="text" name="im5"></th><th><input type="text" name="tm5"></th></tr>
<tr><th>SUBJECT 6 </th><th><input  type="text" name="im6"></th><th><input type="text" name="tm6"></th></tr>
<tr><th>SUBJECT 7 </th><th><input  type="text" name="im7"></th><th><input type="text" name="tm7"></th></tr>
<tr><th>SUBJECT 8 </th><th><input  type="text" name="im8"></th><th><input type="text" name="tm8"></th></tr>
</thead>
</table>
<br>
<input type="submit" value=" Save "><br>
</form>
</div>
<button onclick="myFunction('VISEM')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> SIXTH SEMESTER</button>
          <div id="VISEM" class="w3-accordion-content">
          
<form name="myform" action="marksave6.php" method="post">
<p>
NAME: <input class="other"  type="hidden" name="name" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>

SIXTH SEMESTER :
<br>
<font color=red size=2><b>FOR CHOICE SUBJECT ENTER THE SUBJECT NAME IN BELOW. EG: OPERATIONAL RESEARCH/THEORY OF ELASTICITY, ETC.</b></font>

<table><thead>
<tr><th>BRANCH </th><th><select name="branch" id="option" required>
<option selected="" value="CS">CS</option>
<option selected="" value="EC">EC</option>
<option selected="" value="IS">IS</option>
<option selected="" value="CV">CV</option>
<option selected="" value="ME">ME</option>
</select></th></tr>
<tr><th>SUBJECTS IN CODE ORDER</th><th>IA MARKS</th><th>EXTERNAL MARKS</th></tr>
<tr><th>SUBJECT 61 </th><th><input  type="text" name="im1"></th><th><input  type="text" name="tm1"></th></tr>
<tr><th>SUBJECT 62 </th><th><input  type="text" name="im2"></th><th><input type="text" name="tm2"></th></tr>
<tr><th>SUBJECT 63 </th><th><input  type="text" name="im3"></th><th><input type="text" name="tm3"></th></tr>
<tr><th>SUBJECT 64</th><th><input  type="text" name="im4"></th><th><input type="text" name="tm4"></th></tr>
<tr><th>SUBJECT 65 </th><th><input  type="text" name="im5"></th><th><input type="text" name="tm5"></th></tr>
<tr><th><font size=1>CHOICE SUBJECT 66</font><input  type="choice" name="ch1"></th><th><input  type="text" name="im6"></th><th><input type="text" name="tm6"></th></tr>
<tr><th>SUBJECT 67 </th><th><input  type="text" name="im7"></th><th><input type="text" name="tm7"></th></tr>
<tr><th>SUBJECT 68 </th><th><input  type="text" name="im8"></th><th><input type="text" name="tm8"></th></tr>
</thead>
</table>
<br>
<input type="submit" value=" Save "><br>
</form>
</div>
<button onclick="myFunction('VIISEM')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> SEVENTH SEMESTER</button>
          <div id="VIISEM" class="w3-accordion-content">
          
<form name="myform" action="marksave7.php" method="post">
<p>
NAME: <input class="other"  type="hidden" name="name" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>

SEVENTH SEMESTER :<p>
<input  type="text" name="sem1"><br>
<input type="text" name="sem2"><br>
<input type="text" name="sem3"><br>
<input type="text" name="sem4"><br>
<input type="text" name="sem5"><br>
<input type="text" name="sem6"><br>
<input type="text" name="sem7"><br>
<input type="text" name="sem8"><br>
<br>
<input type="submit" value=" Save "><br>
</form>
</div>
<button onclick="myFunction('VIIISEM')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> EIGHTH SEMESTER</button>
          <div id="VIIISEM" class="w3-accordion-content">
          
<form name="myform" action="marksave8.php" method="post">
<p>
NAME: <input class="other"  type="hidden" name="name" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>

EIGHTH SEMESTER :<p>
<input  type="text" name="em1"><br>
<input type="text" name="em2"><br>
<input type="text" name="em3"><br>
<input type="text" name="em4"><br>
<input type="text" name="em5"><br>
<input type="text" name="em6"><br>
<input type="text" name="em7"><br>
<input type="text" name="em8"><br>
<br>
<input type="submit" value=" Save "><br>
</form>
</div>






</body>
</html>
 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


<?php
 
    } 
    else 
    { 
        echo 'Incorrect Password.'; 
    } 
} 
else 
{ 
    echo 'Incorrect username entered';  
}
?>
<?php
// Receive form Post data and Saving it in variables


?>