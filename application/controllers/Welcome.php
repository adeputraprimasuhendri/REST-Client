<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Product_model');
	}
	
	public function index()
	{
		echo $product = $this->Product_model->getProduct();
		$this->load->view('welcome_message');
	}
}
