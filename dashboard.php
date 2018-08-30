<?php
    $total = $crud->hitung('surat');
    $total_today = $crud->hitung("surat", "tanggal_upload = '$today'");
    $total_akun = $crud->hitung('user');
    $lastest = $crud->lastest();
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect"  style="background-color : #34495e;">
                        <div class="icon">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="content">
                            <div style="color : #fff;" class="text">TOTAL SEMUA SURAT</div>
                            <div style="color : #fff;" class="number count-to" data-from="0" data-to="<?= $total[0]['jumlah'] ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect" style="background-color : #34495e;">
                        <div class="icon">
                            <i class="material-icons">filter</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color : #fff;">TOTAL SURAT HARI INI</div>
                            <div style="color : #fff;" class="number count-to" data-from="0" data-to="<?= $total_today[0]['jumlah'] ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect" style="background-color : #34495e;">
                        <div class="icon">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color : #fff;">TOTAL SEMUA AKUN</div>
                            <div class="number count-to" data-from="0" data-to="<?= $total_akun[0]['jumlah'] ?>" data-speed="1000" data-fresh-interval="20" style="color : #fff;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

            <div class="row clearfix">
                                <!-- Task Info -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>UPLOAD TERBARU</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Surat</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Uploader</th>
                                            <th>Pilhan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i = 1;
                                        foreach($lastest as $last) {
                                    ?>
                                        <tr>
                                            <td><?= $i++;  ?></td>
                                            <td><?= $last['judul'] ?></td>
                                            <td><span class="label bg-orange"><?= $last['tanggal_upload'] ?></span></td>
                                            <td><span class="label bg-green"><?= $last['jam'] ?></span></td>
                                            <td><?= $last['nama'] ?></td>
                                            <td>
                                                <a href="<?= BASE_URL;?>suratdetail/<?=  $last['id_surat'] ?>" class="btn btn-primary waves-effect">
                                                    <i class="material-icons">launch</i>
                                                    <span>Lihat</span>
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
                <!-- #END# Task Info -->
            
            </div>

        </div>
    </section>

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

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?= BASE_URL;?>view/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?= BASE_URL;?>view/plugins/raphael/raphael.min.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?= BASE_URL;?>view/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?= BASE_URL;?>view/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?= BASE_URL;?>view/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?= BASE_URL;?>view/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?= BASE_URL;?>view/js/admin.js"></script>
    <script src="<?= BASE_URL;?>view/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?= BASE_URL;?>view/js/demo.js"></script>
</body>

</html>
