<?php

class Kategori_model extends CI_Model
{
   public function lipstick()
   {
      // $query = "SELECT `tb_barang`.*, `kategori`.`nama_kategori`
      //             FROM `tb_barang` JOIN `kategori`
      //             ON `tb_barang`.`id_kategori` = `kategori`.`id_kategori`
      //             WHERE `id_kategori` = $id_kategori
      //           ";
      // return $this->db->query($query)->result_array();

      return $this->db->get_where('tb_barang', ['id_kategori'  => '1'])->result_array();
   }

   public function foundation()
   {
      return $this->db->get_where('tb_barang', ['id_kategori' => '2'])->result_array();
   }

   public function eyeshadow()
   {
      return $this->db->get_where('tb_barang', ['id_kategori' => '3'])->result_array();
   }

   public function bedak()
   {
      return $this->db->get_where('tb_barang', ['id_kategori' => '4'])->result_array();
   }
   public function blushon()
   {
      return $this->db->get_where('tb_barang', ['id_kategori' => '5'])->result_array();
   }
}
