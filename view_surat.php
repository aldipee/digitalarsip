<?php
    require_once("view/header.php");
    require_once("view/nav.php");
    $id_surat = $_GET['id'];
    $surat = $crud->showCustom("*","surat","user","user.id_user = surat.id_user", "surat.id_surat = $id_surat");
    $id_surat_hapus = $surat[0]['id_surat'];
?>
    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
            <div class="block-header">
                <h2>DETAIL SURAT</h2>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                    <?php
                        if($notif != ""){
                            echo $notif;
                        }
                    ?>
                        <div class="header">
                            <h2><?= $surat[0]['judul'] ?></h2>
                        </div>
                        <div class="body">
                            <img src="<?= BASE_URL."surat/".$surat[0]['gambar'] ?>" alt="" width="100%" height="100%">
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Informasi Surat</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                        <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <tbody>
                                        <tr>
                                            <label >Pengupload</label>
                                            <p><?= $surat[0]['nama'] ?></p>
                                        </tr>
                                        <label >Keterangan Waktu</label>
                                        <tr>
                                            <td width>Tanggal Upload</td>
                                            <td width>:</td>
                                            <td width> <?= $surat[0]['tanggal_upload'] ?></td>
                                        </tr>
                                        <tr>
                                            <td width>Waktu Upload</td>
                                            <td width>:</td>
                                            <td width> <?= $surat[0]['jam'] ?></td>
                                        </tr>
                                        <tr>
                                            <td width>Tanggal Surat</td>
                                            <td width>:</td>
                                            <td width> <?= $surat[0]['tanggal_surat'] ?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                                <label >Keterangan</label>
                                <p><?= $surat[0]['keterangan'] ?></p>
                                <a href="<?= BASE_URL; ?>print/<?=  $surat[0]['id_surat'] ?>" target="_blank" class="btn bg-orange waves-effect">
                                    <i class="material-icons">launch</i>
                                    <span>Cetak</span>
                                </a> 
                                <?php
                                    if($_SESSION['id_level'] == 1)
                                    echo "
                                    <a href='".$uri."delete_surat.php?id=$id_surat_hapus'  class='btn btn-danger waves-effect'>
                                     <i class='material-icons'>delete</i>
                                     <span>Hapus</span>
                                    </a> 
                                    ";
                                ?>
                                
                            </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>
  <!-- New JQEURY -->
  <script src="<?= BASE_URL; ?>view/js/jquery-3.3.1.js"></script>
     
  <!-- Live-Search Customs -->
  <script src="<?= BASE_URL;?>view/js/live-search.js"></script>
     
<?php
    require_once("view/footer.php");
?>