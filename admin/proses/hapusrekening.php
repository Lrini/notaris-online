 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapusrekening ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../rekening.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../rekening.php?r=gagal';
			            </script>";
			}
 ?>