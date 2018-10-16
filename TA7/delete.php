<?php  
include("koneksi.php");
$nim = $_GET['nim'];
$sql = "DELETE FROM maba WHERE nim = '$nim'";
print_r($nim);
   if (mysqli_query($conn, $sql)) {
      ?>
     <script type="text/javascript">
     	alert("Data Berhasil Dihapus");
     	location = "datamahasiswa.php";
     </script>
     <?php  
   } else {
      echo "Error deleting record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
?>