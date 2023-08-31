<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PENDUKUNG KEPUTUSAN PENENTUAN KESESUAIAN LAHAN PADI</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/footer.css">
    <link rel="stylesheet" href="assets/login-clean.css">
    
</head>

<body style="background: #e5f5df">
    <div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
            <h5 class="navbar-brand">SISTEM PENDUKUNG KEPUTUSAN PENENTUAN KESESUAIAN LAHAN PADI</h5>
            </div>
        </nav>
    </div>

    <div class="login-clean" style="background: #e5f5df">
        <form method="post" action="proses_pengguna_login.php">
            <h2>Login Pengguna</h2>
            <div class="form-group"><input class="form-control" placeholder="masukkan username" name="username" type="username" required ></div>
            
            <div class="form-group"><input class="form-control" placeholder="masukkan Password" name="password" type="password" required ></div>
            <div class="form-group text-center">
                <button class="btn btn-success" name="login" id="login" type="submit">Log In</button>
            </div>
            <a href="daftar_pengguna_baru.php">belum punya akun? daftar disini</a>
            
        </form>

</div>
    <div class="footer-basic" style="background: #e5f5df">
        <footer>
            <p class="copyright"><?php echo date("Y") ?></p>
        </footer>
    </div>
    
</body>


</html>