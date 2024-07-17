<?php
$site_title = 'Givni - User Register';
// include "profile/include/submit.php";
include 'include/header.php';
?>

<body>
    <!-- Start Register Area -->
    <div class="ptb-80">
        <div class="container">
            <div class="auth-form">
                <div class="auth-head">
                    <a href="<?php echo $base_url; ?>">
                        <img src="assets/img/logo.jpg">
                    </a>
                    <p>Create a new account</p>
                </div>
                <form class="ajax-submit" data-return="success" data-url="profile/php/submit.php" data-callback="profile/">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="name" name="sign_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone No.</label>
                        <input type="number" name="sign_phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" name="sign_email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="sign_pass" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="sign_cpass" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
                <div class="foot">
                    <p>Already have an account yet? <a href="login">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register Area -->
    <?php include 'include/footer.php' ?>
</body>

</html>