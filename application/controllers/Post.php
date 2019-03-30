<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

    function __construct() {
        parent::__construct();
         $this->load->model('Post_model');
    }
	

	public function index()
	{
	   $data['result'] = $this->Post_model->getAllData();
           $this->load->view('addpost',$data);
	}

	public function create()
	{
	   $this->Post_model->createData();
	   redirect('addpost');
	}

	public function edit($id) 
	{
		$data['row'] = $this->Post_model->getData($id);
		$this->load->view('editpost', $data);
	}
	public function update($id) 
	{
		$this->Post_model->updateData($id);
		redirect('Home/EditPost');
	}
	public function delete($id) 
	{
		$this->Post_model->deleteData($id);
		redirect('Home/addpost');
	}




    



}
