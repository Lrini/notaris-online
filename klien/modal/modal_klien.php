<?php
    if(isset ($_POST['id'])) {
		  include ('../koneksi.php'); 
        $id=$_POST['id'];
		$data = mysqli_query($koneksi,"select * from akta_jualbeli where id='$id'");
        while($sql = mysqli_fetch_array($data)): ?>
			<form role="form" action="proses/klien.php" method="post" enctype="multipart/form-data">
				<div class="from-group">
				 <input type="text" class="form-control" name="id" value="<?php echo $sql ['id'] ?>" required='required' disabled='disabled'/>
				 <input type="hidden" name="id" value="<?php echo $sql['id'] ?>">
			 </div>
			 <div class="from-group">
			 	<label>Nama</label>
				 <input type="text" class="form-control" name="nama" value="<?php echo $sql ['nama'] ?>" required='required'/>
			 </div>
			 <div class="from-group">
			 	<label>Alamat</label>
				 <input type="text" class="form-control" name="alamat" value="<?php echo $sql ['alamat'] ?>" required='required'/>
			 </div>
			 <div class="from-group">
			 	<label>Nomor Handphone</label>
				 <input type="text" class="form-control" name="no_hp" value="<?php echo $sql ['no_hp'] ?>" required='required'/>
			 </div>
			 <div class="form-group">
                    <label for="exampleInputName1">KTP</label>
                    <br>
                   <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                   <input type="file" class="form-control" id="ktp" name="ktp" placeholder="KTP">
             </div>
            <!--  <div class="form-group">
                    <label for="exampleInputName1">PBB</label>
                    <br>
                   <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                   <input type="file" class="form-control" id="pbb" name="pbb" placeholder="pbb">
             </div>
             <div class="form-group">
                    <label for="exampleInputName1">Akta Lahir</label>
                    <br>
                   <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                   <input type="file" class="form-control" id="akta_lahir" name="akta_lahir" placeholder="Akta Lahir">
             </div>
             <div class="form-group">
                    <label for="exampleInputName1">Sertifikat</label>
                    <br>
                   <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                   <input type="file" class="form-control" id="sertifikat" name="sertifikat" placeholder="sertifikat">
             </div>
             <div class="form-group">
                    <label for="exampleInputName1">NPWP</label>
                    <br>
                   <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                   <input type="file" class="form-control" id="npwp" name="npwp" placeholder="NPWP">
             </div>-->
			 <p></p>
				
						<a href="index.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button></a>
						<button type="submit" name="simpan" value="simpan" class="btn btn-primary" ><i class="fa fa-check"></i> Update</button>
				
				<?php endwhile; ?>
				</form>
        <?php 
		
        }
    ?>