<h1 align="center">Update data</h1>
<?php
    require_once("Koneksi.php");
    $nim = $_GET['nim'];
    $sql = mysqli_query($conn, "SELECT * FROM maba ");
    $row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <center>
<br><br>
    <form method="post">
   	<table>
    	<tr>
    		<td>Nama</td>
    		<td>:</td>
    		<td><input type="text" name="nama" maxlength="35" value="<?php echo $row['nama'];?>" required></td>
    	</tr>
    	<tr>
    		<td>Nim</td>
    		<td>:</td>
    		<td><input type="text" name="nim" maxlength="35" value="<?php echo $row['nim'];?>" required></td>
    	</tr>
    	<tr>
    		<td>Jenis Kelamin</td>
    		<td>:</td>
    		<td><input type="radio" name="jenis_Kelamin" <?php if($row['jenis_Kelamin'] == "Laki-Laki") { ?> checked <?php } ?> value="Laki-Laki" required>Laki-Laki
    		<input type="radio" name="jenis_Kelamin" <?php if($row['jenis_Kelamin'] == "Perempuan") { ?> checked <?php } ?> value="Perempuan" required>Perempuan
    	</tr>
    	<tr>
    		<td>Prodi</td>
    		<td>:</td>
    		<td>
    <select name="prodi" required>
        <option <?php if($row['prodi'] == "D3 Sistem Informasi") { ?> selected <?php } ?> value="D3 Sistem Informasi">D3 Sistem Informasi</option>
        <option <?php if($row['prodi'] == "D3 Perhotelan") { ?> selected <?php } ?> value="D3 Perhotelan">D3 Perhotelan</option>
        <option <?php if($row['prodi'] == "D4 Sistem Multimedia") { ?> selected <?php } ?> value="D4 Sistem Multimedia">D4 Sistem Multimedia</option>
        <option <?php if($row['prodi'] == "D3 Teknik Komputer") { ?> selected <?php } ?> value="D3 Teknik Komputer">D3 Teknik Komputer</option>
    </select>
			</td>
    </tr>
    	<tr>
    		<td>Fakultas</td>
    		<td>:</td>
    		<td>
    <select name="fakultas" required>
        <option <?php if($row['fakultas'] == "Fakultas Ilmu Terapan") { ?> selected <?php } ?> value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
        <option <?php if($row['fakultas'] == "Fakultas Industri Kreatif") { ?> selected <?php } ?> value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
        <option <?php if($row['fakultas'] == "Fakultas Ekonomi Bisnis") { ?> selected <?php } ?> value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
        <option <?php if($row['fakultas'] == "Fakultas Teknik Elektro") { ?> selected <?php } ?> value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
    </select>
			</td>
    </tr>
    	<tr>
    		<td>Asal</td>
    		<td>:</td>
    		<td><input type="text" name="asal" maxlength="35" value="<?php echo $row['asal'];?>" required></td>
    	</tr>
    <tr>
    	<td colspan="3" align="center"><input type="submit" name="submit" value="Submit"></td>
    </tr>
    </form> 
    </center>
    </table>   
</body>
</html>
<?php
    if (isset($_POST['submit'])) {
        $nama 		= $_POST['nama'];
        $nim 		= $_POST['nim'];
        $jk 		= $_POST['jenis_Kelamin'];
        $fakultas 	= $_POST['fakultas'];
        $prodi 		= $_POST['prodi'];
        $asal 		= $_POST['asal'];
        $sql = "UPDATE maba SET nama = '$nama', nim ='$nim', jenis_kelamin ='$jk' 
        		,prodi = '$prodi' , fakultas = '$fakultas', asal = $asal WHERE nim ='$nim' ";
        if (mysqli_query($conn, $sql)) {
            echo "<center> Data berhasil diedit </center>";
            ?>
            <script type="text/javascript">
            	alert("Data Berhasil Di edit");
            	location = "datamahasiswa.php";
            </script>
            <?php 
        }else {
          }
        mysqli_close($conn);
    }
?>