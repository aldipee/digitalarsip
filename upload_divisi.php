<?php
require_once("core/init.php");
if(@$_POST['add']){
    $nama_divisi = $_POST['nama_divisi'];
    $data = array(
        'id_divisi' => null,
        'nama_divisi' => $nama_divisi
    );
  $crud->insert("divisi",$data);     
  header("location:index.php?page=data_divisi&msg=done");                         
}elseif(@$_POST['edit']){
    $id_divisi = $_POST['id_divisi'];
    $nama_divisi = $_POST['nama_divisi'];
    $data = array(
        'nama_divisi' => $nama_divisi
    );
    $crud->update("divisi",$data, "id_divisi = $id_divisi");   
    header("location:index.php?page=data_divisi&msg=done");      
}elseif(@$_GET['page'] == "delete_divisi"){
    $id_divisi = isset($_GET['id']) ? $_GET['id'] : false;
    $crud->delete("divisi", "id_divisi = $id_divisi");
    header("location:index.php?page=data_divisi&msg=done"); 
}

?>