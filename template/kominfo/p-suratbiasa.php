<?php
//mulai proses tambah data
include"config.php";
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	
	$kepada 		= $_POST ['kepada']; echo $kepada."<br />";
	$tgl			= $_POST ['tgl'];echo $tgl."<br />";
	$no_surat		= $_POST ['no_surat'];echo $no_surat."<br />";
	$sifat			= $_POST ['sifat'];echo $sifat."<br />";
	$lampiran		= $_POST ['lampiran'];echo $lampiran."<br />";
	$hal  			= $_POST ['hal'];echo $hal."<br />";
	$isi			= $_POST ['isi'];echo $isi."<br />";
	$penanda_tangan	= $_POST ['penanda_tangan'];echo $penanda_tangan."<br/>";
	$paraf			= NULL;
	$tembusan		= $_POST ['tembusan'];echo $tembusan."<br />";
	$perintah_tugas	= NULL;
	$pengantar		= NULL;
	$pengirim		= $_POST ['pengirim'];echo $pengirim."<br />";
			
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database

	//$koneksi = mysqli_connect($host, $user, $password, $db) or die(mysqli_error());
	$input = mysqli_query($koneksi,"INSERT INTO surat VALUES(NULL, '$kepada', '$tgl', '$no_surat', '$sifat', '$lampiran',
					'$hal', '$isi', '$penanda_tangan', NULL, '$tembusan', NULL, NULL, '$pengirim')");
	echo $input;
	
	//jika query input sukses
	if($input){
		

		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		//echo '<a href="setting.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		echo $input;
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		//echo '<a href="tambah_ap.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
}

	else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>