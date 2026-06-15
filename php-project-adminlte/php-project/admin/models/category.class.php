<?php
class Category {
    static public function readAll() {
        global $db;
        $sql = "SELECT * FROM categories ORDER BY name ASC";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);      
    }
}   

?>