<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Products_model');
  }

  function show_products()
  {
    $data['products'] = $this->Products_model->getProducts();
    $data['page']='products/show_products';
  }
}
