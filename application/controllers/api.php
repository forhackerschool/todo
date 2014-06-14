<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
		
	//Ќаипростейший класс дл€ получени€ списка пользователей и списка задач пользовател€ в формате JSON
	
	class Api extends CI_Controller {
		
		function __construct() {
			
			parent::__construct();
			
		}
		
		function getUsers(){
			
			$users = $this->model_api->get_users();
			 
			echo json_encode($users);
			
		
		}
		
		function getUser($id){
				
			$user = $this->model_api->get_user($id);
			
			echo json_encode($user);
			
		}
		
		
		function getUserTodo($id){
			
			$todo = $this->model_api->get_user_todo($id);
			
			echo json_encode($todo);
		
		}
		
	}