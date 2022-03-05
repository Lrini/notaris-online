<?php
    if(isset ($_POST['id_pesan'])) {
		  include ('../koneksi.php'); 
        $id=$_POST['id_pesan'];
		$data = mysqli_query($koneksi,"SELECT pesan.id_pesan, klien.nama, notaris.nama,pesan.judul,pesan.isi FROM pesan INNER JOIN klien on pesan.pengirim=klien.id INNER JOIN notaris ON pesan.id_notaris=notaris.id_notris WHERE pesan.id_pesan='$id'");
        while($sql = mysqli_fetch_array($data)): ?>
			<form role="form" action="proses/kirim.php" method="post" enctype="multipart/form-data">
			<div class="from-group">
				 <input type="text" class="form-control" name="id_pesan" value="<?php echo $sql ['id_pesan'] ?>" required='required' disabled='disabled'/>
				 <input type="hidden" name="id_pesan" value="<?php echo $sql['id_pesan'] ?>">
			 </div>
			 <div class="from-group">
			 	<label>Pengirim</label>
			 	 <select name= "id_notaris" id="id_notaris" class="form-control" type="text">
			 	 <option>Notaris</option>
								
								<?php
									$data = mysqli_query($koneksi,"SELECT * from notaris ");
								while ($sql = mysqli_fetch_array($data)) 
									{ ?>
										<option value='<?php echo $sql['id_notris'] ?>'><?php echo $sql ['id_notris'] ?> | <?php echo $sql['nama'] ?></option>
								 <?php } ?>
			 	 </select>
			 </div>
			 <div class="from-group">
			 	<label>Kepada</label>
			 	 <select name= "pengirim" id="pengirim" class="form-control" type="text">
			 	 <option>Klien</option>
								
								<?php
									$data = mysqli_query($koneksi,"SELECT * from klien ");
								while ($sql = mysqli_fetch_array($data)) 
									{ ?>
										<option value='<?php echo $sql['id'] ?>'><?php echo $sql ['id'] ?> | <?php echo $sql['nama'] ?></option>
								 <?php } ?>
			 	 </select>
			 </div>
			 <div class="from-group">
			 	<label>Judul</label>
				 <input type="text" class="form-control" name="judul" value="<?php echo $sql ['judul'] ?>" required='required'/>
			 </div>
			 <div class="from-group">
			 	<label>Isi</label>
				 <input type="text" class="form-control" name="isi" value="<?php echo $sql ['isi'] ?>" required='required'/>
			 </div>
			 <p></p>
				
						<a href="index.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button></a>
						<button type="submit" name="simpan" value="simpan" class="btn btn-primary" ><i class="fa fa-check"></i> Update</button>
				
				<?php endwhile; ?>
				</form>
        <?php 
		
        }
    ?>