<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	var $data = array();
	/**
	 */
	public function index()
	{
		if($this->isLoggedIn()){
			$this->alert('test','danger');
			$this->_render_page('dashboard/dashboard',array(),FALSE);
		}else{
			$notification = array();
			
			$this->_render_page('auth/session',array(),FALSE);
		}
		
	}
	public function login()
	{
		
			$this->load->view('ui/auth/login',array(),FALSE);
		
	}
	function login_proses(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	}
	public function dataoutlet()
	{
		if($this->isLoggedIn()){
			$this->_render_page('dashboard/dashboard',array(),FALSE);
		}else{
			$notification = array();

			$this->_render_page('auth/session',array(),FALSE);
		}
    }
	public function suplier()
	{
		if($this->isLoggedIn()){
			$this->_render_page('dashboard/dashboard',array(),FALSE);
		}else{
			$notification = array();

			$this->_render_page('auth/session',array(),FALSE);
		}
	}
	public function stokmasuk()
	{
		if($this->isLoggedIn()){
			$this->_render_page('dashboard/dashboard',array(),FALSE);
		}else{
			$notification = array();

			$this->_render_page('auth/session',array(),FALSE);
		}
	}
	public function datapembelian()
	{
		if($this->isLoggedIn()){
			$this->_render_page('dashboard/dashboard',array(),FALSE);
		}else{
			$notification = array();

			$this->_render_page('auth/session',array(),FALSE);
		}
	}
	public function datapenjualan()
	{
		if($this->isLoggedIn()){
			$this->_render_page('dashboard/dashboard',array(),FALSE);
		}else{
			$notification = array();

			$this->_render_page('auth/session',array(),FALSE);
		}
	}
	public function notifikasi()
	{
		if($this->isLoggedIn()){
			$this->_render_page('dashboard/dashboard',array(),FALSE);
		}else{
			$notification = array();

			$this->_render_page('auth/session',array(),FALSE);
		}
	}
	public function pengaturan()
	{
		if($this->isLoggedIn()){
			$this->_render_page('dashboard/dashboard',array(),FALSE);
		}else{
			$notification = array();

			$this->_render_page('auth/session',array(),FALSE);
		}
	}

   

}
