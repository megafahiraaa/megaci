<?php
    class mahasiswa extends CI_Controller{
        function index1(){
            echo "Belajar Framework";
        }

        public function tampil(){
            return $this->load->view('v_tampil');
        }

        public function form(){
            return $this->load->view('v_form');
        }

        public function index(){
            return $this->load->view('v_index');
        }
    }
?>