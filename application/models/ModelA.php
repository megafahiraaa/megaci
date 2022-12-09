<?php
    class ModelA extends CI_Model{
        private $table = 'tabel_a';

        public function getAll(){
            return $this->db->get($this->table)->result();
        }

        public function add($data_input){
            $this->db->insert($this->table, $data_input);
        }
    }
?>