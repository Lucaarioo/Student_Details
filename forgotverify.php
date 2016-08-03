<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='css.css'>
<link rel="stylesheet" href="font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<style>
input[type=text], select {
    width: 100%;
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

<body class="w3-theme-l5">

<header class="w3-container w3-theme-d5">
 <p>FORGOT PASSWORD : RE-REGISTER<p>
</header>
<?php 

session_start(); 

$username = $_POST['usn']; 
$username = strtoupper($username); 
$key = $_POST['key'];  
$key =md5($key);

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
     // For this, we are creating an array for each user, with their username as the index 
    list($user, $pass, $keys) = split('-', trim($members)); 
    $members_array[$user] = array('password' => $keys); 
}  
if (array_key_exists($username, $members_array)) 
{ 
    if ($members_array[$username]['password'] == $key) 
    { 
        $_SESSION['username'] = $username; 
        $_SESSION['password'] = $key; 
        echo "You have succesfully entered Key and USN. Click the below button to re-register your account.<p>";
		echo "<a href=verifyedit.php>RE-REGISTER</a>
<br>";
 
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