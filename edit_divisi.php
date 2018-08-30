<section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT DIVISI </h2>
                            <?php
                                 $div = $_GET['id'];
                                 $sdiv = $crud->show('divisi', "id_divisi = $div");
                            ?>
                        </div>
                        <div class="body">
                            <form action="upload_divisi.php"id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_divisi" required value="<?= $sdiv[0]['nama_divisi'] ?> ">
                                        <input type="hidden" name="id_divisi" value="<?= $sdiv[0]['id_divisi'] ?>">
                                        <label class="form-label" >Nama Divisi Baru</label>
                                    </div>
                                </div>
                                <input class="btn btn-primary waves-effect" name="edit" type="submit" value="Edit" id="tambah">
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