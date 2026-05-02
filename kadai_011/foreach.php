<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <P>
    <?php
    $commodity_data = ['foodstuff' => '玉ねぎ', 'cost' => '200', 'area' => '北海道'];

    $labels = [
      'foodstuff' => '名前',
      'cost' => '値段',
      'area' => '産地',
    ];

    foreach ($commodity_data as $index => $value) {
      echo "{$labels[$index]}:{$value}<br>";
    }

    ?>
  </P>


</body>

</html>