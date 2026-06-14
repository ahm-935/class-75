<?php
class Role {
    public $id;
    public $name;
    

    public function __construct($_id, $_name) {
        $this->id = $_id;
        $this->name = $_name;
    }
    public function create() { 
        global $db;
        $sql = "INSERT INTO roles (name) 
        VALUES ('$this->name')";     
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
    }
    static public function readAll() {
        global $db;
        $sql = "SELECT * FROM role ORDER BY name ASC";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);      
    }
    public function readById() {      
    }
    static public function delete($_id) { 
    //     global $db;
    //     $db->query("delete from users where id = $_id");   
    //     if($db->error) {
    //         return $db->error;
    //     }else{
    //         return true;
    //     }
    }
}   

?>