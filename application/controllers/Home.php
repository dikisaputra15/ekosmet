<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      // if (!$this->session->userdata('email')) {
      //    redirect('auth/login');
      // }
      $this->load->model('Kategori_model');
      $this->load->model('Model_user');
      $this->load->model('Model_barang');
   }

   public function index()
   {
      $data['title'] = 'Sinar Kosmetik';
      $data['barang'] = $this->Model_barang->tampil();
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/index', $data);
      $this->load->view('home/footer');
   }

   public function search()
   {
      if ($this->input->post('submit')) {
         $data['keyword'] = $this->input->post('keyword');
      } else {
         $data['keyword'] = null;
      }
      $data['barang'] = $this->Model_barang->search($data['keyword']);
       $data['title'] = 'Pencarian';
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/search', $data);
      $this->load->view('home/footer');
   }

   public function tambah_keranjang()
   {

      $data = [
         'id' => $this->input->post('produk_id'),
         'name' => $this->input->post('produk_nama'),
         'price' => $this->input->post('produk_harga'),
         'qty' => $this->input->post('quantity'),
         'image'   => $this->input->post('gambar')
      ];

      $this->cart->insert($data);
      redirect('home');
   }

   public function detail_keranjang()
   {
      $data['title'] = 'Keranjang Belanja';
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/keranjang');
      $this->load->view('home/footer');
   }

   public function hapus_keranjang($data)
   {
      $row_id = $data;
      $qty = 0;
      $array = array('rowid' => $row_id, 'qty' => $qty);
      $this->cart->update($array);
      redirect('home/detail_keranjang');
   }

   public function pembayaran()
   {
      $data['title'] = 'Pembayaran';
      $data['barang'] = $this->Model_barang->tampil();
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/pembayaran', $data);
      $this->load->view('home/footer');
   }

   public function detail($id_barang)
   {
      $data['title'] = 'Detail';
      $data['barang'] = $this->Model_barang->getById($id_barang);
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/detail', $data);
      $this->load->view('home/footer');
   }

   public function update_keranjang()
   {
      $id_produk = $this->input->post('id_produk');
      $value = $this->input->post('value');

      $data = [
         'rowid'   => $id_produk,
         'qty'     => $value
      ];
      $this->cart->update($data);
      redirect('home/detail_keranjang');
   }

   public function update_tambah()
   {
      $rowid = $this->input->post('produk_id');
      $cart = $this->cart->contents();
      foreach ($cart as $cart) {
         //now match your item whose qty is updated
         if ($rowid == $cart['rowid']) {
            $qty = $cart['qty'];
         }
      }

      $data = array(
         'rowid' => $rowid,
         'qty' => $qty + 1
      );
      $data = $this->cart->update($data);
      redirect('home/detail_keranjang');
   }

   public function update_kurang()
   {
      $rowid = $this->input->post('produk_id');
      $cart = $this->cart->contents();
      foreach ($cart as $cart) {
         //now match your item whose qty is updated
         if ($rowid == $cart['rowid']) {
            $qty = $cart['qty'];
         }
      }

      $data = array(
         'rowid' => $rowid,
         'qty' => $qty - 1
      );
      $data = $this->cart->update($data);
      redirect('home/detail_keranjang');
   }

   public function setting()
   {
      $data['title'] = 'Setting';
      $id_user = $this->session->userdata('id_user');
      $data['user'] = $this->Model_user->get($id_user);

      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/setting', $data);
      $this->load->view('home/footer');
   }

   public function edit_profile($id_user)
   {
      $data['title'] = 'Edit Profile';
      $data['get'] = $this->Model_user->getUserId($id_user);
      $this->load->view('home/header', $data);
      $this->load->view('home/topbar');
      $this->load->view('home/edit_profile', $data);
      $this->load->view('home/footer');
   }

   public function update_proses()
   {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
      if ($this->form_validation->run() == false) {
         $this->load->view('home/header');
         $this->load->view('home/topbar');
         $this->load->view('home/edit_profile');
         $this->load->view('home/footer');
      } else {

         $nama = $this->input->post('nama');
         $id_user = $this->input->post('id_user');
         $gambar = $_FILES['gambar']['name'];

         if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
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

         redirect('home/setting');
      }
   }
}
