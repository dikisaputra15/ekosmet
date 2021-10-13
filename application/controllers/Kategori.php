<?php

class Kategori extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      // if (!$this->session->userdata('email')) {
      //    redirect('auth/login');
      // }
      $this->load->model('Kategori_model');
   }

   public function lipstick()
   {
      $data['title'] = 'lipstick';
      $data['lipstick'] = $this->Kategori_model->lipstick();
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/kategori/lipstick', $data);
      $this->load->view('home/footer');
   }
   public function foundation()
   {
      $data['title'] = 'foundation';
      $data['foundation'] = $this->Kategori_model->foundation();
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/kategori/foundation', $data);
      $this->load->view('home/footer');
   }
   public function eyeshadow()
   {
      $data['title'] = 'eyeshadow';
      $data['eyeshadow'] = $this->Kategori_model->eyeshadow();
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/kategori/eyeshadow', $data);
      $this->load->view('home/footer');
   }
   public function bedak()
   {
      $data['title'] = 'bedak';
      $data['bedak'] = $this->Kategori_model->bedak();
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/kategori/bedak', $data);
      $this->load->view('home/footer');
   }
   public function blushon()
   {
      $data['title'] = 'blushon';
      $data['blushon'] = $this->Kategori_model->blushon();
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/kategori/blushon', $data);
      $this->load->view('home/footer');
   }
}
