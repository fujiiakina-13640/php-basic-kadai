<!DOCTYPE html>
<html lang="ja">
<head>
 <title>PHP基礎kadai_011</title>
</head>

<body>

  <p>
    
    <?php
    $commodity = ['名前' => '玉ねぎ','値段' => 200,'産地' => '北海道',];
    echo '<br>';
    
    foreach ($commodity as $key => $value) {
      echo "{$key} : {$value}" .'<br>';
    }
    ?>

  </p>

</body>

</html>
