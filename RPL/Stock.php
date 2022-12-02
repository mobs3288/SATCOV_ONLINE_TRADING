<?php
    class Stock{
        private $idSaham;
        private $kodeSaham;
        private $harga;

        public function __construct($idSaham, $kodeSaham, $harga) {
            $this->idSaham = $idSaham;
            $this->kodeSaham = $kodeSaham;
            $this->harga = $harga;
        }

        public function get_idSaham() {
            return $this->idSaham;
        }

        public function set_idSaham($idSaham) {
            return $this->idSaham = $idSaham;
        }

        public function get_kodeSaham() {
            return $this->kodeSaham;
        }

        public function set_kodeSaham($kodeSaham) {
            return $this->kodeSaham = $kodeSaham;
        }

        public function get_harga() {
            return $this->harga;
        }

        public function set_harga($harga) {
            return $this->harga = $harga;
        }

        public function showStock(){

        }

        public function addStockExchanges(){
            
        }
    }
?>