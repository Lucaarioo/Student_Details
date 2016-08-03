<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<html>
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
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='css.css'>
<link rel="stylesheet" href="font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<header class="w3-container w3-theme-d3 w3-padding-16">
  <h6><a href=index.php>#</a> | UPDATE YOUR SEMESTER MARKS</h6>
</header>

<body class="w3-theme-l5">

<div class=w3-container><br>


<font size=1>YOU MUST REGISTER IN STUDENT DETAILS IN ORDER TO UPDATE YOUR TIMETABLE OR LOGIN.</font><p>
<font size=1 color=red>IF YOU HAVE ALREADY UPDATED YOUR MARKS AND IF YOU REUPDATE IT YOUR PREVIOUS MARKS WILL BE REPLACED.<br>
THIS MARKS IS JUST FOR YOUR REFERENCE AND WILL NOT REPRESENT THE VTU MARKS.</font><p>

LOGIN :</p>
<table >
<form name="myform" onsubmit="return getRANK(this.sem.value)" method="post">
<tr><td>


               <tr><th><b>SEMESTER </b></th><th> <select name="sem">
            <option value="#">SELECT SEM</option>
            <option value="1">1<sup>ST</sup> SEMESTER</option>            
			<option value="2">2<sup>ND</sup> SEMESTER</option>
    <option value="3">3<sup>RD</sup> SEMESTER</option>
    <option value="4">4<sup>TH</sup> SEMESTER</option>
    <option value="5">5<sup>TH</sup> SEMESTER</option>
    <option value="6">6<sup>TH</sup> SEMESTER</option>
    <option value="7">7<sup>TH</sup> SEMESTER</option>
    <option value="8">8<sup>TH</sup> SEMESTER</option>
    </table>
</select></th></tr><label> <p>

<a onclick="myAccFunc('loading')"><input type="submit" value=" LOGIN "></a><br>
</form>
<script type="text/javascript">

function getRANK(sem){
if(sem==1)
loc = '1ISEMUP.php';
else if(sem==2)
loc = '2IISEMUP.php';
else if(sem==3)
loc = '3IIISEMUP.php';
else if(sem==4)
loc = '4IVSEMUP.php';
else if(sem==5)
loc = '5VSEMUP.php';
else if(sem==6)
loc = '6VISEMUP.php';
else if(sem==7)
loc = '7VIISEMUP.php';
else if(sem==8)
loc = '8VIIISEMUP.php';


   location = loc;
   return false;
}
</script>
</body>
</html>