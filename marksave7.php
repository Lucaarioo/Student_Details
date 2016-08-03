<!--Student Details script done by Lucario (Nandan) for BGS Connect-->
<?php
// Receive form Post data and Saving it in variables
$name = @$_POST['name'];
$usn = @$_POST['usn'];
$password = @$_POST['password'];
$tm1 = @$_POST['tm1']+@$_POST['im1'];
$tm2 = @$_POST['tm2']+@$_POST['im2'];
$tm3 = @$_POST['tm3']+@$_POST['im3'];
$tm4 = @$_POST['tm4']+@$_POST['im4'];
$tm5 = @$_POST['tm5']+@$_POST['im5'];
$tm6 = @$_POST['tm6']+@$_POST['im6'];
$tm7 = @$_POST['tm7']+@$_POST['im7'];
$tm8 = @$_POST['tm8']+@$_POST['im8'];
$total=$tm1+$tm2+$tm3+$tm4+$tm5+$tm6+$tm7+$tm8;
$max=900;
$per=($total/$max)*100;
$per= number_format($per,2);
$branch = @$_POST['branch'];

//Subject selection
$s1="MANAGEMENT & ENTREPRENEURSHIP";
if($branch == 'CS' || $branch == 'IS')
{ 
$s1="MANAGEMENT & ENTREPRENEURSHIP";
$s2="UNIX SYSTEM PROGRAMMING";
$s3="COMPILER DESIGN";
$s4="COMPUTER NETWORKS-II";
$s5="COMPUTER GRAPHICS & VISUALIZATION";
$s6=strtoupper(@$_POST['ch1']);
$s7="COMPUTER GRAPHICS & VISUALIZATION LAB";
$s8="UNIX SYSTEM PROGRAMMING &COMPILER DSGN. LAB";
if($branch == 'CS') //Branch selection
$branchf="COMPUTER SCIENCE & ENGINEERING";
elseif($branch == 'IS')
$branchf="INFORMATION SCIENCE ENGINEERING";
}
elseif($branch == 'CV')
{
$s1="ENIVIRONMENTAL ENGINEERING-I";
$s2="DESIGN & DRAWINGOF RC STRUCTURES";
$s3="TRANSPORTATION ENGINEERING-II";
$s4="GEOTHECHNICAL ENGINEERING-II";
$s5="HYDRAULIC STRUCTURE & IRRIGATION DESIGN-DRAWING";
$s6=strtoupper(@$_POST['ch1']);
$s7="GEOTECHNICAL ENGINEERING LAB";
$s8="EXTENSIVE SURVEY VIVA-VOCE";
$branchf="CIVIL ENGINEERING";
}
elseif($branch == 'EC')
{
$s1="DIGITAL COMMUNICATION";
$s2="MICROPRCESSOR";
$s3="MICROELECTRONICS CIRCUITS";
$s4="ANTENNAS & PROPAGATION";
$s5="OPERATINGSYSTEMS";
$s6=strtoupper(@$_POST['ch1']);
$s7="ADVANCED COMMUNICATION LAB";
$s8="MICROPROCESSOR LAB";
$branchf="ELECTRONICS & COMMUNICATION ENGINEERING";
}
elseif($branch == 'ME')
{
$s1="COMPUTER INTEGRATED MANUFACTURING";
$s2="DESIGN OF MACHINE ELEMENTS-II";
$s3="HEAT AND MASS TRANSFER";
$s4="FINITE ELEMENT METHODS";
$s5="MECHATRONICS & MICROPROCESSOR";
$s6=strtoupper(@$_POST['ch1']);
$s7="HEAT & MASS TRANSFER LAB";
$s8="COMPUTER AIDED MODELING & ANALYSIS LAB";
$branchf="MECHANICAL ENGINEERING";
}

