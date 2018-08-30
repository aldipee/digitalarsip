<section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH ARSIP SURAT</h2>
                        </div>
                        <div class="body">
                            <form action ="upload_surat.php"id="form_validation" method="POST"  enctype='multipart/form-data' >
                                <div class="form-group form-float">
                                <label class="form-label">Judul Surat</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" required placeholder="Masukan Judul Surat">
                                        
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="form-group form-float">
                              
                                    <div class="col-sm-3">
                                    <label class="form-label">Tanggal Surat</label>
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="tanggal" required>
                                        </div>
                                    </div>
                                </div>
                                    
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Keterangan Surat</label>
                                    <div class="form-line">
                                        <textarea name="keterangan" class="form-control " required placeholder="Keterangan Surat"></textarea>
        
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Foto Surat </label>
                                <span class="col-red font-italic"> (Extensi File Harus .jpg) <span>
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="img" required>
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