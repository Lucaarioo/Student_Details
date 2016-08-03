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