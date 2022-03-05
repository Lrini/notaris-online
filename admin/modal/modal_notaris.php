<?php
    if(isset ($_POST['id_notris'])) {
		  include ('../koneksi.php'); 
        $id=$_POST['id_notris'];
		$data = mysqli_query($koneksi,"select * from notaris where id_notris='$id'");
        while($sql = mysqli_fetch_array($data)): ?>
			<form role="form" action="proses/notaris.php" method="post" enctype="multipart/form-data">
			<div class="from-group">
				 <input type="text" class="form-control" name="id_notaris" value="<?php echo $sql ['id_notris'] ?>" required='required' disabled='disabled'/>
				 <input type="hidden" name="id_notris" value="<?php echo $sql['id_notris'] ?>">
			 </div>
			 <div class="from-group">
			 	<label>Name</label>
				 <input type="text" class="form-control" name="nama" value="<?php echo $sql ['nama'] ?>" required='required'/>
			 </div>
			 <div class="from-group">
			 	<label>Handphone</label>
				 <input type="text" class="form-control" name="no_hp" value="<?php echo $sql ['no_hp'] ?>" required='required'/>
			 </div>
			 <div class="form_group">
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" name="jk" id="jk1" value='L'> Pria
                            </label>
                </div>
                 <span></span>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" name="jk" id="jk2" value='P'> Wanita
                    </label>
                </div>
            </div>
            <div class="from-group">
			 	<label> Set username</label>
				 <input type="text" class="form-control" name="user" value="<?php echo $sql ['user'] ?>" required='required'/>
			 </div>
			 <div class="from-group">
			 	<label>Set Password</label>
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
                        <input type="radio" name="status" id="status2" value='tidak'>Tidak
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