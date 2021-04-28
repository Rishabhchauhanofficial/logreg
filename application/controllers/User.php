<?php

/**
 * created by : rishabh chauhan 
 * submited to :codeacious
 * date:27/4/2021
 */

class User extends CI_Controller
 {
    public function __construct()
    {
        parent::__construct();
        if($_SESSION['user_logged']==FALSE){
            $this->session->set_flashdata("error","First login the page and then you see your profile");
            redirect("auth/login");
        }
    }

    public function profile()
    {


        $this->load->view('profile');
    }  
    
 }
      
