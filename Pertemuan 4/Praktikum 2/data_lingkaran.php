<?php
    require_once 'class_lingkaran.php';

    echo "Nilai PHI = " . Lingkaran::PHI;

    $linkar1 = new Lingkaran(7);
    $linkar2 = new Lingkaran(15);

    echo '<br>';

    echo "<br>Luas Lingkaran 1 = " . $linkar1->getLuas();   
    echo "<br>Luas Lingkaran 2 = " . $linkar2->getLuas();

    echo "<br>Luas Lingkaran 1 = " . $linkar1->getLuas();
    echo "<br>Luas Lingkaran 2 = " . $linkar2->getLuas();


?>