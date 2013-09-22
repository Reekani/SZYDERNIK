<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dowcipy extends CI_Controller {

        /**
         * Admin backend
         */
    
	public function index()
	{
		$this->load->view('list/dowcipy');
	}
        
        public function all()
        {
            $data['page'] = 'jokes';
            
            $this->load->database();
            $query = $this->db->query('SELECT id, text FROM jokes');

            foreach ($query->result() as $row)
            {
                $data['jokes'][] = $row;
            }

            $this->load->view('jokes', $data);
        }
}
