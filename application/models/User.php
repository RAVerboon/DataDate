<?php 
class User extends CI_Model {
	public $username;
	public $name;
	public $email;
	public $passwd;
	public $gender;
	public $preferred_gender;
	public $birth_date;
	public $min_age;
	public $max_age;
	public $description;
	public $personality;
	public $preferred_personality;
	public $preferred_brands;


	public function __construct()
	{
		parent::__construct();

	}

	public function register_user($data)
	{
		echo $this->input->get('email');
	}
}
?>