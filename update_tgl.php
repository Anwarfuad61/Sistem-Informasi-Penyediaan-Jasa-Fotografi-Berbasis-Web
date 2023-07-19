<?php
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/library.php');

		$kode = $_POST['kode'];
		$tgl = $_POST['tglbaru'];
		$no ="1";

		$sql="UPDATE transaksi SET tgl_take='$tgl', ubah_tgl='$no' WHERE id_trx='$kode'";
		$lastInsertId = mysqli_query($koneksidb, $sql);
		if($lastInsertId){
			echo "<script>alert('Ubah tanggal berhasil!');</script>";
			echo "<script type='text/javascript'> document.location = 'riwayatsewa.php'; </script>";
		}else {
			echo "<script>alert('Ops, terjadi kesalahan. Silahkan coba lagi.');</script>";
			echo "<script type='text/javascript'> document.location = 'booking_tgl.php?kode'".$kode."'; </script>";
		}
?>