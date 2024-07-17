<head>
    <?php
    $site_title = 'Login | Givni - Admin';
    include "givni/include/connection.php";
    include "givni/include/submit.php";
    // $base_url = 'http://localhost/givni.in';

    ?>
    <meta charset="utf-8" />
     <title><?php echo $site_title; ?></title>
    <link rel="icon" href="assets/images/givni-logo.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="Givni is best IT software company in patna Bihar." />
    <meta content="Givni" name="author" />
    <!-- App favicon -->

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="bg-pattern">
    <div class="bg-overlay"></div>
    <div class="bg-auth-login">
    <div class="account-pages py-4 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8" style="backdrop-filter: blur(11px);">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4">
                            <div class="">
                                <div class="text-center">
                                    <a href="<?php echo $base_url; ?>" class="">
                                        <img src="assets/img/logo.jpg" alt="givni-img" height="50" class="auth-logo logo-dark mx-auto">
                                    </a>
                                </div>
                                <!-- end row -->
                                <h4 class="font-size-18  mt-2 text-light text-center">Welcome Back !</h4>
                                <p class="mb-5 text-center text-light">Sign in to continue to Givni.</p>

                                <form class="form-horizontal" method="post">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label text-light" for="username">Email</label>
                                                <input type="text" class="form-control placeholder_text" id="username" name="admin_email" placeholder="Enter email" style="background: none;
                                                color: white !important; border: 2px solid white;">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label text-light" for="userpassword">Password</label>
                                                <input type="password" class="form-control placeholder_text" id="userpassword" name="admin_password" placeholder="Enter password" style="background: none; color: white !important;     border: 2px solid white;">
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                                        <label class="form-label text-light" class="form-check-label" for="customControlInline">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="text-md-end mt-3 mt-md-0">
                                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-primary bg_btn waves-effect waves-light" type="submit" name="auth_login">Log In</button>
                                            </div>
                                            <div class="d-grid mt-4">
                                                <a href="<?php echo $base_url; ?>" class="btn  btn-primary bg_btn1">Back to Home</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end Account pages -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>