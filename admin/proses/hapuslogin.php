 <?php
 include "../function.php";
 $id = $_GET ["id"];
if(hapuslogin ($id) > 0){
				 echo " 
			           <script>
			                document.location.href = '../login.php?r=sukses';
			            </script>";
			}else{
				 echo " 
			           <script>
			                document.location.href = '../login.php?r=gagal';
			            </script>";
			}
 ?>