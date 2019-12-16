<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->helper('url');
        
     }
 
     //Load Halaman dashboard
     public function index() {
        //  $data['judul'] = "kelompok 1";
         $this->load->view('account/v_dashboard');
        //  $this->load->view('v_header',$data);
        //  $this->load->view('v_index',$data);
        //  $this->load->view('v_footer',$data);
     }

     public function about() {
        $data['judul'] = "kelompok 1";
        // $this->load->view('account/v_dashboard');
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
 }