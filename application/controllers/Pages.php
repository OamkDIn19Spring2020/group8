<?php
class Pages extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Pages',
            'home' =>  '<a class="nav-item nav-link"  href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . 'men">MEN</a>',
            'women' => '<a class="nav-item nav-link"  href="' . base_url() . 'women">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . 'kids">KIDS</a>',
            'news' => '<a class="nav-item nav-link" href="' . base_url() . 'news">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('pages/' . $page, $data);
    }
}



    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
     
    }

    public function view($page = 'home')
    {
        $this->load->helper('url');

        

        if (!file_exists(APPPATH.'views/pages/' . $page . '.php')) {
            show_404();
           
        }
        
    
       
       
        $pageTitle = $this->getTitle($page);

        $data['page_name'] = $page;
        $data['title'] = ucfirst($pageTitle);
        $data['img_url'] = base_url() . 'img/';
        
        if ($page === 's1' || $page === 'home') {
            $data['products'] = array_slice($this->products_model->get_products(), 0 , 1);  
        } else if ($page === 's2') {
            $data['products'] = array_slice($this->products_model->get_products(), 1, 1);
        } else if ($page === 's3') {
            $data['products'] = array_slice($this->products_model->get_products(), 2, 1);
         } else if ($page === 's4') {
            $data['products'] = array_slice($this->products_model->get_products(), 3, 1);
        } else if ($page === 's5') {
            $data['products'] = array_slice($this->products_model->get_products(), 4, 1);
        } else if ($page === 's6') {
            $data['products'] = array_slice($this->products_model->get_products(), 5, 1);
        } else if ($page === 's7') {
            $data['products'] = array_slice($this->products_model->get_products(), 6, 1);
        } else if ($page === 's8') {
            $data['products'] = array_slice($this->products_model->get_products(), 7, 1);
        } else if ($page === 's9') {
            $data['products'] = array_slice($this->products_model->get_products(), 8, 1);
        } else if ($page === 's10') {
            $data['products'] = array_slice($this->products_model->get_products(), 9, 1);
       
       
        } else if ($page === 'w1') {
            $data['products'] = array_slice($this->products_model->get_products(), 10, 1);
        } else if ($page === 'w2') {
            $data['products'] = array_slice($this->products_model->get_products(), 11, 1);
        } else if ($page === 'w3') {
            $data['products'] = array_slice($this->products_model->get_products(), 12, 1);
        } else if ($page === 'w4') {
            $data['products'] = array_slice($this->products_model->get_products(), 13, 1);
        } else if ($page === 'w5') {
            $data['products'] = array_slice($this->products_model->get_products(), 14, 1);
        } else if ($page === 'w6') {
            $data['products'] = array_slice($this->products_model->get_products(), 15, 1);
        } else if ($page === 'w7') {
            $data['products'] = array_slice($this->products_model->get_products(), 17, 1);
        } else if ($page === 'w8') {
            $data['products'] = array_slice($this->products_model->get_products(), 18, 1);
        } else if ($page === 'w9') {
            $data['products'] = array_slice($this->products_model->get_products(), 19, 1);
        } else if ($page === 'w10') {
            $data['products'] = array_slice($this->products_model->get_products(), 20, 1);


        } else if ($page === 'k1') {
            $data['products'] = array_slice($this->products_model->get_products(), 21, 1);
        } else if ($page === 'k2') {
            $data['products'] = array_slice($this->products_model->get_products(), 22, 1);
        } else if ($page === 'k3') {
            $data['products'] = array_slice($this->products_model->get_products(), 23, 1);
        } else if ($page === 'k4') {
            $data['products'] = array_slice($this->products_model->get_products(), 24, 1);
        } else if ($page === 'k5') {
            $data['products'] = array_slice($this->products_model->get_products(), 25, 1);
        } else if ($page === 'k6') {
            $data['products'] = array_slice($this->products_model->get_products(), 26, 1);
        } else if ($page === 'k7') {
            $data['products'] = array_slice($this->products_model->get_products(), 27, 1);
        } else if ($page === 'k8') {
            $data['products'] = array_slice($this->products_model->get_products(), 28, 1);
        } else if ($page === 'k9') {
            $data['products'] = array_slice($this->products_model->get_products(), 29, 1);
        } else if ($page === 'k10') {
            $data['products'] = array_slice($this->products_model->get_products(), 30, 1);
        }

        $this->load->view('partials/head', $data);
        $this->load->view('partials/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('partials/footer', $data);
    }
    
    private function getTitle($page = 'unknown')
    {
        return $page === 'home' ? 'welcome' : $page;
    }
}