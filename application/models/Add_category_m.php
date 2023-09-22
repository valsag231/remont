<?php
class Add_category_m extends CI_Model{
    public function insert_add_category($name_category){
        $sql = 'insert into category(name_category) value(?)';
        $result = $this->db->query($sql,array($name_category));
        return $this->db->insert_id();
    }
}
?>