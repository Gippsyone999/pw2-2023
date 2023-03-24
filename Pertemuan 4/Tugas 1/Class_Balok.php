<?php
    /**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
	*/ 

    class Balok {
        private $panjanG;
        private $lebaR;
        private $tinggI;

    public function __construct($p, $l, $t) {
        $this->panjanG = $p;
        $this->lebaR = $l;
        $this->tinggI = $t;
    }

    public function getLuas_Balok() {
        $Luas_Balok = 2 * (($this->panjanG * $this->lebaR) + ($this->panjanG * $this->tinggI) + ($this->lebaR * $this->tinggI));
        return $Luas_Balok;
    }

    public function getKeliling_Balok() {
        $Keliling_Balok = 4 * ($this->panjanG + $this->lebaR + $this->tinggI);
        return $Keliling_Balok;
    }

    public function getVolume_Balok() {
        $Volume_Balok = $this->panjanG * $this->lebaR * $this->tinggI;
        return $Volume_Balok;
    }

    public function getDiagonal_Balok() {
        return round(sqrt(pow($this->panjanG, 2) + pow($this->lebaR, 2) + pow($this->tinggI, 2)));
    }
}

?>