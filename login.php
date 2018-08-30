<?php
require_once "core/init.php";
require_once "view/header.php";

$error = "";

if (isset($_SESSION['username'])) {
    header("location:index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if ($login->cek_user($username)) {
        if ($login->login($username, $password)) {
                $data_user = $crud->show("user", "username = '$username'");
                $_SESSION['id_level'] = $data_user[0]['id_level'];
                $_SESSION['id_divisi'] = $data_user[0]['id_divisi'];
                $_SESSION['id_user'] = $data_user[0]['id_user'];
                $_SESSION['username'] = $username;
                header("location:home");
        }else{
            $error ="
            <div class='alert alert-danger'>
            <strong>Password salah</strong> Silahkan Coba lagi!
            </div>" ;
        }
    }else {
        $error ="
            <div class='alert alert-warning'>
            <strong>Akun anda tidak terdaftar</strong> Silahkan hubungi Admin
            </div>" ;
    }
}

?>



<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">ARSIP<b>SURAT</b></a>
            <small>Aplikasi Arsip Surat Berbasis Website</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">Silahkan Login terlebih dahulu</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-deep-orange waves-effect" type="submit" name="submit">LOGIN</button>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if ($error != "") {
                            echo $error;
                        }
                        ?>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

<?php
require_once "view/footer.php";
?>