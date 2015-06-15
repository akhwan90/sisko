<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		session_start();
		$this->load->model('web_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('Pagination','image_lib', 'session', 'form_validation'));
		$this->load->helper("file");
	}
	
	public function index() {
		$msg['info'] = "";
		if($this->session->userdata('validated')){
            redirect('adm');
        } else  {
			$this->load->view('login.php', $msg);
		}
	}
	
	public function process(){
		$msg['info'] = "";
		if($this->session->userdata('validated')){
            redirect('adm');
        } else {
			// Validate the user can login
			$result = $this->web_model->validate();
			// Now we verify the result
			if(! $result){
				// If user did not validate, then show them login page again
				$msg['info'] = '<font color=red>Invalid username and/or password.</font><br />';
				$this->load->view('login.php', $msg);
			}else{
				// If user did validate, 
				// Send them to members area
				redirect('adm');
			}       
		}
    }
}
