<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index()
    {
    	$data['base_url'] = $this->config->base_url();
    	$data['title'] = 'Home';
    	$data['cssFiles'] = array('main.css', 'home.css');
        $this->load->view('header', $data);
        $this->load->view('home_register', $data);
        // $this->load->model('user');
        // $this->user->register_user();
        $this->load->view('footer', $data);
    }
}
?>