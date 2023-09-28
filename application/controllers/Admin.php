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
            redirect('admin/add_categor');
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
    public function admin(){
        $this->load->view('temp/head.php');
        $this->load->view('temp/nav_admin.php');
        $id_user = $this->session->userdata('id_user'); 
        $this->load->model('Zaivki_m');
        $data['applic'] = $this->Zaivki_m->select_applic(); 
        $this->load->view('admin.php',$data);
    }

    public function status(){
      $id_application = $this->uri->segment(3);
      $statys = $this->uri->segment(4);
      $this->load->model('statys_m');
      $this->statys_m->update_status($id_application,$statys);
      redirect('admin/admin');
    }

    public function add_img(){
            $data['id_application'] = $this->uri->segment(3);
            $this->load->view('temp/head.php');
            $this->load->view('temp/nav_admin.php');
            $this->load->view('add_img.php',$data);
        }
        public function ins_conf(){
            if (!empty($_POST)){
                if(isset($_FILES['img_posle']) && $_FILES['img_posle']['error'] === UPLOAD_ERR_OK){       
            $id_application = $_POST['id_application'];
            $data_k = $_POST['data_k'];
            $img_posle = $_FILES['img_posle']['name'];
            $this->load->model('add_img_m');
            $this->add_img_m->update_applic($id_application, $img_posle, $data_k);  
             $photopath = "img/".$img_posle;
                move_uploaded_file($_FILES['img_posle']['tmp_name'], $photopath);
            redirect('admin/admin');
        }
    }
}

  

}
?>