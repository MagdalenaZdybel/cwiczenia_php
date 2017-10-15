<html>
<head>
  <meta http-equiv="content-type" content="text/html;">
  <meta charset="utf-8">
<title>Operator . - połączenie wyniku z argumentem</title>
</head>
<body>
<?php
$info = 'Anna ';
$info .= 'Zawadzka';
$info .= '<br>';
$info .= 'ul. Czarnej Perły 43 ';
$info .= '<br>';
$info .= '02-155 Perłowo';
$info .= '<br>';
$info .= 'kwota do zapłaty ';
$info .= (2*2) + 222;


print ($info . "zł");


 ?>
 </body>
 </html>
