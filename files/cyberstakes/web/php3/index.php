Math madnezz!
<br>
I only accept magic cookies!

<?php

function plusfive($n) {
  for($i=0;$i<5;$i++) {
    $n++;
  }
  return $n;
}

$flag = "##### FLAG #####";

if (isset($_COOKIE['num'])) {

  $num = $_COOKIE['num'];

  $num5a = plusfive($num);
  $num5b = $num + 5;

  if (!(is_numeric($num5a) && is_numeric($num5b))) {
    echo "That's not even a number!";
  }

  else if ($num5b > $num5a) {
    echo "Wow, okay that's a little bit magic";
    if (!($num5a > $num5b)) {
      echo "<br>";
      echo "That's actually a lot magic!";
      echo "<br>";
      echo "Here is a flag, kind wizard: ";
      echo $flag;
    }
    else {
      echo "But not magic enough :( ";
    }
  }
  else {
    echo "That isn't even a little bit magic";
  }
  echo "\n";
}
?>
