<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getProducts()
  {
    $this->db->select('product_id,name,price,brand,description,picture');
    $this->db->from('product');
    return $this->db->get()->result_array();
  }
}
