
 <?php
 include "../function.php";
 $id = $_GET ["id_dok"];
if(hapusdok ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../dokumen.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../dokumen.php?r=gagal';
			            </script>";
			}
 ?>