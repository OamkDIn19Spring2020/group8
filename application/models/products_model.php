<?php 
class Products_model extends CI_Model {
    const DATA_TABLE = 'product'; 

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_products($product_id = NULL)
    {
         
        if (!$product_id) {
            $query = $this->db->get(self::DATA_TABLE);
            return $query->result_array();
        }

        $query = $this->db->get_where(self::DATA_TABLE, array(
            'product_id ' => $product_id
        ));
        return $query->row_array();
    }
    public function set_products()
    {
        $this->load->helper('url');
 
        $data = array(
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'brand'=> $this->input->post('brand'),
            'description'=> $this->input->post('description'),
            
        );

        return $this->db->insert(self::DATA_TABLE, $data);
    }
}   