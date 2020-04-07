<!DOCTYPE html>
<html>
<head>
	<title>Kalkulatot Sederhana</title>
</head>
<body>
<center>
	<div class="tabel">
		<form name="form1" action="hitung.php" method="post">
			<table border="1" width="70%">
				<tr>
					<td colspan="2">
						<div align="center">
							<b>KALKULATOR SEDERHANA</b>
						</div>
					</td>
				</tr>
				<tr>
					<td width="40%">
						<div align="center">
							<b>NILAI PERTAMA</b>
						</div>
					</td>
					<td width="40%">
						<div align="center">
							<input type="text" name="input1">
						</div>
					</td>
				</tr>
				<tr>
					<td width="40%">
						<div align="center">
							<b>OPERATOR</b>
						</div>
					</td>
					<td>
						<div align="center">
							<select name="hitung">
								<option value="*">Perkalian</option>
								<option value="/">Pembagian</option>
								<option value="+">Pertambahan</option>
								<option value="-">Pengurangan</option>

							</select>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div align="center">
							<b>NILAI KEDUA</b>
						</div>
					</td>
					<td>
						<div align="center">
							<input type="text" name="input2">
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div align="center">
							<input type="submit" name="submit" value="hitung">
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
		
</center>

</body>
</html>