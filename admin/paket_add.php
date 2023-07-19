<?php
include('includes/config.php');
error_reporting(0);
$nama=$_POST['nama'];
$ket=$_POST['keterangan'];
$harga=$_POST['harga'];
$img1=$_FILES["img1"]["name"];
$str1 = substr($img1,-5);
$vimage1 = date('dmYHis').$str1;

$sql 	= "INSERT INTO paket (nama_paket,harga,ket_paket,foto_paket)VALUES ('$nama','$harga','$ket','$vimage1')";
$query 	= mysqli_query($koneksidb,$sql);
if($query){
	move_uploaded_file($_FILES["img1"]["tmp_name"],"gallery/".$vimage1);
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'paket.php'; 
		</script>";
}else {
			echo "No Error : ".mysqli_errno($koneksidb);
			echo "<br/>";
			echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'paket_tambah.php'; 
		</script>";
}
?>