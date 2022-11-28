<?php
    class Portofolio{
        private $idPortofolio;
        private $lot;
        private $averagePrice;
        private $listofstock;

        public function __construct($idPortofolio, $lot, $averagePrice, $listofstock) {
            $this->idPortofolio = $idPortofolio;
            $this->lot = $lot;
            $this->averagePrice = $averagePrice;
            $this->listofstock = $listofstock;
        }

        public function get_idPortofolio() {
            return $this->idPortofolio;
        }

        public function set_idPortofolio($idPortofolio) {
            return $this->idPortofolio = $idPortofolio;
        }

        public function get_lot() {
            return $this->lot;
        }

        public function set_lot($lot) {
            return $this->lot = $lot;
        }

        public function get_averagePrice() {
            return $this->averagePrice;
        }

        public function set_averagePrice($averagePrice) {
            return $this->averagePrice = $averagePrice;
        }

        public function get_listofstock() {
            return $this->listofstock;
        }

        public function set_listofstock($listofstock) {
            return $this->listofstock = $listofstock;
        }
    }
?>