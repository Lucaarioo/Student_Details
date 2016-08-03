<!DOCTYPE html>
<html>
<title>STUDENT DETAILS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='css.css'>
<script type="text/javascript" src='loading.js'></script>
<style>
div.float{
position:fixed;
bottom:50%;
right:0;
}
</style>
 <div id="loading" align=center class="loadings float">
             <img width=15px height=15px src="loading.gif" width="50" height="35"><br>Loading</span>
          </div>    
<body class="w3-theme-l5">
<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li><a href="#" class="w3-padding-large w3-theme-d4">BGS CONNECT</a></li>
</div>

<!-- Page Container -->
<div class="w3-container" style="max-width:100%;margin-top:80px">    
  <!-- The Grid -->
  <div class="">
    <!-- Left Column -->
    <div class="w3-col ">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <font size=4 class="w3-center">BGS CONNECT STUDENT DETAILS,</font>
         <font size=2 class="w3-center"><br>&nbsp;&nbsp;&nbsp;&nbsp;Here you can store your Exam Marks, Class Time Table and Other Academic Details. So you can access it easily with BGS Connect easily whenever needed.</font>
                </div>
      </div>
      <br>      
           

      <!-- Accordion -->
      <div class="w3-card-2 w3-round">
        <div class="w3-accordion w3-white">        
			<div style="font-weight:bold; font-size:12px; padding:5px;">NEW TO HERE, REGISTER NOW.</div>
          <a onclick="myAccFunc('loading')" href="edit.php"><button class="w3-btn-block w3-indigo w3-left-align">REGISTER</button></a></div></div><p>
     <div class="w3-card-2 w3-round">
        <div class="w3-accordion w3-white">                
			<div style="font-weight:bold; font-size:12px; padding:5px;">ALREADY REGISTERED !<br>LOGIN BELOW TO VIEW OR UPDATE YOUR DETAILS,</div>
		      <a onclick="myAccFunc('loading')" href="login.php"><button class="w3-btn-block w3-theme-l1 w3-left-align">LOGIN</button></a>
            <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
</div>
</div>
</div>
<!-- Footer -->
<div class="w3-bottom w3-theme-d5">
   <font size=1>&nbsp;TEAM SIGMA - BGS INSTITUTE OF TECHNOLOGY</font>
</div>
 
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

</body>
</html> 