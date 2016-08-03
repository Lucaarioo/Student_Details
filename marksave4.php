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
$s1="ENGINEERING MATHEMATICS IV";
if($branch == 'CS' || $branch == 'IS')
{ 
$s2="GRAPH THEORY & COMBINATORICS";
$s3="DESIGN & ANALYSIS OF ALGORITHMS";
$s4="UNIX & SHELL PROGRAMMING";
$s5="MICROPROCESSORS";
$s6="COMPUTER ORGANIZATION";
$s7="DS LABORATORY";
$s8="MICROPROCESSORS LABORATORY";
if($branch == 'CS') //Branch selection
$branchf="COMPUTER SCIENCE & ENGINEERING";
elseif($branch == 'IS')
$branchf="INFORMATION SCIENCE ENGINEERING";
}
elseif($branch == 'CV')
{
$s2="CONCRETE TECHNOLOGY";
$s3="STRUCTURAL ANALYSIS-I";
$s4="SURVEYING-II";
$s5="HYDRAULICS& HYDRAULIC MACHINES";
$s6="BUILDING PLANNING & DRAWING";
$s7="SURVEYING PRACTICE-II LAB";
$s8="APPLIED ENGINEERING GEOLOGY LAB";
$branchf="CIVIL ENGINEERING";
}
elseif($branch == 'EC')
{
$s2="MICROCONTROLLERS";
$s3="CONTROLSYSTEMS";
$s4="FIELD THEORY";
$s5="POWER ELECTRONICS";
$s6="TRANSFORMERS & INDUCTION MACHINES";
$s7="MICROCONTROLLERS LAB";
$s8="POWER ELECTRONICS LAB";
$branchf="ELECTRONICS & COMMUNICATION ENGINEERING";
}
elseif($branch == 'ME')
{
$s2="MATERIAL SCIENCE & METALLURGY";
$s3="APPLIED THERMODYNAMICS";
$s4="KINEMATICSOF MACHINES";
$s5="MANUFACTURING PROCESS-II";
$s6="COMPUTER AIDED MACHINE DRAWING";
$s7="METALLOGRAPHY &MATERIAL TESTING LAB";
$s8="FOUNDRY & FORGING LAB";
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
FOURTH SEMESTER<br>
STUDENT REFERENCE MARKSCARD <br>BGS CONNECT - TEAM SIGMA</div>
<div style="padding:5px" class=w3-green>
<div style="font-size:12px" class="w3-container">
NAME : '.$name.' <br>
USN : '.$usn.'<br>
BRANCH : '.$branchf.'<br>
SEMESTER : IV SEM<p>
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

$IVTH='IV.html';
$IVSEM=''.$usn.''.$IVTH.'';;

echo 'Form data has been saved to '.$tfname.'  <br>
<a href="IVSEMMARKS/'.$IVSEM.'">Click here to read </a> ';
$file = fopen("IVSEMMARKS/$IVSEM", "w");
fwrite($file,$t_data);
fclose($file);
?>






