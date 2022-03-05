
 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapuscv ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../akta_cv.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../akta_cv.php?r=gagal';
			            </script>";
			}
 ?>