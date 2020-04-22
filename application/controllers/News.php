<?php

class News extends CI_Controller
{
    function index()
    {
        $data = array(
            'title' => 'New',
            'home' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . 'men">MEN</a>',
            'women' => '<a class="nav-item nav-link" href="' . base_url() . 'women">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . 'kids">KIDS</a>',
            'news' => '<a class="nav-item nav-link" style="color:white" href="' . base_url() . 'news">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('news/news', $data);
    }
}
