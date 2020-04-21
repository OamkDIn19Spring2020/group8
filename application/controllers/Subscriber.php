<?php
class Kids extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('subscriber_model');
        $this->load->helper('url_helper');
    }
    
    public function index()
    {
        $data = array(
            'title' => 'Kids',
            'home' =>  '<a class="nav-item nav-link" style="color:white" href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . 'men">MEN</a>',
            'women' => '<a class="nav-item nav-link" href="' . base_url() . 'women">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . 'kids">KIDS</a>',
            'news' => '<a class="nav-item nav-link" href="' . base_url() . 'new">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('subscriber/subscriber', $data);
    }
    public function subscribe()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Subscribe now';

        $this->form_validation->set_rules('email', 'Email', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('subscriber/subscribe'); 

        } else {
            $this->subscriber_model->set_subscriber();
            $this->load->view('subscriber/success');
        }
    }
    
}