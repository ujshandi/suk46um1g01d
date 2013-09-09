<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Session extends CI_Session {
		
	public function __construct() {
		parent::__construct();		
	}
	
	public function is_logged_in() {
		return ($this->userdata('username') === FALSE ? FALSE : TRUE);
	}
}
