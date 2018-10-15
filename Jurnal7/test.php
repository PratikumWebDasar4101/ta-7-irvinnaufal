<?php  
include("koneksi.php");
$nama 		= $_POST["nama"];
$nim		= $_POST["nim"];
$jk 		= $_POST["jk"];
$prodi		= $_POST["prodi"];
$fakultas	= $_POST["fakultas"];
$asal		= $_POST["asal"];
$moto_hidup = $_POST["moto"];	
$sql 	= " INSERT INTO maba (nama, nim, jenis_kelamin,prodi,fakultas,asal,moto_hidup)
			VALUES ('$nama', '$nim', '$jk','$prodi','$fakultas','$asal','$moto_hidup')";

if (mysqli_query($conn, $sql)) {
    ?>
    <script type="text/javascript">
    	alert("Data Berhasil di input , click oke untuk melihat datamahasiswa");
    	location = "datamahasiswa.php"
    </script>
    <?php 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>