<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller {

function __construct() {
        parent::__construct();
        $this->load->model('Asiakas_model');
}

//näyttää kaikki asiakkaat
public function naytaAsiakas() {
	
	//ladataan asiakas_model
	//laitetaan konstruktoriin, ettei aina tarvi tehdä lisaaAsiakas-metodissa $this->load->model('Asiakas_model');
	$data['asiakkaat'] = $this -> Asiakas_model->getAsiakas();
	$data['sivun_sisalto'] = "asiakas/naytaAsiakas";
	$this->load->view('menu/valikko',$data);
}

public function lisaaAsiakas() {
	$btn =$this->input->post('btn');
	//Jos painiketta painettu
	if(isset($btn)){
		$lisaa_data=array(
			"etunimi"=>$this->input->post('en'),
			"sukunimi"=>$this->input->post('sn'),
			"email"=>$this->input->post('email')
			);
		//viedään tietokantaan ja testataan onnistuuko syöttö
		$testi=$this->Asiakas_model->addAsiakas($lisaa_data);
		if($testi>0){
			//luodaan pop-up -ikkuna
			//echo '<script>alert("Lisäys onnistui")</script>';
			$data['ilmoitus']="Asiakkaan lisäys onnistui";
			//$data['sivun_sisalto'] = "asiakas/ilmoitus";
			//$this->load->view('menu/valikko',$data);

		}
	}

	$data['sivun_sisalto'] = "asiakas/lisaaAsiakas";
	$this->load->view('menu/valikko',$data);
}

public function naytaMuokattava($id) {
	$data['asiakas'] = $this->Asiakas_model->getValittuASiakas($id);
	$data['sivun_sisalto'] = "asiakas/naytaMuokattava";
	$this->load->view('menu/valikko',$data);
}
public function muokkaaAsiakas(){
	$btn=$this->input->post('btn');
	$update_id=$this->input->post('id');
	//jos painetaan btn
	if(isset($btn)){
		$update_data = array(
			"etunimi"=>$this->input->post('en'),
			"sukunimi"=>$this->input->post('sn'),
			"email"=>$this->input->post('email')
			);
	//päivitetään tiedot
	$testi=$this->Asiakas_model->updateAsiakas($update_id,$update_data);
	//palauttaa -1, 0 tai 1
	if($testi>0){
		$this->naytaAsiakas();
	}

	}
}

}