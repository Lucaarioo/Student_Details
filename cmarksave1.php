
<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<?php
// Receive form Post data and Saving it in variables

$name = @$_POST['name'];
$usn = @$_POST['usn'];
$password = @$_POST['password'];
$c1 = @$_POST['c1'];
$c2 = @$_POST['c2'];
$c3 = @$_POST['c3'];
$c4 = @$_POST['c4'];
$c5 = @$_POST['c5'];
$c6 = @$_POST['c6'];
$c7 = @$_POST['c7'];
$c8 = 0;
$g1 = @$_POST['g1'];
$gl1=$gl2=$gl3=$gl4=$gl5=$gl6=$gl7=$gl8=0;
if($g1==0)
$gl1="F";
else if($g1==4)
$gl1="E";
else if($g1==5)
$gl1="D";
else if($g1==6)
$gl1="C";
else if($g1==7)
$gl1="B";
else if($g1==8)
$gl1="A";
else if($g1==9)
$gl1="S";
else if($g1==10)
$gl1="S+";
$g2 = @$_POST['g2'];
if($g2==0)
$gl2="F";
else if($g2==4)
$gl2="E";
else if($g2==5)
$gl2="D";
else if($g2==6)
$gl2="C";
else if($g2==7)
$gl2="B";
else if($g2==8)
$gl2="A";
else if($g2==9)
$gl2="S";
else if($g2==10)
$gl2="S+";
$g3 = @$_POST['g3'];
if($g3==0)
$gl3="F";
else if($g3==4)
$gl3="E";
else if($g3==5)
$gl3="D";
else if($g3==6)
$gl3="C";
else if($g3==7)
$gl3="B";
else if($g3==8)
$gl3="A";
else if($g3==9)
$gl3="S";
else if($g3==10)
$gl3="S+";

$g4 = @$_POST['g4'];
if($g1==0)
$gl4="F";
else if($g4==4)
$gl4="E";
else if($g4==5)
$gl4="D";
else if($g4==6)
$gl4="C";
else if($g4==7)
$gl4="B";
else if($g4==8)
$gl4="A";
else if($g4==9)
$gl4="S";
else if($g4==10)
$gl4="S+";

$g5 = @$_POST['g5'];
if($g5==0)
$gl5="F";
else if($g5==4)
$gl5="E";
else if($g5==5)
$gl5="D";
else if($g5==6)
$gl5="C";
else if($g5==7)
$gl5="B";
else if($g5==8)
$gl5="A";
else if($g5==9)
$gl5="S";
else if($g5==10)
$gl5="S+";

$g6 = @$_POST['g6'];
if($g6==0)
$gl6="F";
else if($g6==4)
$gl6="E";
else if($g6==5)
$gl6="D";
else if($g6==6)
$gl6="C";
else if($g6==7)
$gl6="B";
else if($g6==8)
$gl6="A";
else if($g6==9)
$gl6="S";
else if($g6==10)
$gl6="S+";

$g7 = @$_POST['g7'];
if($g7==0)
$gl7="F";
else if($g7==4)
$gl7="E";
else if($g7==5)
$gl7="D";
else if($g7==6)
$gl7="C";
else if($g7==7)
$gl7="B";
else if($g7==8)
$gl7="A";
else if($g7==9)
$gl7="S";
else if($g7==10)
$gl7="S+";

$g8 = @$_POST['g8'];
$gl8=$g8;
$g8=0;
$cp1=$c1*$g1;
$cp2=$c2*$g3;
$cp3=$c3*$g3;
$cp4=$c4*$g4;
$cp5=$c5*$g5;
$cp6=$c6*$g6;
$cp7=$c7*$g7;
$cp8=$c8*$g8;
$tc=$c1+$c2+$c3+$c4+$c5+$c6+$c7;
$tcp=$cp1+$cp2+$cp3+$cp4+$cp5+$cp6+$cp7;
$sgpa=$tcp/24;
$sgpa=number_format($sgpa,2);
$branch = @$_POST['branch'];
if($branch == 'CS')
$branchf="COMPUTER SCIENCE & ENGINEERING";
else if($branch == 'IS')
$branchf="INFORMATION SCIENCE ENGINEERING";
else if($branch == 'CV')
$branchf="CIVIL ENGINEERING";
else if($branch == 'EC')
$branchf="ELECTRONICS & COMMUNICATION ENGINEERING";
else if($branch == 'ME')
$branchf="MECHANICAL ENGINEERING";

