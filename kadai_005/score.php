<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php

      $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

      $sum = 0;
      for ($i = 0; $i<10; $i++) {
        $sum += $scores[$i];
      }

      $ave = $sum / count($scores);

      echo "合計値 : {$sum}<br>平均値 : {$ave}";
    ?>
  </p>
</body>
</html>