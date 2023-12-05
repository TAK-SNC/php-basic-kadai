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

    $nums = [15, 4, 18, 23, 10];
    function sort_2way(array $array, bool $order) {
      if ($order) {
        echo '昇順ソートします。<br>';
        asort($array);
      } else {
        echo '降順ソートします。<br>';
        arsort($array);
      }
      foreach ($array as $value) {
        echo "{$value}<br>";
      }
    }

    sort_2way($nums, true);
    sort_2way($nums, false);

    ?>

  </p>
</body>

</html>