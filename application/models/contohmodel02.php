<?php
    class contohmodel02 extends CI_Model{
        private $table = 'remidi';

        public function getAll(){
            return $this->db->get($this->table)->result();
        }

        public function add($data_input){
            $this->db->insert($this->table, $data_input);
        }
    }
?>