<?php
    class latihan extends CI_Controller{
        public function __construct(){
            parent:: __construct();
            $this->load->model('contohModel');
        }
        
        public function index(){
            $data['contoh'] = $this->contohModel->getAll();
            $this->load->view('contohTampil', $data);
        }

        public function tambah(){
            $this->load->view('contohTambah');
        }

        public function simpanTambah(){
            $nama = $this->input->post('nama');
            $nim = $this->input->post('nim');

            $data_input = [
                'nama' => $nama,
                'nim' => $nim
            ];

            $simpan = $this->contohModel->add($data_input);
            redirect('latihan/index');
        }
    }
?>