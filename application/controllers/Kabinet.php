<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kabinet extends CI_Controller{
    public function users(){
        $this->load->view('temp/head.php');
        $id_user = $this->session->userdata('id_user');  
        $this->load->model('user_m');
        if (!empty($_POST)){
            $this->load->model('user_m');
            $this->user_m->update_user($_POST['fio'],$_POST['email'],$_POST['loginu'],$_POST['passwordu']);
            redirect('main/login');
       }
        $data['user']= $this->user_m->select_personal($id_user); 
        $this->load->view('temp/nav_pol.php');
        $this->load->view('personal_kobinet.php',$data);  
    }
    public function application(){
        $this->load->view('temp/head.php');
        $id_user = $this->session->userdata('id_user');  
        $this->load->view('temp/nav_pol.php');
        $this->load->view('application.php');  
    }
}
?>