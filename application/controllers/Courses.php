<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class courses extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');       
    }

    public function index() {
        $arrData['title'] = "Daniweb | Courses";
        $this->load->view('header', $arrData);
        $this->load->view('courses', $arrData);
        $this->load->view('footer', $arrData);
    }
}