<?php
class datasiswa extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-datasiswa');
 }
 public function cetak()
 {
 $data = [
 'Nama siswa' => $this->input->post('nama'),
 'NIS' => $this->input->post('nis'),
 'Kelas' => $this->input->post('kelas'),
 'Tanggal Lahir' => $this->input->post('tgl'),
 'Tempat Lahir' => $this->input->post('tp'),
 'alamat' => $this->input->post('alamat'),
 'Jenis Kelamin' => $this->input->post('JK'),
 'Agama' => $this->input->post('agama')
 ];
 $this->load->view('view-data-datasiswa', $_POST);
}
}
