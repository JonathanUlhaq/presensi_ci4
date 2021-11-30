<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Presensi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">

            <div class="wrap-login100 p-t-50 p-b-90">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty(session()->getFlashdata('cap'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('cap'); ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty(session()->getFlashdata('msg'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4><?php echo session()->getFlashdata('msg') ?></h4>
                        </hr />
                        <?php echo session()->getFlashdata('msg'); ?>
                    </div>
                <?php endif; ?>
                <form class="login100-form validate-form flex-sb flex-w" method="post" action="<?= base_url(); ?>/Register/process">


                    <?= csrf_field(); ?>
                    <span class="login100-form-title p-b-51">
                        Registrasi E-Presensi
                        <p>Silahkan Isi Form Berikut</p>
                    </span>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                        <input class="input100" type="text" name="username" value="<?= old('username'); ?>" id="username" placeholder="Username" required autofocus>
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Name is required">
                        <input class="input100" type="text" name="name" id="name" value="<?= old('name'); ?>" placeholder="Nama" required autofocus>
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                        <input class="input100" type="password" name="password_conf" id="password_conf" placeholder="Konfirmasi Password" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="g-recaptcha" data-sitekey="<?= env('RECAPTCHAV3_SITEKEY') ?>"></div>

                    <div class="flex-sb-m w-full p-t-3 p-b-24">


                        <div>
                            <a href="/login" class="txt1">
                                Sudah Punya Akun
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>/js/main.js"></script>


    <?= session()->destroy(); ?>

</body>

</html>