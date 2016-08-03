<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<html>
<head>
<title>Time Table</title>
</head>
<body>
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
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='css.css'>
<link rel="stylesheet" href="font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<header class="w3-container w3-theme-d3 w3-padding-16">
  <h6><a href=index.php>#</a> | UPDATE YOUR TIMETABLE</h6>
</header>

<body class="w3-theme-l5">

<div class=w3-container><br>

<font size=1>YOU MUST REGISTER IN STUDENT DETAILS IN ORDER TO UPDATE YOUR TIMETABLE OR LOGIN</font><p>
LOGIN :</p>
<table >
<form name="myform" action="ttedit.php" method="post" onsubmit="myAccFunc('loading')">
<tr><td>
Name:</td><td><input type="text" style='text-transform:uppercase' name="name" required></td></tr>
<tr><td>USN:</td><td><input type="text" style='text-transform:uppercase' name="usn" required></td></tr>
<tr><td>PASSWORD:</td><td><input type="password" name="password" required></td></tr>
</table>
<input type="submit" value=" LOGIN "><br>
</form>
</body>
</html>