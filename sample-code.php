// ITC250 Food Truck Starter Code
// from 
// https://docs.google.com/document/d/1BBlcPL4T5g6AV5nBgcqROkklojnKOQbvW94g2rySd60/edit

<?php
//items3.php

$myItem = new Item(1,"Taco","Our Tacos are awesome!",4.95);
$myItem->addExtra("Sour Cream");
$myItem->addExtra("Cheese");
$myItem->addExtra("Guacamole");
$items[] = $myItem;

$myItem = new Item(2,"Sundae","Our Sundaes are awesome!",3.95);
$myItem->addExtra("Sprinkles");
$myItem->addExtra("Chocolate Sauce");
$myItem->addExtra("Nuts");
$items[] = $myItem;

$myItem = new Item(3,"Salad","Our Salads are awesome!",5.95);
$myItem->addExtra("Croutons");
$myItem->addExtra("Bacon");
$myItem->addExtra("Lemon Wedges");
$myItem->addExtra("Avacado");
$items[] = $myItem;


//create a counter to load the ids...
//$items[] = new Item(1,"Taco","Our Tacos are awesome!",4.95);
//$items[] = new Item(2,"Sundae","Our Sundaes are awesome!",3.95);
//$items[] = new Item(3,"Salad","Our Salads are awesome!",5.95);

echo '<pre>';
var_dump($items);
echo '</pre>';


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
    
    public function addExtra($extra)
    {
        $this->Extras[] = $extra;
        
    }#end addExtra()

}#end Item class
