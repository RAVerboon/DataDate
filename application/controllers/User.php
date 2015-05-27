<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	public function register()
	{
		$data['cssFiles'] = array('main.css', 'home.css');
		$data['base_url'] = $this->config->base_url();
		$data['title'] = 'Registreren';
		$this->load->view('header', $data);
		$this->load->view('register_form');
		echo "<pre>";
		foreach ($this->input->post(null, true) as $var) {
			echo "$var\n";
		}
		echo "</pre>";
		$this->load->view('footer');
	}
}
?>