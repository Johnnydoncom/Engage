<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function index()
	{
		$data = array();
		$this->template->load('template', 'contents' , 'home');
	}

	public function about()
	{
		$data = array();
		$this->template->load('template', 'contents' , 'about');
	}

	public function service()
	{
		$data = array();
		$this->template->load('template', 'contents' , 'service');
	}

	public function shop()
	{
		$data = array();
		$this->template->load('template', 'contents' , 'shop');
	}

	public function contact()
	{
		$data = array();
		$this->template->load('template', 'contents' , 'contact');
	}

	public function account()
	{
		$this->template->load('template', 'contents' , 'account');
	}


}
