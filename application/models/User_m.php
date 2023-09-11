<?php
class User_m extends CI_Model{
    public function select_personal($id_user){
        $sql = 'SELECT * FROM user WHERE id_user=?';
        $result = $this->db->query($sql,array($id_user));
        return $result->result_array($id_user);
    }
    public function update_user($id_user) {
        $sql = "UPDATE user SET fio='$fio',email='$email',loginu='$login',passwordu='$password' WHERE id=$id_user";
        $result = $this->db->query($sql,array($id_user));
        return $result->result_array($id_user);
    }
}
?>