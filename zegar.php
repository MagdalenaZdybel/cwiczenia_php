<html>
<head>
  <meta http-equiv="refresh" content="3">
  <title>Zegar</title>
</head>
<body>
  <h1>Zegar</h1>
  <?
    $data = getdate(time());
    printf ("%d:%d:%d" , $data["hours"], $data["minutes"], $data["seconds"]);
    ?>
</body>
</html>
