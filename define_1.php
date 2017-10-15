<html>
<head>
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <title>Obliczanie podatku</title>
</head>
<body>
<?php
define ("KWOTA_WOLNA" , 530.08);
define ("STAWKA_PODATKOWA", 0.19);

printf ("Podatek wynosi: " . "%0.2f" , (7000 * STAWKA_PODATKOWA - KWOTA_WOLNA) . "PLN ");
print (" PLN");
?>
</body>
</html>
