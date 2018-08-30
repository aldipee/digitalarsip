
<?php
    include("../../header.php");
    include("../../nav.php");
?>
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
                            <form id="form_validation" method="POST">
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
                                        <option value="2">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
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
                                <input class="btn btn-primary waves-effect" name="add" type="submit" value="Tambah" id="tambah">
                            </form>
                            <?php
                                if(@$_POST['add']){
                                    $nama = $_POST['nama'];
                                    $username = $_POST['username'];
                                    $email = $_POST['email'];
                                    $jenis_kelamin =$_POST['jenis_kelamin'];
                                    $alamat = $_POST['alamat'];
                                    $divisi = $_POST['divisi'];
                                    $password = md5($_POST['password']);
                                    $hp = $_POST['hp'];
                                    $data = array(
                                        'id_user' => null,
                                        'id_level' => 2,
                                        'id_divisi' =>$divisi,
                                        'nama' => $nama,
                                        'username' => $username,
                                        'email' => $email,
                                        'jk' => $jenis_kelamin,
                                        'hp' => $hp,
                                        'alamat' => $alamat,
                                        'password'=> $password
                                    );
                                  $crud->insert("user",$data);
                                  
                                  
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->

        </div>
    </section>
<?php
    include("../../footer.php");
?>