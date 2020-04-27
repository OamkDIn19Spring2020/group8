<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Women extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Women_model');
  }

  //main page
  function women_body()
  {
    $data = array(
      'title' => 'Women',
            'home' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/home">HOME</a>',
            'men' =>    '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/men/men_body">MEN</a>',
            'women' =>  '<a class="nav-item nav-link" style="color:white"  href="' . base_url() . 'index.php/women/women_body">WOMEN</a>',
            'kids' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/kids/kids_body">KIDS</a>',
            'news' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/news">NEWS</a>',
            'contact' =>'<a class="nav-item nav-link"  href="' . base_url() . 'index.php/contact">CONTACT</a>'
    );
    $data['products'] = $this->Women_model->get_id();
    $data['products'] = array_slice($this->Women_model->get_id(), 10, 10);
    $data['page'] = 'women/women_body';

    $this->load->view('women/women', $data);
  }
  function index()
  {
  }
}
