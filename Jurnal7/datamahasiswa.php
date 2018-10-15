<center>
<table border="1" align="center" cellspacing="1" cellpadding="20">
	<tr>
		<th colspan="7"><h1>Data Mahasiswa</h1></th>
	</tr>
   <tr>
		<th>Nama</th>
		<th>NIM</th>
		<th>Jenis Kelamin</th>
		<th>Prodi</th>
		<TH>Fakultas</TH>
		<th>Asal</th>
		<th>Action</th>
	</tr>
<?php 
include("koneksi.php");
$result = mysqli_query($conn, "SELECT * FROM maba");
while ($row = mysqli_fetch_assoc($result))
{
   ?>
	<tr>
   		<td><?php echo $row["nama"];?></td>
   		<td><?php echo $row["nim"];?></td>
   		<td><?php echo $row["jenis_kelamin"];?></td>
   		<td><?php echo $row["prodi"];?></td>
   		<td><?php echo $row["fakultas"];?></td>
   		<td><?php echo $row["asal"];?></td>
   		<td><a href="delete.php?nim=<?php echo $row['nim']?>">Delete</a></td>
   	</tr>
   <?php 
}
 ?>
   	 </table>
   	 <br>
   	 <br>
   <form>
   	<tr>
   		<td>Search</td>
   		<td>:</td>
   		<td><input type="text" name="search"></td>
   		<td><input type="submit" name="submit" value="Search"></td>
   	</tr>
   </form>
Klik untuk Inputan = <a href="a.php" ><button>Inputan Mahasiswa</button></a>
   	 </center>