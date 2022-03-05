 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapusklien ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../klien.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../klien.php?r=gagal';
			            </script>";
			}
 ?>