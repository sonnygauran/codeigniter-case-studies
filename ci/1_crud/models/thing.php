<?php
class Thing extends Model {
    var $name;
    var $quantity;
    var $price;

    function __construct() {
        parent::Model();
    }
    
    function add($data){
        if ($this->db->insert('things', $data)){
            return true;
        }
        return false;
    }
}

?>
