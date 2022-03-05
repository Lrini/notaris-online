 <?php
 include "../function.php";
 if(isset($_POST['simpan'])){
 	if(editklien ($_POST) > 0){
 		 echo " 
           <script>
                document.location.href = '../klien.php?r=sukses';
            </script>";
 	}else{
 		 echo " 
           <script>
                document.location.href = '../klien.php?r=gagal';
            </script>";
 	}
 }
 ?>