<?php
class Women extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Women',
            'home' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . 'men">MEN</a>',
            'women' => '<a class="nav-item nav-link" style="color:white" href="' . base_url() . 'women">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . 'kids">KIDS</a>',
            'news' => '<a class="nav-item nav-link" href="' . base_url() . 'new">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('women/women', $data);
    }
}