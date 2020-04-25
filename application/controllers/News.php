<?php
class News extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'News',
            'home' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . 'men/men_body">MEN</a>',
            'women' => '<a class="nav-item nav-link" href="' . base_url() . 'women/women_body">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . 'kids/kids_body">KIDS</a>',
            'news' => '<a class="nav-item nav-link" style="color:white" href="' . base_url() . 'news">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('news/news', $data);
    }
}