//CLASS SELECTION
if(@$_POST['tm1']<35 || @$_POST['tm2'] < 35 || @$_POST['tm3'] <35 || @$_POST['tm4']<35|| @$_POST['tm5']<35 || @$_POST['tm6']<18|| @$_POST['tm7']<18|| @$_POST['tm8']<18)
$class="FAIL";
elseif($per>=69.2)
$class="FIRST CLASS WITH DISTINCTION";
elseif($per>=60 && $per < 69.2)
$class="FIRST CLASS";
elseif($per >= 50 && $per < 60)
$class="SECOND CLASS";
//SUBJECT FAIL SELECTION
if(@$_POST['tm1']<35 )
$c1="red";
else
$c1="black";
if(@$_POST['tm2']<35 )
$c2="red";
else
$c2="black";
if(@$_POST['tm3']<35 )
$c3="red";
else
$c3="black";
if(@$_POST['tm4']<35 )
$c4="red";
else
$c4="black";
if(@$_POST['tm5']<35 )
$c5="red";
else
$c5="black";
if(@$_POST['tm6']<18)
$c6="red";
else
$c6="black";
if(@$_POST['tm7']<18)
$c7="red";
else
$c7="black";
if(@$_POST['tm8']<18 )
$c8="red";
else
$c8="black";
// Write the name of text file where data will be store
$tfname = ''.$name.''.$usn.'';

$t_data= '
<html>
<link rel="stylesheet" href="../CSS/w3.css">
<link rel="stylesheet" href="../CSS/mtable.css">
<div style="font-size:12px" align=center class="w3-container w3-grey">
SIXTH SEMESTER<br>
STUDENT REFERENCE MARKSCARD <br>BGS CONNECT - TEAM SIGMA</div>
<div style="padding:5px" class=w3-green>
<div style="font-size:12px" class="w3-container">
NAME : '.$name.' <br>
USN : '.$usn.'<br>
BRANCH : '.$branchf.'<br>
SEMESTER : V SEM<p>
</div></div>
<div style="font-size:12px" class="w3-container">

<div align=center>CLASS : '.$class.' <br> PERCENTAGE : '.$per.'</div>
<table>
<tr><th>SUBJECT NAME</th><th>IA MARKS</th><th>EXTERNAL MARKS</th><th>TOTAL</th>
<tr><td><font color='.$c1.'>'.$s1.'</font></td><td>'.@$_POST['im1'].'</td><td>'.@$_POST['tm1'].'</td><td>'.$tm1.'</td></tr>
<tr><td><font color='.$c2.'>'.$s2.'</font></td><td>'.@$_POST['im2'].'</td><td>'.@$_POST['tm2'].'</td><td>'.$tm2.'</td></tr>
<tr><td><font color='.$c3.'>'.$s3.'</font></td><td>'.@$_POST['im3'].'</td><td>'.@$_POST['tm3'].'</td><td>'.$tm3.'</td></tr>
<tr><td><font color='.$c4.'>'.$s4.'</font></td><td>'.@$_POST['im4'].'</td><td>'.@$_POST['tm4'].'</td><td>'.$tm4.'</td></tr>
<tr><td><font color='.$c5.'>'.$s5.'</font></td><td>'.@$_POST['im5'].'</td><td>'.@$_POST['tm5'].'</td><td>'.$tm5.'</td></tr>
<tr><td><font color='.$c6.'>'.$s6.'</font></td><td>'.@$_POST['im6'].'</td><td>'.@$_POST['tm6'].'</td><td>'.$tm6.'</td></tr>
<tr><td><font color='.$c7.'>'.$s7.'</font></td><td>'.@$_POST['im7'].'</td><td>'.@$_POST['tm7'].'</td><td>'.$tm7.'</td></tr>
<tr><td><font color='.$c8.'>'.$s8.'</font></td><td>'.@$_POST['im8'].'</td><td>'.@$_POST['tm8'].'</td><td>'.$tm8.'</td></tr>
<tr><td><b>TOTAL </b></td><td></td><td></td><td><b>'.$total.'</b></td></tr>
</table>
<p>
<b><font size=1 color=red>NOTE : THIS MARKS CARD IS NOT GIVEN BY COLLEGE OR VTU. THIS IS FOR YOUR REFERENCE SEEN BY YOU AND UPDATED BY YOU.</font>
</b>
</div>
</html>
';
$VITH='VI.html';
$VISEM=''.$usn.''.$VITH.'';;


echo 'Form data has been saved to '.$tfname.'  <br>
<a href="VISEMMARKS/'.$VISEM.'">Click here to read </a> ';
$file = fopen("VISEMMARKS/$VISEM", "w");
fwrite($file,$t_data);
fclose($file);
?>



