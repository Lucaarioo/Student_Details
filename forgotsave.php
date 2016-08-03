
<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<?php
// Receive form Post data and Saving it in variables

$name = @$_POST['name'];
$name = strtoupper($name);
$usn = @$_POST['usn'];
$usn = strtoupper($usn);
$email = @$_POST['email'];
$branch = @$_POST['branch'];
$key = @$_POST['key'];
$key = md5($key);
$sem = @$_POST['sem'];
if( $sem == "I")
$sem=1;
else if($sem == "II")
$sem=2;
else if($sem == "III")
$sem=3;
else if($sem == "IV")
$sem=4;
else if($sem == "V")
$sem=5;
else if($sem == "VI")
$sem=6;
else if($sem == "VII")
$sem=7;
else if($sem == "VIII")
$sem=8;
$I = @$_POST['I'];
$II = @$_POST['II'];
$III = @$_POST['III'];
$IV = @$_POST['IV'];
$V = @$_POST['V'];
$VI = @$_POST['VI'];
$VII = @$_POST['VII'];
$VIII = @$_POST['VIII'];

$password = @$_POST['password'];
$password = md5($password);
$m1 = @$_POST['m1'];
$m2 = @$_POST['m2'];
$m3 = @$_POST['m3'];
$m4 = @$_POST['m4'];
$m5 = @$_POST['m5'];
$m6 = @$_POST['m6'];
$m7 = @$_POST['m7'];
$m8 = @$_POST['m8'];

$tu1 = @$_POST['tu1'];
$tu2 = @$_POST['tu2'];
$tu3 = @$_POST['tu3'];
$tu4 = @$_POST['tu4'];
$tu5 = @$_POST['tu5'];
$tu6 = @$_POST['tu6'];
$tu7 = @$_POST['tu7'];
$tu8 = @$_POST['tu8'];

$we1 = @$_POST['we1'];
$we2 = @$_POST['we2'];
$we3 = @$_POST['we3'];
$we4 = @$_POST['we4'];
$we5 = @$_POST['we5'];
$we6 = @$_POST['we6'];
$we7 = @$_POST['we7'];
$we8 = @$_POST['we8'];


$th1 = @$_POST['th1'];
$th2 = @$_POST['th2'];
$th3 = @$_POST['th3'];
$th4 = @$_POST['th4'];
$th5 = @$_POST['th5'];
$th6 = @$_POST['th6'];
$th7 = @$_POST['th7'];
$th8 = @$_POST['th8'];


$fr1 = @$_POST['fr1'];
$fr2 = @$_POST['fr2'];
$fr3 = @$_POST['fr3'];
$fr4 = @$_POST['fr4'];
$fr5 = @$_POST['fr5'];
$fr6 = @$_POST['fr6'];
$fr7 = @$_POST['fr7'];
$fr8 = @$_POST['fr8'];
//Saturday
$sa1 = @$_POST['sa1'];
$sa2 = @$_POST['sa2'];
$sa3 = @$_POST['sa3'];
$sa4 = @$_POST['sa4'];
$sa5 = @$_POST['sa5'];
$sa6 = @$_POST['sa6'];
$sa7 = @$_POST['sa7'];
$sa8 = @$_POST['sa8'];

$email = @$_POST['email'];
$comment = @$_POST['comment'];

// Write the name of text file where data will be store
$filename = $usn;
$tfname = ''.$name.''.$filename.'';
$login = ''.$usn.'-'.$password.'-'.$key.'
';

// Marge all the variables with text in a single variable.
$avg=0;
if($sem != 1) 
{
$average=($I+$II+$III+$IV+$V+$VI+$VII+$VIII)/($sem-1);
$avg = number_format($average,2);
}
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

$f_data= '
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<html>
<link rel="stylesheet" href="w3.css">

<link rel="stylesheet" href="w3-theme-teal.css">
<div class=w3-container>
Welcome Back '.$name.',<br>
<table>
<tr><td><b>NAME</b></td><td> '.$name.'</td></tr>
<tr><td><b>USN</b></td><td>'.$usn.'</td></tr>
<tr><td><b>BRANCH</b></td><td>'.$branch.'</td></tr>
<tr><td><b>EMAIL</b></td><td>'.$email.'</td></tr>
<tr><td><b>SEMESTER</b></td><td>'.$sem.'</td></tr>
<tr><td><b>AVERAGE</b></td><td>'.$avg.'</td></tr>

</table></p>
<div class=w3-indigo > ACADEMICS :</div>
<table>
<tr><td><a href="../ISEMMARKS/'.$ISEM.'">I SEM</a> </td><td>'.$I.'</td></tr>
<tr><td><a href="../IISEMMARKS/'.$IISEM.'">II SEM</a> </td><td>'.$II.'</td></tr>
<tr><td><a href="../IIISEMMARKS/'.$IIISEM.'">III SEM</a> </td><td>'.$III.'</td></tr>
<tr><td><a href="../IVSEMMARKS/'.$IVSEM.'">IV SEM </a></td><td>'.$IV.'</td></tr>
<tr><td><a href="../VSEMMARKS/'.$VSEM.'">V SEM </a></td><td>'.$V.'</td></tr>
<tr><td><a href="../VISEMMARKS/'.$VISEM.'">VI SEM </a></td><td>'.$VI.'</td></tr>
<tr><td><a href="../VIISEMMARKS/'.$VIISEM.'">VII SEM </a></td><td>'.$VII.'</td></tr>
<tr><td><a href="../VIIISEMMARKS/'.$VIIISEM.'">VIII SEM </a></td><td>'.$VIII.'</td></tr>
</table>
</div>
</html>
';


$log= "logdetails.txt";
echo 'Form data has been saved to '.$filename.'  <br>
<a href="Student_Details/'.$filename.'">Click here to read </a> ';
$file = fopen("Student_Details/$filename", "w");
fwrite($file,$f_data);
fclose($file);
$file = fopen($log, "a");
fwrite($file,$login);
fclose($file);

?>

