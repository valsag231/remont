<?php 
class Application_m extends CI_Model
{
    public function insert_applic($name,$description,$id_category,$img_do,$id_user){
        $sql = 'insert into application(data_n,name,description,id_category,img_do,id_user) value(CURRENT_DATE(),?,?,?,?,?)';
        $rezult = $this->db->query($sql,array($name,$description,$id_category,$img_do,$id_user));
        return $this->db->insert_id();
    }
}
?>