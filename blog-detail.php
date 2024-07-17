<?php
$site_title = 'Givni - Blog Details';
session_start();
include "givni/include/connection.php";
$date = date('d-m-Y');
?>

<?php
include 'include/header.php' ?>

<body>
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table d1">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Blog Details</h2>
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
    <!-- Start Blog Details Area -->
    <div class="blog-details-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-details-desc">
                        <?php
                        $q = mysqli_query($con, "SELECT * FROM `blog` WHERE `status`='Show'");
                        if (mysqli_num_rows($q) > 0) {
                            while ($res = mysqli_fetch_assoc($q)) {
                        ?>
                                <div class="article-image">
                                    <img src="givni/assets/blog/<?php echo $res['image'] ?>" alt="image" height="350" width="1250">
                                </div>
                                <div class="article-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i data-feather="clock"></i><a href="mailto:givniinfo@gmail.com"><?php echo $date ?></a></li>
                                            <li><i data-feather="user"></i><a href="mailto:givniinfo@gmail.com"><?php echo $res['name'] ?></a></li>
                                            <li><i data-feather="mail"></i><a href="mailto:givniinfo@gmail.com"><?php echo $res['email'] ?></a></li>
                                        </ul>
                                    </div>
                                    <h3><?php echo $res['title'] ?></h3>
                                    <p><?php echo $res['content'] ?></p>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Details Area -->

    <div class="contact-cta-box mb-5">
        <h3>Have any comment ?</h3>
        <p>Don't hesitate to give your review</p>
        <button class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Comment</button>
    </div>

    <?php include 'include/footer.php' ?>
</body>

</html>