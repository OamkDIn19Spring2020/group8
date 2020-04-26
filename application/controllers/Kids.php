<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kids extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kids_model');
  }

  //main page
  function kids_body()
  {
    $data = array(
        'title' => 'Kids',
        'home' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'home">HOME</a>',
        'men' => '<a class="nav-item nav-link"  href="' . base_url() . 'men/men_body">MEN</a>',
        'women' => '<a class="nav-item nav-link" href="' . base_url() . 'women/women_body">WOMEN</a>',
        'kids' => '<a class="nav-item nav-link" style="color:white" href=" href="' . base_url() . 'kids/kids_body">KIDS</a>',
        'news' => '<a class="nav-item nav-link" href="' . base_url() . 'news">NEWS</a>',
        'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
    );
    $data['products']=$this->Kids_model->get_id();
    $data['products'] = array_slice($this->Kids_model->get_id(), 20, 20);
    $data['page']='kids/kids_body';
    
   
    $this->load->view('kids/kids', $data);
   
   
 
  }
  function index()
  {
   
  }
 
}