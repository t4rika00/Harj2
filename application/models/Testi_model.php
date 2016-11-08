<?php
class Testi_model extends CI_Model{

public function getNimet() {

	$nimet = array(
		     array("en" => 'Jussi' , "sn" => 'Virta'),
			 array("en" => 'Matti' , "sn" => 'Hiironen'),
			 array("en" => 'Pete' , "sn" => 'Snellman')
		);
	return $nimet;
}

}