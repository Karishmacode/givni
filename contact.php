    <?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
    $site_title = 'Givni - Contact';
    include "givni/include/submit.php";
    include 'include/header.php'
    ?>

    <body>
        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="d-table d1">
                <div class="d-table-cell">
                    <div class="container">
                        <h2>Contact Us</h2>
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
        <?php 
        if(isset($_POST))
        ?>
        <!-- Start Contact Info Area -->
        <div class="contact-info-area">
            <div class="container">
                <div class="row h-100 justify-content-center align-items-center mb-5">
                    <div class="col-lg-6 col-md-12 d-none d-lg-block">
                        <img src="assets/img/about4.png" alt="image">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card mb-5 shadow-lg border-0" style="margin-top:-3rem; z-index: 100;">
                            <div class="card-header bg-white text-center p-3">
                                <div class="section-title mb-2">
                                    <h2>Get In Touch With Us</h2>
                                    <div class="bar"></div>
                                    <p>Anything On your Mind. We’ll Be Glad To Assist You!</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="" id="contact_contact">
                                    <input type='hidden' name='form-name' value='contact-form' />
                                    <div class="form-group">
                                        <small>Name</small>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <small>Phone</small>
                                        <input type="number" name="phone" class="form-control" placeholder="Enter Phone">
                                    </div>
                                    <div class="form-group">
                                        <small>Email</small>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <small>City</small>
                                        <input type="text" name="city" class="form-control" placeholder="Enter City">
                                    </div>
                                    <div class="form-group">
                                        <small>Message</small>
                                        <textarea class="form-control" name="message" rows="3" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form_respons" id="form_respons1"></div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i data-feather="mail"></i>
                            </div>
                            <h3>Mail Here</h3>
                            <p><a href="mailto:givniinfo@gmail.com"><span class="__cf_email__" data-cfemail="2d4c494044436d5e594c5f595d034e4240">givniinfo@gmail.com</span></a></p>
                            <p><a href="mailto:info@givni.in"><span class="__cf_email__" data-cfemail="ed84838b82ad9e998c9f999dc38e8280">info@givni.in</span></a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i data-feather="map-pin"></i>
                            </div>
                            <h3>Visit Here</h3>
                            <p>Near Passport Office joytipuram Colony Khajpura Patna 800014 | 2nd Branch Office Noida D-35 2nd Floor Noida U.P</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i data-feather="phone"></i>
                            </div>
                            <h3>Call Here</h3>
                            <p><a href="tel:9835942411">+91-9835942411</a></p>
                            <p><a href="tel:9430455055">+91-9430455055</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Info Area -->

        <!-- Map -->
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.9178103257814!2d85.07740301449279!3d25.60764722121061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5726dd96daaf%3A0x5c68433bdb12a43e!2sGivni%20Private%20limited!5e0!3m2!1sen!2sin!4v1643203159836!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!-- End Contact Area -->
        <?php include 'include/footer.php' ?>
        <script>
            $(function() {
                $('#contact_contact').on('submit', function(e) {
                    e.preventDefault();
                    let x = $(this)
                    let btn = x.find('button[type="submit"]');
                    let btntxt = btn.html();
                    let responseDiv = x.find('.form_respons');

                    $.ajax({
                        type: "POST",
                        url: "php/submit.php",
                        data: x.serialize(),
                        beforeSend: function() {
                            btn.prop('disabled', true).html('Submitting...');
                            responseDiv.html('');
                        },
                        success: function(returnsms) {
                            var returnsms = returnsms.trim();
                            if (returnsms == 'success') {
                                responseDiv.html(`<div class="alert alert-success" role="alert">
                                                 Form submitted successfully! we will contact you soon.
                                                 </div>`);
                                btn.html('Submitted successfully');
                            } else {
                                alert(returnsms);
                                btn.prop('disabled', false).html(btntxt);

                            }
                        },
                        error: function(e) {
                            console.log(e);
                            responseDiv.html(`<div class="alert alert-warning" role="alert">
                                             Oops! something went wrong, Try again.
                                             </div>`);
                            btn.prop('disabled', false).html(btntxt);
                        }
                    });
                });

            });
        </script>
    </body>

    </html>