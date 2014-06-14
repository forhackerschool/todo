<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {
  public function __construct() {
    parent::__construct();
  }
  
  public function user_login() {
    $where = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password'))
    );
    
    $query = $this->db->get_where('users', $where);

    if($query->num_rows() == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
  
  public function add_user() {

    $data = array(
      'username'          => $this->input->post('username'),
      'password'          => md5($this->input->post('password')),
      'date'              => date("Y-m-d H:i:s")
    );
    
    $query = $this->db->insert('users', $data);
    
    if($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
  
  
  public function get_user_by_username($username) {
    $where = array(
      'username' => $username
    );
    $query = $this->db->get_where('users', $where);
        
    if($query->num_rows() == 1) {
      return $query->row();
    } else {
      return FALSE;
    }
  }
  
  public function get_user_by_id($id) {
    $where = array(
      'id' => $id
    );
    $query = $this->db->get_where('users', $where);
        
    if($query->num_rows() == 1) {
      return $query->row();
    } else {
      return FALSE;
    }
  }
  
  
  
  
}