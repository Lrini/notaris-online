
 <?php
 include "../function.php";
 if(isset($_POST['simpan'])){
 	if(editlogin($_POST) > 0){
 		 echo " 
           <script>
                document.location.href = '../login.php?r=sukses';
            </script>";
 	}else{
 		 echo " 
           <script>
                document.location.href = '../login.php?r=gagal';
            </script>";
 	}
 }
 ?>