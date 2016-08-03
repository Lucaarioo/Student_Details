<!--Time table script done by Lucario (Nandan) for BGS Connect--><?php 

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
<head>
<title>Time Table</title>
</head>
<body>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px ;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 5px 0;
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
<form name="myform" action="ttsave.php" method="post">
<p>
NAME: <input class="other"  type="hidden" name="name" value="<?php echo $name ?>"><?php echo $name ?><br>
USN: <input class="other" maxlength="10" type="hidden" name="usn" value="<?php echo $username ?>"><?php echo $username ?><br>
<p>
<div class="w3-container">
<table>
<th>MON <input  type="text" style='text-transform:uppercase' name="m1"><input type="text" style='text-transform:uppercase' name="m2"><input type="text" style='text-transform:uppercase' name="m3"><input type="text" style='text-transform:uppercase' name="m4"><input type="text" style='text-transform:uppercase' name="m5"><input type="text" style='text-transform:uppercase' name="m6"><input type="text" style='text-transform:uppercase' name="m7"><input type="text" style='text-transform:uppercase' name="m8"></th>
<th>TUE <input type="text" style='text-transform:uppercase' name="tu1"><input type="text" style='text-transform:uppercase' name="tu2"><input type="text" style='text-transform:uppercase' name="tu3"><input type="text" style='text-transform:uppercase' name="tu4"><input type="text" style='text-transform:uppercase' name="tu5"><input type="text" style='text-transform:uppercase' name="tu6"><input type="text" style='text-transform:uppercase' name="tu7"><input type="text" style='text-transform:uppercase' name="tu8"></th>
<th>WED <input type="text" style='text-transform:uppercase' name="we1"><input type="text" style='text-transform:uppercase' name="we2"><input type="text" style='text-transform:uppercase' name="we3"><input type="text" style='text-transform:uppercase' name="we4"><input type="text" style='text-transform:uppercase' name="we5"><input type="text" style='text-transform:uppercase' name="we6"><input type="text" style='text-transform:uppercase' name="we7"><input type="text" style='text-transform:uppercase' name="we8"></th>
<th>THU <input type="text" style='text-transform:uppercase' name="th1"><input type="text" style='text-transform:uppercase' name="th2"><input type="text" style='text-transform:uppercase' name="th3"><input type="text" style='text-transform:uppercase' name="th4"><input type="text" style='text-transform:uppercase' name="th5"><input type="text" style='text-transform:uppercase' name="th6"><input type="text" style='text-transform:uppercase' name="th7"><input type="text" style='text-transform:uppercase' name="th8"></th>
<th>FRI <input type="text" style='text-transform:uppercase' name="fr1"><input type="text" style='text-transform:uppercase' name="fr2"><input type="text" style='text-transform:uppercase' name="fr3"><input type="text" style='text-transform:uppercase' name="fr4"><input type="text" style='text-transform:uppercase' name="fr5"><input type="text" style='text-transform:uppercase' name="fr6"><input type="text" style='text-transform:uppercase' name="fr7"><input type="text" style='text-transform:uppercase' name="fr8"></th>
<th>SAT <input type="text" style='text-transform:uppercase' name="sa1"><input type="text" style='text-transform:uppercase' name="sa2"><input type="text" style='text-transform:uppercase' name="sa3"><input type="text" style='text-transform:uppercase' name="sa4"><input type="text" style='text-transform:uppercase' name="sa5"><input type="text" style='text-transform:uppercase' name="sa6"><input type="text" style='text-transform:uppercase' name="sa7"><input type="text" style='text-transform:uppercase' name="sa8"></th>
</table>
</div>
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
<?php
// Receive form Post data and Saving it in variables


?>