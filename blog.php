<?php
include 'db_con.php';

if (isset($_GET['page_url'])) {
	
	$page_url = mysqli_real_escape_string($con, $_GET['page_url']);

	$blog_query = "SELECT * FROM blogs WHERE blog_url = '$page_url'";
	$blog_result = mysqli_query($con, $blog_query);

	if ($blog_result && mysqli_num_rows($blog_result) > 0) {
		$blog = mysqli_fetch_assoc($blog_result);

		$image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$blog['id']}'";
		$image_result = mysqli_query($con, $image_query);
        
?>


<?php
	} else {
		
		echo "<p>Product not found.</p>";
	}
} else {
	
	echo "<p>No product URL provided.</p>";
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="zxx">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="utf-8" />
    <title><?php echo $blog['blog_desc_first']  ?></title>
    <meta name="description" content="<?php echo $blog['blog_desc_second']  ?>">
    <meta name="keywords" content="<?php echo $blog['blog_point_one']  ?>">
    <link rel="icon" type="image/png" href="../images/logo/favicon.png" />
    <link rel="stylesheet" href="../css/font-main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.min.css" />
    <link rel="stylesheet" href="../css/slick.min.css" />
    <link rel="stylesheet" href="../css/nice-select.min.css" />
    <link rel="stylesheet" href="../css/animate.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/jquery.min.js"></script>
    <!-- Slick Slider CSS & JS (CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
    .team-area-member-social-link li:hover {
        background: none;
        border-radius: inherit;
    }
    .footer-area-social-info .social-content a {
        font-size: 12px;
    }
        .main-blog-img{
            height:360px; width:100%; object-fit:cover;
        }
         .auctech-labpartners-slider {
                width: 95%;
                margin: 0 auto;
            }

            .auctech-labpartners-slider .slick-slide {
                padding: 15px;
            }

            .auctech-labpartners-img {
                width: 100%;
              
                object-fit: contain;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0,0,0,0.1);
                transition: transform 0.3s ease, filter 0.3s ease;
                background: transparent; /* No white BG */
            }

         

            .auctech-labpartners-img:hover {
                transform: scale(1.05);
                filter: brightness(1.1);
            }
            p {
                font-size: 15px;
            }


            .wcu-area .container .row {
                align-items: center;
                justify-content: space-between;
            }

            @media (max-width: 500px) {
                .about-area-content-wrapper p.pra-text {
                    padding: 0 0 30px 0;
                    font-size: 16px;
                }
            }


            @media (min-width:1200px) {
                .wuc-area-side-img {
                    margin-right: 40px
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

<div class="header-area body-black p-relative ">
    <div class="menu-bar fixed-menu">
        <div class="container-fulid">
            <div class="row align-items-center gx-0">
                <div class="col-5 col-xl-2 col-lg-3 col-md-4 p-0">
                    <div class="header-area-image style-2 ml-100">
                        <a href="https://auctechmarketing.com/"><img src="../images/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-7 col-xl-10 col-lg-9 col-md-8">
                    <div
                        class="header-area-menu style-2 d-flex justify-content-end  d-xl-flex d-lg-flex  d-md-flex align-items-center justify-content-xl-between justify-content-lg-between justify-content-md-end   p-relative z-index-11">
                        <nav>
                            <ul class="main-menu  d-xl-flex d-lg-flex justify-content-center align-items-center">
                                <li class="scroll-effect"><a href="https://auctechmarketing.com/">Home</a></li>
                                <!--<li class="scroll-effect"><a href="marcom-lab.php">About Us</a></li>-->
                                <li class="scroll-effect"><a class="plus-icon" href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://auctechmarketing.com/about-us.php">About Us</a></li>
                                        <!-- <li><a href="#">Vision & Mission</a></li>
                                        <li><a href="#">Core Values</a></li>
                                        <li><a href="#">History of Auctech</a></li>
                                         <li><a href="#">Key Milestones</a></li>-->
                                        <li><a href="https://auctechmarketing.com/team.php">Leadership Team</a></li>
                                        <li><a href="https://auctechmarketing.com/career.php">Career</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-effect"><a class="plus-icon" href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://auctechmarketing.com/branding-digital-pr-consulting.php">Branding & Digital PR Consulting</a></li>
                                        <li><a href="https://auctechmarketing.com/digital-marketing-consulting.php">Digital Marketing Consulting</a></li>
                                        <li><a href="https://auctechmarketing.com/social-media-marketing.php">Social Media Marketing (SMM)</a></li>
                                        <li><a href="https://auctechmarketing.com/search-engine-marketing.php">Search Engine Marketing (SEM)</a></li>
                                        <li><a href="https://auctechmarketing.com/seo-services.php">SEO Services</a></li>
                                        <li><a href="https://auctechmarketing.com/pay-per-clicks-ervices.php">Pay-Per-Click Services (PPC)</a></li>
                                        <li><a href="https://auctechmarketing.com/website-development.php">Website Development</a></li>
                                        <li><a href="https://auctechmarketing.com/mobile-app-development.php">Mobile App Development</a></li>
                                        <li><a href="https://auctechmarketing.com/e-commerce-solutions.php">E-commerce Solutions</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-effect"><a class="plus-icon" href="#">Solutions</a>
                                    <ul class="sub-menu">
                                        <li><a href="https://auctechmarketing.com/wealth-builder-crm.php">Wealth Builder CRM</a></li>
                                        <li><a href="https://auctechmarketing.com/auctech-realpro.php">Auctech RealPro</a></li>
                                        <li><a href="https://auctechmarketing.com/sales-promotions.php">Sales Promotions</a></li>
                                        <li><a href="https://auctechmarketing.com/loyalty-programs.php">Loyalty Programs</a></li>
                                        <li><a href="https://auctechmarketing.com/employee-engagement-and-rewards.php">Employee Engagement &
                                                Rewards</a></li>
                                        <li><a href="https://auctechmarketing.com/channel-loyalty-programs.php">Channel Loyalty Programs</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-effect"><a href="https://auctechmarketing.com/portfolio.php">Portfolio</a></li>
                                <!-- <li class="scroll-effect"><a href="partners.php">Partners</a></li>
                                <li class="scroll-effect"><a href="#">Experts & Scientist</a></li>-->
                                <li class="scroll-effect"><a href="https://auctechmarketing.com/case-study.php">Case Studies</a></li>
                                <li class="scroll-effect"><a href="https://auctechmarketing.com/blogs.php">Blogs</a></li>
                            </ul>
                        </nav>
                        <div class="header-area-touch-btn mr-157">
                            <a href="https://auctechmarketing.com/contact.php">Contact Us</a>
                        </div>
                        <div id="toggle-button">
                            <a href="#"><i class="fa-solid fa-bars"></i></a>
                        </div>

                    </div>
                </div>
                <!-- Mobile Responsive Toggle Btn Start  -->
                <div class="toggle-menus" id="toggle-active" style="overflow-y: scroll;">
                    <div class="toggle-menu-header d-flex justify-content-between mb-40">
                        <div class="logo">
                            <img src="../images/logo/logo.png" alt="">
                        </div>
                        <div class="toggle-close-icon">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                    <nav>
                        <ul class="dropdown">
                            <li><a href="https://auctechmarketing.com/">Home</a></li>
                            <li><a href="#">About</a>
                                <div class="dropdown-btn">
                                    <button class="dropdown-toggle-btn width-100" onclick="toggleList(1)"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                                <ul id="dropdown-toggle-menu-1" class=" hidden-list">
                                    <li><a href="https://auctechmarketing.com/about-us.php">About Us</a></li>
                                    <li><a href="https://auctechmarketing.com/team.php">Leadership Team</a></li>
                                    <li><a href="https://auctechmarketing.com/about-us.php">Career</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Services</a>
                                <div class="dropdown-btn">
                                    <button class="dropdown-toggle-btn width-100" onclick="toggleList(2)"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                                <ul id="dropdown-toggle-menu-2" class=" hidden-list">
                                    <li><a href="https://auctechmarketing.com/branding-digital-pr-consulting.php">Branding & Digital PR Consulting</a></li>
                                        <li><a href="https://auctechmarketing.com/digital-marketing-consulting.php">Digital Marketing Consulting</a></li>
                                        <li><a href="https://auctechmarketing.com/social-media-marketing.php">Social Media Marketing (SMM)</a></li>
                                        <li><a href="https://auctechmarketing.com/search-engine-marketing.php">Search Engine Marketing (SEM)</a></li>
                                        <li><a href="https://auctechmarketing.com/seo-services.php">SEO Services</a></li>
                                        <li><a href="https://auctechmarketing.com/pay-per-clicks-ervices.php">Pay-Per-Click Services (PPC)</a></li>
                                        <li><a href="https://auctechmarketing.com/website-development.php">Website Development</a></li>
                                        <li><a href="https://auctechmarketing.com/mobile-app-development.php">Mobile App Development</a></li>
                                        <li><a href="https://auctechmarketing.com/e-commerce-solutions.php">E-commerce Solutions</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Solutions</a>
                                <div class="dropdown-btn">
                                    <button class="dropdown-toggle-btn width-100" onclick="toggleList(3)"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                                <ul id="dropdown-toggle-menu-3" class=" hidden-list">
                                    
                                    <li><a href="https://auctechmarketing.com/wealth-builder-crm.php">Wealth Builder CRM</a></li>
                                    <li><a href="https://auctechmarketing.com/auctech-realpro.php">Auctech RealPro</a></li>
                                    <li><a href="https://auctechmarketing.com/sales-promotions.php">Sales Promotions</a></li>
                                    <li><a href="https://auctechmarketing.com/loyalty-programs.php">Loyalty Programs</a></li>
                                    <li><a href="https://auctechmarketing.com/employee-engagement-and-rewards.php">Employee Engagement & Rewards</a>
                                    </li>
                                    <li><a href="https://auctechmarketing.com/channel-loyalty-programs.php">Channel Loyalty Programs</a></li>
                                </ul>
                            </li>
                            <li><a href="https://auctechmarketing.com/portfolio.php">Portfolio</a></li>
                            <li><a href="https://auctechmarketing.com/case-study.php">Case Studies</a></li>
                            <li><a href="https://auctechmarketing.com/blogs.php">Blogs</a></li>
                        </ul>
                    </nav>
                     <div class="toggle-menu-contact">
                        <h4 class="mb-25">Contact Info</h4>
                        <div class="address mb-20">
                            <i class="mr-10 fa-solid fa-location-dot"></i>
                            <a target="_blank" href="https://maps.app.goo.gl/RVenzbWMTjQqNfPK8"><span>Flat 101, Shaligram Building,
                                    New Jiamau, 1090 Chauraha,
                                    Lucknow, Uttar Pradesh 226001</span></a>
                        </div>
                        <div class="email mb-20">
                            <i class="mr-10 fa-regular fa-envelope"></i>
                            <a href="mailto:info@auctech.in"> info@auctech.in </a>
                        </div>
                        <a href="tel:+916386452123">
                            <div class="phone">
                                <i class="mr-10 fa-solid fa-phone"></i>
                                <span>+91 6386452123 </span>
                            </div>
                        </a>
                        <a href="tel:+919838075490">
                            <div class="phone">
                                <i class="mr-10 fa-solid fa-phone"></i>
                                <span> +91 9838075490</span>
                            </div>
                        </a>
                    </div>
                    <div class="toggle-social-icon">
                        <ul class="d-flex justify-content-between">
                            <li>
                                            <a href="https://www.instagram.com/auctech.marcom/">
                                            <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/instagram-new.png" alt="instagram-new">
                                            
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/auctechmarketing">
                                            <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/facebook-logo.png" alt="facebook-logo">
                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd">
                                            <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/linkedin.png" alt="linkedin">
                                            
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/auctechmarcom">
                                            <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/x.png" alt="twitter-x">
                                        
                                            </a>
                                        </li>

                        </ul>
                    </div>
                </div>
                <!-- Mobile Responsive Toggle Btn End  -->
            </div>
        </div>
    </div>
</div>
    <!-- Off Canvas End  -->

    <!-- Blog-Details Star -->
    <div class="blog-details body-black ">
        <div class="pages-heading p-relative">
            <div class="pages-heading-image p-relative z-index-1">
                <img src="../images/contact/contact-header-img.png" alt="">
            </div>
            <div class="pages-heading-text style-2 p-absolute z-index-1">
                <span>Home / Blog Details</span>
                <h2>Blog Details</h2>
            </div>
        </div>
        <div class="blog-details-area pt-140">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="blog-details-main-part">
                            <div class="blog-details-main-content">
                                <div class="blog-details-content-img tilt-animate">
                                    <?php
								$image_row = mysqli_fetch_assoc($image_result); 
								if ($image_row) {
									echo "<img class='main-blog-img' src='blog_uploads/{$image_row['image']}' alt='Blog Image'/> ";
								} else {
									echo "<p>No Images available.</p>"; 
								}
								?>
                                </div>
                                <div class="blog-details-content-pra">
                                    <div class="data mt-30 mb-2">
                                        <?php echo date("j F Y", strtotime($blog['created_at'])); ?></div>
                                        <div class="blog-detils-content-pra-3 mb-50 ml-8">
                                        <h1><?php echo $heading; ?></h1>
                                    </div>
                                    <div class="blog-detils-content-pra-3 mb-50 ml-8">
                                        <p><?php echo $blog['blog_desc_two'] ?></p>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="author-card p-relative z-index-11">
                            <div class="author-card-img tilt-zoom">
                                <img src="../images/blog/block-page/logo1.png" alt="">
                            </div>
                            <div class="team-area-member-text text-center">
                                <h4>Auctech Marcom</h4>
                                <p>Auctech always try to provide the best Business Solutions for Clients to grow up
                                    their Business sharply and smoothly.</p>
                                <div class="team-area-member-social-link mt-15">
                                    <ul class="d-flex " style="padding-top:0px">
                                        <li>
                                            <a href="https://www.instagram.com/auctech.marcom/">
                                            <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/instagram-new.png" alt="instagram-new">
                                            
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/auctechmarketing">
                                            <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/facebook-logo.png" alt="facebook-logo">
                                        
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd">
                                            <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/linkedin.png" alt="linkedin">
                                            
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/auctechmarcom">
                                            <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/x.png" alt="twitter-x">
                                        
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="blog-details-news mb-89">
                            <h5>Recent Blogs</h5>
                            <div class="title-border-3"></div>
                            <div class="blog-details-news-content mt-30">
                                <?php
                                    include('db_con.php');                                   
                                    $sql = "SELECT blogs.blog_heading AS heading, 
                                            blogs_images.image, 
                                            blogs.blog_url,
                                            blogs.created_at
                                            FROM blogs
                                            INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                            GROUP BY blogs.id  
                                            ORDER BY blogs.created_at DESC LIMIT 4"; 

                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $heading = $row['heading'];
                                            $image = $row['image'];
                                            $blog_url = $row['blog_url'];
                                            $created_at = $row['created_at'];
                                            $formatted_date = date("j F Y", strtotime($created_at));
                                    ?>
                                <div class="blog-details-news-content-wrapper d-flex gap-30 mb-20">
                                    <div class="blog-details-news-img tilt-zoom">
                                        <img src="blog_uploads/<?php echo $image; ?>" alt="" width="150px">
                                    </div>
                                    <div class="blog-details-news-title">
                                        <h6><a href="<?php echo $blog_url; ?>"><?php echo $heading; ?></a></h6>
                                        <p><?php echo date("j F Y", strtotime($blog['created_at'])); ?> </p>
                                    </div>
                                </div>
                                <?php 
                                        }
                                    } else {
                                        
                                        echo "<p>No blog found for today</p>";
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="blog-details-post-part mb-100">
                                    <div class="auctech-labpartners-slider">
                                        <?php
                                        mysqli_data_seek($image_result, 0); 
                                        while ($logo_row = mysqli_fetch_assoc($image_result)) {
                                            if (!empty($logo_row['logos'])) {
                                            $imageSrc = 'blog_uploads/' . htmlspecialchars($logo_row['logos']);
                                        ?>
                                            <div>
                                            <img class="auctech-labpartners-img" src="<?php echo $imageSrc; ?>" alt="">
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
    </div>
    <!-- Blog-Details End -->
    <!-- Footer Start -->

    <div class="footer-area footer-bg ">
        <div class="container">
            <div class="row gx-0">
                <div class="col-xl-3 col-lg-3 p-0">
                    <div class="footer-area-company-info p-relative">
                        <div class="footer-area-company-logo pt-75 pb-33">
                            <img src="images/logo/logo.png" alt="">
                        </div>
                        <hr class="line-1 p-absolute">
                        <hr class="mt-0 mb-0">
                        <div class="footer-area-heading-text pt-33 pb-31">
                            <h2>Let’s Work</h2>
                            <h4>Together</h4>
                        </div>
                        <div class="footer-area-company-fast-email pb-69">
                            <a href="mailto:info@auctech.in"> info@auctech.in<img class="pl-10"
                                    src="images/icon/footer-up-awrro.svg" alt=""> </a>
                        </div>
                        <hr class="mt-0 mb-16">
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="footer-area-contract-info ">
                        <div
                            class="footer-area-social-info d-block d-xl-flex d-lg-flex d-md-flex justify-content-between align-items-center pt-74 pb-34">
                            <div class="sce-email ml-120">
                                <a href="tel:+916386452123"><img style="height:25px" class="mr-5" src="https://img.icons8.com/3d-fluency/whatsapp.png"
                                        alt=""> +91-6386452123</a>
                            </div>
                            <div class="social-content d-flex gap-40">
                                        <a target="_blank" href="https://www.instagram.com/auctech.marcom/"><img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/instagram-new.png" alt="new"/>Instragarm</a>
                                    <a target="_blank" href="https://www.facebook.com/auctechmarketing"><img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/facebook-logo.png" alt="instagram-new"/>Facebook</a>
                                    <a target="_blank" href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd"><img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/linkedin.png" alt="new"/>Linkedin</a>
                                    <a target="_blank" href="https://twitter.com/auctechmarcom"><img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/x.png" alt="new"/>X/Twitter</a> 
                            
                            </div>
                        </div>
                    </div>
                    <div class="footer-area-quick-menu d-flex pt-67 pb-40 ml-81">
                        <div class="footer-area-quick-menu-one ">
                            <ul>
                                <li><a href="https://auctechmarketing.com/">Home</a></li>
                                <li><a href="https://auctechmarketing.com/about-us.php">About Us</a></li>
                                <li><a href="https://auctechmarketing.com/portfolio.php"> Portfolio</a></li>
                                <li><a href="https://auctechmarketing.com/case-study.php">Case Studies</a></li>
                                
                            </ul>
                        </div>
                        <div class="footer-area-quick-menu-two ml-127 mr-92">

                            <ul>
                                <li><a href="https://auctechmarketing.com/blogs.php">Blogs</a></li>
                                
                                <li><a href="https://auctechmarketing.com/contact.php">Contact Us</a></li>
                                <li><a href="https://auctechmarketing.com/branding-digital-pr-consulting.php">Services</a></li>
                                <li><a href="https://auctechmarketing.com/wealth-builder-crm.php">Solutions</a></li>
                            
                                
                            </ul>
                        </div>
                        <div class="footer-area-services">

                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <div class="footer-area-sand-messege ml-110">
                            <a href="https://auctechmarketing.com/contact.php">
                                <h4>Contact Us</h4>
                                <span class="icon-send"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy-right-info d-flex justify-content-center align-items-center pb-15 ">
            <span>©2025 <a href="#">Auctech MarCom Pvt. Ltd.</a> All Rights Reserved</span>
        </div>
    </div>
    <!-- Scroll Up Section Start -->
    <div id="scrollTop" class="scrollup-wrapper">
        <div class="scrollup-btn">
            <i class="fa-solid fa-chevron-up"></i>
        </div>
    </div>
    <!-- Scroll Up Section End -->

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/waypoints.js"></script>
    <script src="../js/jquery.meanmenu.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/inview.min.js"></script>
    <script src="../js/wow.js"></script>
    <script src="../js/tilt.jquery.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/jquery.imagesloaded.min.js"></script>
    <script src="../js/custom.js"></script>

    <script>
  $(document).ready(function(){
    var $slider = $('.auctech-labpartners-slider');
    var slideCount = $slider.children().length;

    $slider.slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: slideCount > 3, // Only infinite if more than 3 items
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2
          }
        }
      ]
    });
  });
</script>



</body>

</html>