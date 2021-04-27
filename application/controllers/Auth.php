<?php

/**
 * created by : rishabh chauhan 
 * submited to :codeacious
 * date:27/4/2021
 */

class Auth extends CI_Controller
 {

    public function login()
    {
        echo "login page";
    }
    public function register()
	{
        //form validation
        if(isset($_POST['register']))
        {
            $this->form_validation->set_rules('name','name','required');
            $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('phone','phone','required');
            $this->form_validation->set_rules('address','address','required');
            $this->form_validation->set_rules('city','city','required');
            $this->form_validation->set_rules('country','county','required');
            $this->form_validation->set_rules('state','state','required');
            $this->form_validation->set_rules('zip','zip','required');
            $this->form_validation->set_rules('password','password','required|min_length[8]');

            if($this->form_validation->run() == TRUE)
            {
                echo "form validated";
                // add user to data base
            }
        }
		$this->load->view('register');
	}
 }