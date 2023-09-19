<?php 
class Coteg_m extends CI_Model
{
    public function select_coteg()
    {
        $sql = 'SELECT * FROM category';
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>