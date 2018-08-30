<section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH USER</h2>
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
                            <form action = "upload_user.php"id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" required>
                                        <label class="form-label">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" required>
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                     <select class="form-control show-tick" name="jenis_kelamin" required>
                                        <option value="">--- JENIS KELAMIN ---</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Alamat Lengkap</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                     <select class="form-control show-tick" name="divisi" required>
                                        <option value="">--- Pilih Divisi ---</option>
                                        <?php 
                                            $row = $crud->show("divisi");
                                            foreach ($row as $data_divisi) {
                                        ?>
                                        <option value="<?= $data_divisi["id_divisi"] ?>"><?= $data_divisi['nama_divisi']?></option>
                                        <?php
                                            }
                                        ?>
                                     
                                    
                                    </select>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="hp" required>
                                        <label class="form-label">No Handphone</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Foto User <span class="font-italic">(Extensi Harus .jpg)</span></label>
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="foto" required>
                                        
                                    </div>
                                </div>
                                <input class="btn btn-primary waves-effect" name="add" type="submit" value="Tambah" id="tambah">
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        
        </div>
    </section>
<?php
    require_once("view/footer.php");
?>