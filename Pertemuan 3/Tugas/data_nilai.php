<<<<<<< HEAD
<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output</title>
    <style>

        .bg{
            background-color: #58e88f;
        }
    tbody {
      background: beige;
      
    }
    h1, h3 {
      text-align : center;
	  padding : 5px;
    }
    table {
      Background-color : #FFC93C;
      padding :5px;
      border-radius : 10px;
    }
    td {
      background-color : #FCFFE7;
      padding : 5px;
	  
    }
	th {
		background-color :  #FFC93C;
	}
  </style>
</head>
<body class="bg">
    
<?php 
    include_once 'header.php';
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rata-rata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Muhammad Shidiq</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Syahri Ghifari Maulidi</td>
              <td>Stastika dan Probabilitas</td>
              <td>89</td>
              <td>90</td>
              <td>92</td>
              <td>90,75</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>3</td>
              <td>Rizky Maulana Ishaq</td>
              <td>Pemrograman Web </td>
              <td>95</td>
              <td>90</td>
              <td>92</td>
              <td>94,96</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
			if(isset($_POST['submit'])) {
                require_once 'libfungsii.php';

                $nama = $_POST['nama_lengkap'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $praktik =$_POST['nilai_tugas'];
                $total_nilai = ($uts * 0.30) + ($praktik * 0.35) + ($uas * 0.35);
                $lulus = kelulusan($uts, $uas, $praktik);
                $grade = grade($total_nilai);
                $predikat = predikat($total_nilai);
                

                echo "<tr>";
                echo "<td>3</td>";
                echo "<td>" . $nama . "</td>";
                echo "<td>" . $mata_kuliah . "</td>";
                echo "<td>" . $uts . "</td>";
                echo "<td>" . $uas . "</td>";
                echo "<td>" . $praktik . "</td>";
                echo "<td>" . $total_nilai . "</td>";
                echo "<td>" . $grade . "</td>";
                echo "<td>" . $predikat . "</td>";
                echo "<td>" . $lulus . "</td>";

                echo "</tr>";


            }
                       
                    /**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
          ?>
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output</title>
    <style>

        .bg{
            background-color: #58e88f;
        }
    tbody {
      background: beige;
      
    }
    h1, h3 {
      text-align : center;
	  padding : 5px;
    }
    table {
      Background-color : #FFC93C;
      padding :5px;
      border-radius : 10px;
    }
    td {
      background-color : #FCFFE7;
      padding : 5px;
	  
    }
	th {
		background-color :  #FFC93C;
	}
  </style>
</head>
<body class="bg">
    
<?php 
    include_once 'header.php';
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rata-rata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Muhammad Shidiq</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Syahri Ghifari Maulidi</td>
              <td>Stastika dan Probabilitas</td>
              <td>89</td>
              <td>90</td>
              <td>92</td>
              <td>90,75</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>3</td>
              <td>Rizky Maulana Ishaq</td>
              <td>Pemrograman Web </td>
              <td>95</td>
              <td>90</td>
              <td>92</td>
              <td>94,96</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
			if(isset($_POST['submit'])) {
                require_once 'libfungsii.php';

                $nama = $_POST['nama_lengkap'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $praktik =$_POST['nilai_tugas'];
                $total_nilai = ($uts * 0.30) + ($praktik * 0.35) + ($uas * 0.35);
                $lulus = kelulusan($uts, $uas, $praktik);
                $grade = grade($total_nilai);
                $predikat = predikat($total_nilai);
                

                echo "<tr>";
                echo "<td>3</td>";
                echo "<td>" . $nama . "</td>";
                echo "<td>" . $mata_kuliah . "</td>";
                echo "<td>" . $uts . "</td>";
                echo "<td>" . $uas . "</td>";
                echo "<td>" . $praktik . "</td>";
                echo "<td>" . $total_nilai . "</td>";
                echo "<td>" . $grade . "</td>";
                echo "<td>" . $predikat . "</td>";
                echo "<td>" . $lulus . "</td>";

                echo "</tr>";


            }
                       
                    /**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
          ?>
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>
</body>
>>>>>>> 8cdfdd24553335e7463ba1793dd2f5a91b611889
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output</title>
    <style>

        .bg{
            background-color: #58e88f;
        }
    tbody {
      background: beige;
      
    }
    h1, h3 {
      text-align : center;
	  padding : 5px;
    }
    table {
      Background-color : #FFC93C;
      padding :5px;
      border-radius : 10px;
    }
    td {
      background-color : #FCFFE7;
      padding : 5px;
	  
    }
	th {
		background-color :  #FFC93C;
	}
  </style>
</head>
<body class="bg">
    
<?php 
    include_once 'header.php';
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rata-rata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Muhammad Shidiq</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Syahri Ghifari Maulidi</td>
              <td>Stastika dan Probabilitas</td>
              <td>89</td>
              <td>90</td>
              <td>92</td>
              <td>90,75</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>3</td>
              <td>Rizky Maulana Ishaq</td>
              <td>Pemrograman Web </td>
              <td>95</td>
              <td>90</td>
              <td>92</td>
              <td>94,96</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
			if(isset($_POST['submit'])) {
                require_once 'libfungsii.php';

                $nama = $_POST['nama_lengkap'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $praktik =$_POST['nilai_tugas'];
                $total_nilai = ($uts * 0.30) + ($praktik * 0.35) + ($uas * 0.35);
                $lulus = kelulusan($uts, $uas, $praktik);
                $grade = grade($total_nilai);
                $predikat = predikat($total_nilai);
                

                echo "<tr>";
                echo "<td>3</td>";
                echo "<td>" . $nama . "</td>";
                echo "<td>" . $mata_kuliah . "</td>";
                echo "<td>" . $uts . "</td>";
                echo "<td>" . $uas . "</td>";
                echo "<td>" . $praktik . "</td>";
                echo "<td>" . $total_nilai . "</td>";
                echo "<td>" . $grade . "</td>";
                echo "<td>" . $predikat . "</td>";
                echo "<td>" . $lulus . "</td>";

                echo "</tr>";


            }
                       
                    /**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
          ?>
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>
</body>
>>>>>>> 8cdfdd24553335e7463ba1793dd2f5a91b611889
</html>