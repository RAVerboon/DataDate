<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

	}

	public function register()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$data['cssFiles'] = array('main.css', 'home.css');
		$data['base_url'] = $this->config->base_url();
		$data['title'] = 'Registreren';

		$this->load->view('header', $data);
		
		$this->form_validation->set_rules('username', 'Gebruikersnaam', 'required');
		$this->form_validation->set_rules('password', 'Wachtwoord', 'required');
		$this->form_validation->set_rules('realName', 'Voor- en achternaam', 'required');
		$this->form_validation->set_rules('birthDay', 'Geboortedatum', array('required', 
			function ($value) {
				if(preg_match('/^(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-](19|20)\d\d$/', $value) == 1)
					return true;
				return false;
			}));
		$this->form_validation->set_rules('gender', 'Geslacht', array('required',
			function ($value) {
				return ($value == 'male' || $value == 'female');
			}
			));
		$this->form_validation->set_rules('minimumAge', 'Minimumleeftijd', 'required');
		$this->form_validation->set_rules('maximumAge', 'Maximumleeftijd', 'required');

		if($this->form_validation->run() == false) {
			$this->load->view('register_form');
		} else {
			echo 'k bitch';
		}

		$this->load->view('footer');
	}
}
?>