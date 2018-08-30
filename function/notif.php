<?php
    $msg = isset($_GET['msg']) ? $_GET['msg'] : false;
    $act = isset($_GET['act']) ? $_GET['act'] : false;
    $notif = "";
    if($msg == "done" && $act = "delete"){
        $notif ="
            <div id='notifikasi' class='alert alert-success'>
            <strong>Berhasil</strong> 
            </div>" ;
    }
    
    elseif ($msg == "done" && $act = "input") {
        $notif ="
            <div id='notifikasi' class='alert alert-success'>
            <strong>Berhasil</strong>
            </div>" ;
    }elseif($msg = "exist"){
        $notif ="
        <div id='notifikasi' class='alert alert-danger'>
        <strong>Username sudah ada!</strong>
        </div>" ;
    }

?>