<?php
    if(isset ($_POST['id'])) {
		  include ('../koneksi.php'); 
        $id=$_POST['id'];
		$data = mysqli_query($koneksi,"select * from login where id='$id'");
        while($sql = mysqli_fetch_array($data)): ?>
			<form role="form" action="proses/login.php" method="post" enctype="multipart/form-data">
			<div class="from-group">
				 <input type="text" class="form-control" name="id" value="<?php echo $sql ['id'] ?>" required='required' disabled='disabled'/>
				 <input type="hidden" name="id" value="<?php echo $sql['id'] ?>">
			 </div>
			 <div class="from-group">
			 	<label>Username Pengguna</label>
				 <input type="text" class="form-control" name="user" value="<?php echo $sql ['user'] ?>" required='required'/>
			 </div>
			 <div class="from-group">
			 	<label>Password Pengguna</label>
				 <input type="text" class="form-control" name="pass" value="<?php echo $sql ['pass'] ?>" required='required'/>
			 </div>
			 <div class="form_group">
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" name="status" id="status1" value='aktif'> Aktif
                            </label>
                </div>
                 <span></span>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" name="status" id="status2" value='pasif'>Pasif
                    </label>
                </div>
            </div>
			 <p></p>
				
						<a href="index.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button></a>
						<button type="submit" name="simpan" value="simpan" class="btn btn-primary" ><i class="fa fa-check"></i> Update</button>
				
				<?php endwhile; ?>
				</form>
        <?php 
		
        }
    ?>