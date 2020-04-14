<?php
class Pages extends CI_Controller {
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
       
           
        } else if ($page === 'women') {
            $data['products'] = array_slice($this->products_model->get_products(), 10, 10);
        } else if ($page === 'kids') {
            $data['products'] = array_slice($this->products_model->get_products(), 20, 20);
        }

        $this->load->view('partials/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('partials/footer', $data);
    }
    
    private function getTitle($page = 'unknown')
    {
        return $page === 'home' ? 'welcome' : $page;
    }
}