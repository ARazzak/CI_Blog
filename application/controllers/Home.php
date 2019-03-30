<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
		// $this->load->model('m_db');
    }

	public function index()
	{
		$data['title'] = 'Home | Welcome to Our Blog';
		$data['view_page'] = 'homepage';
		$this->load->view('site',$data);
	}

	public function Contact()
	{
		$data['title'] = 'Contact | Contact Page';
		$data['view_page'] = 'contact';
		$this->load->view('site',$data);
	}

	public function Details()
	{
		$data['title'] = 'Details | Details Page';
		$data['view_page'] = 'details';
		$this->load->view('site',$data);
	}

	public function Category_html()
	{
		$data['title'] = 'Category | HTML Category';
		$data['view_page'] = 'category_html';
		$this->load->view('site',$data);
	}

	public function Category_css()
	{
		$data['title'] = 'Category | CSS Category';
		$data['view_page'] = 'category_css';
		$this->load->view('site',$data);
	}

	public function Category_javascript()
	{
		$data['title'] = 'Category | JavaScript Category';
		$data['view_page'] = 'category_javascript';
		$this->load->view('site',$data);
	}

	public function Category_php()
	{
		$data['title'] = 'Category | PHP Category';
		$data['view_page'] = 'category_php';
		$this->load->view('site',$data);
	}

	public function AddPost()
	{
		$data['title'] = 'Post | Add Post';
		$data['view_page'] = 'addpost';
		$data['result'] = $this->db->query('SELECT * FROM post')->result();
		$data['categories'] = $this->db->query('SELECT * FROM categories')->result();
		$this->load->view('site',$data);
	}

	public function EditPost()
	{
		$data['title'] = 'Post | Edit Post';
		$data['view_page'] = 'editpost';
		 $data['row'] = $this->db->query('SELECT * FROM post')->row();
		$this->load->view('site',$data);
	}

	public function AddCategory()
	{
		$data['title'] = 'Cateogry | Add Category';
		$data['view_page'] = 'addcategory';
		$data['result'] = $this->db->query('SELECT * FROM categories')->result();
		$this->load->view('site',$data);
	}

	public function Login()
	{
		$data['title'] = 'Login | Login page';
		$data['view_page'] = 'login';
		// $data['result'] = $this->db->query('SELECT * FROM categories')->result();
		$this->load->view('site',$data);
		// redirect('Home');
	}
	



}
