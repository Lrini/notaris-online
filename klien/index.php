<?php
session_start ();
require "function.php";
include ('koneksi.php');
include "header.php";
 
  $r1 = mysqli_query($kon,'select count(*) from dokumen');
  $count1 = mysqli_fetch_array($r1);
  $r3 = mysqli_query($kon,'select count(*) from pembayaran');
  $count3 = mysqli_fetch_array($r3);
  if(!isset($_SESSION['id'])){
    die("Anda belum login");//
}

?>
                <div class="main-content">
                     <?php if(isset($_GET['r'])): ?>
                    <?php
                        $r = $_GET['r'];
                        if($r=='sukses'){
                            $class='success';
                        }else if($r=='updated'){
                            $class='info';   
                        }else if($r=='gagal'){
                            $class='danger';   
                        }else if($r=='added an account'){
                            $class='success';   
                        }else{
                            $class='hide';
                        }
                    ?>
                   <div role="alert" class="alert alert-<?php  echo $class?> ">
                        
                        <strong> <?php echo $r; ?>!</strong>    
                    </div>
                <?php endif; ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-3 col-md-3">
                                <div class="card card-red text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="mb-0"><?php echo $count1[0];?></h4>
                                                <p class="mb-0">Dokumen </p>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ik ik-user f-30"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card card-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h4 class="mb-0"><?php echo $count3[0];?></h4>
                                                <p class="mb-0">Pembayaran</p>
                                            </div>
                                            <div class="col-4 text-right">
                                                <i class="ik ik-credit-card f-30"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>Form Pesan</h3></div>
                                    <div class="card-body">
                                        <form role="form" action="" method="post" enctype="multipart/form-data">
                                             <div class="from-group">
                                                <label>Kepada</label>
                                                 <select name= "id_notaris" id="id_notaris" class="form-control" type="text">
                                                 <option>Notaris</option>
                                                                
                                                                <?php
                                                                    $data = mysqli_query($koneksi,"SELECT * from notaris ");
                                                                while ($sql = mysqli_fetch_array($data)) 
                                                                    { ?>
                                                                        <option value='<?php echo $sql['id_notris'] ?>'><?php echo $sql ['id_notris'] ?> | <?php echo $sql['nama'] ?></option>
                                                                 <?php } ?>
                                                 </select>
                                             </div>
                                             <div class="from-group">
                                                <label>Pengirim</label>
                                                 <select name= "pengirim" id="pengirim" class="form-control" type="text">
                                                 <option>Nama Klien</option>
                                                                
                                                                <?php
                                                                    $id = $_SESSION['id'];
                                                                    $data = mysqli_query($koneksi,"SELECT * from klien where klien.id = $id ");
                                                                while ($sql = mysqli_fetch_array($data)) 
                                                                    { ?>
                                                                        <option value='<?php echo $sql['id'] ?>'><?php echo $sql ['id'] ?> | <?php echo $sql['nama'] ?></option>
                                                                 <?php } ?>
                                                 </select>
                                             </div>
                                             <div class="from-group">
                                                <label>Judul</label>
                                                 <input type="text" class="form-control" name="judul" value="<?php echo $sql ['judul'] ?>" required='required'/>
                                             </div>
                                             <div class="from-group">
                                                <label>Isi</label>
                                                 <input type="text" class="form-control" name="isi" value="<?php echo $sql ['isi'] ?>" required='required'/>
                                             </div>
                                             <br>
                                            <button type="submit" name="simpan" value="simpan" class="btn btn-primary" ><i class="fa fa-check"></i> Kirim</button>
                                        </form>
                                            <?php
                                                if(isset($_POST['simpan'])){
                                                  if(tambahpesan ($_POST) > 0){
                                                    echo " 
                                                       <script>
                                                            document.location.href = 'index.php?r=sukses';
                                                        </script>";
                                                  }else{
                                                     echo " 
                                                       <script>
                                                            document.location.href = 'index.php?r=gagal';
                                                        </script>";
                                                  }
                                                }
                                              ?>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-12 col-md-6">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h3>Pesan</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Penerima</th>
                                                        <th>Pengirim</th>
                                                        <th>Judul</th>
                                                        <th>Isi</th>
                                                        <th>Tanggal</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php
                                                        include ('koneksi.php');
                                                        $data=$_SESSION['id'];
                                                        $sql =  mysqli_query($kon,"SELECT pesan.id_pesan, klien.nama, notaris.nama as nama_notaris,pesan.judul,pesan.isi,pesan.waktu FROM pesan INNER JOIN klien on pesan.pengirim=klien.id INNER JOIN notaris ON pesan.id_notaris=notaris.id_notris where klien.id = '$data'");

                                                         while ($row=mysqli_fetch_array($sql)) {
                                                      ?>

                                                    <tr>
                                                         <td><?= $row["id_pesan"];?></td> 
                                                        <td><?= $row["nama"];?></td>
                                                        <td><?= $row["nama_notaris"];?></td>
                                                        <td><?= $row["judul"];?></td>
                                                        <td><?= $row["isi"];?></td>
                                                        <td><?= $row["waktu"];?></td>
                                                        <td>
                                                            <?php echo "<a href='#' class='lihat btn btn-primary' data-id=".$row['id_pesan']."><i class='ik ik-edit-1'></i></a>  "?>
                                                            <a href="proses/hapuspesan.php?id_pesan=<?= $row["id_pesan"];?>"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php }  ?> 
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>

                <div class="modal fade" id="addpesan" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-0 mb-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h3>Reply</h3>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
                            
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php
include 'footer.php';
?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="../plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="../plugins/screenfull/dist/screenfull.js"></script>
        <script src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="../plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="../plugins/d3/dist/d3.min.js"></script>
        <script src="../plugins/c3/c3.min.js"></script>
        <script src="../js/tables.js"></script>
        <script src="../js/widgets.js"></script>
        <script src="../js/charts.js"></script>
        <script src="../dist/js/theme.min.js"></script>
        <script>
        $(document).ready(function(){
            $('#myModal').modal('show');
        });
        
        $('#okModal').on('click', function () {
            console.log('ok');
        });
    </script>
     <script>
         $(function(){
            $(document).on('click','.lihat',function(e){
                e.preventDefault();
                $("#addpesan").modal('show');
                $.post('modal/modal_pesan.php',
                    {id_pesan:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    </body>
</html>
