<?php
class Zaivki_m extends CI_Model{ 
    public function select_zaivki($id_user){
       $sql = 'select * from application where id_user =?';
       $result = $this->db->query($sql,array($id_user));
       return $result->result_array($id_user);
    }
   
}
?>