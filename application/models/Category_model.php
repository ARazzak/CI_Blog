<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    function __construct() {
        parent::__construct();
         $this->load->database();
    }

    public function insertData()
	{
      $data = array(
          'cat_name' =>$this->input->post('c_name'),
      );
      $this->db->insert('categories',$data);
      redirect('Home/addcategory');
     }

     public function getAllData()
     {
         $query = $this->db->query('SELECT * FROM categories');
         return $query->result();
     }

     function editData($id) {
        $query = $this->db->query('SELECT * FROM categories WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'cat_name' =>$this->input->post('c_name'),
        );
        $this->db->where('id', $id);
        $this->db->update('categories', $data);
    }
    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('categories');
        
    }


    


    
}    