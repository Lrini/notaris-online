 <?php
 include "../function.php";
 $id_notris = $_GET ["id_notris"];
if(hapusnotaris ($id_notris) > 0){
				 echo " 
			           <script>
			                document.location.href = '../notaris.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../.php?r=gagal';
			            </script>";
			}
 ?>