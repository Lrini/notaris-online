 <?php
 include "../function.php";
 if(isset($_POST['simpan'])){
 	if(editrekening ($_POST) > 0){
 		 echo " 
           <script>
                document.location.href = '../rekening.php?r=sukses';
            </script>";
 	}else{
 		 echo " 
           <script>
                document.location.href = '../rekening.php?r=gagal';
            </script>";
 	}
 }
 ?>