<!DOCTYPE html>
<html>

<head>
	<title> Pengolahan Form </title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	<table border="1" width="350" align="center">
		<FORM ACTION="proses1.php" METHOD="POST" NAME="input">
			<tr>
				<th colspan="2">FORM PENDAFTARAN</th>
			</tr>
			<td>Nama
			<td><input type="text" name="nama"><br>
				</tr>
			<td>Tanggal Lahir
			<td><input type="date" name="tanggal_lahir"><br>
				</tr>
				<tr>
					<td>Alamat
					<td> <input type="text" name="alamat"><br>
				</tr>
				</th>
				<tr>
					<td>Jenis kelamin<br>
					<td>
						<input type="radio" name="Jenis_Kelamin" value="Pria">Pria<br>

						<input type="radio" name="Jenis_Kelamin" value="Wanita">Wanita<br>
				</tr>
				</th>
				<tr>
					<td>Pekerjaan
					<td>
						<Select name="Pekerjaan">
							<option value="Pelajar">Pelajar</option>
							<option value="Mahasiswa">Mahasiswa</option>
							<option value="Pegawai">Pegawai</option>
							<option value="Wiraswasta">Wiraswasta</option>
						</select><br></b>
				</tr>
				</th>
				<tr>
					<th colspan="2"><input type="submit" name="Input" value="Kirim"></b>
						<input type="reset" name="Input" value="Hapus"><br></b>
				</tr>
				</th>

		</FORM>
	</table>
</body>

</html>