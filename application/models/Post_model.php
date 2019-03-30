<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('image_lib');
    }

	
	 
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
    // }

    public function createData()
	{
      //$data = array(
          //'title' =>$this->input->post('title'),
         // 'description' =>$this->input->post('description'),
          //'cat_id' =>$this->input->post('category')
        //   'categories_id' =>$this->input->post('b_date'),

      //);

      $data=array();
      $data['title'] = $this->input->post('title', true);
      $data['description'] = $this->input->post('description', true);
      $data['cat_id'] = $this->input->post('category', true);
  
      //$sdata=array();
      $sdata=array();
      $error="";
      $config['upload_path']       = 'image/';
      $config['allowed_types']     = 'gif|jpg|png';
      $config['max_size']          = 100000;
      $config['max_width']         = 2048;
      $config['max_height']        = 1024;
  
      $this->load->library('upload', $config);
  
      if(! $this->upload->do_upload('p_img'))
      {
          $error = $this->upload->display_errors();
          //$error = $this->view->display_errors();
      }
      else
      {
          $sdata = $this->upload->data();
          $data['p_img'] = $config['upload_path'].$sdata['file_name'];
      }
     //$this->db->insert('tbl_admin',$data);


      $this->db->insert('post',$data);
      redirect('Home/addpost');
     }

     public function getAllData()
     {
        
        
         $query = $this->db->select('*');
                 $this->db->from('post');
                $this->db->join('categories', 'categories.cat_id = post.id');
                $query = $this->db->get();
         return $query->result();
     }

     function getData($id) {
        $query = $this->db->query('SELECT * FROM post WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'title' =>$this->input->post('title'),
            'description' =>$this->input->post('description'),
            'cat_id' =>$this->input->post('category')
        );
        $this->db->where('id', $id);
        $this->db->update('post', $data);
    }
    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('post');
        
    }


    

}
