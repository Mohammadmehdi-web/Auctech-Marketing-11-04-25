<!DOCTYPE html>
<html dir="ltr" lang="zxx">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="description" content="Auctech Marketing Pvt. Ltd." />
    <meta name="keywords" content="AuctechMarketingPvt.Ltd." />
    <meta name="author" content="Auctech Marketing Pvt. Ltd." />

    <title>Auctech Marketing Pvt. Ltd. | Blogs</title>

    <link rel="icon" type="image/png" href="images/logo/favicon.png" />

    <link rel="stylesheet" href="css/font-main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.min.css" />
    <link rel="stylesheet" href="css/slick.min.css" />
    <link rel="stylesheet" href="css/nice-select.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery.min.js"></script>
    <style>
        @media (max-width: 1199px) {
            .service-details-page .wcu-area .wuc-area-side-img img {
                margin: 60px 0px;
                display: block;
            }
            .about-area-side-img .side-img-part {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <!-- Preloader Start  -->
    <div id="preloader">
        <div id="preloader-status">
            <div id="wifi-loader">
                <svg viewBox="0 0 86 86" class="circle-outer">
                    <circle r="40" cy="43" cx="43" class="back"></circle>
                    <circle r="40" cy="43" cx="43" class="front"></circle>
                    <circle r="40" cy="43" cx="43" class="new"></circle>
                </svg>
                <svg viewBox="0 0 60 60" class="circle-middle">
                    <circle r="27" cy="30" cx="30" class="back"></circle>
                    <circle r="27" cy="30" cx="30" class="front"></circle>
                </svg>
                <div data-text="Loading..." class="text"></div>
            </div>
        </div>
    </div>
    <!-- Preloader End  -->
    <!-- Header Start -->
    <header id="header">
        <?php
            include('header.php');
        ?>
    </header>
    <!-- Header End -->

    <!-- Tech Consulting Start -->
    <div class="service-details-page  body-black ">
        <div class="pages-heading p-relative">
            <div class="pages-heading-image p-relative z-index-1">
                <img src="images/contact/contact-header-img.png" alt="">
            </div>
            <div class="pages-heading-text style-2 p-absolute z-index-1">
                <span>Home / Blogs</span>
                <h2>Blogs</h2>
            </div>
        </div>
        <!-- Service Details Wcu One Start -->
        

       <!-- Blog & News Area Start -->
       <div class="blog-area body-black pb-140 pt-140">
        <div class="container">
            <div class="section-title mb-63 style-2">
                <span class="pb-15">Our Blog & Latest Updates <img src="images/icon/section-title-arrow.svg" alt=""></span>
                <h2>Our Blog & Latest Updates</h2>
            </div>
            <div class="row ">
                 <?php
                        include('db_con.php');

                            $sql = "SELECT blogs.blog_heading AS heading, 
                                        blogs_images.image, 
                                        blogs.blog_desc_first, 
                                        blogs.blog_url,
                                        blogs.created_at
                                FROM blogs
                                INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                GROUP BY blogs.id"; 

                            $result = $con->query($sql);

                            while ($row = $result->fetch_assoc()) {
                            $heading = $row['heading'];
                            $image = $row['image'];
                            $blog_desc_first = $row['blog_desc_first'];
                            $blog_url = $row['blog_url'];
                            $created_at = $row['created_at'];
                            $formatted_date = date("j F Y", strtotime($created_at));

                    ?>
                    <div class="col-xl-4 col-lg-4 ">
                        <div class="blog-area-card d-md-flex justify-content-center mb-25" id="card-1">
                            <div class="blog-area-card-wrapper">
                                <span class="mb-20"><?php echo $formatted_date; ?></span>
                                <a href="blog/<?php echo $blog_url; ?>"><h5 class="mb-20"><a href="blog/<?php echo $blog_url; ?>"><?php echo $heading; ?></h5></a>
                                <p class="hidden-card"><?php echo implode(' ', array_slice(explode(' ', $blog_desc_first), 0, 30)); ?></p>

                                <div class="card-image mt-20 p-relative">
                                     <a href="blog/<?php echo $blog_url; ?>"><img class="blog-main-img" src="blog/blog_uploads/<?php echo $image; ?>" alt=""></a>
                                    <div class="blog-area-icon-img p-absolute">
                                        <a href="blog/<?php echo $blog_url; ?>"><img src="images/icon/home-1-blog-awrro.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
     </div>
    <!-- Blog & News Area End -->
    </div>
    <!-- Services Details Page End -->
    <!-- Footer Start -->
    <footer id="footer">
        <?php
            include('footer.php');
        ?>
    </footer>
    <!-- Scroll Up Section Start -->
    <div id="scrollTop" class="scrollup-wrapper">
        <div class="scrollup-btn">
            <i class="fa-solid fa-chevron-up"></i>
        </div>
    </div>
    <!-- Scroll Up Section End -->
<!-- Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<!-- Slick Carousel JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/inview.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/tilt.jquery.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/jquery.imagesloaded.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>