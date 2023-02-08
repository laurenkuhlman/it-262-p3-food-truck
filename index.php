<?php
  //index.php

  $myItem = new Item(1,"Waffles","Our waffles are not awful",5.95);
  $myItem->addExtra("Warm Chocolate","1.00");
  $myItem->addExtra("Homemade Caramel","1.00");
  $myItem->addExtra("Nutella","1.00");
  $myItem->addExtra("Peanut Butter","1.00");
  $myItem->addExtra("Fresh Strawberries","1.00");
  $myItem->addExtra("Fresh Blueberries","1.00");
  $myItem->addExtra("Whipped Cream","1.00");
  $myItem->addExtra("Vanilla Ice Cream","1.00");
  $items[] = $myItem;

  $myItem = new Item(2,"Salad","Our salads are not waffles!",3.95);
  $myItem->addExtra("Chicken","1.00");
  $myItem->addExtra("Croutons","1.00");
  $myItem->addExtra("Salmon","1.00");
  $items[] = $myItem;

  $myItem = new Item(3,"Coffee","Colombian Brewed",2.95);
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
    <title>Food Truck Menu</title>
  </head>
  <body>
    <h1>Welcome to the Food Truck!</h1>
    <p>Please choose your items below. You can choose to order more than one of each item.</p>
    <form action="" method="post">
      <?php
        foreach ($items as $item) {
          echo '<h3>' . $item->Name . '</h3><p>' . $item->Description . '</p><p>Price: $' . $item->Price . '</p>';
          echo '<label>Quantity: <input type="number" name="quantity[' . $item->ID . ']" value="'. (isset($quantity[$item->ID]) ? $quantity[$item->ID] : 0) . '"></label><br>';
          foreach($item->Extras as $extra => $price) {
            echo '<label>
              <input
              type="checkbox"
              name="extras[' . $item->ID . '][]" 
              value="' . $extra . '" '. 
             '>' . $extra . ' ($' . $price . ')
            </label><br>';
          }
          echo '<br>';
        }
      ?>
      <input type="submit" value="Order Now">
    </form>
  </body>
</html>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['quantity'])) {
      $quantity = $_POST['quantity'];
      $total_qty = 0;
      foreach($quantity as $qty){
        $total_qty += $qty;
      }
      if($total_qty == 0){
        echo '<p>Error: Choose a quantity.</p>';
      } else {
        $extras = $_POST['extras'];
        $total = 0;
        echo '<h2>Your Order is</h2>';
        foreach ( $quantity as $id => $qty ) {
          if ( is_numeric ( $qty ) && $qty > 0 ) {
            $item = $items[$id - 1]; // accounting for zero indexing
            echo '<strong>' . $item->Name . ' x ' . $qty . '</strong><br>';
            $subtotal = number_format($qty * $item->Price, 2);
            $extra_subtotal = 0;
            if(isset($extras[$id])) {
              foreach($extras[$id] as $extra) {
                $extra_subtotal += $qty * $item->Extras[$extra];
                echo 'Extra: ' . $extra . ' ($' . 
                number_format($item->Extras[$extra], 2) . 
                ')<br>';
              }
            }
            $subtotal += $extra_subtotal;
            echo 'Subtotal: $' . 
            number_format($subtotal, 2) . 
            '<br><br>';
            $total += $subtotal;
          }
        }
        echo '<p>Total: $' .
        number_format($total, 2) .
        '</p>';
      }
    } else {
      echo '<p>Error: Choose a quantity.</p>';
    }
  }
?>