<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pricing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');       
    }

    public function index() {
        $arrData['title'] = "Daniweb | Pricing";
        $this->load->view('header', $arrData);
        $this->load->view('pricing', $arrData);
        $this->load->view('footer', $arrData);
    }
}