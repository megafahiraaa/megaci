<?php 
    class Controller12 extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("model12");
        }
        
        public function index(){
            $data['data'] = $this->model12->getAll();
            $this->load->view('remidi/v_tampilremidi', $data);
        }

        public function tambah(){
            $this->load->view('remidi/v_tambahremidi');
        }

        public function simpanTambah(){
            $id_12 = $this->input->post('txt_id_12');
            $nama_aset = $this->input->post('txt_nama_aset');
            $jenis_aset = $this->input->post('txt_jenis_aset');
            $kondisi = $this->input->post('txt_kondisi');
            $jumlah = $this->input->post('txt_jumlah');

            $data_input = [
                'id_12' => $id_12,
                'nama_aset' => $nama_aset,
                'jenis_aset' => $jenis_aset,
                'kondisi' => $kondisi,
                'jumlah' => $jumlah,
            ];

            $simpan = $this->model12->add($data_input);
            redirect('Controller12/index');
        }
    }
?>