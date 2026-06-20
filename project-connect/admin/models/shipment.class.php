<?php
class Shipment 
{    
    static public function readAll() {
        global $db;
        $sql = "SELECT * FROM shipments ORDER BY name ASC";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>