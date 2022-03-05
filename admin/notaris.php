<?php
require "function.php";
include 'header.php';
$notaris = query ('select * from notaris');
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
                                    <div class="card-header"><h3>Form Notaris</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Name</label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Handphone</label>
                                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Handphone">
                                            </div>
                                            <div class="form_group">
                                              <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default">
                                                  <input type="radio" name="jk" id="jk1" value='L'> Pria
                                                </label>
                                                </div>
                                                <span></span>
                                                <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default">
                                                  <input type="radio" name="jk" id="jk2" value='P'> Wanita
                                                </label>
                                              </div>
                                        </div>
                                         <div class="form-group">
                                                <label for="exampleInputName1">Set Username</label>
                                                <input type="text" class="form-control" id="user" name="user" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Set Password</label>
                                                <input type="text" class="form-control" id="pass" name="pass" placeholder="pass">
                                            </div>
                                            
                                           <a href="index.php"><button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button></a>
                                              <button type="submit" name='simpan' value='simpan' class="btn btn-success mr-2">Save</button>
                                        </form>
                                            <?php
                                                if(isset($_POST['simpan'])){
                                                  if(tambahnotaris ($_POST) > 0){
                                                    echo " 
                                                       <script>
                                                            document.location.href = 'notaris.php?r=sukses';
                                                        </script>";
                                                  }else{
                                                     echo " 
                                                       <script>
                                                            document.location.href = 'notaris.php?r=gagal';
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
                                            <th>Nama Notaris</th>
                                            <th>Handphone</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                   <?php foreach ($notaris as $row): ?>
                                        <tr>
                                            <td><?= $row["id_notris"];?></td> 
                                            <td><?= $row["nama"];?></td>
                                            <td><?= $row["no_hp"];?></td>
                                            <td><?= $row["jk"];?></td>
                                            <td><?= $row["user"];?></td>
                                            <td><?= $row["pass"];?></td>
                                            <td><?= $row["status"];?></td>
                                            <td>
                                                <?php echo "<a href='#' class='lihat btn btn-primary' data-id=".$row['id_notris']."><i class='ik ik-edit-1'></i></a>  "?>
                                                <a href="proses/hapusnotaris.php?id_notris=<?= $row["id_notris"];?>"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?> 
                                    </tbody>
                                </table>   
                                </div>
                            </div>
                    </div>

                </div>
            </div>
             <div class="modal fade" id="addnotaris" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg mt-0 mb-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                                <h3>Notaris</h3>
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
            $(document).on('click','.lihat',function(e){
                e.preventDefault();
                $("#addnotaris").modal('show');
                $.post('modal/modal_notaris.php',
                    {id_notris:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    </body>
</html>
