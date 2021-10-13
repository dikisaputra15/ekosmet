<?php

class laporan extends CI_Controller
{

   public function index()
   {
      $data['title'] = 'Laporan';
   
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin_templates/topbar');
      $this->load->view('admin/laporan');
      $this->load->view('admin_templates/footer');
   }

  
}
