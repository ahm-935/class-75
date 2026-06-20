<?php
class Rider 
{    
    static public function readAll() {
        global $db;
        $sql = "SELECT * FROM riders ORDER BY name ASC";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>