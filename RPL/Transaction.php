<?php
    class Transaction{
        private $idTransaction;
        private $idSaham;
        private $lot;
        private $harga;
        private $status;

        public function __construct($idTransaction, $idSaham, $lot, $harga, $status) {
            $this->idTransaction = $idTransaction;
            $this->idSaham = $idSaham;
            $this->lot = $lot;
            $this->harga = $harga;
            $this->status = $status;
        }

        public function get_idTransaction() {
            return $this->idTransaction;
        }

        public function set_idTransaction($idTransaction) {
            return $this->idTransaction = $idTransaction;
        }

        public function get_idSaham() {
            return $this->idSaham;
        }

        public function set_idSaham($idSaham) {
            return $this->idSaham = $idSaham;
        }

        public function get_lot() {
            return $this->lot;
        }

        public function set_lot($lot) {
            return $this->lot = $lot;
        }

        public function get_harga() {
            return $this->harga;
        }

        public function set_harga($harga) {
            return $this->harga = $harga;
        }

        public function get_status() {
            return $this->status;
        }

        public function set_status($status) {
            return $this->status = $status;
        }

        public function showAllTransaction(){

        }

        public function updateAmount(){
            
        }
    }
?>