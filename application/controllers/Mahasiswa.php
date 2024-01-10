<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

  public function index()
  {
    $result = $this->db->get("tabel_mahasiswa")->result();
    $this->load->view('mahasiswa', compact('result'));
  }

  public function tambah()
  {
    $this->load->view('mahasiswa_tambah');
  }

  function simpanTambah()
  {
    $this->db->insert("tabel_mahasiswa", $this->input->post());
    echo "<script>alert('Data berhasil disimpan');window.location='" . site_url('mahasiswa') . "';</script>";
  }

  public function ubah($nim)
  {
    $this->db->where("nim", $nim);
    $row = $this->db->get("tabel_mahasiswa")->row();
    $this->load->view('mahasiswa_ubah', compact('row'));
  }

  function simpanUbah()
  {
    $where = ['nim' => $this->input->post('nim')];
    $this->db->update("tabel_mahasiswa", $this->input->post(), $where);
    echo "<script>alert('Data berhasil diubah');window.location='" . site_url('mahasiswa') . "';</script>";
  }

  function hapus($nim)
  {
    $where = ['nim' => $nim];
    $this->db->delete("tabel_mahasiswa", $where);
    echo "<script>alert('Data berhasil dihapus');window.location='" . site_url('mahasiswa') . "';</script>";
  }
}
