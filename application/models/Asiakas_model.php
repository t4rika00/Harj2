<?php
class Asiakas_model extends CI_Model{

public function getAsiakas() {
	$this->db->select('*');
	$this->db->from('asiakas');
	return $this->db->get()->result_array();
}

}