<?php
$site_title = 'Givni - User Login';

// include "profile/include/submit.php";
include 'include/header.php';
?>

<body>
    <!-- Start Login Area -->
    <div class="ptb-80 mt-5 mt-lg-0">
        <div class="container pt-4">
            <div class="auth-form">
                <div class="auth-head">
                    <a href="<?php echo $base_url; ?>">
                        <img src="assets/img/logo.jpg">
                    </a>
                    <p>Hey, Enter your details to get sign in to your account!</p>
                </div>
                <form class="ajax-submit" data-return="success" data-url="profile/php/submit.php" data-callback="profile/">
                    <div class="mb-3">
                        <label class="form-label">Mobile No.</label>
                        <input type="number" name="login_phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="login_pass" class="form-control">
                    </div>
                    <div class="mb-3">
                        <a href="forgot-password">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <p>Don't have an account yet? <a href="register">Sign Up</a></p>
                <!-- <div class="foot">
                    <p>Or connect with</p>
                    <ul>
                        <li><a href="mailto:givniinfo@gmail.com" class="linkedin" target="_blank"><i data-feather="mail"></i></a></li>
                        <li><a href="https://www.facebook.com/givni1/" class="facebook" target="_blank"><i data-feather="facebook"></i></a></li>
                        <li><a href="https://twitter.com/GivniLimited" class="twitter" target="_blank"><i data-feather="twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCBTPoCDKlA_YZcIX8lyHGfQ" class="twitter" target="_blank"><i data-feather="youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/accounts/login/" class="twitter" target="_blank"><i data-feather="instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/givnipvtltd/?originalSubdomain=in" class="twitter" target="_blank"><i data-feather="linkedin"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Login Area -->


    <?php include 'include/footer.php' ?>
</body>

</html>