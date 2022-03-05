
 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapusjual ($id) > 0){
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
 ?>