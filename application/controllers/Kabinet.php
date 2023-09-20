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
        $this->load->view('personal_kobinet.php', $data);
    }

    public function application()
    {
        $this->load->view('temp/head.php');
        $this->load->view('temp/nav_pol.php');
           if (!empty($_POST)) {
        if (isset($_FILES['img_do']) && $_FILES['img_do']['error'] === UPLOAD_ERR_OK) {
            $id_user = $this->session->userdata('id_user');
            $name = $_POST['name'];
            $description = $_POST['description'];
            $id_category = $_POST['id_category'];
            $img_do = $_FILES['img_do']['name'];
            $this->load->model('application_m');
            $this->application_m->insert_applic($name, $description, $id_category, $img_do,$id_user);
                $photopath = "img/".$img_do;
                move_uploaded_file($_FILES['img_do']['tmp_name'], $photopath);
                redirect('kabinet/users');
            }
        }
        $this->load->model('Coteg_m');
        $data['cotegor'] = $this->Coteg_m->select_coteg();
        $this->load->view('application.php',$data);  
    }

    }
?>