<?php
    class dcontroller extends CI_Controller{
            public function __construct(){
                parent:: __construct();
                $this->load->model('DModel');
            }
            
            public function index(){
                $data['data'] = $this->DModel->getAll();
                $this->load->view('uts/DTampil', $data);
            }
    
            public function tambah(){
                $this->load->view('uts/DTambah');
            }
    
            public function simpanTambah(){
                $kolom_jurusan = $this->input->post('kolom_jurusan');
                $kolom_kelas = $this->input->post('kolom_kelas');
                $kolom_isi = $this->input->post('kolom_isi');
    
                $data_input = [
                    'kolom_jurusan' => $kolom_jurusan,
                    'kolom_kelas' => $kolom_kelas,
                    'kolom_isi' => $kolom_isi
                ];
    
                $simpan = $this->DModel->add($data_input);
                redirect('dcontroller/index');
            }
        }
?>