<?php
class Products extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
    }
    
    public function showProducts()
    {
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

        $this->load->view('partials/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('partials/footer');
    }

    public function view($product_id = NULL)
    {
        $data['product'] = $this->products_model->get_products($product_id);
        $data['title'] = $data['product']['name'];

        $this->load->view('partials/header', $data);
        $this->load->view('products/view', $data);
        $this->load->view('partials/footer');
    }
}    