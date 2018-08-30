<?php
    $all_surat = $crud->allData("user.id_user = $id");
?>


    <section class="content">
        <div class="container-fluid">
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
                                   Semua Surat
                                    <small>15th November 2016</small>
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
                                                            <h4 class="media-heading" id=><?=$all['judul'] ?></h4>
                                                             <p><?=$all['keterangan'] ?></p>
                                                             <span class="col-grey font-italic">Tanggal Upload : <?= $all['tanggal_upload'] ?></span>
                                                              
                                                        </div>
                                                    </td>
                                                    <td width="30%">
                                                        <a href="?page=view_surat&id=<?= $all['id_surat'] ?>" class="btn btn-primary waves-effect">
                                                            <i class="material-icons">launch</i>
                                                            <span>Lihat</span>
                                                        </a>
                                                        <a href="?page=edit_surat&id=<?= $all['id_surat'] ?>" class="btn btn-success waves-effect">
                                                            <i class="material-icons">edit</i>
                                                            <span>Edit</span>
                                                        </a> 
                                                        <a href="cetak_surat.php?id=<?= $all['id_surat']  ?>"  target="_blank" class="btn bg-orange  waves-effect">
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
        </div>
    </section>
  <!-- New JQEURY -->
  <script src="<?= BASE_URL; ?>view/js/jquery-3.3.1.js"></script>
  <script type="text/javascript">
        $('#notifikasi').slideDown().delay(1400).slideUp();    
    </script>
     
     
  <!-- Live-Search Customs -->
  <script src="<?= BASE_URL;?>view/js/live-search.js"></script>
     