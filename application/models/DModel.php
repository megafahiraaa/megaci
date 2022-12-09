<?php
    class dmodel extends CI_Model{
        private $table = 'd_tabel';

        public function getAll(){
            return $this->db->get($this->table)->result();
        }

        public function add($data_input){
            $this->db->insert($this->table, $data_input);
        }
    }
?>