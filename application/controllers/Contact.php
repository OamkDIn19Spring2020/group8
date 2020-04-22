<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Contact extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Contact',
            'home' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . 'men">MEN</a>',
            'women' => '<a class="nav-item nav-link" href="' . base_url() . 'women">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . 'kids">KIDS</a>',
            'news' => '<a class="nav-item nav-link" href="' . base_url() . 'news">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" style="color:white" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('contact/contact', $data);
    }
}
