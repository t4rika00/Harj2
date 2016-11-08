<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {

//näyttää kaikki asiakkaat
public function naytaAsiakas() {
	
	//ladataan asiakas_model
	$this->load->model('asialas_model');
	$data['asiakkaat'] = $this -> Asiakas_model->getAsiakas();
	$data['sivun_sisalto'] = "asiakas/naytaAsiakas";
	$this->load->view('menu/valikko',$data);

}

}