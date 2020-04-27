<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Contact extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Contact',
            'home' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/home">HOME</a>',
            'men' =>    '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/men/men_body">MEN</a>',
            'women' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/women/women_body">WOMEN</a>',
            'kids' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/kids/kids_body">KIDS</a>',
            'news' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/news">NEWS</a>',
            'contact' =>'<a class="nav-item nav-link" style="color:white"  href="' . base_url() . 'index.php/contact">CONTACT</a>'
        );
        $this->load->view('contact/contact', $data);
    }
}
