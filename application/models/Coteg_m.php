<?php 
class Coteg_m extends CI_Model
{
    public function select_coteg()
    {
        $sql = 'SELECT * FROM category';
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function delete_category($id_category)
    {
      $sql = 'DELETE FROM category WHERE id_category =?';
      $result = $this->db->query($sql,array($id_category));
      return $this->db->insert_id();
    }
}
?>