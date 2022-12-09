<?php
    class controllera extends CI_Controller{
            public function __construct(){
                parent:: __construct();
                $this->load->model('ModelA');
            }
            
            public function index(){
                $data['data'] = $this->ModelA->getAll();
                $this->load->view('uts/TampilA', $data);
            }
    
            public function tambah(){
                $this->load->view('uts/TambahA');
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
    
                $simpan = $this->ModelA->add($data_input);
                redirect('controllera/index');
            }
        }
?> 