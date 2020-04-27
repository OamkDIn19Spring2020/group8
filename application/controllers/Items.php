<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Items_model');
    $this->load->model('Products_model');
  }

  function show_items()
  {
    $data = array(
      'title' => 'Show_items',
      'home' =>  '<a class="nav-item nav-link"   href="' . base_url() . 'index.php/home">HOME</a>',
      'men' => '<a class="nav-item nav-link"   href="' . base_url() . 'index.php/men/men_body">MEN</a>',
      'women' => '<a class="nav-item nav-link" href="' . base_url() . 'index.php/women/women_body">WOMEN</a>',
      'kids' => '<a class="nav-item nav-link" href="' . base_url() . 'index.php/kids/kids_body">KIDS</a>',
      'news' => '<a class="nav-item nav-link" href="' . base_url() . 'index.php/news">NEWS</a>',
      'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'index.php/contact">CONTACT</a>'
    );
    $id = $this->uri->segment(3);

    $data['items'] = $this->Items_model->get_item($id);
    $data['id'] = $id;
    $data['page'] = 'items/show_items';

    $this->load->view('items/items', $data);
  }

  function index()
  {
  }
}
