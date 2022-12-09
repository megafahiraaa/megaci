<?php 
    class kelascontroller extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("KelasModel");
        }
        
        public function tampilkan(){
            $data['isi'] = $this->KelasModel->getAll();
            $this->load->view("index/v_tampil", $data);
        }
        
        public function tambah(){
            $this->load->view('index/v_tambah');
        }

        public function simpanTambah(){
            $fakultas = $this->input->post('fakultas');
            $prodi = $this->input->post('prodi');
            $kelas = $this->input->post('kelas');
            $isi = $this->input->post('isi');

            $data_input = [
                'fakultas' => $fakultas,
                'prodi' => $prodi,
                'kelas' => $kelas,
                'isi' => $isi,
            ];

            $simpan = $this->KelasModel->add($data_input);
            redirect('kelascontroller/tampilkan');
        }
    }
?>