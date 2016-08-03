<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<html>
<head>
<title>Time Table</title>
</head>
<body>
<style>

input, select {
    width: 100%;
    padding: 1px 20px;
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
    width: auto;
}

.other {
    width: auto;

}
</style>
<script src="jquery.min.js">
</script>
<script>
$(document).ready(function(){
    $('#semester').on('change', function() {
      if ( this.value == "I")
      //.....................^.......
      {
     $("#I").hide();
	$("#II").hide();
$("#III").hide();
$("#IV").hide();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
      }
      else if ( this.value == "II")
      {
        $("#I").show();
	$("#II").hide();
$("#III").hide();
$("#IV").hide();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == "III")
      {
        $("#I").show();
	$("#II").show();
$("#III").hide();
$("#IV").hide();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == 'IV')
      {
        $("#I").show();
	$("#II").show();
$("#III").show();
$("#IV").hide();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == 'V')
      {
        $("#I").show();
	$("#II").show();
$("#III").show();
$("#IV").show();
$("#V").hide();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == "VI")
      {
        $("#I").show();
	$("#II").show();
$("#III").show();
$("#IV").show();
$("#V").show();
$("#VI").hide();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == "VII")
      {
        $("#I").show();
	$("#II").show();
$("#III").show();
$("#IV").show();
$("#V").show();
$("#VI").show();
$("#VII").hide();
$("#VIII").hide();
     }
else if ( this.value == "VIII")
      {
        $("#I").show();
	$("#II").show();
$("#III").show();
$("#IV").show();
$("#V").show();
$("#VI").show();
$("#VII").show();
$("#VIII").show();
     }
    });
});</script>

<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href='css.css'>
<link rel="stylesheet" href="font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">
<header class="w3-container w3-theme-d3 w3-padding-16">
  <h6><a href=index.php>#</a> | RE-REGISTER IF FORGOTTEN OR EDIT :</h6>
</header>
<div class=w3-container>

<table>
<tr><form name="myform" action="forgotsave.php" method="post">
</tr>
<tr>
<td>FIRST NAME:</td><td><input class="other" style='text-transform:uppercase' type="text" name="name" required></td></tr>
<tr><td>USN:</td><td><input class="other" minlength="10" maxlength="10" type="text" style='text-transform:uppercase' name="usn" required></td>
<tr><td>CURRENT SEMESTER:</td><td><select name="sem" id="semester" required>
<option selected="" value="I">I SEM</option>
<option selected="" value="II">II SEM</option>
<option selected="" value="III">III SEM</option>
<option selected="" value="IV">IV SEM</option>
<option selected="" value="V">V SEM</option>
<option selected="" value="VI">VI SEM</option>
<option selected="" value="VII">VII SEM</option>
<option selected="" value="VIII">VIII SEM</option>
</select>
</td></tr>
<tr><td>BRANCH:</td><td>
<select name="branch" required>
<option selected="" value="Default">Select Branch</option>
<option value="Computer Science & Engineering">Computer Science & Engineering</option>
<option value="Electronics & Communication">Electronics & Communication</option>
<option value="Mechanical Enginnering">Mechanical Enginnering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Information Science & Engineering">Information Science & Engineering</option>
</select></td></tr>
<tr><td><br>PERCENTAGE/CBCS:</td></tr>
<tr style='display:none;' id='I'><td>I SEM</td><td>
<input class="other" type="number" name="I" step="0.01"></td></tr>
<tr style='display:none;' id='II'><td>II SEM</td><td><input class="other" type="number" name="II" step="0.01"></td></tr>
<tr style='display:none;' id='III'><td>III SEM</td><td><input class="other" type="number" name="III" step="0.01"></td></tr>
<tr style='display:none;' id='IV'><td>IV SEM</td><td><input class="other" type="number" name="IV" step="0.01"></td></tr>
<tr style='display:none;' id='V'><td>V SEM</td><td><input class="other" type="number" name="V" step="0.01"></td></tr>
<tr style='display:none;' id='VI'><td>VI SEM</td><td><input class="other" type="number" name="VI" step="0.01"></td></tr>
<tr style='display:none;' id='VII'><td>VII SEM</td><td><input class="other" type="number" name="VII" step="0.01"></td></tr>
<tr style='display:none;' id='VIII'><td>VIII SEM</td><td><input class="other" type="number" name="VIII" step="0.01"></td></tr>

<tr><td>EMAIL:</td><td><input class="other" type="text" name="email" required></td></tr>
<tr><td>NEW PASSWORD:</td><td><input class="other" type="password" name="password" required></td></tr>

<tr><td><font size=1 color=red>NOTE: DON'T USE SPACES IN PASSWORD</font></td></tr>
<tr><td>ENTER KEY:</td><td><input class="other" type="text" name="key" required></td></tr>
</table>

<font size=1 color=royalblue>IMP : KEY IS USED TO EDIT THE EXISTING DETAILS AND TO RECOVER IF YOU FORGOT THE PASSWORD</font></td></tr>

<input type="submit" value=" Save "></td></tr>
</form>

</body>
</html>