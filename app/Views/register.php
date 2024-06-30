<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="https://portalsi.pelindo.co.id/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://portalsi.pelindo.co.id/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="https://portalsi.pelindo.co.id/assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

        .user-login-5 .login-container > .login-content {
            margin-top: 5%;
        }
        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .logo-container img {
            max-height: 100px; /* Ubah ukuran gambar sesuai kebutuhan */
            margin-right: 10px;
        }
        .logo-container h1 {
            margin: 0;
            font-size: 50px; /* Ubah ukuran font sesuai kebutuhan */
            color: #007bff;
            font-family: 'Poppins', sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo-container h1 span {
            color: #ff5733; /* Ubah warna ini sesuai keinginan */
            margin-left: 10px; /* Tambahkan margin kiri untuk memberikan spasi antara "Portal" dan "si" */
        }
    </style>
</head>
<!-- END HEAD -->

<body class=" login">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset mt-login-5-bsfix hidden-xs">
                <div class="login-bg" style="background-image:url(https://www.safetynetsecurity.ca/wp-content/uploads/2022/08/cctv-security-camera-tree.jpg)"></div>
            </div>
            <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                <div class="login-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo-container">
                                <img src="/assets/img/logo cctv.png" alt="New Logo" class="img-responsive">
                                <h1>MONITOR<span>CCTV</span></h1>
                            </div>
                        </div>
                    </div>
                <div class="login-content">
                    <h1>Register</h1>
                    <p>PT Pelabuhan Indonesia (Persero)</p>

                    <form method="POST" action="register/save" class="login-form">
                        <input type="hidden" name="IDAPLIKASI" value="23" />
                        <div class="row">
                            <div class="col-xs-3">
                                <input type="text" class="form-control form-control-solid placeholder-no-fix form-group" name="username" value="<?php echo old('username'); ?>"  placeholder="Username" required autofocus />
                            </div>
                            <div class="col-xs-6">
                                <input type="email" class="form-control form-control-solid placeholder-no-fix form-group" name="email" value="<?php echo old('email'); ?>" placeholder="Email" required autofocus />
                            </div>
                            <div class="col-xs-3">
                                <input id="password" type="password" class="form-control form-control-solid placeholder-no-fix form-group" name="password" placeholder="Password" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-8 text-right">
                                <button class="btn green" type="submit">Daftar</button>
                                <a href="/login" class="btn default">Masuk disini</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>