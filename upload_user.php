<?php
require_once("core/init.php");
$username = $_POST['username'];
if(@$_POST['add']){
    if(!$login->cek_user($username)){
        // Foto
        $ekstensi_diperbolehkan	= array('jpg');
        $foto = $_FILES['foto']['name'];
        $file_foto = $username.'.jpg';
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];
        $nama = $_POST['nama'];
        
        $email = $_POST['email'];
        $jenis_kelamin =$_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $divisi = $_POST['divisi'];
        $password = md5($_POST['password']);
        $hp = $_POST['hp'];
        $data = array(
            'id_user' => null,
            'id_level' => 2,
            'id_divisi' =>$divisi,
            'nama' => $nama,
            'username' => $username,
            'email' => $email,
            'jk' => $jenis_kelamin,
            'hp' => $hp,
            'alamat' => $alamat,
            'password'=> $password,
            'foto' => $username
        );
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                move_uploaded_file($file_tmp, 'surat/user/'.$username.'.jpg');
                $crud->insert("user",$data);     
                header("location:index.php?page=data_user&msg=done&act=input");    
            }else{
                echo "Extensi Harus JPG";
            }
    }else{
        header("location:index.php?page=data_user&msg=exist"); 
    }


    
                         
}elseif(@$_POST['edit']){
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $jenis_kelamin =$_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $data = array(
        'nama' => $nama,
        'username' => $username,
        'email' => $email,
        'jk' => $jenis_kelamin,
        'hp' => $hp,
        'alamat' => $alamat

    );
  $crud->update("user",$data, "id_user = $id");
  header("location:index.php?page=data_user&msg=done&act=input");
}elseif(@$_GET['page']== "delete_user"){
        $id = @$_GET['id'];
        $crud->delete("user","id_user = $id");
        header("location:index.php?page=data_user&msg=done");
} 

?>