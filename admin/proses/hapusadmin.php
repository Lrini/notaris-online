 <?php
 include "../function.php";
 $id_admin = $_GET ["id_admin"];
if(hapusadmin ($id_admin) > 0){
				 echo " 
			           <script>
			                document.location.href = '../admin.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../admin.php?r=gagal';
			            </script>";
			}
 ?>