<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Login_model');
    }


    public function memberlogin(){
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($username !="" && $password!=""){
            $loginRes = $this->Login_model->login($username,$password);
             

            if($loginRes>0){
                echo "success";
                $this->session->set_userdata('username', $username);
            }else{
                echo "faild";
            }
        }else{
            echo "blank";
        }
    }

    public function logout(){
        
        $res = $this->session->sess_destroy();
            redirect('home/index');
       

    }

}

?>
