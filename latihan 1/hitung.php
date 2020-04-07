<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<?php  
	$pertama = $_POST['input1'];
	$kedua = $_POST['input2'];
	$operator = $_POST['hitung'];

	if ($operator=='*') 
		{
			$hasil = $pertama * $kedua;
			echo "Hasil Dari $pertama * $kedua Adalah : $hasil";
		}
		elseif ($operator=='/') {
			$hasil = $pertama / $kedua;
			echo "Hasil Dari $pertama / $kedua Adalah : $hasil";
		}
		elseif ($operator=='+') {
			$hasil = $pertama + $kedua;
			echo "Hasil Dari $pertama + $kedua Adalah : $hasil";
		}
		elseif ($operator=='-') {
			$hasil = $pertama - $kedua;
			echo "Hasil Dari $pertama - $kedua Adalah : $hasil";
		}
	?>
<p>
	<a href="index.php">Kembali Untuk Menghitung</a>
</p>

</center>
</body>
</html>