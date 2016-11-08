<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi extends CI_Controller {

public function Eka() {
	//http://localhost/Harj2/index.php/testi/eka
	echo 'Tämä on Testi-controllerin eka-funktio';
}

public function index() {
	//riittää http://localhost/Harj2/index.php/testi/
	echo 'Tämä on Testi-controllerin index-funktio';
}

public function toka() {
	//lähettää toka.php:lle data-taulukon
	$nimi = "Jussi";
	$nimet = array(
		     array("en" => 'Jussi' , "sn" => 'Virta'),
			 array("en" => 'Matti' , "sn" => 'Hiironen'),
			 array("en" => 'Pete' , "sn" => 'Snellman')
		);
	$data['nimi'] = $nimi;
	$data['nimet'] = $nimet;
	$this->load->view('testi/toka',$data);
}

public function kolmas(){
	//hakee Testi_modelista taulukon
	$this->load->model('Testi_model');
	$data['nimet'] = $this->Testi_model->getNimet();
	$this->load->view('testi/kolmas',$data);

}

}