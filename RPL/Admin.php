<?php
    require_once 'User.php';
    class User extends User {
        private $idAdmin;
        private $namaAdmin;

        public function __construct($username, $password, $role, $idAdmin, $namaAdmin) {
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
            $this->idAdmin = $idAdmin;
            $this->namaAdmin = $namaAdmin;
        }

        public function get_idAdmin() {
            return $this->idAdmin;
        }

        public function set_IdAdmin($idAdmin) {
            return $this->idAdmin = $idAdmin;
        }

        public function get_namaAdmin() {
            return $this->namaAdmin;
        }

        public function set_namaAdmin($namaAdmin) {
            return $this->namaAdmin = $namaAdmin;
        }

        public function addStockExchanges(){
            
        }

        public function deleteUser(){
            
        }
    } 
?>