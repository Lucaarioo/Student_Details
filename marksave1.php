
<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<?php
// Receive form Post data and Saving it in variables

$name = @$_POST['name'];
$usn = @$_POST['usn'];
$password = @$_POST['password'];
$fim1 = @$_POST['fim1'];
$fim2 = @$_POST['fim2'];
$fim3 = @$_POST['fim3'];
$fim4 = @$_POST['fim4'];
$fim5 = @$_POST['fim5'];
$fim6 = @$_POST['fim6'];
$fim7 = @$_POST['fim7'];
$fim8 = @$_POST['fim8'];

$fm1 = @$_POST['fm1'];
$fm2 = @$_POST['fm2'];
$fm3 = @$_POST['fm3'];
$fm4 = @$_POST['fm4'];
$fm5 = @$_POST['fm5'];
$fm6 = @$_POST['fm6'];
$fm7 = @$_POST['fm7'];
$fm8 = @$_POST['fm8'];

$ftm1 = $fim1+$fm1;
$ftm2 = $fim2+$fm2;
$ftm3 = $fim3+$fm3;
$ftm4 = $fim4+$fm4;
$ftm5 = $fim5+$fm5;
$ftm6 = $fim6+$fm6;
$ftm7 = $fim7+$fm7;
$ftm8 = $fim8+$fm8;

$branch = @$_POST['branch'];
if($branch == 'CS')
{ 
$branchf="COMPUTER SCIENCE & ENGINEERING";
}
elseif($branch == 'IS')
{
$branchf="INFORMATION SCIENCE ENGINEERING";
}
elseif($branch == 'CV')
{
$branchf="CIVIL ENGINEERING";
}
elseif($branch == 'EC')
{
$branchf="ELECTRONICS & COMMUNICATION ENGINEERING";
}
elseif($branch == 'ME')
{
$branchf="MECHANICAL ENGINEERING";
}
$total=$ftm1+$ftm2+$ftm3+$ftm4+$ftm5+$ftm6+$ftm7;
$max=775;
$per=($total/$max)*100;
$per= number_format($per,2);
if($fm1<35 || $fm2 < 35 || $fm3 <35 || $fm4<35|| $fm5<35 || $fm6<18 || $fm7<18)
$class="FAIL";
elseif($per>=69.2)
$class="FIRST CLASS WITH DISTINCTION";
elseif($per>=60 && $per < 69.2)
$class="FIRST CLASS";
elseif($per >= 50 && $per < 60)
$class="SECOND CLASS";
if($fm1<35 )
$fm1c="red";
else
$fm1c="black";
if($fm2<35 )
$fm2c="red";
else
$fm2c="black";
if($fm3<35 )
$fm3c="red";
else
$fm3c="black";
if($fm4<35 )
$fm4c="red";
else
$fm4c="black";
if($fm5<35 )
$fm5c="red";
else
$fm5c="black";
if($fm6<18 || $fim6<12 )
$fm6c="red";
else
$fm6c="black";
if($fm7<18 || $fim7<12 )
$fm7c="red";
else
$fm7c="black";
if($fm8<18 )
$fm8c="red";
else
$fm8c="black";

// Write the name of text file where data will be store
$tfname = ''.$name.''.$usn.'';

$t_data= '

<html>
<link rel="stylesheet" href="../CSS/w3.css">
<link rel="stylesheet" href="../CSS/mtable.css">
<div style="font-size:12px" align=center class="w3-container w3-grey">
FIRST YEAR I/II SEMESTER<br>
STUDENT REFERENCE MARKSCARD <br>BGS CONNECT - TEAM SIGMA</div>
<div style="padding:5px" class=w3-green>
<div style="font-size:12px" class="w3-container">
NAME : '.$name.' <br>
USN : '.$usn.'<br>
BRANCH : '.$branchf.'<br>
SEMESTER : FIRST YEAR I/II SEM<p>
</div></div>
<div style="font-size:12px" class="w3-container">
<div align=center>CLASS : '.$class.' <br> PERCENTAGE : '.$per.'</div>

<table>
<tr><th>SUBJECT NAME</th><th>IA MARKS</th><th>EXTERNAL</th><th>TOTAL</th></tr>
<tr><td><font color='.$fm1c.'>ENGINEERING MATHEMATICS I</font></td><td>'.$fim1.'</td><td>'.$fm1.'</td><td>'.$ftm1.'</td></tr>
<tr><td><font color='.$fm2c.'>ENGINEERING PHYSICS</font></td><td>'.$fim2.'</td><td>'.$fm2.'</td><td>'.$ftm2.'</td></tr>
<tr><td><font color='.$fm3c.'>ELEMENTS OF CIVIL ENGINEERING AND MECHANICS</font></td><td>'.$fim3.'</td><td>'.$fm3.'</td><td>'.$ftm3.'</td></tr>
<tr><td><font color='.$fm4c.'>ELEMENTS OF MECHANICAL ENGINEERING</font></td><td>'.$fim4.'</td><td>'.$fm4.'</td><td>'.$ftm4.'</td></tr>
<tr><td><font color='.$fm5c.'>BASIC ELECTRICAL ENGINEERING</font></td><td>'.$fim5.'</td><td>'.$fm5.'</td><td>'.$ftm5.'</td></tr>
<tr><td><font color='.$fm6c.'>WORKSHOP PRACTICE</font></td><td>'.$fim6.'</td><td>'.$fm6.'</td><td>'.$ftm6.'</td></tr>
<tr><td><font color='.$fm7c.'>ENGINEERING PHYSICS LAB</font></td><td>'.$fim7.'</td><td>'.$fm7.'</td><td>'.$ftm7.'</td></tr>
<tr><td><font color='.$fm8c.'>CONST. OF INDIA PROF ETHICS &AMP; HUMAN RIGHTS</font></td><td>'.$fim8.'</td><td>'.$fm8.'</td><td>'.$ftm8.'</td></tr>
<tr><td>TOTAL</b></td><td></td><td></td><td><b>'.$total.'</b></td></tr>
</tr>

</table><p>
<b><font size=1 color=red>NOTE : THIS MARKS CARD IS NOT GIVEN BY COLLEGE OR VTU. THIS IS FOR YOUR REFERENCE SEEN BY YOU AND UPDATED BY YOU.</font>
</b>

</div>

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

$file = fopen("ISEMMARKS/$ISEM", "w");
fwrite($file,$t_data);
fclose($file);

echo 'Form data has been saved to '.$tfname.'  <br>
<a href="ISEMMARKS/'.$ISEM.'">Click here to read </a> ';
?>

