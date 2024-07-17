<?php
$site_title = 'Givni - MLM Software Developer in Patna';
include 'include/header.php';
?>
<style>
  .single-features .icon img {
    width: 1.2rem;
    padding-top: 1rem;
    margin-left: 1rem;
  }

  .single-features .icon img:hover {
    filter: brightness(0) invert(1) grayscale(100%);
    /* Change the color to white on hover */
  }

  .services-left-image img:nth-child(3) {
    left: 41%;
  }

  .pricing-area {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .pricing-tab {
    width: 100%;
  }

  .tab_content {
    display: flex;
    flex-wrap: wrap;
  }

  .pricing-box {
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .pricing-header {
    flex-grow: 1;
  }

  /* Enable vertical scrolling if content exceeds height */
  .pricing-header h3 {
    font-weight: 600;
    cursor: pointer;
    transition: color 0.3s ease;
  }

  .pricing-header h3:hover {
    background: #202831;
  }

  .pricing-header h3 {
    background: #44b7ce;
    z-index: 9999;
    display: block;
    float: left;
    width: 100%;
    height: 130px;
    padding: 20px;
    color: #fff;
  }

  .pricing-box .pricing-header h3 {
    border-radius: .5rem .5rem 0 0;
  }

  .img-fluid {
    position: relative;
    bottom: 3rem;
  }

  .pricing-header h5 {
    text-align: left;
    margin-left: 1rem;
    font-weight: 600;
  }

  .pricing-box .pricing-features li svg {
    top: 38%;
    height: 1.1rem;
  }

  /* li desing */
  .pricing-box .pricing-features li {
    margin-bottom: 12px;
    position: relative;
    padding-left: 27px;
    font-size: 12px;
    color: #6084a4;
    font-family: "Poppins", sans-serif;

  }

  .about-text {
    transition: transform 0.5s ease;
  }

  .about-text:hover {
    transform: translateY(-10px);
    /* Move the element up on hover */
  }

  /* Add candy color animation */
  .about-text {
    position: relative;
    transition: transform 0.5s ease;
    /* Smooth transition for the hover effect */
    background-color: #89d8d3;
    background-image: linear-gradient(315deg, #f7fafd 0%, #d889892b 74%);
    border: none;
    z-index: 1;
    border-radius: 5px;
    box-shadow:
      -7px -7px 20px 0px #fcfbff,
      -4px -4px 5px 0px #fcfbff,
      7px 7px 20px 0px #0002,
      4px 4px 5px 0px #0001;

  }

  .about-text:hover {
    transform: translateY(-10px);
    /* Move the element up on hover */
    color: #fff;
  }

  .about-text:hover::after {
    position: absolute;
    content: "";
    width: 100%;
    height: 0;
    bottom: 0;
    left: 0;
    z-index: -1;
    border-radius: 5px;
    background-color: #e1fcff;
    background-image: linear-gradient(315deg, #89d8d3 0%, #fffcff 74%);
    box-shadow:
      -7px -7px 20px 0px #fcfbff,
      -4px -4px 5px 0px #fcfbff,
      7px 7px 20px 0px #0002,
      4px 4px 5px 0px #0001;
    transition: all 0.3s ease;
  }

  .about-text:hover:after {
    top: 0;
    height: 100%;
  }

  .about-text:active {
    top: 2px;
  }

  /* li desing */
  /* resposive padding left ul */
  @media only screen and (max-width: 767px) {
    .pricing-box .pricing-features {
      padding-left: 16px;
    }
  }

  /* plan col */
  @media only screen and (max-width: 767px) {
    .pricing-box .pricing-header h3 {
      font-size: 22.4px;
    }
  }

  /* img 820 */
  @media (max-width: 820px) {
    .img-fluid {
      bottom: 2.2rem;
      margin-bottom: 1rem
    }
  }

  @media only screen and (max-width: 767px) {
    .services-left-image img {
      margin-left: -18rem;
      margin-top: 13rem;
      width: 20rem;
    }
  }

  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .services-left-image img:last-child {
      top: 5rem;
      margin-left: -16rem;
    }
  }

  @media only screen and (max-width: 540px) {
    .services-left-image img:last-child {
      bottom: 5rem;
      margin-left: -20rem;
    }
  }

  @media only screen and (max-width: 280px) {
    .services-left-image img:last-child {
      bottom: 1rem;
      margin-left: -14rem;
    }
  }

  @media only screen and (max-width: 767px) {
    .about-inner-area .about-text {
      margin-top: 8px;
    }
  }
</style>

<body>
  <div class="page-title-area">
    <div class="d-table d1">
      <div class="d-table-cell">
        <div class="container">
          <h2 class="mt-5">product</h2>
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
  <div class="services-area ptb-80 ml-feedback-area">
    <div class="container">
      <div class="row flex-row-reverse justify-content-center align-items-center">
        <div class="col-lg-6 col-md-12 services-content">
          <div class="section-title">
            <h2>MLM Software Developer in Patna</h2>
            <div class="bar"></div>
            <p>Proud Technologies is committed to providing software services of assured quality through solution
              leadership and continual process improvement, ensuring customer satisfaction. We understand its direct
              impact on the businesses of clients. Our Quality Management is more than a set of processes to ensure
              product quality and on-time delivery. Our quality practices is continuously enhanced through regular
              internal audits, project audits (each project has its own quality control plan), assessment of process
              parameters, and client feedback. Our Passion for Quality permeates everything we do with robust systems
              and processes to facilitate consistent high quality deliverables to our clients every time.</p>
          </div>
          <div class="row">
            <div class="col-lg-10 col-md-6 col-sm-6">
              <a href="javascript:void(0)" class="box">
                <i data-feather="check-circle"></i> Quality First
              </a>
            </div>
            <div class="col-lg-10 col-md-6 col-sm-6">
              <a href="javascript:void(0)" class="box">
                <i data-feather="check-circle"></i> Customers satisfaction
              </a>
            </div>
            <div class="col-lg-10 col-md-6 col-sm-6">
              <a href="javascript:void(0)" class="box">
                <i data-feather="check-circle"></i>24/7 Support
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 services-left-image">
          <img src="assets/img/banner-image/mlm-software-plan.png" class="wow fadeInDown" data-wow-delay="0.6s"
            alt="big-monitor" style="top: -10rem; left: 8rem; width:20rem;">
          <img src="assets/img/services-left-image/cercle-shape.png" class="bg-image rotateme" alt="shape">
          <img src="assets/img/banner-image/mlm-software-plan.png" class="wow fadeInUp" data-wow-delay="0.6s"
            alt="main-pic">
        </div>
      </div>
    </div>
  </div>
  <div class="Features-area py-5 ml-feedback-area">
    <div class="container">
      <div class="section-title">
        <h2>Mlm Software Solution Providers in Patna</h2>
        <div class="bar"></div>
        <p>We offer empowers its clients with a comprehensive suite of MLM software solutions, designed to streamline
          operations, enhance user experiences, and drive growth within their MLM businesses. Through innovative
          features and dedicated support, Givni helps clients maximize the potential of their MLM ventures and achieve
          their business objectives effectively.</p>
      </div>
      <div class="tab pricing-tab bg-color">
        <ul class="tabs mr-3 ps-0">
          <li><a href="#">Mlm Plan</a></li>
          <li><a href="#">Member Panel</a></li>
          <li><a href="#">Admin Panel</a></li>
          <li><a href="#">24 Hours Support</a></li>
        </ul>
        <div class="tab_content">
          <div class="tabs_item">
            <div class="container p-0">
              <div class="row align-items-stretch">
                <!-- Level Plan -->
                <div class="col-md-3 mt-5">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3>Level Plan MLM <br> Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/mlm-person.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <ul class="pricing-features  mb-5" style="margin-top: -24px;">
                        <li><i data-feather='check'></i> Online Members Joining Systems</li>
                        <li><i data-feather='check'></i> Website Designing 10 pages</li>
                        <li><i data-feather='check'></i> 5 GB Webspace ( LiteSpeed Server)</li>
                        <li><i data-feather='check'></i> E-pin Generator</li>
                        <li><i data-feather='check'></i> E-mail Alert</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Binary Plan -->
                <div class="col-md-3 mt-5">
                  <div class="pricing-box shadow mb-3 md-3 p-0 ">
                    <div class="pricing-header">
                      <h3>Binary Plan MLM <br> Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/binary.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <ul class="pricing-features  mb-5" style="margin-top: -24px;">
                        <li><i data-feather='check'></i> Online Members Joining Systems</li>
                        <li><i data-feather='check'></i> Website Designing 10 pages</li>
                        <li><i data-feather='check'></i> 1 Domain (Website Name)</li>
                        <li><i data-feather='check'></i> 5 GB Webspace ( LiteSpeed Server)</li>
                        <li><i data-feather='check'></i> E-pin Generator</li>
                        <li><i data-feather='check'></i> E-mail Alert</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Matrix Plan -->
                <div class="col-md-3 mt-5">
                  <div class="pricing-box shadow mb-3 md-3  p-0">
                    <div class="pricing-header">
                      <h3> Matrix Plan MLM <br> Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/matrix.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <ul class="pricing-features  mb-5" style="margin-top:-24px;">
                        <li><i data-feather='check'></i> Online Members Joining Systems</li>
                        <li><i data-feather='check'></i> Website Designing 10 pages</li>
                        <li><i data-feather='check'></i> 1 Domain (Website Name)</li>
                        <li><i data-feather='check'></i> 5 GB Webspace ( LiteSpeed Server)</li>
                        <li><i data-feather='check'></i> E-pin Generator</li>
                        <li><i data-feather='check'></i> E-mail Alert</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Matrix Plan MLM Software -->
                <div class="col-md-3 mt-5">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3>Investment Plan MLM <br> Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/invest.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <ul class="pricing-features  mb-5" style="margin-top:-24px;">
                        <li><i data-feather='check'></i> Online Members Joining Systems</li>
                        <li><i data-feather='check'></i> Online Login</li>
                        <li><i data-feather='check'></i>Website Designing unlimited</li>
                        <li><i data-feather='check'></i> 1 Domain (Website Name)</li>
                        <li><i data-feather='check'></i> 5 GB Webspace ( LiteSpeed Serves)</li>
                        <li><i data-feather='check'></i> E-pin Generator</li>
                        <li><i data-feather='check'></i> E-wallet</li>
                        <li><i data-feather='check'></i> E-mail Alert</li>
                        <li><i data-feather='check'></i>Customized Integration</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Mlm plan-end -->
          <!-- ------------------------------------------------------------------------------------ -->
          <!-- ------------------------------------------------------------------------------------ -->
          <!-- Member Panel Box stated -->
          <!-- Leve Member Panel Box stated -->
          <div class="tabs_item">
            <div class="container p-0">
              <div class="row">
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3> Level Plan MLM <br> Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/mlm-person.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">Member Panel</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> Member Profile and Data</li>
                        <li><i data-feather='check'></i> Welcome Letter</li>
                        <li><i data-feather='check'></i> Registration Certificate</li>
                        <li><i data-feather='check'></i>Tree View</li>
                        <li><i data-feather='check'></i> Geneology View</li>
                        <li><i data-feather='check'></i> Direct Downline Report</li>
                        <li><i data-feather='check'></i> income/Reward Detail</li>
                        <li><i data-feather='check'></i> Leg Income</li>
                        <li><i data-feather='check'></i>Direct referral Income Detail</li>
                        <li><i data-feather='check'></i>Account Report</li>
                        <li><i data-feather='check'></i> Member Downline List</li>
                        <li><i data-feather='check'></i> Member E-PINs Management</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
                <!-- Binary Member Panel -->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3>Binary Plan MLM <br> Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/binary.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">Member Panel</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> Member Profile and Data</li>
                        <li><i data-feather='check'></i> Welcome Letter</li>
                        <li><i data-feather='check'></i> Registration Certificate</li>
                        <li><i data-feather='check'></i>Tree View</li>
                        <li><i data-feather='check'></i> Geneology View</li>
                        <li><i data-feather='check'></i> Direct Downline Report</li>
                        <li><i data-feather='check'></i> income/Reward Detail</li>
                        <li><i data-feather='check'></i> Leg Income</li>
                        <li><i data-feather='check'></i>Direct referral Income Detail</li>
                        <li><i data-feather='check'></i>Account Report</li>
                        <li><i data-feather='check'></i> Member Downline List</li>
                        <li><i data-feather='check'></i> Member E-PINs Management</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
                <!-- Matrix Member Panel -->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3>Matrix Plan MLM <br> Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/matrix.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">Member Panel</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> Member Profile and Data</li>
                        <li><i data-feather='check'></i> Welcome Letter</li>
                        <li><i data-feather='check'></i> Registration Certificate</li>
                        <li><i data-feather='check'></i>Tree View</li>
                        <li><i data-feather='check'></i> Geneology View</li>
                        <li><i data-feather='check'></i> Direct Downline Report</li>
                        <li><i data-feather='check'></i> income/Reward Detail</li>
                        <li><i data-feather='check'></i> Leg Income</li>
                        <li><i data-feather='check'></i>Direct referral Income Detail</li>
                        <li><i data-feather='check'></i>Account Report</li>
                        <li><i data-feather='check'></i> Member Downline List</li>
                        <li><i data-feather='check'></i> Member E-PINs Management</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
                <!-- Investment  Member Panel -->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3>Investment Plan MLM <br> Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/invest.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">Member Panel</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> Member Profile and Data</li>
                        <li><i data-feather='check'></i> Welcome Letter</li>
                        <li><i data-feather='check'></i> Registration Certificate</li>
                        <li><i data-feather='check'></i>Tree View</li>
                        <li><i data-feather='check'></i> Geneology View</li>
                        <li><i data-feather='check'></i> Direct Downline Report</li>
                        <li><i data-feather='check'></i> income/Reward Detail</li>
                        <li><i data-feather='check'></i> Binary Income</li>
                        <li><i data-feather='check'></i> Investment & ROI Income</li>
                        <li><i data-feather='check'></i> Send Message to Admin</li>
                        <li><i data-feather='check'></i>Account Report</li>
                        <li><i data-feather='check'></i> Member Downline List</li>
                        <li><i data-feather='check'></i> Member E-PINs Management</li>
                        <li><i data-feather='check'></i> Member Wallet</li>
                        <li><i data-feather='check'></i>Change Wallet Password</li>
                        <li><i data-feather='check'></i> Transfer Balance</li>
                        <li><i data-feather='check'></i> E-PIN generate</li>
                        <li><i data-feather='check'></i> Withdraw Balance</li>
                        <li><i data-feather='check'></i>My Withdrawn List</li>
                        <li><i data-feather='check'></i> Account Setting</li>
                        <li><i data-feather='check'></i> Change Theme</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- member panel-end -->

          <!-- ------------------------------------------------------------------------------------ -->
          <!-- ------------------------------------------------------------------------------------ -->
          <!-- admin panel area start -->
          <div class="tabs_item">
            <div class="container p-0">
              <div class="row">
                <!-- Level Admin Panel -->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0  plan">
                    <div class="pricing-header">
                      <h3>Level Plan MLM Software </h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/mlm-person.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <h5 class=" mb-4  font-weight-bolder">Admin Panel</h5>
                      <ul class="pricing-features mb-5">
                        <li><i data-feather='check'></i> New Registration</li>
                        <li><i data-feather='check'></i>Members' Invoice Search</li>
                        <li><i data-feather='check'></i>Edit Member Profile</li>
                        <li><i data-feather='check'></i>Members' security codes</li>
                        <li><i data-feather='check'></i> Direct Referral View</li>
                        <li><i data-feather='check'></i>Date Wise Member List</li>
                        <li><i data-feather='check'></i> Member Bank Detail</li>
                        <li><i data-feather='check'></i> Direct Referral View</li>
                        <li><i data-feather='check'></i>Date Wise Member List</li>
                        <li><i data-feather='check'></i> Member Bank Detail</li>
                        <li><i data-feather='check'></i>Downline List</li>
                        <li><i data-feather='check'></i>Geneology View</li>
                        <li><i data-feather='check'></i>Member Report</li>
                        <li><i data-feather='check'></i>Member Messages</li>
                        <li><i data-feather='check'></i>Generate/Issue E-PIN</li>
                        <li><i data-feather='check'></i> Fresh E-PIN</li>
                        <li><i data-feather='check'></i>Used E-PIN</li>
                        <li><i data-feather='check'></i>Search E-PIN</li>
                        <li><i data-feather='check'></i> Pay Commissions/Earnings</li>
                        <li><i data-feather='check'></i>View Binary Income</li>
                        <li><i data-feather='check'></i>View Leg Income</li>
                        <li><i data-feather='check'></i> Member A/C Balance</li>
                        <li><i data-feather='check'></i>View Direct Income</li>
                        <li><i data-feather='check'></i>Pay Rewards</li>
                        <li><i data-feather='check'></i>View TDS List</li>
                        <li><i data-feather='check'></i>Rewards List</li>
                        <li><i data-feather='check'></i>Customers Feed Backs</li>
                        <li><i data-feather='check'></i>Block/Allow a Member</li>
                        <li><i data-feather='check'></i>Member Blocked List</li>
                        <li><i data-feather='check'></i>Member Blocked List</li>
                        <li><i data-feather='check'></i> Filter Member List</li>
                        <li><i data-feather='check'></i>Website Maintenance</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
                <!-- Binary Admin Panel area start-->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3  p-0 plan">
                    <div class="pricing-header">
                      <h3>Binary Plan MLM Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/binary.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">Admin Panel</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> New Registration</li>
                        <li><i data-feather='check'></i>Members' Invoice Search</li>
                        <li><i data-feather='check'></i>Edit Member Profile</li>
                        <li><i data-feather='check'></i>Members' security codes</li>
                        <li><i data-feather='check'></i> Direct Referral View</li>
                        <li><i data-feather='check'></i>Date Wise Member List</li>
                        <li><i data-feather='check'></i> Member Bank Detail</li>
                        <li><i data-feather='check'></i> Direct Referral View</li>
                        <li><i data-feather='check'></i>Date Wise Member List</li>
                        <li><i data-feather='check'></i> Member Bank Detail</li>
                        <li><i data-feather='check'></i>Downline List</li>
                        <li><i data-feather='check'></i>Geneology View</li>
                        <li><i data-feather='check'></i>Member Report</li>
                        <li><i data-feather='check'></i>Member Messages</li>
                        <li><i data-feather='check'></i>Generate/Issue E-PIN</li>
                        <li><i data-feather='check'></i> Fresh E-PIN</li>
                        <li><i data-feather='check'></i>Used E-PIN</li>
                        <li><i data-feather='check'></i>Search E-PIN</li>
                        <li><i data-feather='check'></i> Pay Commissions/Earnings</li>
                        <li><i data-feather='check'></i>View Binary Income</li>
                        <li><i data-feather='check'></i>View Leg Income</li>
                        <li><i data-feather='check'></i> Member A/C Balance</li>
                        <li><i data-feather='check'></i>View Direct Income</li>
                        <li><i data-feather='check'></i>Pay Rewards</li>
                        <li><i data-feather='check'></i>View TDS List</li>
                        <li><i data-feather='check'></i>Rewards List</li>
                        <li><i data-feather='check'></i>Customers Feed Backs</li>
                        <li><i data-feather='check'></i>Block/Allow a Member</li>
                        <li><i data-feather='check'></i>Member Blocked List</li>
                        <li><i data-feather='check'></i>Member Blocked List</li>
                        <li><i data-feather='check'></i> Filter Member List</li>
                        <li><i data-feather='check'></i>Website Maintenance</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
                <!--  Matrix Admin Panel area start -->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3  p-0 plan">
                    <div class="pricing-header">
                      <h3>Matrix Plan MLM Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/matrix.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">Admin Panel</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> New Registration</li>
                        <li><i data-feather='check'></i>Members' Invoice Search</li>
                        <li><i data-feather='check'></i>Edit Member Profile</li>
                        <li><i data-feather='check'></i>Members' security codes</li>
                        <li><i data-feather='check'></i> Direct Referral View</li>
                        <li><i data-feather='check'></i>Date Wise Member List</li>
                        <li><i data-feather='check'></i> Member Bank Detail</li>
                        <li><i data-feather='check'></i> Direct Referral View</li>
                        <li><i data-feather='check'></i>Date Wise Member List</li>
                        <li><i data-feather='check'></i> Member Bank Detail</li>
                        <li><i data-feather='check'></i>Downline List</li>
                        <li><i data-feather='check'></i>Geneology View</li>
                        <li><i data-feather='check'></i>Member Report</li>
                        <li><i data-feather='check'></i>Member Messages</li>
                        <li><i data-feather='check'></i>Generate/Issue E-PIN</li>
                        <li><i data-feather='check'></i> Fresh E-PIN</li>
                        <li><i data-feather='check'></i>Used E-PIN</li>
                        <li><i data-feather='check'></i>Search E-PIN</li>
                        <li><i data-feather='check'></i> Pay Commissions/Earnings</li>
                        <li><i data-feather='check'></i>View Binary Income</li>
                        <li><i data-feather='check'></i>View Leg Income</li>
                        <li><i data-feather='check'></i> Member A/C Balance</li>
                        <li><i data-feather='check'></i>View Direct Income</li>
                        <li><i data-feather='check'></i>Pay Rewards</li>
                        <li><i data-feather='check'></i>View TDS List</li>
                        <li><i data-feather='check'></i>Rewards List</li>
                        <li><i data-feather='check'></i>Customers Feed Backs</li>
                        <li><i data-feather='check'></i>Block/Allow a Member</li>
                        <li><i data-feather='check'></i>Member Blocked List</li>
                        <li><i data-feather='check'></i>Member Blocked List</li>
                        <li><i data-feather='check'></i> Filter Member List</li>
                        <li><i data-feather='check'></i>Website Maintenance</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
                <!--Investment Admin Panel area start -->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0 plan">
                    <div class="pricing-header">
                      <h3>Investment Plan MLM Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/invest.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">Admin Panel</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> New Registration</li>
                        <li><i data-feather='check'></i>Members' Invoice Search</li>
                        <li><i data-feather='check'></i>Edit Member Profile</li>
                        <li><i data-feather='check'></i>Members' security codes</li>
                        <li><i data-feather='check'></i> Direct Referral View</li>
                        <li><i data-feather='check'></i>Date Wise Member List</li>
                        <li><i data-feather='check'></i> Member Bank Detail</li>
                        <li><i data-feather='check'></i>Treeview</li>
                        <li><i data-feather='check'></i>Geneology View</li>
                        <li><i data-feather='check'></i>Member Report</li>
                        <li><i data-feather='check'></i>Member Messages</li>
                        <li><i data-feather='check'></i>Generate/Issue E-PIN</li>
                        <li><i data-feather='check'></i> Fresh E-PIN</li>
                        <li><i data-feather='check'></i>Used E-PIN</li>
                        <li><i data-feather='check'></i>Search E-PIN</li>
                        <li><i data-feather='check'></i> Pay Commissions/Earnings</li>
                        <li><i data-feather='check'></i>View Binary Income</li>
                        <li><i data-feather='check'></i> Member A/C Balance</li>
                        <li><i data-feather='check'></i>Investment Income</li>
                        <li><i data-feather='check'></i>Withdraw A/C Balance</li>
                        <li><i data-feather='check'></i>View Withdrawn List</li>
                        <li><i data-feather='check'></i>Pay Rewards</li>
                        <li><i data-feather='check'></i>View TDS List</li>
                        <li><i data-feather='check'></i>Bank Transfer Request</li>
                        <li><i data-feather='check'></i>Rewards List</li>
                        <li><i data-feather='check'></i>Customers Feed Backs</li>
                        <li><i data-feather='check'></i>Block/Allow a Member</li>
                        <li><i data-feather='check'></i>Member Blocked List</li>
                        <li><i data-feather='check'></i> Filter Member List</li>
                        <li><i data-feather='check'></i> Change Setting</li>
                        <li><i data-feather='check'></i>Website Maintenance</li>
                      </ul>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- admin panel-end -->
          <!-- ------------------------------------------------------------------------------------ -->
          <!-- ------------------------------------------------------------------------------------ -->

          <!-- 24 hours support area start -->
          <div class="tabs_item">
            <div class="container p-0">
              <div class="row">
                <!-- Level Plan 24 Hours Support -->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3>Level Plan MLM Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/mlm-person.png" loading="lazy" class="img-fluid"
                          alt="personal.png" width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">24 Hours Support</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> New Registration</li>
                        <li><i data-feather='check'></i> Members' Invoice Search</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
                <!-- Binary Plan 24 Hours Support -->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3>Binary Plan MLM Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/binary.png" loading="lazy" class="img-fluid" alt="Binary"
                          width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">24 Hours Support</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> New Registration</li>
                        <li><i data-feather='check'></i> Members' Invoice Search</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
                <!-- Matrix Plan 24 Hours Support-->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3>Matrix Plan MLM Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/matrix.png" loading="lazy" class="img-fluid" alt="Matrix"
                          width="80" height="80">
                      </div>
                      <h5 class=" mb-4 font-weight-bolder">24 Hours Support</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> New Registration</li>
                        <li><i data-feather='check'></i> Members' Invoice Search</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
                <!-- Investment Plan 24 Hours Support -->
                <div class="col-md-3">
                  <div class="pricing-box shadow mb-3 md-3 p-0">
                    <div class="pricing-header">
                      <h3>Investment Plan MLM Software</h3>
                      <div class="mr-3 mt-4">
                        <img src="assets/img/banner-image/invest.png" loading="lazy" class="img-fluid" alt="Invest"
                          width="80" height="80">
                      </div>
                      <h5 class="mb-4 ml-1 text-left font-weight-bolder">24 Hours Support</h5>
                      <ul class="pricing-features  mb-5">
                        <li><i data-feather='check'></i> New Registration</li>
                        <li><i data-feather='check'></i> Members' Invoice Search</li>
                      </ul>
                    </div>
                    <!-- Content remains unchanged -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 24 hours support-end -->
        </div>
      </div>
    </div>
  </div>
  <!--mlm features end -->
  <!-- ------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------ -->
  <!--start What We Offer- -->
  <!-- Start digital marketing Area -->
  <div class="about-area pt-5 ml-feedback-area">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-12 col-md-12 mb-5">
          <div class="">
            <h2><span style="color: #1774bc;font-weight:600;">What We Offer</span></h2>

            <div class="bar"></div>

            <p>Today we work at a national and at a global level, in challenging environments, meeting deadlines and
              completing projects within time and budget constraints. We serve individual professionals, government
              institutions, commercial and non-commercial organizations, offering IT solutions that can be easily
              managed from a central location through the internet, with an easy upgrade path as their business and
              requirements grow.
            </p>

            <div class="row">
              <div class="col-lg-6 ">
                <img src="assets/img/banner-image/mlm-new.png" alt="" style="height:400px;">
              </div>


              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="">
                  <h5 class="mt-5" style="color: #1774bc;">About MLM Software Services:</h5>
                  <p>We design software that is as perfect as it can be, tested to be free of errors, compact in size,
                    easy to deploy, secure and with the maximum functions in a very user-friendly package, needing a
                    short learning time.
                    Additionally, our continuous improvement efforts and responsive support services guarantee that our
                    clients stay ahead of the curve, adapting effortlessly to evolving business needs and technological
                    advancements. With our commitment to excellence, we empower businesses to achieve their goals
                    efficiently and effectively, driving growth and success in today's competitive landscape.
                  </p>
                  <a href="contact.php" class="btn btn-primary">Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End digital marketing Area -->
  <!-- End About Area -->

  <!-- ------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------ -->
  <!-- START MLM Software Services  -->
  <!-- ------------------------------------------------------------------------------------ -->

  <!-- ------------------------------------------------------------------------------------ -->
  <div class="about-area pt-5 ml-feedback-area">
    <div class="container">
      <div class="section-title">
        <h2> MLM Software Solutions in Patna</h2>
        <div class="bar"></div>
        <p>MLM Software Solutions" by Givni Pvt Ltd encompass a full range of specialized software products and services
          crafted specifically for Multi-Level Marketing (MLM) enterprises. These solutions are finely tuned to cater to
          the intricate requirements of MLM firms and their extensive distributor networks.
        </p>
      </div>
    </div>

    <div class="container">
      <div class="about-inner-area">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 d-flex mb-4">
            <div class="about-text text-center bg-f9f6f6 shadow-sm p-4 flex-grow-1 hover-effect"
              style="background:#fff;">
              <img src="assets/img/banner-image/mlm-binary.png" alt="MLM Binary">

              <h3 class="pt-4 pb-3" style="font-size: 25px; font-weight: 600; position: relative;">MLM Binary Software
              </h3>
              <p>The Matrix software plan is also known as Forced Matrix Plan or Ladder Plan. This is the most common
                MLM compensation plan. Matrix software plans are denoted by the size of the matrix. The fundamental
                structure of the Matrix MLM software is classified by the size of the matrix.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 d-flex mb-4">
            <div class="about-text text-center bg-f9f6f6 shadow-sm p-4 flex-grow-1 hover-effect"
              style="background:#fff;">
              <img src="assets/img/banner-image/mlm-matrix.png" alt="MLM Matrix">
              <h3 class="pt-4 pb-3" style="font-size: 25px; font-weight: 600;  position: relative;">MLM Matrix software
              </h3>
              <p>The Matrix software plan is also known as Forced Matrix Plan or Ladder Plan. This is the most common
                MLM compensation plan. Matrix software plans are denoted by the size of the matrix. The fundamental
                structure of the Matrix MLM software is classified by the size of the matrix.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 d-flex mb-4">
            <div class="about-text text-center bg-f9f6f6 shadow-sm p-4 flex-grow-1 hover-effect"
              style="background:#fff;">
              <img src="assets/img/banner-image/mlm-plan.png" alt="plan">
              <h3 class="pt-4 pb-3" style="font-size: 25px; font-weight: 600;  position: relative;">MLM Generation Plan
                software</h3>
              <p class="mb-4">MLM Generation plan fits well for the companies that deal into purely consumable goods. It
                doesn't involve advertising products through different modes like TV Ads, PPC, newspapers, etc. to boost
                product sales. It completely depends on word of the mouth marketing.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 d-flex mb-4">
            <div class="about-text text-center bg-f9f6f6 shadow-sm p-4 flex-grow-1 hover-effect"
              style="background:#fff;">
              <img src="assets/img/banner-image/mlm-tree.png" alt="plan">
              <h3 class="pt-4 pb-3" style="font-size: 25px; font-weight: 600;  position: relative;">MLM Product Base
                Software</h3>
              <p class="mb-4">The most important thing that one should consider when choosing a top direct selling
                company is the products and services they offer. One of the best benefits that the direct selling
                company can offer is a chance for the direct seller to use and experience the benefits of the products
                themselves.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 d-flex mb-4">
            <div class="about-text text-center bg-f9f6f6 shadow-sm p-4 flex-grow-1 hover-effect"
              style="background:#fff;">
              <img src="assets/img/banner-image/mlm-ico.png" alt="plan">
              <h3 class="pt-4 pb-3" style="font-size: 25px; font-weight: 600;  position: relative;">MLM ICO Development
                Software</h3>
              <p class="mb-4">Everything you need for a super successful initial coin offering and platform building To
                be able to launch an initial coin offering and platform building you need a top ICO development company
                to create an (ERC20 based token/altcoin), White Paper, smart contracts development.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 d-flex mb-4">
            <div class="about-text text-center bg-f9f6f6 shadow-sm p-4 flex-grow-1 hover-effect"
              style="background:#fff;">
              <img src="assets/img/banner-image/mlm-cripto.png" alt="MLM-Crypto">
              <h3 class="pt-4 pb-3" style="font-size: 25px; font-weight: 600;  position: relative;">MLM Crypto software
              </h3>
              <p>Crypto software is a platform where user can exchange one type of crypto currency or digital currency
                for another. Depending on the crypto exchange, you may also be able to trade altcoins for paper money or
                paper currency. Crypto software promotes fast and safe transactions.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- ------------------------------------------------------------------------------------ -->
  <!-- ------------------------------------------------------------------------------------ -->
  <!-- start Pricing Area -->
  <div class="pricing-area pt-5 ml-feedback-area ">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="section-title">
          <h2>Our Pricing Plan</h2>
          <div class="bar"></div>
          <p>We offer flexible and competitive pricing plans that are tailored to meet the unique requirements of each
            project. Our pricing structure is designed to provide you with the best value for your investment while
            ensuring top-quality deliverables and exceptional customer service.</p>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="free-trial-image">
            <img src="assets/img/banner-image/plan.png" alt="image" style="height: 30rem;">
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="tab_content">
            <div class="tabs_item">
              <div class="pricing-box shadow mb-4 pt-5">
                <div class="pricing-headers">
                  <h3>Basic Plan</h3>
                  <p>Get your business up and running</p>
                </div>
                <div class="price">
                  ₹ 15999 / y <br><span> (28% Next Year renewal)</span>
                </div>
                <div class="buy-btn">
                  <a href="https://api.whatsapp.com/send?phone=919835942411&text=I want to know more about *Basic Plan MLM Software* of service %0a%0a https://www.givni.in/"
                    class="btn btn-primary">WhatsApp Now</a>
                </div>

                <ul class=" list-group pricing-features">
                  <li><i data-feather='check'></i>One-Year Maintenance Charge Free</li>
                  <li><i data-feather='check'></i> Weekly Update</li>
                  <li><i data-feather='check'></i> No hidden charge</li>
                  <li><i data-feather='check'></i> Flexible Payment Method</li>
                  <li><i data-feather='check'></i> With the Website one Page free</li>
                  <li><i data-feather='check'></i> Domain, Hosting, OTP, Play console One Year Free</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="shape2 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
    <div class="shape6 rotateme"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape7"><img src="assets/img/shape4.svg" alt="shape"></div>
    <div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
  </div>
</body>
</html>
<?php include 'include/footer.php' ?>