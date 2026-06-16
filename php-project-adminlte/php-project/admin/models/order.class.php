<?php
class Order {
    public $id;
    public $name;
  

    public function __construct() {
       
    }
    public function create($_cart) { 
      global $db;
      $db->query("INSERT INTO orders (customer_id,user_id) VALUES (1,1)");
      $order_id = $db->insert_id;
      echo $order_id; // example output: 1
      foreach($_cart as $item) {
          
      }
    }
    public function update() { 
     
    }
    static public function readAll() {
     
    }
    static public function readById($_id) {
     
    }
    static public function delete($_id) { 
     
}   
}
?>