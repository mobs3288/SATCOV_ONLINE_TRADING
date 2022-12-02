<?php
    class User {
        private $username;
        private $password;
        private $role;

        public function __construct($username, $password, $role) {
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
        }

        public function ShowUsername() {
            return $this->username;
        }

        public function set_Username($username) {
            return $this->username = $username;
        }

        public function ShowPassword() {
            return $this->password;
        }

        public function set_Password($password) {
            return $this->password = $password;
        }

        public function ShowRole() {
            return $this->role;
        }

        public function set_Role($role) {
            return $this->role = $role
        }

        public function validate(){

        }

        public function Login(){

        }

        public function Register(){

        }

        public function ShowFoto(){

        }

        public function ChangePassword(){

        }

        public function DeleteAccount(){
            
        }

    } 
?>