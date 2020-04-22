<?php
class S1 extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'S1',
            'home' =>  '<a class="nav-item nav-link" style="color:white" href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . 'men">MEN</a>',
            'women' => '<a class="nav-item nav-link" href="' . base_url() . 'women">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . 'kids">KIDS</a>',
            'news' => '<a class="nav-item nav-link" href="' . base_url() . 'news">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('s1/s1', $data);
    }
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
    }

    public function showProducts()
    {

       
    }

    public function s1()
    {
       
        $data['product'] = array_slice($this->products_model->get_products(), 0 , 1);

       
    }
}
