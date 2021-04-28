<?php

/**
 * created by : rishabh chauhan 
 * submited to :codeacious
 * date:27/4/2021
 */

class Auth extends CI_Controller
 {

    public function index()
	{
		$this->load->view('register');
	} 
    
    public function logout()
    {

        unset($_SESSION);
        session_destroy();
        redirect("auth/login","refresh");
    }
    public function login()
    {
        
        // echo "login page";
        if(isset($_POST['login'])){
            $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('password','password','required');
            if($this->form_validation->run() == TRUE)
            {
                //check user in database
                $email=$_POST['email'];
                $password=$_POST['password'];

                $this->db->select('*');
                $this->db->from('users');
                $this->db->where(array('email'=>$email,'password'=>$password));
                $query =$this->db->get();

                $user = $query->row();
                
                //if user exist
                if($user->email){
                    //temp message
                    //$this->session->set_flashdata("success","You are Logged in");

                    //make a session variable
                      $_SESSION['user_logged'] = TRUE;
                      $_SESSION['name'] = $user->name;
                      $_SESSION['email'] = $user->email;
                      $_SESSION['phone'] = $user->phone;
                      $_SESSION['address'] = $user->address;
                      $_SESSION['city'] = $user->city;
                      $_SESSION['zip'] = $user->zip;
                      $_SESSION['state'] = $user->state;
                      $_SESSION['country'] = $user->country;
                      $_SESSION['password'] = $user->password;
                      
                    

                    //redirect to userlogin page

                    redirect("user/profile","refresh");

                }
                else{
                    redirect("auth/login","refresh");
                }

            }
            
        }
        $this->load->view('login');
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
                // echo "form validated";
                // add user to data base
                $data=array('name'=>$_POST['name'],'email'=>$_POST['email'],'phone'=>$_POST['phone'],'address'=>$_POST['address'],'city'=>$_POST['city'],'country'=>$_POST['country'],'state'=>$_POST['state'],'zip'=>$_POST['zip'],'password'=>$_POST['password'],);
                $this->db->insert('users',$data); 
                $this->session->set_flashdata("success","Your hass been Successfully created now you have access to login ");
                redirect("auth/register","refresh");
            }
        }
		$this->load->view('register');
	}

    

 }