<?php

class Products {
    public $id;
    public $name;
    public $category_id;
    public $price;
    public $discount;
    public $quantity;
    public $reorder_point;
    public $product_tag_id;
    public $photo;
    public $is_active;

    public static function readAll() {
        global $db;
        $sql = "SELECT p.*,c.name as category FROM ecom_products p, ecom_categories c WHERE p.category_id = c.id";
        $res = $db->query($sql);
        if ($res) {
          return $res->fetch_all(MYSQLI_ASSOC);
        } else {
          return "Query failed: " . $db->error;
        }
    }

    public static function ourProducts() {
        global $db;
        $sql = "SELECT p.*,c.name as category FROM ecom_products p, ecom_categories c WHERE p.category_id = c.id AND p.is_active = 1 order by p.id desc limit 4";
        $res = $db->query($sql);
        if ($res) {
          return $res->fetch_all(MYSQLI_ASSOC);
        } else {
          return "Query failed: " . $db->error;
        }
    }

    public static function offerProducts() {
        global $db;
        $sql = "SELECT p.*,c.name as category FROM ecom_products p, ecom_categories c WHERE p.category_id = c.id AND p.is_active = 1 AND p.product_tag_id = 3 order by p.id desc limit 4";
        $res = $db->query($sql);
        if ($res) {
          return $res->fetch_all(MYSQLI_ASSOC);
        } else {
          return "Query failed: " . $db->error;
        }
    }

    public static function featuredProducts() {
        global $db;
        $sql = "SELECT p.*,c.name as category FROM ecom_products p, ecom_categories c WHERE p.category_id = c.id AND p.is_active = 1 AND p.product_tag_id = 2 order by p.id desc limit 4";
        $res = $db->query($sql);
        if ($res) {
          return $res->fetch_all(MYSQLI_ASSOC);
        } else {
          return "Query failed: " . $db->error;
        }
    }

    public static function bestSellingProducts() {
        global $db;
        $sql = "SELECT p.*,c.name as category, sum(od.qty) as sale_qty 
                FROM ecom_products p, ecom_categories c, ecom_order_details od
                WHERE p.category_id = c.id AND p.is_active = 1 AND p.id = od.product_id
                GROUP by od.product_id
                order by sale_qty desc limit 4";
        $res = $db->query($sql);
        if ($res) {
          return $res->fetch_all(MYSQLI_ASSOC);
        } else {
          return "Query failed: " . $db->error;
        }
    }

    public static function readById($id) {
        global $db;
        $id = (int)$id;
        $sql = "SELECT p.*,c.name as category 
                FROM ecom_products p, ecom_categories c 
                WHERE p.category_id = c.id AND p.id = $id";

        $res = $db->query($sql);
        if ($res) {
          return $res->fetch_assoc();
        } else {
          return "Query failed: " . $db->error;
        }
    }

    public static function readByCategory($_id) {
       global $db;
       $sql = "SELECT p.*,c.name as category FROM ecom_products p, ecom_categories c WHERE p.category_id = c.id AND p.category_id = $_id";
       $res = $db->query($sql);
       if ($res) {
         return $res->fetch_all(MYSQLI_ASSOC);
       } else {
         return "Query failed: " . $db->error;
       }
    }
}
