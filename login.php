<html>
<body>
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
input[type=password], select {
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
    background-color: green;
}
</style>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='css.css'>
<header class="w3-container w3-theme-d3 w3-padding-16">
  <h6><a href=index.php>#</a> | LOGIN</h6>
</header>

<body class="w3-theme-l5">

<div class=w3-container><br>

<font size=1>YOU MUST HAVE ALREADY REGISTERED INORDER TO GET LOGIN ACCESS.</font><p>
<form name="myform" action="view.php" method="post" onsubmit="myAccFunc('loading')">
<p>
Name:<input type="text" style='text-transform:uppercase' name="name" required><br>
USN:<input type="text" style='text-transform:uppercase'  name="usn" required><br>
PASSWORD:<input type="password" name="password" required><br>
<input type="submit" value=" LOGIN "><br>
</form>
</body>
</html>