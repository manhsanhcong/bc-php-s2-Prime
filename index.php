<!DOCTYPE html>
<html>
<body>
<?php
  for ($n = 2; $n < 100; $n++) {
      $flag = true;
      for ($i = 2; $i <= sqrt($n); $i++) {
          if ($n % $i === 0) {
              $flag = false;
              break;
          }
      }
      if ($flag) {
          echo $n . '<br/>';
      }
  }
?>
</body>
</html>