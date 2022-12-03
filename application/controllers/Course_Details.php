<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class course_details extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $arrData['title'] = "Daniweb | Course Details";
        $this->load->view('header', $arrData);
        $this->load->view('course-details', $arrData);
        $this->load->view('footer', $arrData);
    }
}