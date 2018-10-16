<center>
<table border="1" align="center" cellspacing="1" cellpadding="20">
	<tr>
		<th colspan="8"><h1>Data Mahasiswa</h1></th>
	</tr>
      <form action="datamahasiswa.php" method= "get">
         <td align="center" colspan="8">
         <input type="hidden" name="aksi" value="Search">
         <input type="text" name="data">
         <input type="submit" name="cari" value="Search">
         </td>
   </form>
   </tr>
<?php
if(isset($_GET['aksi'])&& $_GET['aksi']=='search'&& isset($_GET['data'])){
   $data    = $_GET['data'];
   $query      ="SELECT `nim` ,`nama`,`jenis_Kelamin`,`prodi`,`fakultas`,`asal` FROM `maba` WHERE `nim` LIKE '%$data%' OR nama LIKE '%$data%'";
}else{
      $query="SELECT*from `maba`";
}
?>
   <tr>
		<th>Nama</th>
		<th>NIM</th>
		<th>Jenis Kelamin</th>
		<th>Prodi</th>
		<TH>Fakultas</TH>
		<th>Asal</th>
		<th colspan="2">Action</th>
	</tr>
<?php 
include("koneksi.php"); 
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result))
{
   ?>
	<tr>
   		<td><?php echo $row["nama"];?></td>
   		<td><?php echo $row["nim"];?></td>
   		<td><?php echo $row["jenis_Kelamin"];?></td>
   		<td><?php echo $row["prodi"];?></td>
   		<td><?php echo $row["fakultas"];?></td>
   		<td><?php echo $row["asal"];?></td>
   		<td><a href="delete.php?nim=<?php echo $row['nim']?>">Delete</a></td>
         <td><a href="edit.php?nim=<?php echo $row['nim']?>">Edit</a></td>
   	</tr>
   <?php 
}
 ?>
   	 </table>
   	 <br>
   	 <br>
Klik untuk Inputan = <a href="a.php?nim=<?php echo $row['nim']?>" ><button>Inputan Mahasiswa</button></a>
   	 </center>