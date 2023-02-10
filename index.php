<?php
  //index.php 
  $myItem = new Item(
    1,
    "Belgian Waffles",
    "Our Belgian Waffles are made with a light, crisp batter and served with a dusting of powdered sugar for a delicious sweet treat. Try them with a scoop of ice cream, fresh fruit, or a drizzle of syrup for an indulgent breakfast or snack.",
    5.95
  );
  $myItem->addExtra("Warm Chocolate","1.00");
  $myItem->addExtra("Homemade Caramel","1.00");
  $myItem->addExtra("Nutella","1.00");
  $myItem->addExtra("Peanut Butter","1.00");
  $myItem->addExtra("Fresh Strawberries","1.00");
  $myItem->addExtra("Fresh Blueberries","1.00");
  $myItem->addExtra("Whipped Cream","1.00");
  $myItem->addExtra("Vanilla Ice Cream","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    2,
    "American Waffles",
    "Our classic American waffles are made with buttermilk and wheat flour for a delicious, fluffy texture. Topped with warm syrup and butter, these waffles will satisfy your craving for a classic breakfast favorite.",
    5.95
  );
  $myItem->addExtra("Warm Chocolate","1.00");
  $myItem->addExtra("Homemade Caramel","1.00");
  $myItem->addExtra("Nutella","1.00");
  $myItem->addExtra("Peanut Butter","1.00");
  $myItem->addExtra("Fresh Strawberries","1.00");
  $myItem->addExtra("Fresh Blueberries","1.00");
  $myItem->addExtra("Whipped Cream","1.00");
  $myItem->addExtra("Vanilla Ice Cream","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    3,
    "Hong Kong Egg Cakes (鷄蛋仔)",
    "Hong Kong Egg Cakes, also known as 鷄蛋仔, are a traditional Chinese pastry made from a light, spongy cake batter mixed with egg yolks and sugar. They are a popular street food in Hong Kong, and can be found in Chinese bakeries around the world.",
    5.95
  );
  $myItem->addExtra("Warm Chocolate","1.00");
  $myItem->addExtra("Homemade Caramel","1.00");
  $myItem->addExtra("Nutella","1.00");
  $myItem->addExtra("Peanut Butter","1.00");
  $myItem->addExtra("Fresh Strawberries","1.00");
  $myItem->addExtra("Fresh Blueberries","1.00");
  $myItem->addExtra("Whipped Cream","1.00");
  $myItem->addExtra("Vanilla Ice Cream","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    4,
    "Liege Waffles",
    "Our Liege Waffles are made with a traditional Belgian batter, giving them a sweet and crunchy texture. We top them off with a generous sprinkle of pearl sugar, adding a delicious caramelized flavor.",
    5.95
  );
  $myItem->addExtra("Warm Chocolate","1.00");
  $myItem->addExtra("Homemade Caramel","1.00");
  $myItem->addExtra("Nutella","1.00");
  $myItem->addExtra("Peanut Butter","1.00");
  $myItem->addExtra("Fresh Strawberries","1.00");
  $myItem->addExtra("Fresh Blueberries","1.00");
  $myItem->addExtra("Whipped Cream","1.00");
  $myItem->addExtra("Vanilla Ice Cream","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    5,
    "Stroppwafel Waffles",
    "Stroppwafel Waffles are a classic Dutch treat. These delicious waffles are made from a thin layer of dough that is pressed between two hot griddle plates. The result is a crispy, caramelized waffle with a chewy inside.",
    5.95
  );
  $myItem->addExtra("Warm Chocolate","1.00");
  $myItem->addExtra("Homemade Caramel","1.00");
  $myItem->addExtra("Nutella","1.00");
  $myItem->addExtra("Peanut Butter","1.00");
  $myItem->addExtra("Fresh Strawberries","1.00");
  $myItem->addExtra("Fresh Blueberries","1.00");
  $myItem->addExtra("Whipped Cream","1.00");
  $myItem->addExtra("Vanilla Ice Cream","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    6,
    "Garden Fresh Salad",
    "Garden Fresh Salad is a delicious and healthy dish that is perfect for any occasion. This salad is made with fresh vegetables and herbs from your own garden, giving it an unbeatable flavor. It includes crisp lettuce, juicy tomatoes, crunchy carrots, and flavorful cucumbers, all tossed together in a light dressing. This salad is sure to please and nourish your body with its natural ingredients. Enjoy this salad as a side dish or light meal to get your daily dose of vitamins and minerals.",
    3.95
  );
  $myItem->addExtra("Chicken","1.00");
  $myItem->addExtra("Salmon","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    7,
    "Caesar Salad",
    "Our classic Caesar Salad is a delicious and healthy take on the traditional favorite. Made with fresh, crisp romaine lettuce, croutons, and Parmesan cheese, it is then topped with a creamy homemade Caesar dressing. Enjoy this classic salad as an entrée or a side dish and you won't be disappointed!",
    3.95
  );
  $myItem->addExtra("Chicken","1.00");
  $myItem->addExtra("Salmon","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    8,
    "Chef Salad",
    "Chef Salad is an entrée salad comprised of fresh seasonal greens, diced ham, turkey, boiled egg, tomatoes, cucumbers, carrots, and shredded cheese. It is dressed with a creamy balsamic vinaigrette",
    3.95
  );
  $myItem->addExtra("Chicken","1.00");
  $myItem->addExtra("Salmon","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    9,
    "Coffee",
    "Enjoy a fresh cup of Colombian brewed coffee. This classic coffee is made from high quality beans, roasted and brewed to perfection.",
    2.95
  );
  $myItem->addExtra("Oat milk","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    10,
    "Special Punch",
    "Our Special Punch is a delicious and refreshing blend of tropical juices and citrus flavors. Made with a combination of pineapple, orange, and lime juices",
    2.95
  );
  $myItem->addExtra("Oat milk","1.00");
  $items[] = $myItem;
  $myItem = new Item(
    11,
    "Water",
    "Our bottled water is sourced from the pristine waters of the Rocky Mountains, giving it a crisp, refreshing taste",
    2.95
  );
  $myItem->addExtra("Oat milk","1.00");
  $items[] = $myItem;
  class Item
  {
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();
    public function __construct($ID,$Name,$Description,$Price)
    {
      $this->ID = $ID;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->Price = $Price;
    }#end Item constructor
    public function addExtra($extra,$price)
    {
      $this->Extras[$extra] = $price;
    }#end addExtra()
  }#end Item class
