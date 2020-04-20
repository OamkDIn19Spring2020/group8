<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('myprofile');
        }
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('login_model');
    }

    public function index()
    {
        $data = array(
            'title' => 'Login',
            'home' =>  '<a class="nav-item nav-link" href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . '">MEN</a>',
            'women' => '<a class="nav-item nav-link" href="' . base_url() . '">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . '">KIDS</a>',
            'news' => '<a class="nav-item nav-link" href="' . base_url() . '">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('login/login', $data);
    }

    function validation()
    {
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
            if ($result == '') {
                redirect('myprofile');
            } else {
                $this->session->set_flashdata('message', $result);
                redirect('login');
            }
        } else {
            $this->index();
        }
    }
}
