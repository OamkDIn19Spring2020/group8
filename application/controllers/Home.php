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
            'home' =>  '<a class="nav-item nav-link" style="color:white" href="' . site_url('home/home') . '">HOME</a>',
            'men' =>  '<a class="nav-item nav-link" style="color:white" href="' . site_url('men/men_body') . '">men</a>',
            'women' => '<a class="nav-item nav-link" href="' . site_url('women/women_body') . '">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . site_url('kids/kids_body') . '">KIDS</a>',
            'news' => '<a class="nav-item nav-link" href="' . site_url('news/news') . '">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . site_url('contact/contact') . '">CONTACT</a>',
        );
        $this->load->view('home/home', $data);
    }
}
