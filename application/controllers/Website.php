<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Website extends CI_Controller{
    public function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Kolkata');
    }

    public function index(){
    	$this->load->view('Website/index');
    }

     public function terms(){
    	$this->load->view('Website/terms');
    }

     public function privacy(){
    	$this->load->view('Website/privacy');
    }

 public function shipping(){
    	$this->load->view('Website/shipping');
    }

 public function return(){
    	$this->load->view('Website/return');
    }

    public function faq(){
    	$this->load->view('Website/faq');
    }

    public function my_account(){
      $this->load->view('Website/my_account');
    }

     public function order(){
      $this->load->view('Website/order');
    }

     public function address(){
      $this->load->view('Website/address');
    }

    public function edit_address(){
      $this->load->view('Website/edit_address');
    }

     public function account(){
      $this->load->view('Website/account');
    }

    public function wishlist(){
      $this->load->view('Website/wishlist');
    }

     public function logout(){
      $this->load->view('Website/logout');
    }




}