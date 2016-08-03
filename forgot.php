<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<html>
<head>
<title>Time Table</title>
</head>
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
 <p>FORGOT PASSWORD :<p>
</header>
<div class=w3-container>
<p><font size=2>KEY IS IMPORTANT FOR RESETTING YOUR PASSWORD. IF YOU HAVE FORGOTTEN KEY THEN PLEASE CONTACT ADMIN.</font><p>
<form name="myform" action="forgotverify.php" method="post">
<p>
<table>
<tr><td>USN:</td><td><input type="text" name="usn"></td>
<tr><td>KEY:</td><td><input type="text" name="key"></td>
</table>
<input type="submit" value=" Open "><br>
</form>
</div>
</body>
</html>