?>



<!DOCTYPE html>
<html>
  <head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Changa+One&family=Pacifico&display=swap"
      rel="stylesheet"
    >
    <script src="https://use.fontawesome.com/99304701cb.js"></script>
    <title>Waffle Wagon Menu</title>
  </head>
  <body>
    <div class="wrapper">
      <h1>Welcome to Waffle Wagon!</h1>
      <h2>
        Please choose your items below. You can choose to order more than one
        of each item.
      </h2>
      <form action="" method="post">
        <?php
          echo '<div class="form-wrapper">';
          foreach ($items as $item) {
            echo '<div class="menu-item">';
            echo '<h3>' . $item->Name . '</h3><p>' . $item->Description . '</p><p>Price: $' . $item->Price . '</p>';
            echo '<label>Quantity: <Select name="quantity[' . $item->ID . ']" value="' . (isset($quantity[$item->ID]) ? $quantity[$item->ID] : 0) . '"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></label><br>';
            foreach($item->Extras as $extra => $price) {
              echo '<label>
                <input
                  type="checkbox"
                  name="extras[' . $item->ID . '][]" 
                  value="' . $extra . '" ' . 
                '>' . $extra . ' ($' . $price . ')
              </label><br>';
            }
            echo '</div>';
          }
          echo '</div>  <!-- END FORM WRAPPER -->';
        ?>
        <input class="submit-btn" type="submit" value="Order Now">
      </form>
      <div class="order-total">
      <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          if (isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
            $totalQty = 0;
            foreach ($quantity as $qty) {
              $totalQty += $qty;
            }
            if ($totalQty == 0) {
              echo '<p class="error">Error: Choose a quantity.</p>';
            } else {
              $extras = $_POST['extras'];
              $total = 0;
              echo '<h2>Your Order is</h2>';
              foreach ($quantity as $id => $qty) {
                if (is_numeric($qty) && $qty > 0) {
                  $item = $items[$id - 1]; // accounting for zero indexing
                  
                  $lineTotal = $qty * $item->Price;
                  $itemTotal = $item->Price;
                  $extraSubtotal = 0;
                  if (isset($extras[$id])) {
                    foreach ($extras[$id] as $extra) {
                      $itemTotal += $item->Extras[$extra];
                      $extraSubtotal += $qty * $item->Extras[$extra];
                    }
                  }
                  
                  $lineTotal += $extraSubtotal;

                  echo '<strong>' . 
                    $item->Name . ' '.
                    '$'.number_format($itemTotal, 2). ' x ' . 
                    $qty . ' = '.
                    '$'.number_format($lineTotal, 2) .
                  '</strong><br>';
                  
                  if (isset($extras[$id])) {
                    foreach ($extras[$id] as $extra) {
                      echo 'Extra: ' . $extra . ' ($' . 
                      number_format($item->Extras[$extra], 2) . 
                      ')<br>';
                    }
                  }      
                  echo '<br>';


                  $total += $lineTotal;
                }
              }
              $tax = ($total * .1);
              $total += $tax;
              echo 'Tax: $' . 
              number_format($tax, 2) . 
              '<br>';
              echo '<p><strong>Total: $' .
              number_format($total, 2) .
              '</strong></p>';
            }
          } else {
            echo '<p class="error">Error: Choose a quantity.</p>';
          }
        }
      ?>
      </div> <!-- END ORDER-TOTAL -->
    </div> <!-- END WRAPPER -->
  </body>
</html>
