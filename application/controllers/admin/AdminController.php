<?php

class AdminController extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
       if (!$this->session->userdata('email')) {
         redirect('auth/login');
      }
      $this->load->model('Model_transaksi');
   }

   public function index()
   {
      $data = [
         'title' => 'Dashboard',
         'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
         'pendapatan' => $this->Model_transaksi->pendapatan(),
         'transaksi_masuk' => $this->db->get('tb_transaksi')->num_rows(),
         'transaksi_gagal' => $this->db->get_where('tb_transaksi', ['transaction_status' => 'expire'])->result_array(),
         'transaksi_berhasil' => $this->db->get_where('tb_transaksi', ['transaction_status' => 'settlement'])->result_array(),
         'transaksi_pending' => $this->db->get_where('tb_transaksi', ['transaction_status' => 'pending'])->result_array(),
      ];
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin_templates/topbar', $data);
      $this->load->view('admin/dashboard', $data);
      $this->load->view('admin_templates/footer');
   }

   public function profile()
   {
      $data['title'] = 'Profile';
      $data['user'] = $this->db->select('user.*, user_role.role')->from('user')->join('user_role', 'user_role.id=user.id_user')->where('id_user', $this->session->userdata('id_user'))->get()->row_array();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin_templates/topbar', $data);
      $this->load->view('admin/profile', $data);
      $this->load->view('admin_templates/footer');
   }

   public function edit_profile($id_user)
   {
      $data['title'] = 'Edit Profile';
      $data['user'] = $this->db->get_where('user', ['id_user' => $id_user])->row_array();
      $this->load->view('admin_templates/header', $data);
      $this->load->view('admin_templates/sidebar');
      $this->load->view('admin_templates/topbar', $data);
      $this->load->view('admin/edit_profile', $data);
      $this->load->view('admin_templates/footer');
   }

   public function edit_proses()
   {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      if ($this->form_validation->run() == false) {
         $this->load->view('admin_templates/header');
         $this->load->view('admin_templates/sidebar');
         $this->load->view('admin_templates/topbar', $data);
         $this->load->view('admin/edit_profile', $data);
         $this->load->view('admin_templates/footer');
      } else {

         $nama = $this->input->post('nama');
         $id_user = $this->input->post('id_user');
         $gambar = $_FILES['gambar']['name'];

         if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './public/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
               $old_image = $data['user']['gambar'];
               if ($old_image != 'default.jpg') {
                  unlink(FCPATH . 'public/img/profile/' . $old_image);
               }
               $new_image = $this->upload->data('file_name');
               $this->db->set('gambar', $new_image);
            } else {
               echo $this->upload->display_errors();
            }
         }
         $this->db->set('nama', $nama);
         $this->db->where('id_user', $id_user);
         $this->db->update('user');

         redirect('admin/AdminController/profile');
      }
   }
}
