<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		
		if($this->session->has_userdata('user_id')){
		$this->load->model('UserModel');
		$user_id = $this->session->userdata('user_id');

				
			$this->load->view('quotation',["data"=> $this->UserModel->get_alData($user_id )]);
            
		}else{

			$this->load->view('registration');
		}

		

	}
	public function login()
	{
		// echo "ww";die();
		$msg= '';
		$this->load->model('UserModel');
		if( $this->input->post("name") ){
			$this->UserModel->insert_entry();
			$msg= "register successful.";

		}
			$user = $this->UserModel->login(   );
		
            if ($user) {
                // User exists, set session data and redirect to dashboard
                $this->session->set_userdata('user_id', $user['id']);
				$msg.= "login successful.";
				  
            }
		echo 	$msg;

	}
	public function save_quotation()
	{
		
		$this->load->model('UserModel');
		if(  $user_id = $this->session->userdata('user_id') ){
			$this->UserModel->insert_quatation( $user_id );
			$msg= "Quatation added successfully.";

		}
		echo 	$msg;

	}
	
    public function logout() {
        // Destroy session and redirect to login page
        $this->session->unset_userdata('user_id');
    }

	
}
