<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<center>
	<h1>Menu Inputan</h1>
<body>
<form action="test.php"  method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jk" value="Laki-Laki">Laki-Laki
				<input type="radio" name="jk" value="Perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td>Progam Studi</td>
			<td>:</td>
			<td>
				<select name="prodi">
				<option value="D3 Sistemn Infomasi" >D3 Sistem Informasi</option>
				<option>D3 Perhotelan</option>
				<option>D4 Sistem Multimedia</option>
				<option>D3 Teknik Komputer</option>
			</select>
		    </td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<select name="fakultas">
					<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
					<option>Fakultas Industri Kreatif</option>
					<option>Fakultas Ekonomi Bisnis</option>
					<option>Fakultas Teknik Elektro</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name="moto" rows="10" cols="20"></textarea></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input style="width: 150px" type="submit" name="kirim" value="Submit"></td>
		</tr>
	</table>
</form>
<br><br>
Lihat Data Mahasiswa --> <a href="datamahasiswa.php"><button>Data Mahasiswa</button></a>
</body>
</html>
</center>