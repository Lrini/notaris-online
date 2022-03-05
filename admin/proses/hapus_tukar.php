
 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapustukar ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../akta_tukar.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../akta_tukar.php?r=gagal';
			            </script>";
			}
 ?>