<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
		$position = $_POST['position'];
		$salary = $_POST['salary'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_pegawai (nama,posisi,gaji) VALUES ('$name','$position','$salary')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
		echo 'Berhasil Menambahkan Pegawai';
		}else{
		echo 'Gagal Menambahkan Pegawai';
		}
		
		mysqli_close($con);
	}
?>