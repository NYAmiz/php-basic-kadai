<!DOCTYPE html>
<html lang="ja">
  
<head>
   <meta charset="UTF-8">
   <title>テスト平均点を計算しよう(課題)</title>
</head>

<body>
   <p>
       <?php
       // 変数に値を代入する
       $score = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

       // 合計
       $total = $score[0] + $score[1] + $score[2] + $score[3] + $score[4] + 
       $score[5] + $score[6] + $score[7] + $score[8] + $score[9];

       // 平均
       $average = $total / 10;

       // 出力
       echo $average;
       ?>
   </p>
</body>

</html>