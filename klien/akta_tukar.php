<?php
session_start ();
require "function.php";
include 'header.php';
include 'koneksi.php';
?>
                <div class="main-content">
                    <div class="container-fluid">
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><h3>Form Akta Tukar Menukar </h3></div>
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                             <div class="from-group">
                                                <label>Pengirim</label>
                                                 <select name= "nama" id="nama" class="form-control" type="text">
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
                                            <div class="form-group">
                                                <label for="exampleInputName1">Handphone</label>
                                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Handphone">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">KTP</label>
                                                <br>
                                                <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                                                <input type="file" class="form-control" id="ktp" name="ktp" placeholder="KTP">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Kartu Keluarga</label>
                                                <br>
                                                <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                                                <input type="file" class="form-control" id="kk" name="kk" placeholder="kk">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Akta Nikah</label>
                                                <br>
                                                <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                                                <input type="file" class="form-control" id="aktanikah" name="aktanikah" placeholder="aktanikah">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Sertifikat</label>
                                                <br>
                                                <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                                                <input type="file" class="form-control" id="sertifikat" name="sertifikat" placeholder="Sertifikat">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">NPWP</label>
                                                <br>
                                                <label>untuk foto besar maks 1mb dan nama foto tidak menggunakan spasi</label>
                                                <input type="file" class="form-control" id="npwp" name="npwp" placeholder="NPWP">
                                            </div>
                                           <a href="index.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button></a>
                                              <button type="submit" name='simpan' value='simpan' class="btn btn-success mr-2">Save</button>
                                        </form>
                                            <?php
                                                if(isset($_POST['simpan'])){
                                                  if(tambahtukar ($_POST) > 0){
                                                    echo " 
                                                       <script>
                                                            document.location.href = 'akta_tukar.php?r=sukses';
                                                        </script>";
                                                  }else{
                                                     echo " 
                                                       <script>
                                                            document.location.href = 'akta_tukar.php?r=gagal';
                                                        </script>";
                                                  }
                                                }
                                              ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                  <table id="contoh">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama pengajuan</th>
                                            <th>Handphone</th>
                                            <th>Alamat</th>
                                            <th>KTP</th>
                                            <th>Kartu Keluarga</th>
                                            <th>Akta Nikah</th>
                                            <th>Sertifikat</th>
                                            <th>NPWP</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                   <?php 
                                            include ('koneksi.php');
                                                        $data=$_SESSION['id'];
                                                        $sql =  mysqli_query($kon," SELECT akta_nikah.id, akta_nikah.nama,akta_nikah.alamat,akta_nikah.no_hp,akta_nikah.ktp,akta_nikah.kk,akta_nikah.aktanikah,akta_nikah.sertifikat,akta_nikah.npwp,klien.id as klienid FROM akta_nikah INNER JOIN klien on akta_nikah.nama = klien.id WHERE klien.id = $data");

                                                         while ($row=mysqli_fetch_array($sql)) {

                                    ?>
                                        <tr>
                                            <td><?= $row["id"];?></td> 
                                            <td><?= $row["nama"];?></td>
                                            <td><?= $row["no_hp"];?></td>
                                            <td><?= $row["alamat"];?></td>
                                            <td><?php echo "<a href='#' class='foto1 btn btn-success' data-id=".$row['id']."><i class='ik ik-camera'></i></a>  "?></td>
                                            <td><?php echo "<a href='#' class='nikah btn btn-success' data-id=".$row['id']."><i class='ik ik-camera'></i></a>  "?></td>
                                            <td><?php echo "<a href='#' class='pbb btn btn-success' data-id=".$row['id']."><i class='ik ik-camera'></i></a>  "?></td>
                                            <td><?php echo "<a href='#' class='sertifikat btn btn-success' data-id=".$row['id']."><i class='ik ik-camera'></i></a>  "?></td>
                                            <td><?php echo "<a href='#' class='np btn btn-success' data-id=".$row['id']."><i class='ik ik-camera'></i></a>  "?></td>
                                        </tr>
                                    <?php
                                        }  
                                    ?> 
                                    </tbody>
                                </table>   
                                </div>
                            </div>
                    </div>

                </div>
            </div>
                            <div class="modal fade" id="aktp" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-0 mb-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h3>KTP</h3>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="pbb" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-0 mb-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h3>Kartu Keluarga</h3>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="nikah" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-0 mb-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h3>Akta Nikah</h3>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="ikat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-0 mb-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h3>Sertifikat</h3>
                                        </div>
                                        <div class="modal-body">
                                        
                                        
                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="np" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-0 mb-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h3>NPWP</h3>
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
        <script src="jquery.dataTables.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script>
$(document).ready(function() {
    $('#contoh').dataTable(); 
} );
</script>
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
            $(document).on('click','.foto1',function(e){
                e.preventDefault();
                $("#aktp").modal('show');
                $.post('modal/modal_fototukar.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    <script>
         $(function(){
            $(document).on('click','.pbb',function(e){
                e.preventDefault();
                $("#pbb").modal('show');
                $.post('modal/modal_foto2tukar.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    <script>
         $(function(){
            $(document).on('click','.nikah',function(e){
                e.preventDefault();
                $("#nikah").modal('show');
                $.post('modal/modal_nikah.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    <script>
         $(function(){
            $(document).on('click','.sertifikat',function(e){
                e.preventDefault();
                $("#ikat").modal('show');
                $.post('modal/modal_foto3tukar.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    <script>
         $(function(){
            $(document).on('click','.np',function(e){
                e.preventDefault();
                $("#np").modal('show');
                $.post('modal/modal_foto4tukar.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    </body>
</html>
