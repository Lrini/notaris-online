
 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapusperusahaan ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../akta_perusahaan.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../akta_perusahaan.php?r=gagal';
			            </script>";
			}
 ?>