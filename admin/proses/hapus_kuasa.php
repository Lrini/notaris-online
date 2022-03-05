
 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapuskuasa ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../akta_kuasa.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../akta_kuasa.php?r=gagal';
			            </script>";
			}
 ?>