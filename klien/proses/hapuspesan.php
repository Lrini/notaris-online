
 <?php
 include "../function.php";
 $id_pesan = $_GET ["id_pesan"];
if(hapus ($id_pesan) > 0){
				 echo " 
			           <script>
			                document.location.href = '../index.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../index.php?r=gagal';
			            </script>";
			}
 ?>