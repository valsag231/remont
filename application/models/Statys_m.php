<?php
class Statys_m extends CI_Model{ 
public function update_status($id_application,$statys){
    if($statys == 1){
        $s= 'Принято';
    }
    if($statys == 2){
        $s= 'Отклонено';
    }
    if($statys == 3){
        $s= 'Выполненно';
    }
    $sql = 'UPDATE application set statys = ? where id_application=(?)';
    $this->db->query($sql,array($s,$id_application));
}    
}
?>