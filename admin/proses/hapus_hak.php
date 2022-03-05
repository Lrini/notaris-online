
 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapushak ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../akta_hak.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../akta_hak.php?r=gagal';
			            </script>";
			}
 ?>