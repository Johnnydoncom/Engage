<?php

function current_user(){
	$ci=& get_instance();

	if($ci->session->has_userdata('user_id')){
		return $ci->session->userdata('user');
	}
	return null;
}
