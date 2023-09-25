<?php
class Zaivki_m extends CI_Model{ 
    public function select_zaivki($id_user){
       $sql = 'select * from application where id_user =?';
       $result = $this->db->query($sql,array($id_user));
       return $result->result_array($id_user);
    }
    public function select_applic(){
        $sql = 'SELECT application.id_application,data_n,fio,name,description,data_k,name_category,statys from user,application,category WHERE user.id_user=application.id_user and application.id_category=category.id_category';
        $result = $this->db->query($sql);
        return $result->result_array(); 
    }
   
}
?>