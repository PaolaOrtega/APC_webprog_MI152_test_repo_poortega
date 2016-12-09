<?php 
class User_Controller extends CI_Controller {
 
    public function __construct()
    {
        parent:: __construct(); 
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['users'] = $this->user_model->get_users();
        $data['title'] = 'Users List';
 
        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
       
    }
 
    public function view($slug = NULL)
    {
        $data['users_item'] = $this->user_model->get_users($slug);
        
        if (empty($data['users_item']))
        {
            show_404();
        }
 

        $this->load->view('templates/header', $data);
        $this->load->view('users/view', $data);

  
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create users';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('nickname', 'nickname', 'required');
        $this->form_validation->set_rules('cpnum', 'cpnum', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
           $this->load->view('templates/header', $data);
           $this->load->view('users/create');
             
        }
        else
        {
            $this->user_model->set_users();
            $this->load->view('templates/header', $data);
            $this->load->view('users/success');


        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit users';        
        $data['users_item'] = $this->user_model->get_users_by_id($id);
        
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('nickname', 'nickname', 'required');
        $this->form_validation->set_rules('cpnum', 'Cpnum', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('users/edit', $data);


 
        }
        else
        {
            $this->user_model->set_users($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/users');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $users_item = $this->user_model->get_users_by_id($id);
        
        $this->user_model->delete_users($id);        
        redirect( base_url() . 'index.php/user_controller');        
    }




    