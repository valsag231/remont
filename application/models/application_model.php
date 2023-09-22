<?php 
class application_model extends CI_Model
{
    public function delete_applications($id_application)
    {
      $sql = 'DELETE FROM application WHERE id_application =?';
      $result = $this->db->query($sql,array($id_application));
      return $this->db->insert_id();
    }
}
?>