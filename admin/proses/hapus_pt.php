
 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapuspt ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../akta_pt.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../akta_pt.php?r=gagal';
			            </script>";
			}
 ?>