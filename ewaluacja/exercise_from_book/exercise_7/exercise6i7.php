<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
</head>
<body>
<h1>Witaj przybyszu!</h1>
<?php

print_r ("Twoje IP to: " . $_SERVER['REMOTE_ADDR'] . " Twoja przeglądarka to: " . $_SERVER['HTTP_USER_AGENT']);
// echo $_SERVER['REMOTE_ADDR']);
//if($_SERVER['HTTP_CLIENT_IP'])
//{
//  $ip = $_SERVER['HTTP_CLIENT_IP'];
//}
//else if($_Server['HTTP_X_FORWARDED_FOR'])
//{
//  $IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
//}
//else {
//  $ip = $_SERVER['REMOTE_ADDR'];
//}
//print_r ("Twoje IP to: " . $ip);
 ?>
</body>
</html>
