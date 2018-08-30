<body class="theme-red">
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <?php
    $id = $_SESSION['id_user'];
    $level = $_SESSION['id_level'];
    $user = $crud->show("user","id_user = '$id'");
    $id_div = $user[0]['id_divisi'];
    $divisi = $crud->show('divisi', "id_divisi = '$id_div'");
    $url =  BASE_URL;
    ?>
    <nav class="navbar" style="background-color : #34495e;">
        <div class="container-fluid">
        <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">ADMINISTRASI ARSIP SURAT</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <div class="nav navbar-nav navbar-right">
                    <span class="col-white"><?= $day.' ' .$today_normal ?></span>
                </div>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?= BASE_URL;?>surat/user/<?= $user[0]['foto'] ?>.jpg" width="58" height="58" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="font-bold"><?= $user[0]['nama'] ?></span></div>
                    <div class="email">Divisi <?= $divisi[0]['nama_divisi'] ?></div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?=$url?>home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
            <?php
                if($level == 1){
                    echo '
                            <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>User</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="'.$url.'userbaru">Input User Baru</a>
                            </li>
                            <li>
                                <a href="'.$url.'datauser">Lihat Data User</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Surat</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="'.$url.'inputsurat">Input Surat</a>
                            </li>
                            <li>
                                <a href="'.$url.'index.php?page=galeri#lg=1&slide=0">Galeri Surat</a>
                            </li>
                            <li>
                                <a href="'.$url.'carisurat">Cari Surat</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_horiz</i>
                            <span>Divisi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="'.$url.'inputdivisi">Input Divisi</a>
                            </li>
                            <li>
                                <a href="'.$url.'datadivisi">Data Divisi</a>
                            </li>
                        </ul>
                    </li>
                  ';
                }else{
                    echo '
                    <!-- START FOR ORDINARY USER -->
                    <li>
                        <a href="'.$url.'inputsurat">
                            <i class="material-icons">content_copy</i>
                            <span>Input Surat</span>
                        </a>
                    </li>
                    ';
                }
            ?>
                    

            

                    <li>
                        <a href="<?= $url ?>logout.php">
                            <i class="material-icons">input</i>
                            <span>Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy;2018
                    <a href="javascript:void(0);" >Aldi Pranata</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
    </section>