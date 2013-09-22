<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

        /**
         * Admin backend
         */
    
	public function index()
	{
		$this->load->view('admin/login');
	}
}
