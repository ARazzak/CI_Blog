<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    function __construct() {
        parent::__construct();
         $this->load->model('Category_model');
    }

     public function insert()
     {
        $this->Category_model->insertData();
        redirect('addcategory');
     }

     public function edit($id) 
	{
		$data['row'] = $this->Category_model->editData($id);
		$this->load->view('editcategory', $data);
	}
	public function update($id) 
	{
		$this->Category_model->updateData($id);
		redirect('Home/AddCategory');
	}
	public function delete($id) 
	{
		$this->Category_model->deleteData($id);
		redirect('Home/AddCategory');
	}
    


    
}    