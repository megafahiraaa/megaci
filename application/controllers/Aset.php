<?php 
    class aset extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("AsetModel");
        }
        
        public function tampilkan(){
            $data['aset'] = $this->AsetModel->getAll();
            $this->load->view("aset/v_aset", $data);
        }

        public function tambah(){
            $this->load->view('aset/v_tambah');
        }

        public function simpanTambah(){
            $nama_aset = $this->input->post('nama_aset');
            $jenis_aset = $this->input->post('jenis_aset');
            $lokasi_aset = $this->input->post('lokasi_aset');
            $jumlah_aset = $this->input->post('jumlah_aset');

            $data_input = [
                'nama_aset' => $nama_aset,
                'jenis' => $jenis_aset,
                'lokasi' => $lokasi_aset,
                'jumlah' => $jumlah_aset,
            ];

            $simpan = $this->AsetModel->add($data_input);
            redirect('aset/tampilkan');
        }
    }
?>