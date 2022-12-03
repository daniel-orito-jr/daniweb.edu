<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class frontend extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('frontend_model');
       
    }

    public function index() {
        $arrData['title'] = "Daniweb | Home";
        $this->load->view('header', $arrData);
        $this->load->view('index', $arrData);
        $this->load->view('footer', $arrData);
    }

    public function about() {
        $arrData['title'] = "Daniweb | About";
        $this->load->view('header', $arrData);
        $this->load->view('about', $arrData);
        $this->load->view('footer', $arrData);
    }

    public function contact() {
        $arrData['title'] = "Daniweb | Contact";
        $this->load->view('header', $arrData);
        $this->load->view('contact', $arrData);
        $this->load->view('footer', $arrData);
    }

    public function course_details() {
        $arrData['title'] = "Daniweb | Course Details";
        $this->load->view('header', $arrData);
        $this->load->view('course-details', $arrData);
        $this->load->view('footer', $arrData);
    }

    public function courses() {
        $arrData['title'] = "Daniweb | Courses";
        $this->load->view('header', $arrData);
        $this->load->view('courses', $arrData);
        $this->load->view('footer', $arrData);
    }

    public function events() {
        $arrData['title'] = "Daniweb | Events";
        $this->load->view('header', $arrData);
        $this->load->view('events', $arrData);
        $this->load->view('footer', $arrData);
    }

    public function pricing() {
        $arrData['title'] = "Daniweb | Pricing";
        $this->load->view('header', $arrData);
        $this->load->view('pricing', $arrData);
        $this->load->view('footer', $arrData);
    }

    public function trainers() {
        $arrData['title'] = "Daniweb | Trainers";
        $this->load->view('header', $arrData);
        $this->load->view('trainers', $arrData);
        $this->load->view('footer', $arrData);
    }
}