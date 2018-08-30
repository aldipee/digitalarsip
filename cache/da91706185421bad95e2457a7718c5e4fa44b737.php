<?php

if(time() >= $_da91706185421bad95e2457a7718c5e4fa44b737_time = 1535552457) return;
$_da91706185421bad95e2457a7718c5e4fa44b737 = true;

header('X-Powered-By: PHP/7.0.31');
header('Expires: Thu, 19 Nov 1981 08:52:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Pragma: no-cache');

?>    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Aplikasi Arsip Surat</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- PACE JS -->
        <script data-pace-options='{ "ajax": false }' src="http://localhost/80/view/plugins/pace/pace.js"></script>
	    <link href="http://localhost/80/view/plugins/pace/themes/orange/pace-theme-minimal.css" rel="stylesheet">  

        <!-- OFFLINE JS -->
        <script src="http://localhost/80/view/plugins/offline/offline.min.js"></script>
	    <link href="http://localhost/80/view/plugins/offline/english.css" rel="stylesheet"> 
        <link href="http://localhost/80/view/plugins/offline/offline-theme-slide.css" rel="stylesheet">  


        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core Css -->
        <link href="http://localhost/80/view/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Waves Effect Css -->
        <link href="http://localhost/80/view/plugins/node-waves/waves.css" rel="stylesheet" />
 
        <!-- Animation Css -->
        <link href="http://localhost/80/view/plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Sweet Alert Css -->
        <link href="http://localhost/80/view/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="http://localhost/80/view/css/style.css" rel="stylesheet">

        <!-- JQuery DataTable Css -->
        <link href="http://localhost/80/view/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Light Gallery Plugin Css -->
        <link href="http://localhost/80/view/plugins/light-gallery/css/lightgallery.css" rel="stylesheet">

        <link href="http://localhost/80/view/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="http://localhost/80/view/css/themes/all-themes.css" rel="stylesheet" />

        <!-- Dropzone Css -->
        <link href="http://localhost/80/view/plugins/dropzone/dropzone.css" rel="stylesheet">

        <!-- Multi Select Css -->
        <link href="http://localhost/80/view/plugins/multi-select/css/multi-select.css" rel="stylesheet">


    </head><body class="theme-red">
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
        <nav class="navbar" style="background-color : #34495e;">
        <div class="container-fluid">
        <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">ADMINISTRASI ARSIP SURAT</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <div class="nav navbar-nav navbar-right">
                    <span class="col-white"><b>Rabu</b> 29 August 2018</span>
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
                    <img src="http://localhost/80/surat/user/aldipee.jpg" width="58" height="58" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="font-bold">Aldi Pranata</span></div>
                    <div class="email">Divisi Administrator</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="http://localhost/80/home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
            
                            <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>User</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="http://localhost/80/userbaru">Input User Baru</a>
                            </li>
                            <li>
                                <a href="http://localhost/80/datauser">Lihat Data User</a>
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
                                <a href="http://localhost/80/inputsurat">Input Surat</a>
                            </li>
                            <li>
                                <a href="http://localhost/80/index.php?page=galeri#lg=1&slide=0">Galeri Surat</a>
                            </li>
                            <li>
                                <a href="http://localhost/80/carisurat">Cari Surat</a>
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
                                <a href="http://localhost/80/inputdivisi">Input Divisi</a>
                            </li>
                            <li>
                                <a href="http://localhost/80/datadivisi">Data Divisi</a>
                            </li>
                        </ul>
                    </li>
                                      

            

                    <li>
                        <a href="http://localhost/80/logout.php">
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
    </section>﻿    <section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                                            <div class="header">
                            <h2>
                                SELURUH DATA USER 
                            </h2>
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>No Handphone</th>
                                            <th>Divisi</th>
                                            <th>Jumlah Surat</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                                                            <tr>
                                            <td>Rahayu Oktaviani </td>
                                            <td>ayu@gmail.com</td>
                                            <td>081367946763</td>
                                            <td>Keuangan</td>
                                            <td>23</td>
                                            <td>
                                            <a href="userdetail/30" class="btn btn-info waves-effect">
                                                 <i class="material-icons">info</i>
                                                <span>Lihat</span>
                                            </a>
                                            <!-- <a href="?page=edit_user&id=30" class="btn btn-success waves-effect">
                                                 <i class="material-icons">edit</i>
                                                <span>Edit</span>
                                            </a>
                                            <a href="?page=delete_user&id=30" onclick="confirm('Anda yakin mau menghapus?')" class="btn btn-danger waves-effect" data-type="confirm">
                                                 <i class="material-icons">delete</i>
                                                <span>Hapus</span>
                                            </a> -->
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td>Abi Daniela </td>
                                            <td>lala@gmail.com</td>
                                            <td>0813648484</td>
                                            <td>Kearsipan</td>
                                            <td>23</td>
                                            <td>
                                            <a href="userdetail/31" class="btn btn-info waves-effect">
                                                 <i class="material-icons">info</i>
                                                <span>Lihat</span>
                                            </a>
                                            <!-- <a href="?page=edit_user&id=31" class="btn btn-success waves-effect">
                                                 <i class="material-icons">edit</i>
                                                <span>Edit</span>
                                            </a>
                                            <a href="?page=delete_user&id=31" onclick="confirm('Anda yakin mau menghapus?')" class="btn btn-danger waves-effect" data-type="confirm">
                                                 <i class="material-icons">delete</i>
                                                <span>Hapus</span>
                                            </a> -->
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td>Andini</td>
                                            <td>andini@gmail.com</td>
                                            <td>1223132</td>
                                            <td>Keuangan</td>
                                            <td>23</td>
                                            <td>
                                            <a href="userdetail/38" class="btn btn-info waves-effect">
                                                 <i class="material-icons">info</i>
                                                <span>Lihat</span>
                                            </a>
                                            <!-- <a href="?page=edit_user&id=38" class="btn btn-success waves-effect">
                                                 <i class="material-icons">edit</i>
                                                <span>Edit</span>
                                            </a>
                                            <a href="?page=delete_user&id=38" onclick="confirm('Anda yakin mau menghapus?')" class="btn btn-danger waves-effect" data-type="confirm">
                                                 <i class="material-icons">delete</i>
                                                <span>Hapus</span>
                                            </a> -->
                                            </td>
                                        </tr>
                                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>


    <!-- Jquery Core Js -->
    <script src="http://localhost/80/view/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $('#notifikasi').slideDown().delay(1500).slideUp();    
    </script>

    <!-- Bootstrap Core Js -->
    <script src="http://localhost/80/view/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="http://localhost/80/view/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="http://localhost/80/view/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="http://localhost/80/view/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="http://localhost/80/view/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="http://localhost/80/view/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="http://localhost/80/view/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="http://localhost/80/view/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="http://localhost/80/view/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="http://localhost/80/view/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="http://localhost/80/view/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="http://localhost/80/view/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>


    <!-- Custom Js -->
    <script src="http://localhost/80/view/js/admin.js"></script>
    <script src="http://localhost/80/view/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="http://localhost/80/view/js/demo.js"></script>
</body>

</html>


    