<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <?php
                        if($notif != "") {
                            echo $notif;
                        }
                    ?>
                        <div class="header">
                            <h2>
                                SELURUH DIVISI 
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama Divisi</th>
                                            <th>Pilihan</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        $row = $crud->show('divisi');
                                        foreach ($row as $data_divisi) {
                                            # code...
                                        ?>
                                        <tr>
                                            <td><?= $data_divisi["nama_divisi"] ?></td>
                                            <td>
                                            <a href="<?= $uri ?>?page=edit_divisi&id=<?= $data_divisi["id_divisi"] ?>" class="btn btn-success waves-effect">
                                                 <i class="material-icons">launch</i>
                                                <span>Edit</span>
                                            </a>
                                            <a href="upload_divisi.php?page=delete_divisi&id=<?= $data_divisi["id_divisi"] ?>" class="btn btn-danger waves-effect" data-type="confirm">
                                                 <i class="material-icons">delete</i>
                                                <span>Hapus</span>
                                            </a>
                                            </td>
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
            <!-- #END# Basic Examples -->
        </div>
    </section>
       <!-- Jquery Core Js -->
   <script src="<?= BASE_URL;?>view/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $('#notifikasi').slideDown().delay(1500).slideUp();    
    </script>

    <!-- Jquery Core Js -->
    <script src="<?= BASE_URL;?>view/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= BASE_URL;?>view/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?= BASE_URL;?>view/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?= BASE_URL;?>view/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= BASE_URL;?>view/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?= BASE_URL;?>view/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>


    <!-- Custom Js -->
    <script src="<?= BASE_URL;?>view/js/admin.js"></script>
    <script src="<?= BASE_URL;?>view/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?= BASE_URL;?>view/js/demo.js"></script>
</body>

</html>
