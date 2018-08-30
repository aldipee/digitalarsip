<?php
require_once("view/header.php");
$uri = BASE_URL;
if (!isset($_SESSION['username']) & !($_SESSION['id_level'])) {
	header("location:".$uri."masuk");
}
$user_name = ($_SESSION['username']);

require_once("view/nav.php");

// User
    if(@$_GET['page'] == "input_user"){ 
        include "input_user.php";
    }
    elseif(@$_GET['page'] =="edit_user"){
        include "edit_user.php";
    }
    elseif(@$_GET['page'] == "data_user"){
        include "data_user.php";
    }

    elseif (@$_GET['page'] == "view_user") {
        include "view_user.php";
    }
    elseif(@$_GET['page'] == "input_surat") {
        include "input_surat.php";
    }
    elseif (@$_GET['page'] == "cari_surat") {
        include "cari_surat2.php";
    }
    elseif (@$_GET['page'] == "my_surat") {
        include "user_surat.php";
    }
    elseif (@$_GET['page'] == "edit_surat") {
        include "edit_surat.php";
    }
    elseif (@$_GET['page'] == "view_surat"){
        include "view_surat.php";
    }
    elseif(@$_GET['page'] == "galeri"){
        include "galeri.php";
    }
    elseif(@$_GET['page'] == "input_divisi"){
        include "input_divisi.php";
    }
    elseif (@$_GET['page'] == "data_divisi") {
        include "data_divisi.php";
    }
    elseif (@$_GET['page'] == "edit_divisi") {
        include "edit_divisi.php";
    }
    elseif (@$_GET['page'] == "delete_divisi") {
        $id = $_GET['id'];
        $crud->delete("divisi","id_divisi = $id");
        header("location:index.php?page=data_divisi");
    }
    elseif(@$_GET[''] == ""){
        if($_SESSION['id_level'] == 1){
            include "dashboard.php";
        }else {
            include "user_surat.php";
        }
        
    }
// location of the text file that will log all the ip adresses
$file = "log/log_$today_log.txt";

// ip address of the visitor
$ipadress = $_SERVER['REMOTE_ADDR'];

// date of the visit that will be formated this way: 29/May/2011 12:20:03


// name of the page that was visited
$webpage = $_SERVER['SCRIPT_NAME'];

// visitor’s browser information
$browser = $_SERVER['HTTP_USER_AGENT'];

$url 	 = $_SERVER['REQUEST_URI'];


// Opening the text file and writing the visitor’s data
$fp = fopen($file, 'a');

fwrite($fp, $user_name.' – ['.$today.'- '.$waktu.'] -['.$webpage.']  -['.$url.']  -('.$browser.') END=>>'. PHP_EOL);

fclose($fp);
   
    
?>


    