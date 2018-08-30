<section class="content">
        <div class="container-fluid">
           <?php
                $id = @$_GET['id'];
                $edit_surat = $crud->show("surat", "id_surat = $id");
           ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT ARSIP SURAT</h2>
                        </div>
                        <div class="body">
                            <form action ="upload_surat.php"id="form_validation" method="POST"  enctype='multipart/form-data' >
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input value="<?= $edit_surat[0]['judul'] ?>" type="text" class="form-control" name="judul" required>
                                        <label class="form-label">Judul</label>
                                        <input name="id_surat" type="hidden" value="<?= $edit_surat[0]['id_surat'] ?>"> 
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="keterangan"class="form-control no-resize" required><?= $edit_surat[0]['keterangan'] ?></textarea>
                                        <label class="form-label">Keterangan</label>
                                    </div>
                                </div>
                                <!-- <div class="form-group form-float dropzone">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph">
                                            <i class="material-icons">touch_app</i>
                                        </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple/>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="img" required>
                                    </div>
                                </div> -->
                                <input class="btn btn-primary waves-effect" name="edit" type="submit" value="Tambah" id="tambah">
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