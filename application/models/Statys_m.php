<?php
class Statys_m extends CI_Model{ 
public function update_status($id_application){
    $sql = 'update zayavki set status = "Принято" where id_application =(?) ';
    $this->db->query($sql,$id_application);
}    
}
?>