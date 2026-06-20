<?php
class User 
{
    public $id;
    public $name;
    public $email;
    public $role_id;
    private $password;

    public function __construct($_id, $_name, $_email,$_password = null, $_role_id ) {
        $this->id = $_id;
        $this->name = $_name;
        $this->email = $_email;
        $this->password = $_password;
        $this->role_id = $_role_id;
    }

    public function create() {
      global $db;
      $sql = "INSERT INTO users (name, email, password, role_id) 
            VALUES ('$this->name', '$this->email', '$this->password', $this->role_id)";
      $result = $db->query($sql);
        // if($result){
        //     return $db->insert_id;
        // }else{
        //     return $db->error;
        // }
      if($db->error){
        return $db->error;
      }else{
        return true;
      }
    }
    public function update() {
      global $db;
      $sql = "UPDATE users SET 
      name = '$this->name', 
      email = '$this->email', 
      password = '$this->password', 
      role_id = $this->role_id 
      WHERE id = $this->id";      
      $db->query($sql);
      // if($db->error){
      //   return $db->error;
      // }else{
      //   return true;
      // }
    }
    static public function readAll() {
        global $db;
        $sql = "SELECT id, name, email FROM users ORDER BY id DESC";
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
      $db->query("DELETE FROM users WHERE id = $_id");
      // if($db->affected_rows > 0){
      //   return true;
      // }
      if($db->error){
        return $db->error;
      }else{
        return true;
      }
    }

}

?>