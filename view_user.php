<?php
    require_once("view/header.php");
    require_once("view/nav.php");
    $id_selected = @$_GET['id'];
    $user_selected = $crud->showCustom("*", "user", "divisi", "user.id_divisi = divisi.id_divisi" ,"id_user = $id_selected");
    $data_surat_user_selected = $crud->showCustom("surat.id_user, surat.id_divisi, surat.jam, surat.judul, surat.id_surat, surat.keterangan, surat.gambar, divisi.nama_divisi","surat", "divisi","surat.id_divisi = divisi.id_divisi", "id_user = $id_selected");
?>
    <section class="content">
        <div class="container-fluid">
            <!-- Changelogs -->
            <div class="block-header">
                <h2>CHANGELOGS</h2>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Divis <?= $user_selected[0]['nama_divisi'] ?></h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <tbody>
                                        <tr>
                                            <td width="13%">Nama</td>
                                            <td width="1%">:</td>
                                            <td width="86%"> <?= $user_selected[0]['nama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td width="13%">Username</td>
                                            <td width="1%">:</td>
                                            <td width="86%"> <?= $user_selected[0]['username'] ?></td>
                                        </tr>
                                        <tr>
                                            <td width="13%">Email</td>
                                            <td width="1%">:</td>
                                            <td width="86%"> <?= $user_selected[0]['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td width="25%">Jenis Kelamin</td>
                                            <td width="1%">:</td>
                                            <td width="74%"> <?= $user_selected[0]['jk'] ?></td>
                                        </tr>
                                        <tr>
                                            <td width="13%">No Handphone</td>
                                            <td width="1%">:</td>
                                            <td width="86%"> <?= $user_selected[0]['hp'] ?></td>
                                        </tr>
                                        <tr>
                                            <td width="13%">Alamat</td>
                                            <td width="1%">:</td>
                                            <td width="86%"> <?= $user_selected[0]['alamat'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="<?= BASE_URL; ?>edituser/<?= $user_selected[0]["id_user"] ?>" class="btn btn-success waves-effect">
                                   <i class="material-icons">launch</i>
                                   <span>Edit User</span>
                                </a>
                                <a href="<?= BASE_URL; ?>upload_user.php?page=delete_user&id=<?= $user_selected[0]["id_user"] ?>" class="btn btn-danger waves-effect">
                                   <i class="material-icons">delete</i>
                                   <span>Hapus User</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>FOTO</h2>
                            <ul class="header-dropdown m-r--5">
                            </ul>
                        </div>
                        <div class="body">
                            <img src="<?= BASE_URL;?>surat/user/<?= $user_selected[0]['foto']?>.jpg" alt="" width="90%">
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="header">
                        
                                <h2>
                                    Arsip yang di upload hari ini
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
                                                foreach($data_surat_user_selected as $foto){
                                            ?>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:void(0);">
                                                            <img class="media-object" src="<?= BASE_URL; ?>surat/<?=$foto['gambar'] ?>" width="64" height="64">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="media-body">
                                                            <h4 class="media-heading" id=><?=$foto['judul'] ?></h4> <?=$foto['keterangan'] ?>
                                                        </div>
                                                    </td>
                                                    <td width="30%">
                                                        <a href="<?= BASE_URL;?>suratdetail/<?= $foto['id_surat'] ?>"   class="btn btn-primary waves-effect">
                                                            <i class="material-icons">launch</i>
                                                            <span>Lihat</span>
                                                        </a>
                                                        <a href="<?= BASE_URL;?>index.php?page=edit_surat&id=<?= $foto['id_surat'] ?>" class="btn btn-success waves-effect">
                                                            <i class="material-icons">edit</i>
                                                            <span>Edit</span>
                                                        </a> 
                                                        <a href="<?= BASE_URL;?>print/<?= $foto['id_surat']  ?>"  target="_blank" class="btn bg-orange waves-effect">
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
     
  <!-- Live-Search Customs -->
  <script src="<?= BASE_URL;?>view/js/live-search.js"></script>
     
<?php
    require_once("view/footer.php");
?>