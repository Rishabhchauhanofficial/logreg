<?php

/**
 * created by : rishabh chauhan 
 * submited to :codeacious
 * date:27/4/2021
 */

class forlogout extends CI_Controller
 {

    public function logout()
    {

       unset($_SESSION['user_logged']);
       // session_destroy();
      $_SESSION['user_inprofile']=FALSE;
        redirect("auth/login","refresh");
        
    }
    
 }
      
