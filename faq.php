<?php
$site_title = 'Givni - FAQ';
include "givni/include/submit.php";
include 'include/header.php'
?>

<body>
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table d1">
            <div class="d-table-cell">
                <div class="container">
                    <h2>FAQ</h2>
                </div>
            </div>
        </div>

        <div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
        <div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
        <div class="shape3"><img src="assets/img/shape3.svg" alt="shape"></div>
        <div class="shape4"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape5"><img src="assets/img/shape5.png" alt="shape"></div>
        <div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
        <div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
    </div>
    <!-- End Page Title -->

    <!-- Start FAQ Area -->
    <div class="faq-area ptb-80">
        <div class="container">
            <div class="faq-accordion">
                <ul class="accordion">
                    <li class="accordion-item">
                        <a class="accordion-title active" href="javascript:void(0)"><i class="flaticon-plus"></i> How do permissions work in Google Play Instant?</a>
                        <p class="accordion-content show pl-5">Android Instant Apps uses the runtime permissions model introduced in Android 6.0. If an app supports the permission model introduced in Android 6.0 (API level 23), it does not require any additional work to become an Instant App that runs on older devices.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Is Smart Lock required for instant apps?</a>
                        <p class="accordion-content pl-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Can I have multiple activities in a single feature?</a>
                        <p class="accordion-content pl-5">These cases are perfectly simple and easy to distinguish. In a free hour, when our power choice is untrammelled and when nothing prevents our being able do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Can I share resources between features?</a>
                        <p class="accordion-content pl-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Is multidex supported for instant apps?</a>
                        <p class="accordion-content pl-5">Multidex is supported for instant apps, so if you have an app that satisfies the maximum size requirement, but contains more methods than the dex limit (65k methods,) you can still publish it as an instant app.</p>
                    </li>

                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-plus"></i> Can I share resources between features?</a>
                        <p class="accordion-content pl-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua.</p>
                    </li>
                </ul>
            </div>

            <div class="faq-contact">
                <h3>Ask Your Question</h3>
                <form method="POST" enctype>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="" required data-error="Please enter your name" placeholder="Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" value="" required data-error="Please enter your email" placeholder="Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="number" name="phone" required data-error="Please enter your number" value="" class="form-control" placeholder="Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End FAQ Area -->

    <?php include 'include/footer.php' ?>
</body>

</html>