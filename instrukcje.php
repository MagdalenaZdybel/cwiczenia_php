<html>
<head>
<meta charset="utf-8">
<title>Instrukcja warunkowa</title>
</head>
<body>
<?php

$first = 125;
$second = 2;

print ("First have value: $first <br>");
print ("Second have value: $second <br> ");

if ($second>4){
  print ("Variables second is bigger with: 4." . " First variables governed");
}
elseif ($first==4){
  print ("Variables second is equal with: 4");
}
elseif ($second<4) {
  print ("Variables second is smaller with: 4");
}
elseif ($first>$second) {
  print ("Variables first is bigger. First variables governed");
}
else {
  print ("Variables first is smaller. Second variables governed");
}



 ?>
</body>
</html>
