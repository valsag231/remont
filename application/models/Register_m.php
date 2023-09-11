<?php
class Register_m extends CI_Model{
    public function insert_register($fio, $email, $loginu, $passwordu){
        $sql = 'insert into user(fio,email,loginu,passwordu) value(?,?,?,?)';
        $result = $this->db->query($sql,array($fio, $email, $loginu, $passwordu));
        return $this->db->insert_id();
    }
}
?>