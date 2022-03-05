
 <?php
 include "../function.php";
 if(isset($_POST['simpan'])){
 	if(edit ($_POST) > 0){
 		 echo " 
           <script>
                document.location.href = '../notaris.php?r=sukses';
            </script>";
 	}else{
 		 echo " 
           <script>
                document.location.href = '../notaris.php?r=gagal';
            </script>";
 	}
 }
 ?>