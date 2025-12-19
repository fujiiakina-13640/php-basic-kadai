<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        // ここにコードを書いていく
        $nums = array(15, 4, 18, 23, 10);
        echo '<br>';

        //昇順でソートする
        echo "昇順にソートします。" .'<br>';
        asort($nums) . '<br>';
        foreach ($nums as $num) {
          echo $num . '<br>';
        }
        
        //降順でソートする
        echo "降順にソートします。" .'<br>';
        rsort($nums) . '<br>';
        foreach ($nums as $num) {
          echo $num . '<br>';
        }
    

        ?>
    </p>
</body>

</html>