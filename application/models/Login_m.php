<?php 
class login_m extends CI_Model{
    public function select_login($logiu,$passwordu){
        $sql = 'SELECT id_user,roleu,fio FROM user WHERE loginu=? and passwordu=?';
        $result = $this->db->query($sql,array($logiu,$passwordu));
        return $result->row_array();
    }
}
?>