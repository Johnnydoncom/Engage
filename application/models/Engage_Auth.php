<?php

	Class Engage_Auth extends CI_Model{
		public function check(){
			if($this->session->has_userdata('user_id')){
				return true;
			}
			return false;
		}

		public function user(){
			if($this->session->has_userdata('user_id')){
				return $this->session->userdata('user');
			}
			return null;
		}

		public function login($data=array()){
			$identityField = 'username';

			$identity= $data['identity'];
			$password= $data['password'];

			if(filter_var($identity, FILTER_VALIDATE_EMAIL)){
				$identityField = 'email';
			}

			$this->db->where($identityField, $identity);
			$this->db->limit(1);
			$result = $this->db->get('users');
			if($result->num_rows()){
				$result = $result->row();
				$hashedPassword = $result->password;
				if(password_verify($password, $hashedPassword)){
					$this->session->set_userdata('user_id', $result->id);
					$this->session->set_userdata('user', $result);
					return true;
				}
				return false;
			}
			return false;
		}

		public function logout(){
			$array = array(
				'user_id',
				'user'
			);
			$this->session->unset_userdata($array);
		}
	}
