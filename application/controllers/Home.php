<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Subscriber_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'Home',
            'home' =>   '<a class="nav-item nav-link" style="color:white"  href="' . base_url() . 'index.php/home">HOME</a>',
            'men' =>    '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/men/men_body">MEN</a>',
            'women' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/women/women_body">WOMEN</a>',
            'kids' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/kids/kids_body">KIDS</a>',
            'news' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/news">NEWS</a>',
            'contact' =>'<a class="nav-item nav-link"   href="' . base_url() . 'index.php/contact">CONTACT</a>'
        );
        $this->load->view('home/home', $data);
    }
}
