<?php
    if(isset ($_POST['id'])) {
		  include ('../koneksi.php'); 
        $id=$_POST['id'];
		$data = mysqli_query($koneksi,"select * from rekening where id='$id'");
        while($sql = mysqli_fetch_array($data)): ?>
			<form role="form" action="proses/rekening.php" method="post" enctype="multipart/form-data">
			<div class="from-group">
				 <input type="text" class="form-control" name="id" value="<?php echo $sql ['id'] ?>" required='required' disabled='disabled'/>
				 <input type="hidden" name="id" value="<?php echo $sql['id'] ?>">
			 </div>
			 <div class="from-group">
			 	<label>Nama Bank</label>
				 <input type="text" class="form-control" name="bank" value="<?php echo $sql ['bank'] ?>" required='required'/>
			 </div>
			 <div class="from-group">
			 	<label>NO Rekening</label>
				 <input type="text" class="form-control" name="rekening" value="<?php echo $sql ['rekening'] ?>" required='required'/>
			 </div>
			 <div class="from-group">
			 	<label>Nama Rekening</label>
				 <input type="text" class="form-control" name="nama" value="<?php echo $sql ['nama'] ?>" required='required'/>
			 </div>
			 <p></p>
				
						<a href="index.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button></a>
						<button type="submit" name="simpan" value="simpan" class="btn btn-primary" ><i class="fa fa-check"></i> Update</button>
				
				<?php endwhile; ?>
				</form>
        <?php 
		
        }
    ?>