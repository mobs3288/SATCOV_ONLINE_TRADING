<?php
    require_once 'User.php';
    class User extends User {
        private $idUser;
        private $namaUser;

        public function __construct($username, $password, $role, $idUser, $namaUser) {
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
            $this->idUser = $idUser;
            $this->namaUser = $namaUser;
        }

        public function get_idUser() {
            return $this->idUser;
        }

        public function set_idUser($idUser) {
            return $this->idUser = $idUser;
        }

        public function get_namaUser() {
            return $this->namaUser;
        }

        public function set_namaUser($namaUser) {
            return $this->namaUser = $namaUser;
        }

        public function Profil(){

        }

        public function CashBalance(){

        }

        public function createPortofolio(){

        }

        public function showPortofolio(){

        }

        public function showStock(){

        }

        public function buyStock(){

        }

        public function sellStock(){
            
        }
    } 
?>