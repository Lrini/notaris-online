
 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapushibah ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../akta_hibah.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../akta_hibah.php?r=gagal';
			            </script>";
			}
 ?>