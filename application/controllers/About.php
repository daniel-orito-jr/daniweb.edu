<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');       
    }

    public function index() {
        $arrData['title'] = "Daniweb | About";
        $this->load->view('header', $arrData);
        $this->load->view('about', $arrData);
        $this->load->view('footer', $arrData);
    }
}