    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                GALLERI SEMUA SURAT
                                <small></small>
                            </h2>
        
                        </div>
                        <div class="body">
                            <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                               <?php
                                    $data = $crud->show("surat");
                                    foreach($data as $foto){
                                ?>
                                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="<?= BASE_URL; ?>surat/<?= $foto['gambar']?>" data-sub-html="<?= $foto['judul'] ?>">
                                            <img class="img-responsive thumbnail" src="<?= BASE_URL; ?>surat/md/medium_<?= $foto['gambar']?>" style="width:200px;height:250px;" >
                                        </a>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include("view/footer.php");
?>