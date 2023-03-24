<?php

    class Lingkaran {
        // property ada 3 public,private,protected
        private $r;
        const PHI = 3.14;

        //Method
        function __construct($jari) {
            $this->r = $jari;
        }

        //Phi * r^2 const pakai self
        function getLuas() {
            $luas = self::PHI * $this->r * $this->r;
            return $luas;
        }

        function getKel() {
            $kel = 2 * self::PHI * $this->r;
            return $kel;
        }

    }

?>