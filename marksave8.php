
<!--Time table script done by Lucario (Nandan) for BGS Connect-->
<?php
// Receive form Post data and Saving it in variables

$name = @$_POST['name'];
$usn = @$_POST['usn'];
$password = @$_POST['password'];
$em1 = @$_POST['em1'];
$em2 = @$_POST['em2'];
$em3 = @$_POST['em3'];
$em4 = @$_POST['em4'];
$em5 = @$_POST['em5'];
$em6 = @$_POST['em6'];
$em7 = @$_POST['em7'];
$em8 = @$_POST['em8'];


// Write the name of text file where data will be store
$tfname = ''.$name.''.$usn.'';

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
    background-color: #4CAF50;
    color: white;
}
</style>
<html>
<link rel="stylesheet" href="w3.css">

EIGHTH SEMESTER: 
<table>
<tr>
<td>'.$em1.'</td></tr><tr><td>'.$em2.'</td></tr><tr><td>'.$em3.'</td></tr><tr><td>'.$em4.'</td></tr><tr><td>'.$em5.'</td></tr><tr><td>'.$em6.'</td></tr><tr><td>'.$em7.'</td></tr><tr><td>'.$em8.'</td></tr>
</tr>

</table>
</html>
';
$VIIITH='VIII.html';
$VIIISEM=''.$usn.''.$VIIITH.'';;


echo 'Form data has been saved to '.$tfname.'  <br>
<a href="VIIISEMMARKS/'.$VIIISEM.'">Click here to read </a> ';
$file = fopen("VIIISEMMARKS/$VIIISEM", "w");
fwrite($file,$t_data);
fclose($file);
?>



