<style>


p {
    font-size: 16px;
}
.footer-area-social-info .social-content a {
    font-size: 12px;
    align-items: center;
    text-align: center;
}

.wcu-area .container .row {
    align-items: center;
    justify-content: space-between;
}
@media only screen and (min-width: 1600px) and (max-width: 1800px) {
    .testimonial-area.style-1 .slick-arrow.btn-next, .testimonial-area.style-1 .slick-arrow.btn-prev {
        bottom: 36px;
    }
}
@media (max-width: 500px) {
    .about-area-content-wrapper p.pra-text {
        padding: 0 0 30px 0;
        font-size: 16px;
    }
    .footer-area-quick-menu-two ul li a, .footer-area-quick-menu-one ul li a, .footer-area-services ul li a{
        font-size:14px;
    }
}

.testimonial-area-main-slider {
    margin-top: 0px;
    margin-right: -12px;
}
@media (min-width:1200px) {
    .wuc-area-side-img {
        margin-right: 40px
    }
}

</style>

<div class="header-area body-black p-relative ">
    <div class="menu-bar fixed-menu">
        <div class="container-fulid">
            <div class="row align-items-center gx-0">
                <div class="col-5 col-xl-2 col-lg-3 col-md-4 p-0">
                    <div class="header-area-image style-2 ml-100">
                        <a href=""><img src="images/logo/logo.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-7 col-xl-10 col-lg-9 col-md-8">
                    <div
                        class="header-area-menu style-2 d-flex justify-content-end  d-xl-flex d-lg-flex  d-md-flex align-items-center justify-content-xl-between justify-content-lg-between justify-content-md-end   p-relative z-index-11">
                        <nav>
                            <ul class="main-menu  d-xl-flex d-lg-flex justify-content-center align-items-center">
                                <li class="scroll-effect"><a href="index.php">Home</a></li>
                                <!--<li class="scroll-effect"><a href="marcom-lab.php">About Us</a></li>-->
                                <li class="scroll-effect"><a class="plus-icon" href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.php">About Us</a></li>
                                        <!-- <li><a href="#">Vision & Mission</a></li>
                                        <li><a href="#">Core Values</a></li>
                                        <li><a href="#">History of Auctech</a></li>
                                         <li><a href="#">Key Milestones</a></li>-->
                                        <li><a href="team.php">Leadership Team</a></li>
                                        <li><a href="career.php">Career</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-effect"><a class="plus-icon" href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="branding-digital-pr-consulting.php">Branding & Digital PR Consulting</a></li>
                                        <li><a href="digital-marketing-consulting.php">Digital Marketing Consulting</a></li>
                                        <li><a href="social-media-marketing.php">Social Media Marketing (SMM)</a></li>
                                        <li><a href="search-engine-marketing.php">Search Engine Marketing (SEM)</a></li>
                                        <li><a href="seo-services.php">SEO Services</a></li>
                                        <li><a href="pay-per-clicks-ervices.php">Pay-Per-Click Services (PPC)</a></li>
                                        <li><a href="website-development.php">Website Development</a></li>
                                        <li><a href="mobile-app-development.php">Mobile App Development</a></li>
                                        <li><a href="e-commerce-solutions.php">E-commerce Solutions</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-effect"><a class="plus-icon" href="#">Solutions</a>
                                    <ul class="sub-menu">
                                        <li><a href="wealth-builder-crm.php">Wealth Builder CRM</a></li>
                                        <li><a href="auctech-realpro.php">Auctech RealPro</a></li>
                                        <li><a href="sales-promotions.php">Sales Promotions</a></li>
                                        <li><a href="loyalty-programs.php">Loyalty Programs</a></li>
                                        <li><a href="employee-engagement-and-rewards.php">Employee Engagement &
                                                Rewards</a></li>
                                        <li><a href="channel-loyalty-programs.php">Channel Loyalty Programs</a></li>
                                    </ul>
                                </li>
                                <li class="scroll-effect"><a href="portfolio.php">Portfolio</a></li>
                                <!-- <li class="scroll-effect"><a href="partners.php">Partners</a></li>
                                <li class="scroll-effect"><a href="#">Experts & Scientist</a></li>-->
                                <li class="scroll-effect"><a href="case-study.php">Case Studies</a></li>
                                <li class="scroll-effect"><a href="blogs.php">Blogs</a></li>
                            </ul>
                        </nav>
                        <div class="header-area-touch-btn mr-157">
                            <a href="contact.php">Contact Us</a>
                        </div>
                        <div id="toggle-button">
                            <a href="#"><i class="fa-solid fa-bars"></i></a>
                        </div>

                    </div>
                </div>
                <!-- Mobile Responsive Toggle Btn Start  -->
                <div class="toggle-menus" id="toggle-active" style="overflow-y:scrool; overflow-x:hidden;">
                    <div class="toggle-menu-header d-flex justify-content-between mb-40">
                        <div class="logo">
                            <img src="images/logo/logo.png" alt="">
                        </div>
                        <div class="toggle-close-icon">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                    <nav>
                        <ul class="dropdown">
                            <li><a href="">Home</a></li>
                            <li><a href="#">About</a>
                                <div class="dropdown-btn">
                                    <button class="dropdown-toggle-btn width-100" onclick="toggleList(1)"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                                <ul id="dropdown-toggle-menu-1" class=" hidden-list">
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="team.php">Leadership Team</a></li>
                                    <li><a href="career.php">Career</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Services</a>
                                <div class="dropdown-btn">
                                    <button class="dropdown-toggle-btn width-100" onclick="toggleList(2)"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                                <ul id="dropdown-toggle-menu-2" class=" hidden-list">
                                    <li><a href="branding-digital-pr-consulting.php">Branding & Digital PR Consulting</a></li>
                                        <li><a href="digital-marketing-consulting.php">Digital Marketing Consulting</a></li>
                                        <li><a href="social-media-marketing.php">Social Media Marketing (SMM)</a></li>
                                        <li><a href="search-engine-marketing.php">Search Engine Marketing (SEM)</a></li>
                                        <li><a href="seo-services.php">SEO Services</a></li>
                                        <li><a href="pay-per-clicks-ervices.php">Pay-Per-Click Services (PPC)</a></li>
                                        <li><a href="website-development.php">Website Development</a></li>
                                        <li><a href="mobile-app-development.php">Mobile App Development</a></li>
                                        <li><a href="e-commerce-solutions.php">E-commerce Solutions</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Solutions</a>
                                <div class="dropdown-btn">
                                    <button class="dropdown-toggle-btn width-100" onclick="toggleList(3)"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                                <ul id="dropdown-toggle-menu-3" class=" hidden-list">
                                    
                                    <li><a href="wealth-builder-crm.php">Wealth Builder CRM</a></li>
                                    <li><a href="auctech-realpro.php">Auctech RealPro</a></li>
                                    <li><a href="sales-promotions.php">Sales Promotions</a></li>
                                    <li><a href="loyalty-programs.php">Loyalty Programs</a></li>
                                    <li><a href="employee-engagement-and-rewards.php">Employee Engagement & Rewards</a>
                                    </li>
                                    <li><a href="channel-loyalty-programs.php">Channel Loyalty Programs</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li ><a href="case-study.php">Case Studies</a></li>
                            <li><a href="blogs.php">Blogs</a></li>
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
                        <ul class="d-flex " style="padding-top:0px">
                            <li>
    <a href="https://www.instagram.com/auctech.marcom/">
      <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/instagram-new.png" alt="instagram-new" />
      
    </a>
  </li>
  <li>
    <a href="https://www.facebook.com/auctechmarketing">
      <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/facebook-logo.png" alt="facebook-logo" />
 
    </a>
  </li>
  <li>
    <a href="https://www.linkedin.com/company/auctech-marketing-communications-pvt-ltd">
      <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/linkedin.png" alt="linkedin" />
    
    </a>
  </li>
  <li>
    <a href="https://twitter.com/auctechmarcom">
      <img class="mr-10" width="24" height="24" src="https://img.icons8.com/3d-fluency/x.png" alt="twitter-x" />
   
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