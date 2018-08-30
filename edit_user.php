    <?php
        $id = @$_GET['id'];
        $show = $crud->show('user', "id_user = $id");
    ?>
    <section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT USER</h2>
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
                            <form action ="upload_user.php"id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" value ="<?= $show[0]['nama']?>">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="hidden" value= "<?= $id ?>" name="id">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" value ="<?= $show[0]['username']?>">
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" value ="<?= $show[0]['email']?>">
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                     <select class="form-control show-tick" name="jenis_kelamin" required>
                                        <option value="Laki-Laki" <?php  if($show[0]['jk'] == "Laki-Laki") {echo "selected";} ?>>Laki-Laki</option>
                                        <option value="Perempuan" <?php  if($show[0]['jk'] == "Perempuan") {echo "selected";} ?>>Perempuan</option>
                                    </select>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" ><?= $show[0]['alamat']?></textarea>
                                        <label class="form-label">Alamat Lengkap</label>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                     <select class="form-control show-tick" name="divisi" required>
                                        <option value="">--- Pilih Divisi ---</option>
                                        <option value="2">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div> -->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="hp" value ="<?= $show[0]['hp']?>">
                                        <label class="form-label">No Handphone</label>
                                    </div>
                                </div>
                                <input class="btn btn-primary waves-effect" name="edit" type="submit" value="Edit Data" id="edit">
                            </form>
                            <?php
                                
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

        </div>
    </section>
<?php
    include("view/footer.php");
?>