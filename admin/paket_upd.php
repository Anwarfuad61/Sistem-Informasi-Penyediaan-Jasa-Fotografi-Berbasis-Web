<?php
include('includes/config.php');
error_reporting(0);
$id=$_POST['id'];
$nama=$_POST['nama'];
$deskripsi=$_POST['deskripsi'];
$harga=$_POST['harga'];

$sql 	= "UPDATE paket SET nama_paket='$nama',ket_paket='$deskripsi',harga='$harga' WHERE id_paket='$id'";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil ubah data.'); 
			document.location = 'paket.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'paket_edit.php?id=$id'; 
		</script>";
}
?>