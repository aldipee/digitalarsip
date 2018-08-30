<section class="content">
<?php
    $all_surat = $crud->allData();
    $total_surat = $crud->hitung('surat');
?>
        <div class="container-fluid">
            <!-- Basic Validation -->
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
                               Semua Surat
                                <small>Jumlah Seluruh Surat :  <?= $total_surat[0]['jumlah'] ?></small>
                            </h2>     
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">search</i>
                                            </span>
                                            <div class="form-line">
                                                <input id="live-search"type="text" class="form-control date live-search-box" placeholder="Cari Judul Surat">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover dashboard-task-infos">
                                        <tbody id="surat_data">
                                            <?php
                                                foreach($all_surat as $all){
                                            ?>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <img class="media-object" src="<?= BASE_URL; ?>surat/<?=$all['gambar'] ?>" width="64" height="64">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h4 class="media-heading" ><?=$all['judul'] ?></h4>
                                                            <p id="keterangan"><?=$all['keterangan'] ?></p>
                                                            <span id="uploader" class="col-grey font-italic">Upload : <?= $all['nama'] ?></span>
                                                            <span id="tanggal" class="col-grey font-italic font-underline"><?= $all['tanggal_upload'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td width="20%">
                                                        <a href="<?= BASE_URL;?>suratdetail/<?=  $all['id_surat'] ?>"  class="btn btn-primary waves-effect">
                                                            <i class="material-icons">launch</i>
                                                            <span>Lihat</span>
                                                        </a>
                                                        <!-- <a href="?page=edit_surat&id= class="btn btn-success waves-effect">
                                                            <i class="material-icons">edit</i>
                                                            <span>Edit</span>
                                                        </a>  -->
                                                        <a href="<?= BASE_URL;?>print/<?=  $all['id_surat'] ?>" target="_blank" class="btn bg-orange waves-effect">
                                                            <i class="material-icons">print</i>
                                                            <span>Cetak</span>
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
            </div>
            <!-- #END# Basic Validation -->
        
        </div>
    </section>
    
  <!-- New JQEURY -->
  <script src="<?= BASE_URL; ?>view/js/jquery-3.3.1.js"></script>

<script type="text/javascript">
      $('#notifikasi').slideDown().delay(3000).slideUp();    
  </script>
   
<!-- Live-Search Customs -->
<script src="<?= BASE_URL;?>view/js/live-search.js"></script>
<?php
    require_once("view/footer.php");
?>