<?php
require_once("core/init.php");
$id = $_SESSION['id_user'];
$user = $crud->show("user", "id_user = '$id'");
//Fungsi upload gambar
function UploadGambar($img_name){
    header("Content-type: image/jpeg");

    //tempat direktory gambar
    $vdir_small ="surat/sm/";
    $vdir_medium = "surat/md/";
    $vdir_upload = "surat/";
    $vfile_upload = $vdir_upload . $img_name;

    //Simpan gambar dalam ukuran asli
    move_uploaded_file($_FILES["img"]["tmp_name"], $vfile_upload);

    //identitas file asli
    $im_src = imagecreatefromjpeg($vfile_upload);
    $src_width = imageSX($im_src);
    $src_height = imageSY($im_src);

    //Simpan dalam versi small 110px
    $dst_width = 110;
    $dst_height = ($dst_width/$src_width)*$src_height;

    //proses perubahan ukuran
    $im = imagecreatetruecolor($dst_width,$dst_height);
    imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

    //Simpan gambar
    imagejpeg($im,$vdir_small . "small_" . $img_name);

    //Simpan dalam ukuran medium 320px
    $dst_width = 320;
    $dst_height = ($dst_width/$src_width)*$src_height;

    //proses untuk perubahan ukuran
    $im = imagecreatetruecolor($dst_width,$dst_height);
    imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

    //menyimpan gambar
    imagejpeg($im,$vdir_medium . "medium_" . $img_name);

    imagedestroy($im_src);
    imagedestroy($im);
}
//Mengupload Gambar
UploadGambar($_FILES["img"]["name"]);
if($_POST['add']){
    $judul = @$_POST['judul'];
    $keterangan = @$_POST['keterangan'];
    $tanggal_surat = @$_POST['tanggal'];
    $foto = $_FILES['img']['name'];
    $dir = $_FILES['img']['tmp_name'];                                 
    $data = array(
        'id_surat'=> null,
        'id_user' => $id,
        'id_divisi' => 2,
        'tanggal_surat' => $tanggal_surat,
        'tanggal_upload' => $today,
        'jam' => $waktu,
        'judul'=> $judul,
        'keterangan' => $keterangan,
        'gambar' => $foto
        );
      $crud->insert("surat", $data); 
      if($_SESSION['id_level'] == 1) {
          header('location:index.php?page=cari_surat&msg=done&act=input');    
      }else{
          header('location:index.php?msg=done&act=input');
      }
}elseif($_POST['edit']){
    $judul = @$_POST['judul'];
    $id_surat = @$_POST['id_surat'];
    $keterangan = @$_POST['keterangan'];                       
    $data = array(
        'judul'=> $judul,
        'keterangan' => $keterangan,
        );
      $crud->update("surat", $data,"id_surat = $id_surat");
      header("location:index.php?page=view_surat&id=$id_surat&msg=done&act=input");    
}
 
                              
?>