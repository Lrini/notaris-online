<?php
	$kon = mysqli_connect("localhost","root","","notaris");
	function query($query){
		global $kon;
		$result = mysqli_query($kon,$query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function ktp(){
		$namaFile = $_FILES['ktp']['name'];
		$ukuranFile = $_FILES['ktp']['size'];
		$error = $_FILES['ktp']['error'];
		$tipe = $_FILES['ktp']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
		//$namabaru = uniqid();
		//var_dump($namabaru);die;
		//$namabaru .= '.';
		//$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namaFile);die;
		return $namaFile;

	}
	function akta_lahir(){
		$namaFile = $_FILES['akta_lahir']['name'];
		$ukuranFile = $_FILES['akta_lahir']['size'];
		$error = $_FILES['akta_lahir']['error'];
		$tipe = $_FILES['akta_lahir']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
	//	$namabaru = uniqid();
		//var_dump($namabaru);die;
	//	$namabaru .= '.';
	//	$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namabaru);die;
		return $namaFile;

	}
	function pbb(){
		$namaFile = $_FILES['PBB']['name'];
		$ukuranFile = $_FILES['PBB']['size'];
		$error = $_FILES['PBB']['error'];
		$tipe = $_FILES['PBB']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
	//	$namabaru = uniqid();
		//var_dump($namabaru);die;
	//	$namabaru .= '.';
	//	$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namabaru);die;
		return $namaFile;

	}
	function sertifikat(){
		$namaFile = $_FILES['sertifikat']['name'];
		$ukuranFile = $_FILES['sertifikat']['size'];
		$error = $_FILES['sertifikat']['error'];
		$tipe = $_FILES['sertifikat']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
	//	$namabaru = uniqid();
		//var_dump($namabaru);die;
	//	$namabaru .= '.';
	//	$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namabaru);die;
		return $namaFile;

	}
	function npwp(){
		$namaFile = $_FILES['npwp']['name'];
		$ukuranFile = $_FILES['npwpwp']['size'];
		$error = $_FILES['npwp']['error'];
		$tipe = $_FILES['npwp']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
	//	$namabaru = uniqid();
		//var_dump($namabaru);die;
	//	$namabaru .= '.';
	//	$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namabaru);die;
		return $namaFile;

	}
	function kk(){
		$namaFile = $_FILES['kk']['name'];
		$ukuranFile = $_FILES['kk']['size'];
		$error = $_FILES['kk']['error'];
		$tipe = $_FILES['kk']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
		//$namabaru = uniqid();
		//var_dump($namabaru);die;
		//$namabaru .= '.';
		//$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namaFile);die;
		return $namaFile;

	}
	function aktanikah(){
		$namaFile = $_FILES['aktanikah']['name'];
		$ukuranFile = $_FILES['aktanikah']['size'];
		$error = $_FILES['aktanikah']['error'];
		$tipe = $_FILES['aktanikah']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
		//$namabaru = uniqid();
		//var_dump($namabaru);die;
		//$namabaru .= '.';
		//$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namaFile);die;
		return $namaFile;

	}
	function aktapt(){
		$namaFile = $_FILES['akta_pt']['name'];
		$ukuranFile = $_FILES['akta_pt']['size'];
		$error = $_FILES['akta_pt']['error'];
		$tipe = $_FILES['akta_pt']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
	//	$namabaru = uniqid();
		//var_dump($namabaru);die;
	//	$namabaru .= '.';
	//	$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namabaru);die;
		return $namaFile;

	}
	function kwintansi(){
		$namaFile = $_FILES['kwintansi']['name'];
		$ukuranFile = $_FILES['kwintansi']['size'];
		$error = $_FILES['kwintansi']['error'];
		$tipe = $_FILES['kwintansi']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
	//	$namabaru = uniqid();
		//var_dump($namabaru);die;
	//	$namabaru .= '.';
	//	$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namabaru);die;
		return $namaFile;

	}
	function bayar(){
		$namaFile = $_FILES['bukti_bayar']['name'];
		$ukuranFile = $_FILES['bukti_bayar']['size'];
		$error = $_FILES['bukti_bayar']['error'];
		$tipe = $_FILES['bukti_bayar']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['jpg','jpeg','png'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan gambar');
					</script>";
			return false;
		}

		//cek ukuran gambar 
		if ($ukuranFile >1000000) {
			echo "<script>
					alert ('ukuran terlalu besar');
					</script>";
		}
		//lolos cek generete nama baru 
	//	$namabaru = uniqid();
		//var_dump($namabaru);die;
	//	$namabaru .= '.';
	//	$namabaru .= $eks;
		move_uploaded_file($tipe, '../data/'.$namaFile);
		//var_dump($namabaru);die;
		return $namaFile;

	}
//function untuk insert
	function tambahpesan(){
		global $kon;
		$pengirim = $_POST['pengirim'];
		$id_notaris = $_POST['id_notaris'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$sql = mysqli_query($kon, "insert into pesan (pengirim,id_notaris,judul,isi) values ('$pengirim','$id_notaris','$judul','$isi')");
		return mysqli_affected_rows($kon);
	}

	function tambah(){
		global $kon;
		$id_pesan = $_POST['id_pesan'];
		$pengirim = $_POST['pengirim'];
		$id_notaris = $_POST['id_notaris'];
		$judul = $_POST['judul'];
		$isi=$_POST['isi'];
		 $sql = mysqli_query($kon,"update pesan set pengirim='$pengirim',id_notaris='$id_notaris',judul='$judul',isi='$isi' where id_pesan='$id_pesan'");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahnotaris($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$jk = $_POST['jk'];
		 $sql = mysqli_query($kon,"insert into notaris (nama,no_hp,jk) values ('$nama','$no_hp','$jk')");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahklien($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		 $sql = mysqli_query($kon,"insert into klien (nama,no_hp,alamat,user,pass) values ('$nama','$no_hp','$alamat','$user','$pass')");
		 return mysqli_affected_rows($kon);
	
	}
	function tambahadmin($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$jk = $_POST['jk'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$sql = mysqli_query($kon,"insert into admin (nama,no_hp,jk,user,pass) values ('$nama','$no_hp','$jk','$user','$pass')");
		$sqli = mysqli_query($kon,"insert into login (user,pass,status) values ('$user','$pass','pasif')");
		 return mysqli_affected_rows($kon);
	
	}
	function tambahrekening($data){
		global $kon;
		$bank = $_POST['bank'];
		$rekening = $_POST['rekening'];
		$nama = $_POST['nama'];
		 $sql = mysqli_query($kon,"insert into rekening (bank,rekening,nama) values ('$bank','$rekening','$nama')");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahaktabeli($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		//$ktp = $_POST['ktp'];

		$ktp = ktp();
		if (!$ktp) {
			return false;
		}

		$akta_lahir = akta_lahir();
		if (!$akta_lahir) {
			return false;
		}

		$PBB = pbb();
		if (!$PBB) {
			return false;
		}

		$sertifikat = sertifikat();
		if (!$sertifikat) {
			return false;
		}

		$npwp = npwp();
		if (!$npwp) {
			return false;
		}


		 $sql = mysqli_query($kon,"insert into akta_jualbeli (nama,no_hp,alamat,ktp,akta_lahir,PBB,sertifikat,npwp) values ('$nama','$no_hp','$alamat','$ktp','$akta_lahir','$PBB','$sertifikat','$npwp')");
		 return mysqli_affected_rows($kon);
	
	}
		function tambahaktahibah($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		//$ktp = $_POST['ktp'];

		$ktp = ktp();
		if (!$ktp) {
			return false;
		}

		$PBB = pbb();
		if (!$PBB) {
			return false;
		}

		$sertifikat = sertifikat();
		if (!$sertifikat) {
			return false;
		}

		$npwp = npwp();
		if (!$npwp) {
			return false;
		}


		 $sql = mysqli_query($kon,"insert into akta_hibah (nama,no_hp,alamat,ktp,PBB,sertifikat,npwp) values ('$nama','$no_hp','$alamat','$ktp','$PBB','$sertifikat','$npwp')");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahtukar($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		//$ktp = $_POST['ktp'];

		$ktp = ktp();
		if (!$ktp) {
			return false;
		}

		$kk = kk();
		if (!$kk) {
			return false;
		}

		$aktanikah = aktanikah();
		if (!$aktanikah) {
			return false;
		}

		$sertifikat = sertifikat();
		if (!$sertifikat) {
			return false;
		}

		$npwp = npwp();
		if (!$npwp) {
			return false;
		}


		 $sql = mysqli_query($kon,"insert into akta_nikah (nama,no_hp,alamat,ktp,kk,aktanikah,sertifikat,npwp) values ('$nama','$no_hp','$alamat','$ktp','$kk','$aktanikah','$sertifikat','$npwp')");
		 return mysqli_affected_rows($kon);
	
	}
	function tambahpt($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$direktur = $_POST['direktur'];
		$komisaris = $_POST['komisaris'];
		$modal = $_POST['modal'];
		$nama_pt = $_POST['nama_pt'];

		$ktp = ktp();
		if (!$ktp) {
			return false;
		}

		 $sql = mysqli_query($kon,"insert into akta_pt (nama,no_hp,alamat,direktur,komisaris,ktp,modal,nama_pt) values ('$nama','$no_hp','$alamat','$direktur','$komisaris','$ktp',$modal,'$nama_pt')");
		 return mysqli_affected_rows($kon);
	
	}
	function tambahhak($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		//$ktp = $_POST['ktp'];

		$ktp = ktp();
		if (!$ktp) {
			return false;
		}

		$kk = kk();
		if (!$kk) {
			return false;
		}

		$aktanikah = aktanikah();
		if (!$aktanikah) {
			return false;
		}

		$sertifikat = sertifikat();
		if (!$sertifikat) {
			return false;
		}

		$npwp = npwp();
		if (!$npwp) {
			return false;
		}

		$PBB = pbb();
		if (!$PBB) {
			return false;
		}

		 $sql = mysqli_query($kon,"insert into akta_hak (nama,alamat,no_hp,ktp,kk,aktanikah,sertifikat,npwp,PBB) values ('$nama','$no_hp','$alamat','$ktp','$kk','$aktanikah','$sertifikat','$npwp','$PBB')");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahperusahaan($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		//$ktp = $_POST['ktp'];

		$ktp = ktp();
		if (!$ktp) {
			return false;
		}
		$aktanikah = aktanikah();
		if (!$aktanikah) {
			return false;
		}

		$sertifikat = sertifikat();
		if (!$sertifikat) {
			return false;
		}

		$akta_pt = aktapt();
		if (!$akta_pt) {
			return false;
		}

		$PBB = pbb();
		if (!$PBB) {
			return false;
		}

		 $sql = mysqli_query($kon,"insert into akta_perusahaan (nama,alamat,no_hp,ktp,aktanikah,akta_pt,PBB,sertifikat) values ('$nama','$alamat','$no_hp','$ktp','$aktanikah','$akta_pt','$PBB','$sertifikat')");
		 return mysqli_affected_rows($kon);
	
	}
	function tambahkuasa($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		//$ktp = $_POST['ktp'];

		$ktp = ktp();
		if (!$ktp) {
			return false;
		}
		$aktanikah = aktanikah();
		if (!$aktanikah) {
			return false;
		}

		$sertifikat = sertifikat();
		if (!$sertifikat) {
			return false;
		}
		$kwintansi = kwintansi();
		if (!$kwintansi) {
			return false;
		}
		

		$PBB = pbb();
		if (!$PBB) {
			return false;
		}

		 $sql = mysqli_query($kon,"insert into akta_kuasa (nama,alamat,no_hp,ktp,suratnikah,kwintansi,PBB,sertifikat) values ('$nama','$no_hp','$alamat','$ktp','$aktanikah','$kwintansi','$PBB','$sertifikat')");
		 return mysqli_affected_rows($kon);
	
	}
	function tambahcv($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$direktur = $_POST['direktur'];
		$nama_persero = $_POST['nama_persero'];

		$ktp = ktp();
		if (!$ktp) {
			return false;
		}

		 $sql = mysqli_query($kon,"insert into akta_cv (nama,alamat,no_hp,ktp,direktur,nama_persero) values ('$nama','$alamat','$no_hp','$ktp','$direktur','$nama_persero')");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahbayar($data){
		global $kon;
		$nama_rek = $_POST['nama_rek'];
		$dari_bank = $_POST['dari_bank'];
		$ke_bank = $_POST['ke_bank'];
		$jumlah_bayar = $_POST['jumlah_bayar'];


		$bukti_bayar = bayar();
		if (!$bukti_bayar) {
			return false;
		}

		 $sql = mysqli_query($kon,"insert into pembayaran (nama_rek,dari_bank,ke_bank,jumlah_bayar,bukti_bayar) values ('$nama_rek','$dari_bank','$ke_bank','$jumlah_bayar','$bukti_bayar')");
		 return mysqli_affected_rows($kon);
	
	}
//function untuk update

	function editakta_jual(){
		global $kon;
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$ktp = ktp();
		if (!$ktp) {
			return false;
		}
		 $sql = mysqli_query($kon,"update akta_jualbeli set nama='$nama',alamat ='$alamat',no_hp='$no_hp',ktp='$ktp' where id = '$id'");
		 return mysqli_affected_rows($kon);
	
	}
		function editadmin(){
		global $kon;
		$id_admin =$_POST['id_admin'];
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$jk = $_POST['jk'];
		$user =$_POST['user'];
		$pass = $_POST['pass'];
		 $sql = mysqli_query($kon,"update admin set nama='$nama',no_hp='$no_hp',jk='$jk',user='$user',pass='$pass' where id_admin='$id_admin'");
		 return mysqli_affected_rows($kon);
	
	}
		function editrekening(){
		global $kon;
		$id =$_POST['id'];
		$nama = $_POST['nama'];
		$rekening = $_POST['rekening'];
		$bank = $_POST['bank'];
		 $sql = mysqli_query($kon,"update rekening set nama='$nama',rekening='$rekening',bank='$bank' where id='$id'");
		 return mysqli_affected_rows($kon);
	
	}

	function editlogin(){
		global $kon;
		$id =$_POST['id'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$status = $_POST['status'];
		 $sql = mysqli_query($kon,"update login set user='$user',pass='$pass', status ='$status' where id='$id'");
		 return mysqli_affected_rows($kon);
	
	}
//function untuk delete
	function hapus($id_pesan){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM pesan where id_pesan=$id_pesan");
		return mysqli_affected_rows($kon);
	}

	function hapusnotaris($id_notris){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM notaris where id_notris=$id_notris");
		return mysqli_affected_rows($kon);
	}
	function hapusadmin($id_admin){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM admin where id_admin=$id_admin");
		return mysqli_affected_rows($kon);
	}
	function hapusrekening($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM rekening where id=$id");
		return mysqli_affected_rows($kon);
	}
	function hapuslogin($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM login where id=$id");
		return mysqli_affected_rows($kon);
	}
?>