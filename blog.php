<?php
$site_title = 'Givni - Blog';
session_start();
include "givni/include/connection.php";
$date = date("d-m-Y");
?>

<?php include 'include/header.php' ?>

<body>
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="d-table d1">
            <div class="d-table-cell">
                <div class="container">
                    <h2>Givni Blogs</h2>
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

    <!-- Start Blog Area -->
    <div class="blog-area ptb-80">
        
            
                <?php
                $sql = mysqli_query($con, "SELECT * FROM `blog` WHERE `status`='Show' ");
                if (mysqli_num_rows($sql) > 0) {
                    while ($res = mysqli_fetch_assoc($sql)) {
                ?>
                <div class="container">
                        <div class="row d-flex flex-column-reverse-reverse mb-5 product_bg">
                            
                                <div class="col-lg-3 p-0 d-flex justify-content-center ">
                                    <a href="blog-detail">
                                        <img src="givni/assets/blog/<?php echo $res['image']; ?>" alt="givni-image" height="250px" width="350px">
                                    </a>
                                    
                                </div>
                                <div class="col-lg-9 p-3">
                                    <div class="blog_date p-2 text-center">
                                        <i data-feather="calendar"></i>  <?php echo $date; ?>
                                    </div><br>
                                    <h3><a href="blog-detail?id=<?php echo $res['id'] ?>"><?php echo $res['title']; ?></a></h3>
                                    <span>by <a href="blog-detail?id=<?php echo $res['id'] ?>"><?php echo $res['name']; ?></a></span>
                                    <p><?php echo substr($res['content'], 0, 180); ?> ?></p>
                                    <div class="d-flex justify-content-between">
                                        <a href="blog-detail?id=<?php echo $res['id'] ?>" class="read-more-btn">Read More <i data-feather="arrow-right"></i></a>
                                        <span>by <a href="blog-detail?id=<?php echo $res['id'] ?>"><?php echo $res['name']; ?></a></span>
                                    </div>
                                </div>
                                
                           
                        </div>
                </div>
                <?php
                    }
                }
                ?>

                <!--<div class="col-lg-12 col-md-12">-->
                <!--    <div class="pagination-area">-->
                <!--        <nav aria-label="Page navigation">-->
                <!--            <ul class="pagination justify-content-center">-->
                <!--                <li class="page-item"><a class="page-link" href="blog-1.html">Prev</a></li>-->
                <!--                <li class="page-item active"><a class="page-link" href="blog-1.html">1</a></li>-->
                <!--                <li class="page-item"><a class="page-link" href="blog-1.html">2</a></li>-->
                <!--                <li class="page-item"><a class="page-link" href="blog-1.html">3</a></li>-->
                <!--                <li class="page-item"><a class="page-link" href="blog-1.html">Next</a></li>-->
                <!--            </ul>-->
                <!--        </nav>-->
                <!--    </div>-->
                <!--</div>-->
            
        
    </div>
    <!-- End Blog Area -->

    <?php include 'include/footer.php' ?>
</body>

</html>