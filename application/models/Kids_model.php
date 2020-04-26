<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kids_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function get_id()
  {
    $this->db->select('*');
    $this->db->from('product');
    return $this->db->get()->result_array();
  }
}
