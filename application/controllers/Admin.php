<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{
    public function add_categor(){
        $this->load->view('temp/head.php');
        $this->load->view('temp/nav_admin.php');
        $id_user = $this->session->userdata('id_user');  
        $this->load->model('coteg_m');
        $data['cotegor'] = $this->coteg_m->select_coteg();
        $this->load->view('add_category.php',$data);
    }
    public function add_categ(){
        if (!empty($_POST)){
            $this->load->model('add_category_m');
            $this->add_category_m->insert_add_category($_POST['name_category']);
            redirect('add_category.php');
       }
    }

    public function delete_category(){
        if (!empty($_GET)){
            $id_category= $_GET['id_category'];
            $this->load->model('Coteg_m');
            $this->Coteg_m->delete_category($id_category);  
            redirect('Admin/add_categor');  
        }
    }
}
?>