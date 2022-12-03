<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');       
    }

    public function index() {
        $arrData['title'] = "Daniweb | Contact";
        $this->load->view('header', $arrData);
        $this->load->view('contact', $arrData);
        $this->load->view('footer', $arrData);
    }
}