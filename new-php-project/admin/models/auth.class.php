<?php
require_once 'user.class.php';
class Auth extends User {

   static public function login($_email, $_password) {
        global $db;
        $sql = "SELECT id, name, email, role_id FROM users WHERE email = '$_email'";
        $result = $db->query($sql);
        return $result->fetch_assoc();
    }
}

?>