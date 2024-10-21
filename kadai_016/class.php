<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function show_price() {
        echo $this->price . '<br>';
      }

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function show_height() { 
        echo $this->height . '<br>';
      }

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    $food = new Food('potato', 250); 
    $animal = new Animal('dog', 60, 5000);
   
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';
    echo $food->show_price();
    echo $animal->show_height();
    ?>
  </p>
</body>
</html>