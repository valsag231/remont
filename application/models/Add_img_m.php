<?php 
class Add_img_m extends CI_Model
{
    public function update_applic($id_application, $img_pocle, $data_k){
        $sql = 'UPDATE application set img_pocle = ?, data_k = ?, statys ="Выполненно" where id_application=?';
        $this->db->query($sql,array($img_pocle, $data_k, $id_application));
    }
    }
    
    
    

?>