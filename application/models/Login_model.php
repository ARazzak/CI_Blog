<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
         $this->load->database();
    }

    // public function saveData()
	// {
    //   $data = array(
    //       'username' =>$this->input->post('uname'),
    //       'password' =>$this->input->post('psw'),
    //   );
    //   $this->db->insert('login',$data);
    //   redirect('Home');
    //  }

     function login($username, $password)
    {
        $match = array(
            'username'=>$username,
            'password' => $password 
        );
        
        $this->db->where($match);
        $query = $this->db->get('login')->first_row();

        return $query;
        
    }

    //  public function getAllData()
    //  {
    //      $query = $this->db->query('SELECT * FROM categories');
    //      return $query->result();
    //  }

    //  function getData($id) {
    //     $query = $this->db->query('SELECT * FROM categories WHERE `id` =' .$id);
    //     return $query->row();
    // }

    // function updateData($id) {
    //     $data = array (
    //         'cat_name' =>$this->input->post('c_name'),

    //     );
    //     $this->db->where('id', $id);
    //     $this->db->update('categories', $data);
    // }
    // function deleteData($id) {
    //     $this->db->where('id', $id);
    //     $this->db->delete('categories');
        
    // }


    


    
}    