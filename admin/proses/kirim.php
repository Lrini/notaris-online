
 <?php
 include "../function.php";
 if(isset($_POST['simpan'])){
 	if(tambah ($_POST) > 0){
 		 echo " 
           <script>
                document.location.href = '../index.php?r=sukses';
            </script>";
 	}else{
 		 echo " 
           <script>
                document.location.href = '../index.php?r=gagal';
            </script>";
 	}
 }
 ?>