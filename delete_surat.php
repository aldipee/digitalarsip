<?php
require_once('core/init.php');
    $id = @$_GET['id'];
    $crud->delete("surat", "id_surat = $id");
    if($_SESSION['id_level'] == 1){
        header("location:index.php?page=cari_surat&msg=done&act=delete");
    }else{
        header("location:index.php?msg=done&act=delete");
    }
?>