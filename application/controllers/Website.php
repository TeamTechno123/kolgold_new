<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Website extends CI_Controller{
    public function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Kolkata');
    }

    public function index(){
      $data['slider_list'] = $this->Master_Model->get_list_by_id3('','','','slider_status','1','','','slider_id','DESC','kol_slider');
      $data['tourism_list'] = $this->Master_Model->get_list_by_id3('','','','','','','','tourism_id','DESC','kol_tourism');
      $data['featured_product_list'] = $this->Master_Model->get_list_by_id3('','product_featured','1','product_status','1','','','product_id','DESC','kol_product');
      $data['blog_list'] = $this->Master_Model->get_list_by_id3('','','','blog_status','1','','','blog_id','DESC','kol_blog');
      $data['main_product_category_list'] = $this->Master_Model->get_list_by_id3('','is_main','1','product_category_status','1','','','product_category_id','DESC','kol_product_category');

    	$this->load->view('Website/index', $data);
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
       $data['product_main_category_list'] = $this->Master_Model->get_list_by_id3('','is_main','1','product_category_status','1','','','product_category_id','DESC','kol_product_category');
       $data['product_list'] = $this->Master_Model->get_list_by_id3('','','','product_status','1','','','product_id','DESC','kol_product');

      $this->load->view('Website/shop', $data);
    }
     public function product_details($product_id = null){
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

    public function blog_list(){
      $data['blog_list'] = $this->Master_Model->get_list_by_id3('','','','blog_status','1','','','blog_id','DESC','kol_blog');

      $this->load->view('Website/blog_list', $data);
    }

    public function blog_details($blog_id = null){
      $data['blog_main_category_list'] = $this->Master_Model->get_list_by_id3('','is_main','1','blog_category_status','1','','','blog_category_id','DESC','kol_blog_category');
      $blog_info = $this->Master_Model->get_info_arr('blog_id',$blog_id,'kol_blog');
      if(!$blog_info){ header('location:'.base_url().''); }
      $data['blog_info'] = $blog_info[0];
      $this->load->view('Website/blog_details', $data);
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
