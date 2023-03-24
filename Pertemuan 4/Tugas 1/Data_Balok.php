<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<?php 
	/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
	*/

    require_once'Class_Balok.php';

    $Persegi_1 = new Balok(29, 16, 7);


    echo "NO. 1 ";
	echo "<br>";
    echo "Luas Balok: " . $Persegi_1->getLuas_Balok() . "<br>";
    echo "<hr>";

    echo "NO. 2 ";
	echo "<br>";
    echo "Keliling Balok: " . $Persegi_1->getKeliling_Balok() . "<br>";
    echo "<hr>";

    echo "NO. 3 ";
	echo "<br>";
    echo "Volume Balok: " . $Persegi_1->getVolume_Balok() . "<br>";
    echo "<hr>";

    echo "NO. 4 ";
	echo "<br>";
	echo "Diagonal Balok: " . $Persegi_1->getDiagonal_Balok() . "<br>";
	echo "<hr>";

	echo "NO. 5 ";
	echo "Total Semuanya :";
	echo "<br>";
	echo "Luas Balok: " . $Persegi_1->getLuas_Balok() . "<br>";
	echo "Keliling Balok: " . $Persegi_1->getKeliling_Balok() . "<br>";
	echo "Volume Balok: " . $Persegi_1->getVolume_Balok() . "<br>";
	echo "Diagonal Balok: " . $Persegi_1->getDiagonal_Balok() . "<br>";
	echo "<hr>";
?>