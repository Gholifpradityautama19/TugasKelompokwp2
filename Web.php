<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{

    function __construct(){
        parent ::__construct();
        $this->load->helper('url');

    }

    public function index(){
        $data['judul'] = "Revolutioner.Store";
        $this->load->view('header',$data);
        $this->load->view('index',$data);
        $this->load->view('footer',$data);
        $this->load->view('category', $data);
    }

    public function about()
    {
        $data['judul'] = "Tentang Kita";
        $this->load->view('header', $data);
        $this->load->view('about', $data);
        $this->load->view('footer', $data);
        $this->load->view('category', $data);
        
    }

    public function category()
    {
        $data['judul'] = 'Category';
        $this->load->view('header', $data);
        $this->load->view('about', $data);
        $this->load->view('footer', $data);
        $this->load->view('category', $data);
    }
    
}
?>