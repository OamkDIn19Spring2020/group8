<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Myprofile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }

    function index()
    {
        $data = array(
            'title' => 'Login',
            'home' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/home">HOME</a>',
            'men' =>    '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/men/men_body">MEN</a>',
            'women' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/women/women_body">WOMEN</a>',
            'kids' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/kids/kids_body">KIDS</a>',
            'news' =>   '<a class="nav-item nav-link"  href="' . base_url() . 'index.php/news">NEWS</a>',
            'contact' =>'<a class="nav-item nav-link"  href="' . base_url() . 'index.php/contact">CONTACT</a>'
        );
        $this->load->model('Myprofile_model');
        $data['fetch_data'] = $this->Myprofile_model->fetch_data();
        $this->load->view('myprofile/myprofile', $data);
    }

    function logout()
    {
        $data = $this->session->all_userdata();
        foreach ($data as $row => $rows_value) {
            $this->session->unset_userdata($row);
        }
        redirect('login');
    }
}