// Write the name of text file where data will be store
$tfname = ''.$name.''.$usn.'';

$t_data= '
<style>
table {
    border-collapse: collapse;
	font-size:6px;    
}

th, td {
    text-align: left;
    padding: 5px;
	font-size=6px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>

<html>

<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="font-awesome.min.css">
<header class="w3-container w3-theme-d5">
<center>FIRST YEAR I/II SEM MARKS CARD</center>
<font size=2>
NAME : '.$name.' <br>
USN : '.$usn.'<br>
BRANCH : '.$branchf.'<br>
SEMESTER : FIRST YEAR I/II SEM
</font>
</div>
</header>
<div class=w3-container>

<table>
<tr><td><b>SUBJECT NAME</b></td><td><b><font size=1>CREDITS EARNED</font></b></td><td><b><font size=1>GRADE LETTER<font></b></td><td><b><font size=1>GRADE POINTS</font></b></td><td><font size=1>CREDIT POINTS</font></td></tr>
<tr><td>ENGINEERING MATHS I</td><td>'.$c1.'</td><td>'.$gl1.'</td><td>'.$g1.'</td><td>'.$cp1.'</td></tr>
<tr><td>ENGINEERING PHYSICS</td><td>'.$c2.'</td><td>'.$gl2.'</td><td>'.$g2.'</td><td>'.$cp2.'</td></tr>
<tr><td>ELEMENTS OF CIVIL ENGG. & MECHANICS</td><td>'.$c3.'</td><td>'.$gl3.'</td><td>'.$g3.'</td><td>'.$cp3.'</td></tr>
<tr><td>ELEMENTS OF MECHANICAL ENGINEERING</td><td>'.$c4.'</td><td>'.$gl4.'</td><td>'.$g4.'</td><td>'.$cp4.'</td></tr>
<tr><td>BASIC ELECTRICAL ENGINEERING</td><td>'.$c5.'</td><td>'.$gl5.'</td><td>'.$g5.'</td><td>'.$cp5.'</td></tr>
<tr><td>WORKSHOP PRACTICE</td><td>'.$c6.'</td><td>'.$gl6.'</td><td>'.$g6.'</td><td>'.$cp6.'</td></tr>
<tr><td>ENGINEERING PHYSICS LAB</td><td>'.$c7.'</td><td>'.$gl7.'</td><td>'.$g7.'</td><td>'.$cp7.'</td></tr>
<tr><td>CONST. OF INDIA, PROF. ETHICS & HUMAN RIGHTS</td><td>'.$c8.'</td><td>'.$gl8.'</td><td>'.$g8.'</td><td>'.$cp8.'</td></tr>
<tr><td></td><td>'.$tc.'</td><td></td><td>'.$tcp.'</td></tr>
<tr><td><b>SGPA</b></td><td>'.$sgpa.'</td></tr>
</tr>
</table><br>
<b><font size=2 color=red>NOTE : THIS MARKS CARD IS NOT GIVEN BY COLLEGE OR VTU. THIS IS FOR YOUR REFERENCE SEEN BY YOU AND UPDATED BY YOU.</font>
</b>
</html>
';
$IST='I.html';
$IIND='II.html';
$IIIRD='III.html';
$IVTH='IV.html';
$VTH='V.html';
$VITH='VI.html';
$VIITH='VII.html';
$VIIITH='VIII.html';
$ISEM=''.$usn.''.$IST.'';;
$IISEM=''.$usn.''.$IIND.'';;
$IIISEM=''.$usn.''.$IIIRD.'';;
$IVSEM=''.$usn.''.$IVTH.'';;
$VSEM=''.$usn.''.$VTH.'';;
$VISEM=''.$usn.''.$VITH.'';;
$VIISEM=''.$usn.''.$VIITH.'';;
$VIIISEM=''.$usn.''.$VIIITH.'';;


echo 'Form data has been saved to '.$tfname.'  <br>
<a href="ISEMMARKS/'.$ISEM.'">Click here to read </a> ';
$file = fopen("ISEMMARKS/$ISEM", "w");
fwrite($file,$t_data);
fclose($file);
?>

