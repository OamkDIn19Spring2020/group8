<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Men extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Men_model');
  }

  //main page
  function men_body()
  {
    $data = array(
      'title' => 'Men',
            'home' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/home">HOME</a>',
            'men' =>    '<a class="nav-item nav-link" style="color:white"  href="' . base_url() . 'index.php/men/men_body">MEN</a>',
            'women' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/women/women_body">WOMEN</a>',
            'kids' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/kids/kids_body">KIDS</a>',
            'news' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/news">NEWS</a>',
            'contact' =>'<a class="nav-item nav-link"  href="' . base_url() . 'index.php/contact">CONTACT</a>'
    );
    $data['products'] = $this->Men_model->get_id();
    $data['products'] = array_slice($this->Men_model->get_id(), 0, 10);
    $data['page'] = 'men/men_body';

    $this->load->view('men/men', $data);
  }
  function index()
  {
  }
}
