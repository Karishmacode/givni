<?php 
session_start();
include 'include/header.php';
$site_title = 'Givni - Projects';
?>
<?php
//include __DIR__.'php/connect.php';
?>


<body>
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table d1">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Our Clients</h2>
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

    <!-- Start ML Projects Area -->
    <div class="ml-projects-area ptb-80">
        <div class="container client-container">
            <div class="row">
                <?php
                $res = mysqli_query($con, "SELECT * FROM `latest_project` where `status`='Show'");
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $image = $row['image'];
                ?>
                        <div class="col-lg-2 col-6 col-md-4">
                            <div class="single-ml-projects-box py-3">
                                <img src="givni/assets/latest_project/<?php echo $image; ?>" alt="image">

                                <div class="plus-icon">
                                    <a href="contact">
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <!-- End ML Projects Area -->


    <!-- Start Page Title -->
    <!-- <div class="page-title-area">
        <div class="d-table d1">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Upcoming Projects</h2>
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
    </div> -->
   
    <!-- <div class="ml-projects-area ptb-80">
        <div class="container client-container">
            <div class="row">
                <?php
                $res = mysqli_query($con, "SELECT * FROM `upcoming_project` where `status`='Show' ORDER BY `id` DESC LIMIT 12");
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $image = $row['image'];
                ?>
                        <div class="col-lg-2 col-6 col-md-4">
                            <div class="single-ml-projects-box">
                                <img src="givni/assets/latest_project/<?php echo $image; ?>" alt="image">

                                <div class="plus-icon">
                                    <a href="contact">
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div> -->
    <!-- End ML Projects Area -->

    <?php include 'include/footer.php' ?>
</body>

</html>