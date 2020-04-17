<?php
class New extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'New',
            'home' =>  '<a class="nav-item nav-link" style="color:white" href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . '">MEN</a>',
            'women' => '<a class="nav-item nav-link" href="' . base_url() . '">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . '">KIDS</a>',
            'news' => '<a class="nav-item nav-link" href="' . base_url() . '">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('new/new', $data);
     
    }
}