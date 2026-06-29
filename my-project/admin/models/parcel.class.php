<?php
class Parcel {
    public $id;
    public $tracking_id;
    public $sender_name;
    public $receiver_name;
    public $destination;
    public $parcel_type;
    public $weight;
    public $delivery_charge;
    public $status; 
    public $date;

    
    public function __construct($_id = null, $_tracking_id = "", $_sender_name = "", $_receiver_name = "", $_destination = "", 
    $_parcel_type = "", $_weight = "", $_delivery_charge = 0, $_date = "") {
        $this->id = $_id;
        $this->tracking_id = $_tracking_id;
        $this->sender_name = $_sender_name;
        $this->receiver_name = $_receiver_name;
        $this->destination = $_destination;
        $this->parcel_type = $_parcel_type;
        $this->weight = $_weight;
        $this->delivery_charge = $_delivery_charge ? floatval($_delivery_charge) : 0;
        $this->date = $_date ? $_date : date('Y-m-d');
    }

    
    public function create() {  
        global $db;
        
        $sql = "INSERT INTO parcels (tracking_id, sender_name, receiver_name, destination, parcel_type, weight, delivery_charge, date) 
                VALUES ('$this->tracking_id', '$this->sender_name', '$this->receiver_name', '$this->destination', '$this->parcel_type', '$this->weight', 
                '$this->delivery_charge', '$this->date')";
        
        $db->query($sql);

        if ($db->error) {
            return $db->error;
        } else {
            return true;
        }
    }


    static public function readAll() {
        global $db;
        
        $sql = "SELECT p.*, r.name AS rider_name 
                FROM parcels p 
                LEFT JOIN riders r ON p.rider_id = r.id 
                ORDER BY p.tracking_id DESC";
        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    
    static public function delete($_tracking_id) {
        global $db;
        $tracking_id = $db->real_escape_string($_tracking_id);
        $db->query("DELETE FROM parcels WHERE tracking_id = '$tracking_id'");
        
        if ($db->error) {
            return $db->error;
        } else {
            return true;
        }
    }
   
    static public function readRiderItems() {
        global $db;
        $sql = "SELECT p.*, r.name AS rider_name, r.phone AS rider_phone 
                FROM parcels p 
                LEFT JOIN riders r ON p.rider_id = r.id 
                ORDER BY p.date DESC";
        $result = $db->query($sql);
        
        if ($db->error) {
            return [];
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>