<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class What_we_offer extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$this->data['headerData']['css'][] 		= 'css/style.css';
		$this->data['footerData']['js'][] 		= 'js/jquery-1.10.2.min.js';
		$this->data['footerData']['js'][] 		= 'js/jquery-migrate-1.2.1.min.js';
		$this->data['headerData']['js'][] 		= 'js/bootstrap.js';
		$this->data['footerData']['js'][] 		= 'js/jquery.uniform.min.js';
		$this->data['footerData']['js'][] 		= 'js/custom.js';
		$this->data['footerData']['js'][] 		= 'js/forms.js';
		
	}

	public function index()
	{

		$this->data['headerData']['pageTitle'] = 'Pinoy Assist - What we offer';
		$this->data['pageData'][] = null;

		$this->data['pageView'] = 'what-we-offer';
		$this->load->view('master-layout', $this->data);

	}

}