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
    public function create() { 
        global $db;
        $sql = "INSERT INTO products (name, category_id, brand_id, short_description, price, quantity, point_of_restock, image, is_inactive) 
        VALUES ('$this->name', '$this->category_id', '$this->brand_id', '$this->short_description', '$this->price', '$this->quantity', '$this->point_of_restock', '$this->image', '$this->is_active')";     
         $db->query($sql);
        // if ($result) {
        //     return $db->insert_id;
        // }else {
        //     return $db->error;
        // }
        if($db->error) {
            return $db->error;
        }else{
            return true;
        }
    }
    public function update() { 
        global $db;
        $sql = "UPDATE users SET name = '$this->name', category_id = '$this->category_id', brand_id = '$this->brand_id', short_description = '$this->short_description', 
        price = '$this->price', quantity = '$this->quantity', point_of_restock = '$this->point_of_restock', image = '$this->image', is_active = '$this->is_active' WHERE id = '$this->id'";
        $result = $db->query($sql);
        if($db->error) {
            return $db->error;
        }else{
            return true;
        }
    }
    static public function readAll() {
        global $db;
        $sql = "SELECT * FROM users";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);      
    }
    static public function readById($_id) {
        global $db;
        $sql = "SELECT id, name, email, role_id FROM users WHERE id = $_id";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }
    static public function delete($_id) { 
        global $db;
        $db->query("delete from users where id = $_id");   
        if($db->error) {
            return $db->error;
        }else{
            return true;
        }
    }
}   

?>