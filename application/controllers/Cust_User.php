<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cust_User extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
  }

  public function logout(){
    // $this->session->sess_destroy();
    $this->session->unset_userdata('kol_customer_id');
    $this->session->unset_userdata('kol_company_id');
    // $this->session->unset_userdata('kol_role_id');
    header('location:'.base_url().'Cust_User');
  }

/**************************      Login      ********************************/
  public function index(){
    $kol_customer_id = $this->session->userdata('kol_customer_id');
    $kol_company_id = $this->session->userdata('kol_company_id');
    if($kol_customer_id == '' || $kol_company_id == ''){
      $this->form_validation->set_rules('mobile', 'Mobile No', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');
      if ($this->form_validation->run() == FALSE) {
      	$this->load->view('Customer/User/login');
      } else{
        $mobile = $this->input->post('mobile');
        $password = $this->input->post('password');

        $login = $this->Customer_Model->check_login($mobile, $password);
        // print_r($login);
        if($login == null){
          $this->session->set_flashdata('msg','login_error');
          header('location:'.base_url().'Cust_User');
        } else{
          // echo 'null not';
          $this->session->set_userdata('kol_customer_id', $login[0]['customer_id']);
          $this->session->set_userdata('kol_company_id', $login[0]['company_id']);
          // $this->session->set_userdata('kol_role_id', $login[0]['role_id']);
          // $this->session->set_userdata('branch_id', $login[0]['branch_id']);
          header('location:'.base_url().'Cust_User/dashboard');
        }
      }
    }
    else{
      header('location:'.base_url().'Cust_User/dashboard');
    }
  }

/**************************      Dashboard      ********************************/
  public function dashboard(){
    $kol_customer_id = $this->session->userdata('kol_customer_id');
    $kol_company_id = $this->session->userdata('kol_company_id');
    if($kol_customer_id == '' || $kol_company_id == ''){ header('location:'.base_url().'Cust_User'); }

    // $data['regular_bed_cnt'] = $this->Master_Model->get_sum('','avlb_regular_bed','hospital_status','1','','','','','hospital');
    // $data['oxygen_bed_cnt'] = $this->Master_Model->get_sum('','avlb_oxygen_bed','hospital_status','1','','','','','hospital');
    // $data['icu_bed_cnt'] = $this->Master_Model->get_sum('','avlb_icu_bed','hospital_status','1','','','','','hospital');
    // $data['special_bed_cnt'] = $this->Master_Model->get_sum('','avlb_special_bed','hospital_status','1','','','','','hospital');
    //
    // $data['hospital_cnt'] = $this->Master_Model->get_count('hospital_id','','hospital_type','1','','','','','hospital');
    // $data['gov_qua_cnt'] = $this->Master_Model->get_count('hospital_id','','hospital_type','2','','','','','hospital');
    // $data['private_qua_cnt'] = $this->Master_Model->get_count('hospital_id','','hospital_type','3','','','','','hospital');
    // $data['hotel_qua_cnt'] = $this->Master_Model->get_count('hospital_id','','hospital_type','4','','','','','hospital');

    $data['page'] = 'Customer Dashboard';
    $this->load->view('Customer/Include/head', $data);
    $this->load->view('Customer/Include/navbar', $data);
    $this->load->view('Customer/User/dashboard', $data);
    $this->load->view('Customer/Include/footer', $data);
  }

/**************************      Project      ********************************/
  public function project(){
    $kol_customer_id = $this->session->userdata('kol_customer_id');
    $kol_company_id = $this->session->userdata('kol_company_id');
    if($kol_customer_id == '' || $kol_company_id == ''){ header('location:'.base_url().'Cust_User'); }

    $data['page'] = 'Customer Dashboard';
    $this->load->view('Customer/Include/head', $data);
    $this->load->view('Customer/Include/navbar', $data);
    $this->load->view('Customer/User/project', $data);
    $this->load->view('Customer/Include/footer', $data);
  }

/**************************      Task      ********************************/
  public function task(){
    $kol_customer_id = $this->session->userdata('kol_customer_id');
    $kol_company_id = $this->session->userdata('kol_company_id');
    if($kol_customer_id == '' || $kol_company_id == ''){ header('location:'.base_url().'Cust_User'); }

    $data['page'] = 'Customer Dashboard';
    $this->load->view('Customer/Include/head', $data);
    $this->load->view('Customer/Include/navbar', $data);
    $this->load->view('Customer/User/task', $data);
    $this->load->view('Customer/Include/footer', $data);
  }

/**************************      Invoice      ********************************/
  public function invoice(){
    $kol_customer_id = $this->session->userdata('kol_customer_id');
    $kol_company_id = $this->session->userdata('kol_company_id');
    if($kol_customer_id == '' || $kol_company_id == ''){ header('location:'.base_url().'Cust_User'); }

    $data['page'] = 'Customer Dashboard';
    $this->load->view('Customer/Include/head', $data);
    $this->load->view('Customer/Include/navbar', $data);
    $this->load->view('Customer/User/invoice', $data);
    $this->load->view('Customer/Include/footer', $data);
  }


}
?>
