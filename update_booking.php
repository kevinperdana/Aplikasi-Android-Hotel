<?php
	//koneksi ke mysql
	include("dbconfig.php");

	//mengambil data yg dikirim oleh app client
	$id_tamu	= $_POST['id_tamu'];
	$nama_tamu	= $_POST['nama_tamu'];
	$no_ktp		= $_POST['no_ktp'];
	$no_telp	= $_POST['no_telp'];
	$alamat 	= $_POST['alamat'];
	$id_kamar 	= $_POST['id_kamar'];
	$tgl_cekin	= $_POST['tgl_cekin'];
	$tgl_cekout	= $_POST['tgl_cekout'];
	$lama_inap	= $_POST['lama_inap'];
	$subtotal	= $_POST['subtotal'];
	$metode_bayar 	= $_POST['metode_bayar'];
	

	//menyimpan data tersebut ke mysql
	/*
	$simpan_booking = mysqli_query($conn, "INSERT INTO tb_booking(nama_tamu, no_ktp, no_telp, alamat, id_kamar, tgl_cekin, tgl_cekout, lama_inap, subtotal, metode_bayar) VALUES
	('$nama_tamu', '$no_ktp', '$no_telp', '$alamat', '$id_kamar', '$tgl_cekin', '$tgl_cekout', '$lama_inap' ,'$subtotal' ,'$metode_bayar')") or die(mysqli_error($conn));
	*/

	// Kode Update Data (LANJUTKAN)
	$update_booking = mysqli_query($conn, "UPDATE tb_booking SET Kolom1 = 'Value1', Kolom2= 'Value2' WHERE id_tamu = $id_tamu;")

	//mengirim feedback ke app client apakah berhasil tersimpan atau gagal
	if($update_booking == true){
		$data["status"] = "Berhasil Diupdate";
	}else{
		$data["status"] = "Update Gagal";
	}
	echo json_encode($data);
?>