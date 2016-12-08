<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mypage extends CI_Controller {

    public function index()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('mypage_view');
    }

    public function hobbies()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('hobbies_view');
    }


     public function information()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('information_view');
    }
     public function interests()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('interests_view');
    }

     public function myhobbies()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('myhobbies_view');
    }

        public function myinterests()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('myinterests_view');
    }
    
        public function mytrivias()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('mytrivias_view');
    }

        public function trivias()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('trivias_view');
    }

        public function add_data()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('add_data_view');
    }
}
