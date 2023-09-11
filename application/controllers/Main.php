<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller{
    //Главная страница
    public function index(){
        $this->load->view('temp/head.php');  
        $roleu = $this->session->userdata('roleu');
        $menu ='temp/nav.php';
        if (!empty($roleu)){
            if ( $roleu == 'Пользователь'){
               $menu='temp/nav_pol.php';
            }
            if($roleu == 'Администратор'){
                $menu ='temp/nav_admin.php';
            }
        }
        $this->load->view($menu);
        $this->load->view('index.php');  
    }
    //Авторизация пользователя
    public function login(){
        $this->load->view('temp/head.php');
        $this->load->view('temp/nav.php'); 
        $data['error']='';
        if (!empty($_POST['loginu'])and !empty($_POST['passwordu'])){
            $this->load->model('login_m');
            $user = $this->login_m->select_login($_POST['loginu'],$_POST['passwordu']);
            if (!empty($user)){
                $this->session->set_userdata($user);
                redirect('main/index');
            }
            else{
                $data['error']='Нет такого пользователя';
            }
            
        }   
        $this->load->view('login.php',$data);
    }  
    //Регистрация пользователя
    public function register(){
        $this->load->view('temp/head.php');
        $this->load->view('temp/nav.php');
        if (!empty($_POST)){
            $this->load->model('register_m');
            $this->register_m->insert_register($_POST['fio'],$_POST['email'],$_POST['loginu'],$_POST['passwordu']);
            redirect('main/login');
       }
        $this->load->view('register.php');
    }  
    public function logaut(){
        $array_items = array('roleu');
        $this->session->unset_userdata($array_items);
        redirect('main/index');
    }
}  
?>