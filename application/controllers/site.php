<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  public function index() {
    if($this->session->userdata('username')) {
      redirect('app/index');
    } else {
      $this->login();
    }
  }

  public function login() {
    $data['header'] = "Login";
    $data['content'] = 'site/login_view';
    $this->load->view('template/layout', $data);
  }
  
  public function logout() {
    $this->session->sess_destroy();
    redirect('site/login');
  }

    public function login_validation() {
    $this->form_validation->set_rules('username', 'Username',
      'trim|required|min_length[1]|max_length[25]|callback_login_check');
    $this->form_validation->set_rules('password', 'Password',
      'trim|required|min_length[1]|max_length[12]|md5');

	
    if($this->form_validation->run()) {
      $user = $this->model_users->get_user_by_username($this->input->post('username'));
      
      $session_data = array(
        'id'       => $user->id,
        'username' => $user->username,
        'email'    => $user->email
      );
      $this->session->set_userdata($session_data);
      
      redirect('app/index');
    } else {
      $this->login();
    }
  }
  

  public function signup() {
    $data['header'] = 'Registration';
    $data['content'] = 'site/signup_view';
    $this->load->view(TEMPLATE, $data);
  }
  
  public function signup_validation() {
    $this->form_validation->set_rules('username', 'Username',
      'required|trim|min_length[1]|max_length[25]|is_unique[users.username]');
    $this->form_validation->set_rules('password', 'Password',
      'required|trim|min_length[1]|max_length[12]');
    $this->form_validation->set_rules('cpassword', 'Confirm Password',
      'required|trim|matches[password]');
    
    if($this->form_validation->run()) {
		$this->model_users->add_user();
		redirect('site/login'); 
    } else {
      $this->signup();
    }
  }


}