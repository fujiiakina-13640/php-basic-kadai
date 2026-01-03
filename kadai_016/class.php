<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編 kadai_016</title>
</head>

<body>
    <p>
        <?php
          // Foodクラスを定義する
          class Food {
            private $name;
            private $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
              $this -> name  = $name;
              $this -> price = $price;
            }

            // priceを出力するメソッド
            public function show_price() {
              echo $this -> price , '<br>';
            }
          }

          // インスタンス化する
          $food = new Food('potato', 250);

          // プロパティにアクセスし、値を出力する
          print_r ($food);       
        ?>
    </p>
    <p>
      <?php
        // Animalクラスを定義する
        class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
          $this -> name   = $name;
          $this -> height = $height;
          $this -> weight = $weight;
        }

        // heightを出力するメソッド
        public function show_height() {
          echo $this -> height. '<br>';
        }
      }

      // インスタンス化する
      $animal = new Animal('dog', 60, 5000); 

      // プロパティにアクセスし、値を出力する
      print_r ($animal); 
      ?>      
    </p>

    <p>
      <?php
        $food -> show_price();
        $animal -> show_height();
      ?>
    </p>

</body>

</html>