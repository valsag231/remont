<?php 
class Add_img_m extends CI_Model
{
    public function update_applic($id_application, $img_pocle, $date_k){
        var_dump($date_k);
        $sql =' update application set img_pocle = ?, date_k = ?, statys ="Выполненно" where id_application=?';
        $this->db->query($sql,array( $img_pocle, $date_k,$id_application));
    }
    }
    

?>