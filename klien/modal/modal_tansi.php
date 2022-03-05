<?php
    if(isset ($_POST['id'])) {
		  include ('../koneksi.php'); 
        $id=$_POST['id'];
		$data = mysqli_query($koneksi,"select * from akta_kuasa where id='$id'");
        while($sql = mysqli_fetch_array($data)): ?>
			<form role="form" action="" method="post" enctype="multipart/form-data">
			 <div class="from-group">
			 	<img src="../data/<?php echo $sql['kwintansi']; ?>" width="350">
			 </div>
			 <p></p>
				
						<a href="akta_kuasa.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button></a>
						
				
				<?php endwhile; ?>
				</form>
        <?php 
		
        }
    ?>