
<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<?php
// Receive form Post data and Saving it in variables

$name = @$_POST['name'];
$usn = @$_POST['usn'];
$password = @$_POST['password'];
$m1 = strtoupper(@$_POST['m1']);
$m2 = strtoupper(@$_POST['m2']);
$m3 = strtoupper(@$_POST['m3']);
$m4 = strtoupper(@$_POST['m4']);
$m5 = strtoupper(@$_POST['m5']);
$m6 = strtoupper(@$_POST['m6']);
$m7 = strtoupper(@$_POST['m7']);
$m8 = strtoupper(@$_POST['m8']);

$tu1 = strtoupper(@$_POST['tu1']);
$tu2 = strtoupper(@$_POST['tu2']);
$tu3 = strtoupper(@$_POST['tu3']);
$tu4 = strtoupper(@$_POST['tu4']);
$tu5 = strtoupper(@$_POST['tu5']);
$tu6 = strtoupper(@$_POST['tu6']);
$tu7 = strtoupper(@$_POST['tu7']);
$tu8 = strtoupper(@$_POST['tu8']);

$we1 = strtoupper(@$_POST['we1']);
$we2 = strtoupper(@$_POST['we2']);
$we3 = strtoupper(@$_POST['we3']);
$we4 = strtoupper(@$_POST['we4']);
$we5 = strtoupper(@$_POST['we5']);
$we6 = strtoupper(@$_POST['we6']);
$we7 = strtoupper(@$_POST['we7']);
$we8 = strtoupper(@$_POST['we8']);


$th1 = strtoupper(@$_POST['th1']);
$th2 = strtoupper(@$_POST['th2']);
$th3 = strtoupper(@$_POST['th3']);
$th4 = strtoupper(@$_POST['th4']);
$th5 = strtoupper(@$_POST['th5']);
$th6 = strtoupper(@$_POST['th6']);
$th7 = strtoupper(@$_POST['th7']);
$th8 = strtoupper(@$_POST['th8']);


$fr1 = strtoupper(@$_POST['fr1']);
$fr2 = strtoupper(@$_POST['fr2']);
$fr3 = strtoupper(@$_POST['fr3']);
$fr4 = strtoupper(@$_POST['fr4']);
$fr5 = strtoupper(@$_POST['fr5']);
$fr6 = strtoupper(@$_POST['fr6']);
$fr7 = strtoupper(@$_POST['fr7']);
$fr8 = strtoupper(@$_POST['fr8']);
//Saturday
$sa1 = strtoupper(@$_POST['sa1']);
$sa2 = strtoupper(@$_POST['sa2']);
$sa3 = strtoupper(@$_POST['sa3']);
$sa4 = strtoupper(@$_POST['sa4']);
$sa5 = strtoupper(@$_POST['sa5']);
$sa6 = strtoupper(@$_POST['sa6']);
$sa7 = strtoupper(@$_POST['sa7']);
$sa8 = strtoupper(@$_POST['sa8']);

// Write the name of text file where data will be store
$tfname = ''.$usn.'.html';

$t_data= '
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
    background-color: royalblue;
    color: white;
}
</style>
<html>
<link rel="stylesheet" href="w3.css">
<div class=w3-grey ><center><b> '.$name.' \'S TIME TABLE <br>
                                USN : '.$usn.'</b></center></div>
<table>
<tr><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th></tr>
<tr><td>'.$m1.'</td><td>'.$tu1.'</td><td>'.$we1.'</td><td>'.$th1.'</td><td>'.$fr1.'</td><td>'.$sa1.'</td></tr>
<tr><td>'.$m2.'</td><td>'.$tu2.'</td><td>'.$we2.'</td><td>'.$th2.'</td><td>'.$fr2.'</td><td>'.$sa2.'</td></tr>
<tr><td>'.$m3.'</td><td>'.$tu3.'</td><td>'.$we3.'</td><td>'.$th3.'</td><td>'.$fr3.'</td><td>'.$sa3.'</td></tr>
<tr><td>'.$m4.'</td><td>'.$tu4.'</td><td>'.$we4.'</td><td>'.$th4.'</td><td>'.$fr4.'</td><td>'.$sa4.'</td></tr>
<tr><th></th><th>B</th><th>R</th><th>E</th><th>A</th><th>K</th></tr>
<tr><td>'.$m5.'</td><td>'.$tu5.'</td><td>'.$we5.'</td><td>'.$th5.'</td><td>'.$fr5.'</td><td>'.$sa5.'</td></tr>
<tr><td>'.$m6.'</td><td>'.$tu6.'</td><td>'.$we6.'</td><td>'.$th6.'</td><td>'.$fr6.'</td><td>'.$sa6.'</td></tr>
<tr><td>'.$m7.'</td><td>'.$tu7.'</td><td>'.$we7.'</td><td>'.$th7.'</td><td>'.$fr7.'</td><td>'.$sa7.'</td></tr>
<tr><td>'.$m8.'</td><td>'.$tu8.'</td><td>'.$we8.'</td><td>'.$th8.'</td><td>'.$fr8.'</td><td>'.$sa8.'</td></tr>
</table>
</html>
';


$log= "logdetails.txt";
echo 'Form data has been saved to '.$tfname.'  <br>
<a href="TimeTable/'.$tfname.'">Click here to read </a> ';
$file = fopen("TimeTable/$tfname", "w");
fwrite($file,$t_data);
fclose($file);
?>

