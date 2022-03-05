 <?php
 include "../function.php";
 if(isset($_POST['simpan'])){
 	if(editakta_jual($_POST) > 0){
 		 echo " 
           <script>
                document.location.href = '../akta_jualbeli.php?r=sukses';
            </script>";
 	}else{
 		 echo " 
           <script>
                document.location.href = '../akta_jualbeli.php?r=gagal';
            </script>";
 	}
 }
 ?>