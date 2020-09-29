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

     public function about(){
      $this->load->view('Website/about');
    }

    public function login(){
      $this->load->view('Website/login');
    }

     public function register(){
      $this->load->view('Website/register');
    }

     public function forgotp(){
      $this->load->view('Website/forgotp');
    }

     public function shop(){
      $this->load->view('Website/shop');
    }
     public function product_details(){
      $this->load->view('Website/product_details');
    }

     public function checkout(){
      $this->load->view('Website/checkout');
    }

     public function order_details(){
      $this->load->view('Website/order_details');
    }

    public function order_tracking(){
      $this->load->view('Website/order_tracking');
    }

    
    public function contact(){
      $this->load->view('Website/contact');
    }

    public function payment(){
      $this->load->view('Website/payment');
    }

    public function disclaimer(){
      $this->load->view('Website/disclaimer');
    }

    public function blog(){
      $this->load->view('Website/blog');
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