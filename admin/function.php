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

	function dokumen(){
		$namaFile = $_FILES['dokumen']['name'];
		$ukuranFile = $_FILES['dokumen']['size'];
		$error = $_FILES['dokumen']['error'];
		$tipe = $_FILES['dokumen']['tmp_name'];

		//cek apa tidak ada gambar yang di upload 
		if (($error === 4)) {
			echo "<script>
					alert ('pilih gambar terlebih dahulu');
					</script>";
		return false;
		}
		//cek gambar atau bukan 
		$ekstensi = ['doc','docx','pdf'];
		$eks = explode('.', $namaFile);
		$eks = strtolower(end($eks));
		if (!in_array($eks, $ekstensi)) {
			echo "<script>
					alert ('bukan file');
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
		move_uploaded_file($tipe, '../file/'.$namaFile);
		//var_dump($namaFile);die;
		return $namaFile;

	}
//function untuk insert
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
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		 $sql = mysqli_query($kon,"insert into notaris (nama,no_hp,jk,user,pass,status) values ('$nama','$no_hp','$jk','$user','$pass','tidak')");
		 return mysqli_affected_rows($kon);
	
	}

	function tambahklien($data){
		global $kon;
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		 $sql = mysqli_query($kon,"insert into klien (nama,no_hp,alamat,user,pass,status) values ('$nama','$no_hp','$alamat','$user','$pass','pasif')");
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

	function tambahdokumen($data){
		global $kon;
		$nama_dok = $_POST['nama_dok'];
		$penerima = $_POST['penerima'];
		$dokumen = dokumen();
		if (!$dokumen) {
			return false;
		}
		 $sql = mysqli_query($kon,"insert into dokumen (nama_dok,penerima,dokumen) values ('$nama_dok','$penerima','$dokumen')");
		 return mysqli_affected_rows($kon);
	
	}
//function untuk update
	function edit(){
		global $kon;
		$idnotris =$_POST['id_notris'];
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$jk = $_POST['jk'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$status = $_POST['status'];
		 $sql = mysqli_query($kon,"update notaris set nama='$nama',no_hp='$no_hp',jk='$jk',user='$user',pass='$pass',status='$status' where id_notris='$idnotris'");
		 return mysqli_affected_rows($kon);
	
	}

	function editklien(){
		global $kon;
		$id =$_POST['id'];
		$nama = $_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$alamat = $_POST['alamat'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$status = $_POST['status'];
		 $sql = mysqli_query($kon,"update klien set nama='$nama',no_hp='$no_hp',alamat='$alamat',user='$user',pass='$pass',status ='$status' where id='$id'");
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
	function hapusjual($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM akta_jualbeli where id=$id");
		return mysqli_affected_rows($kon);
	}
	function hapushibah($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM akta_hibah where id=$id");
		return mysqli_affected_rows($kon);
	}
		function hapustukar($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM akta_nikah where id=$id");
		return mysqli_affected_rows($kon);
	}
	function hapuspt($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM akta_pt where id=$id");
		return mysqli_affected_rows($kon);
	}
	function hapushak($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM akta_hak where id=$id");
		return mysqli_affected_rows($kon);
	}
	function hapusperusahaan($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM akta_perusahaan where id=$id");
		return mysqli_affected_rows($kon);
	}
	function hapuskuasa($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM akta_kuasa where id=$id");
		return mysqli_affected_rows($kon);
	}
	function hapuscv($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM akta_cv where id=$id");
		return mysqli_affected_rows($kon);
	}
	function hapusklien($id){
		global $kon;
		$sql =mysqli_query($kon,"DELETE FROM klien where id=$id");
		return mysqli_affected_rows($kon);
	}

?>
?>