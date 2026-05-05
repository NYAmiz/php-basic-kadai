<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する
    class Food {
      // プロパティを定義する
      public $name;
      public $price;

      // 「price」メソッドを定義する
      public function show_price() {
        echo $this->price . '<br>';
      }
    }
    // クラスを定義する
    class Animal {
      public $name;
      public $height;
      public $weight;

      // 「height」メソッドを定義する
      public function show_height() {
        echo $this->height . '<br>';
      }
    }

    // インスタンス化する
    $food = new Food();
    $animal = new Animal();

    // 値を代入
    $food->name = "potato";
    $food->price = 250;
    
    $animal->name = "dog";
    $animal->height = 60;
    $animal->weight = 5000;

    // インスタンス 出力
    print_r($food);
    echo "<br>";
    print_r($animal);
    echo "<br>";

    // メソッドにアクセス
    $food->show_price();
    $animal->show_height();
    ?>
  </p>

</body>

</html>