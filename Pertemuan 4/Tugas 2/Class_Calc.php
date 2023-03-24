<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<?php
    /**
        * Task 1
        * Buatlah class Calculator 2 bilangan
        * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
        * Tampilkan masing-masing method dengan object
    */

    class Calc {
    
        protected $Calc_1;
        protected $Calc_2;
    
        public function __construct($num1, $num2) {
            $this->Calc_1 = $num1;
            $this->Calc_2 = $num2;
        }
    
        public function Tambah() {
            return $this->Calc_1 + $this->Calc_2;
        }
    
        public function Kurang() {
            return $this->Calc_1 - $this->Calc_2;
        }
    
        public function Bagi() {
            return $this->Calc_1 / $this->Calc_2;
        }
    
        public function Kali() {
            return $this->Calc_1 * $this->Calc_2;
        }
    }
    
    $Calc = new Calc (10, 5);
    
    echo "1. ";
    echo "10 + 5: " . $Calc->Tambah() . "<br>";
    echo "<br>";

    echo "2. ";
    echo "10 - 5: " . $Calc->Kurang() . "<br>";
    echo "<br>";

    echo "3. ";
    echo "10 / 5: " . $Calc->Bagi() . "<br>";
    echo "<br>";

    echo "4. ";
    echo "10 * 5: " . $Calc->Kali() . "<br>";
    echo "<br>";
    
?>