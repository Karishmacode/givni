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


    <div class="team-area pro_bg">
        <div class="px-5">
            <div class="row d-flex justify-content-around">
                <?php 
                   $query = mysqli_query($con,"SELECT * FROM `product` WHERE `status`='show'");
                   if (mysqli_num_rows($query)>0) {
                       while ($result = mysqli_fetch_assoc($query)) {
                        $img_path = 'givni/assets/all_product/';
                        $img = $result['image'];
                        if (empty($img)) {
                            $user_img = 'https://via.placeholder.com/150';
                        }elseif (!file_exists($img_path.$img)) {
                            $user_img = 'https://via.placeholder.com/150';
                        }else{
                            $user_img = $img_path.$img;
                        }
                        $offers = json_decode($result['product_meta'],TRUE);

                        

                       
                ?>
                <div class="card col-lg-4 col-md-6 border-0 mt-5 product_box bg-white " style="width: 22rem;">
                    <div class="pt-4 px-2">
                      <img class="card-img-top " src="<?php echo $user_img;?>" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $result['product_name'];?></h5>
                        <p class="card-text mb-0"><?php echo $result['product_des'];?></p>
                        <?php
                        if (!empty($offers)) {
                            foreach ($offers as $value) {
                                echo '<p class="card-text mb-0"><small class="text-muted">- '.$value.'</small></p>';
                            }
                        }
                        ?>
                        <div class="d-flex justify-content-between mt-3">
                            <a href="contact" class="btn btn-primary pro_btn">Get Started</a>
                            <a href="https://api.whatsapp.com/send?phone=919835942411&text=I want to know more about <?php echo $result['product_name'];?>%0a%0a https://www.givni.in/" class="btn_whatsapp "><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                        <!-- <a href="contact" class="btn btn-primary pro_btn">Get Started</a> -->
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>

        </div>
    </div>
    

    


  

<?php include 'include/footer.php' ?>
</body>

</html>