    <section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <?php
                        if($notif != ""){
                            echo $notif;
                        }
                    ?>
                        <div class="header">
                            <h2>
                                SELURUH DATA USER 
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No Handphone</th>
                                            <th>Divisi</th>
                                            <th>Jumlah Surat</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        $row = $crud->showCustom("user.id_user,user.nama, user.email, user.hp, divisi.nama_divisi","user","divisi","user.id_divisi = divisi.id_divisi","user.id_level = 2");
                                        foreach ($row as $data) {
                                            # code...
                                        ?>
                                        <tr>
                                            <td><?= $data["nama"] ?></td>
                                            <td><?= $data["email"] ?></td>
                                            <td><?= $data["hp"] ?></td>
                                            <td><?= $data["nama_divisi"] ?></td>
                                            <td>23</td>
                                            <td>
                                            <a href="userdetail/<?= $data["id_user"] ?>" class="btn btn-info waves-effect">
                                                 <i class="material-icons">info</i>
                                                <span>Lihat</span>
                                            </a>
                                            <!-- <a href="?page=edit_user&id=<?= $data["id_user"] ?>" class="btn btn-success waves-effect">
                                                 <i class="material-icons">edit</i>
                                                <span>Edit</span>
                                            </a>
                                            <a href="?page=delete_user&id=<?= $data["id_user"] ?>" onclick="confirm('Anda yakin mau menghapus?')" class="btn btn-danger waves-effect" data-type="confirm">
                                                 <i class="material-icons">delete</i>
                                                <span>Hapus</span>
                                            </a> -->
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
