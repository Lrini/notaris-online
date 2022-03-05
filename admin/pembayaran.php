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
                            <div class="card">
                                <div class="card-body">
                                  <table id="contoh">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama pembayaran</th>
                                            <th>Nama Bank</th>
                                            <th>Bank Tujuan</th>
                                            <th>Jumlah Pembayaran</th>
                                            <th>Bukti Pembayaran</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                   <?php 
                                            include ('koneksi.php');
                                                        $data=$_SESSION['id'];
                                                        $sql =  mysqli_query($kon,"SELECT pembayaran.id_bayar,pembayaran.nama_rek,pembayaran.dari_bank,pembayaran.ke_bank,pembayaran.bukti_bayar,pembayaran.jumlah_bayar,klien.id,klien.nama,rekening.id,rekening.bank FROM pembayaran INNER JOIN klien on pembayaran.nama_rek = klien.id INNER JOIN rekening on pembayaran.ke_bank = rekening.id");

                                                         while ($row=mysqli_fetch_array($sql)) {

                                    ?>
                                        <tr>
                                            <td><?= $row["id_bayar"];?></td> 
                                            <td><?= $row["nama_rek"];?></td>
                                            <td><?= $row["dari_bank"];?></td>
                                            <td><?= $row["bank"];?></td>
                                            <td><?= $row["jumlah_bayar"];?></td>
                                               <td><?php echo "<a href='#' class='pbb btn btn-success' data-id=".$row['id_bayar']."><i class='ik ik-camera'></i></a>  "?></td>
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
                            <div class="modal fade" id="pbb" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-0 mb-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h3>PBB</h3>
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
            $(document).on('click','.pbb',function(e){
                e.preventDefault();
                $("#pbb").modal('show');
                $.post('modal/modal_bayar.php',
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
