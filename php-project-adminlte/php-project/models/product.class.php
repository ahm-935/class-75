<?php
class Product {
    public $id;
    public $name;
    public $category_id;
    public $brand_id;
    public $short_description;
    public $price;
    public $quantity;
    public $point_of_restock;
    public $image;
    public $is_active;

    public function __construct($_id, $_name, $_category_id, $_brand_id, $_short_description, 
    $_price, $_quantity, $_point_of_restock, $_image, $_is_active) {
        $this->id = $_id;
        $this->name = $_name;
        $this->category_id = $_category_id;
        $this->brand_id = $_brand_id;
        $this->short_description = $_short_description;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->point_of_restock = $_point_of_restock;
        $this->image = $_image;
        $this->is_active = $_is_active;
    }
   
    static public function allProducts() {
        global $db;
        $sql = "SELECT p.id, p.name, 
        p.price, p.quantity,p.image, b.name as brand, 
        c.name as category, p.is_inactive FROM products p, brands b, categories c
        WHERE p.category_id = c.id AND p.brand_id = b.id 
        ORDER BY p.id DESC 
        LIMIT 8
        "; 
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);      
    }
    static public function productById($_id) {
        global $db;
       $sql = "SELECT p.id, p.name, 
        p.price, p.quantity,p.image, b.name as brand, 
        c.name as category, p.is_inactive FROM products p, brands b, categories c 
        WHERE p.category_id = c.id AND p.brand_id = b.id AND p.id = $_id
        "; 
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }
    
}   

?>