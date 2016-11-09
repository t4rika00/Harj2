<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// Luodaan kontrolleri (tämä)
	// Luodaan näkymä

	function index() {
		$data['sivun_sisalto'] = "home/index";
		//tehdään index.php views/home-kansioon
		$this->load->view('menu/valikko',$data);
		//http://localhost/Harj2/index.php/home - defaulttaa indexiin
	}

}