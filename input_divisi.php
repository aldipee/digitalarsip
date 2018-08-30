<section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>TAMBAH DIVISI BARU</h2>
                        </div>
                        <div class="body">
                            <form action ="upload_divisi.php"id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_divisi" required>
                                        <label class="form-label">Nama Divisi Baru</label>
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