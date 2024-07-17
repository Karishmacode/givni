<?php
$site_title = 'Givni - Projects';
session_start();
include "givni/include/connection.php";
?>

<?php include 'include/header.php' ?>

<body>
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table d1">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Our Projects</h2>
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
    <div class="ml-projects-area ptb-80 ">
        
            <?php 
            $query = mysqli_query($con,"SELECT * FROM `latest_project`");
            if (mysqli_num_rows($query)>0) {
                while ($result = mysqli_fetch_assoc($query)) {
                   
                 ?>
                 <div class="container px-lg-3">
                    <div class="row p-lg-5 mb-5 mx-0" style="background: #fff3df; border-radius:20px;">
                        <div class="col-lg-4 d-flex justify-content-center mt-4 mt-lg-0">
                            <!-- <img src="assets/img/product-image/pro1.png"> -->
                            <img src="givni/assets/latest_project/<?php echo $result['image']; ?>" class="logo_display shadow">
                        </div>
                        <div class="col-lg-8  mt-4 mt-lg-0">
                            <div class="d-flex">
                               <!--  <img src="givni/assets/latest_project/<?php echo $result['logo'];?>" class="product_logo align-items-lg-center" style="object-fit: contain;"> -->
                                <h1 class="head_font"><?php echo $result['appname'];?></h1> 
                            </div>
                                <p class="product_para"><!-- Guru Niketan is India's largest integrated platform for real estate and mortgage and one of the fastest growing proptech platforms in top cities of India.-->
                                    <?php echo $result['appinfo'];?>
                                </p>
                            <div class="row product_detail">
                                
                                 <div class="col-4">
                                    <div>
                                        <span>Platforms</span>
                                        <h5><?php echo $result['platform'];?></h5><br>
                                    </div>
                                </div>
                                 <div class="col-4">
                                    <div>
                                        <span>Downloads/Users</span>
                                        <h5><?php echo $result['download'];?></h5>
                                    </div><br>
                                </div>
                            </div>
                            <div class="row product_detail">
                                <div class="col-4">
                                    <div>
                                        <span>Region</span>
                                        <div class="d-flex">
                                            <img src="givni/assets/latest_project/<?php echo $result['region_flag'];?>" class="region_india mt-1">&nbsp;
                                            <h5 class="mt-1 mt-lg-0"><?php echo $result['region'];?></h5>
                                        </div>
                                        
                                    </div><br>
                                    
                                </div>
                                <div class="col-8">
                                    <div>
                                        <span>Technology</span>
                                        <h5><?php echo $result['technology'];?></h5><br>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 mb-lg-0 enq_border py-2 px-3 ">
                            <a href="">Enquiry Now<!-- <i data-feather="arrow-right"></i> --></a>
                            </div>
                        </div>
                    </div>
                    </div>

                 <?php   
                }
            }
             ?>
        
    </div>





   
    <?php include 'include/footer.php' ?>
</body>

</html>