<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎5章課題</title>
</head>

<body>
  <?php
  $score_1 = 80;
  $score_2 = 60;
  $score_3 = 55;
  $score_4 = 40;
  $score_5 = 100;
  $score_6 = 25;
  $score_7 = 80;
  $score_8 = 95;
  $score_9 = 30;
  $score_10 = 60;

  //合計点数を計算
  $score_total = $score_1 + $score_2 + $score_3 + $score_4 + $score_5 + $score_6 + $score_7 + $score_8 + $score_9 + $score_10;

  //合計点数を表示 (連結演算子)
  echo 'テストの合計点数は' . $score_total . '点です';

  echo '<br>';

  //平均点を計算
  $score_average = $score_total / 10;

  echo '<br>';

  //平均点を表示(変数展開)
  echo "平均点は {$score_average} 点です";  
  ?>
  
</body>
</html>