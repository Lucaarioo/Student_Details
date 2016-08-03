<?php 
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
        echo "Welcome back $name,<br> Your login is successfull<br>";
	  ?>        
<html>
<body>
<link rel="stylesheet" href="w3.css">
<style>
input[type=text], select {
    width: 77%;
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
<div class=w3-container>          

SCHEME:<select name="scheme" id="option" required>
<option selected="" value="old">OLD</option>
<option selected="" value="cbcs">CBCS</option>
<option selected="" value="#">Select scheme</option>
</select>
<form style='display:none;' id='old' name="myform" action="marksave1.php" method="post">
<p>FIRST YEAR I/II SEM OLD SCHEME:<p>
NAME: <input class="other"  name="name" type="hidden" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" type="hidden" maxlength="10" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
BRANCH: </th><th><select name="branch" id="option" required>
<option selected="" value="CS">CS</option>
<option selected="" value="EC">EC</option>
<option selected="" value="CS">IS</option>
<option selected="" value="CV">CV</option>
<option selected="" value="ME">ME</option>
</select>
<p>


<table>
<tr>SUBJECT NAME<td></td><td>INTERNAL MARKS</td><td>EXTERNAL MARKS</td></tr>
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

FIRST YEAR I/II SEM CBCS SCHEME:<p>
<p>
NAME: <input class="other"  name="name" type="hidden" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
BRANCH: </th><th><select name="branch" id="option" required>
<option selected="" value="CS">CS</option>
<option selected="" value="EC">EC</option>
<option selected="" value="CS">IS</option>
<option selected="" value="CV">CV</option>
<option selected="" value="ME">ME</option>
</select>
<p>

<table>
<tr><td>SUBJECT NAME</td><td>CREDIT EARNED</td><td>GRADE POINTS</td>
<tr><td>ENGINEERING MATHS I</td><td><input  type="text" name="c1"></td><td><input  type="text" name="g1"></td></tr>
<tr><td>ENGINEERING PHYSICS</td><td><input  type="text" name="c2"></td><td><input type="text" name="g2"></td></tr>
<tr><td>ELEMENTS OF CIVIL ENGG. &AMP; MECHANICS</td><td><input type="text" name="c3"></td><td><input  type="text" name="g3"></td></tr>
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
</body>
</html>
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