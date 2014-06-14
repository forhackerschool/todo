<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_api extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
  
	public function get_users() {
	   
		$query = $this->db->get('users');

		if($query->num_rows() > 0) {
		  return $query->result();
		} else {
		  return 'no users found';
		}
	}
	
	public function get_user($id) {
	   
	   $where = array(
		  'id' => $id
		);
		
		$query = $this->db->get_where('users', $where);
		
		if($query->num_rows() > 0) {
		  return $query->result();
		} else {
		  return 'no user found';
		}
	}
	
	public function get_user_todo($id) {
	   
	   $where = array(
		  'users_id' => $id
		);
		
		$query = $this->db->get_where('list', $where);
		
		if($query->num_rows() > 0) {
		  return $query->result();
		} else {
		  return 'no todo found';
		}
	}
	

 }
 