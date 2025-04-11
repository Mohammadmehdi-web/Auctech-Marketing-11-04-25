-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2025 at 01:43 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u622085619_auctech_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_banner`
--

CREATE TABLE `add_banner` (
  `id` int(11) NOT NULL,
  `type` varchar(500) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_banner`
--

INSERT INTO `add_banner` (`id`, `type`, `title`, `details`, `image_path`) VALUES
(6, 'Banner', 'Creative <span>Design</span>', 'Creative <span>Design</span>', 'banner_uploads/1.jpg'),
(7, 'Banner', 'Android/IOS <span>Mobile Apps</span>', 'Android/IOS <span>Mobile Apps</span>', 'banner_uploads/3.jpg'),
(8, 'Banner', 'Software <span>Development</span>', 'Software <span>Development</span>', 'banner_uploads/5.jpg'),
(9, 'Banner', 'Website <span>Development</span>', 'Website <span>Development</span>', 'banner_uploads/6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_job`
--

CREATE TABLE `add_job` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `added_date` int(6) DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_testimonial`
--

CREATE TABLE `add_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_testimonial`
--

INSERT INTO `add_testimonial` (`id`, `name`, `image_path`, `review`, `designation`, `created_at`) VALUES
(2, 'Northview Collegiate', 'testimonial_uploads/testimonial.png', 'Auctech built a great school management system for us. Itâ€™s easy to use, and their team was very supportive.', 'Canada', '2025-01-28'),
(3, 'Ankur Traders', 'testimonial_uploads/testimonial.png', 'We got a dynamic website with an amazing UI. Itâ€™s fast, SEO-friendly, and exactly what we needed. Auctech did a great job!', 'India', '2025-01-28'),
(7, 'Husaini Islamic Arts', 'testimonial_uploads/testimonial.png', 'Our eCommerce website is perfect! The design is beautiful, and the site runs smoothly. Auctech understood our needs well.', 'India', '2025-02-20'),
(8, ' ABA Group', 'testimonial_uploads/testimonial.png', 'Auctech developed a real estate CRM and a website for us. Their team is skilled and professional. We are happy with the results.', 'India', '2025-02-20'),
(9, ' SI-Dinar', 'testimonial_uploads/testimonial.png', 'They created a great website for us. It looks professional and works well on all devices. Auctech delivered on time!', 'Dubai', '2025-04-03'),
(10, 'Elite Motors', 'testimonial_uploads/testimonial.png', 'We needed a website for our car dealership, and Auctech made it exactly as we imagined. They were professional and quick!', 'Dubai', '2025-04-03'),
(13, 'Royal Interiors', 'testimonial_uploads/testimonial.png', 'We wanted a stylish website for our interior design business. Auctech delivered a modern and elegant website. We love it!', 'Dubai', '2025-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `register` varchar(255) DEFAULT NULL,
  `suggestion` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL,
  `task_wallet` int(100) DEFAULT 0,
  `game_wallet` int(100) DEFAULT 0,
  `BANK_NAME` varchar(100) NOT NULL,
  `IFSC_CODE` varchar(100) NOT NULL,
  `ACC_HOLDER_NM` varchar(100) NOT NULL,
  `ACC_NUMBERS` int(100) NOT NULL,
  `ACC_TYPE` varchar(100) NOT NULL,
  `LAST_LOGIN` varchar(100) NOT NULL,
  `ACC_STATUS` varchar(100) NOT NULL DEFAULT 'active',
  `TYPE` varchar(50) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`s_no`, `user_id`, `firstname`, `lastname`, `username`, `email`, `register`, `suggestion`, `mobile_no`, `password`, `confirm_password`, `resettoken`, `resettokenexpire`, `task_wallet`, `game_wallet`, `BANK_NAME`, `IFSC_CODE`, `ACC_HOLDER_NM`, `ACC_NUMBERS`, `ACC_TYPE`, `LAST_LOGIN`, `ACC_STATUS`, `TYPE`) VALUES
(1, '9067706', 'Super', 'Admin', 'shahbaz@123', 'testadmin@demo.com', 'advertiser', '', '7355742333', '123456', '123456', NULL, NULL, 0, 400, '', '', '', 0, '', '', 'active', 'ADMIN'),
(2, '786', 'Zaid', 'Rizvi', 'zaid', 'admin@gmail.com', 'test', '', '9335438189', '1234', '1234', NULL, NULL, 0, 999, '', '', '', 0, '', '', 'active', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_url` varchar(255) NOT NULL,
  `blog_heading` varchar(255) NOT NULL,
  `blog_desc_first` longtext DEFAULT NULL,
  `blog_desc_second` text DEFAULT NULL,
  `blog_point_one` longtext DEFAULT NULL,
  `blog_point_two` longtext DEFAULT NULL,
  `blog_desc_two` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_url`, `blog_heading`, `blog_desc_first`, `blog_desc_second`, `blog_point_one`, `blog_point_two`, `blog_desc_two`, `created_at`) VALUES
(1, 'journey-of-auctech', 'From Code to Creativity: The Journey of Auctech', 'Started in 2006, Auctech Marcom has transformed from a modest software firm to a powerhouse of digital solutions â€” blending technology and creativity to empower businesses across the globe.', 'From Code to Creativity: How Auctech Became a Digital Growth Partner for Modern Businesses', 'Auctech MarCom', 'Auctech marketing', '<p data-start=\"1004\" data-end=\"1185\" class=\"\">In todayâ€™s fast-evolving digital world, only a few companies truly succeed in blending <strong data-start=\"1091\" data-end=\"1121\">technology with creativity</strong> â€” and Auctech Marketing Communication Pvt. Ltd. is one of them.</p><p data-start=\"1187\" data-end=\"1438\" class=\"\">Founded in <strong data-start=\"1198\" data-end=\"1206\">2006</strong>, Auctech began its journey as a <strong data-start=\"1239\" data-end=\"1279\">small, passionate team of developers</strong> with big dreams. What started as a humble software development company has now grown into a <strong data-start=\"1372\" data-end=\"1407\">full-fledged digital powerhouse</strong>, offering solutions that span:</p><ul data-start=\"1440\" data-end=\"1617\">\n<li data-start=\"1440\" data-end=\"1473\" class=\"\">\n<p data-start=\"1442\" data-end=\"1473\" class=\"\"><strong data-start=\"1442\" data-end=\"1473\">Custom Software Development</strong></p>\n</li>\n<li data-start=\"1474\" data-end=\"1503\" class=\"\">\n<p data-start=\"1476\" data-end=\"1503\" class=\"\"><strong data-start=\"1476\" data-end=\"1503\">Digital Marketing &amp; SEO</strong></p>\n</li>\n<li data-start=\"1504\" data-end=\"1538\" class=\"\">\n<p data-start=\"1506\" data-end=\"1538\" class=\"\"><strong data-start=\"1506\" data-end=\"1538\">Branding &amp; Creative Strategy</strong></p>\n</li>\n<li data-start=\"1539\" data-end=\"1567\" class=\"\">\n<p data-start=\"1541\" data-end=\"1567\" class=\"\"><strong data-start=\"1541\" data-end=\"1567\">Mobile App Development</strong></p>\n</li>\n<li data-start=\"1568\" data-end=\"1586\" class=\"\">\n<p data-start=\"1570\" data-end=\"1586\" class=\"\"><strong data-start=\"1570\" data-end=\"1586\">UI/UX Design</strong></p>\n</li>\n<li data-start=\"1587\" data-end=\"1617\" class=\"\">\n<p data-start=\"1589\" data-end=\"1617\" class=\"\"><strong data-start=\"1589\" data-end=\"1617\">Marketing Communications</strong></p>\n</li>\n</ul><p data-start=\"1619\" data-end=\"1813\" class=\"\">With an unwavering focus on <strong data-start=\"1647\" data-end=\"1690\">innovation, quality, and client success</strong>, Auctech has helped businesses â€” from startups to established enterprises â€” thrive in the competitive digital marketplace.</p><p>\n\n\n\n</p><blockquote data-start=\"1815\" data-end=\"1926\">\n<p data-start=\"1817\" data-end=\"1926\" class=\"\">â€œWe donâ€™t just build websites or apps, we build digital experiences that create impact.â€<br data-start=\"1905\" data-end=\"1908\">\nâ€” <em data-start=\"1912\" data-end=\"1926\">Team Auctech</em></p></blockquote><p></p>', '2025-01-18 08:17:23'),
(3, 'How-Auctech-Powers', 'Innovation Engine: How Auctech Powers Business Growth', 'Since its inception in 2006, Auctech Marketing Communication Pvt Ltd has been on a mission to enable businesses through technology and innovation. What sets Auctech apart is its unique blend of technical expertise and strategic vision, turning challenges into opportunities for clients across industries.', 'How Auctech Powers Business Growth', 'Auctech Powers Business Growth', 'Auctech Powers Business Growth', '<p data-start=\"168\" data-end=\"362\" class=\"\">In the realm of digital transformation, success comes to those who can adapt, innovate, and deliver â€” and thatâ€™s exactly what Auctech Marketing Communication Pvt. Ltd. has been doing since 2006.</p><p data-start=\"364\" data-end=\"606\" class=\"\">Over the years, Auctech has carved its niche by offering end-to-end digital solutions tailored to each clientâ€™s unique needs. Whether it\'s a custom CRM, a brand campaign, or a mobile app, every project is crafted with purpose and precision.</p><p data-start=\"608\" data-end=\"648\" class=\"\">Hereâ€™s what Auctech brings to the table:</p><ul data-start=\"650\" data-end=\"874\">\r\n<li data-start=\"650\" data-end=\"681\" class=\"\">\r\n<p data-start=\"652\" data-end=\"681\" class=\"\">Scalable Software Solutions</p>\r\n</li>\r\n<li data-start=\"682\" data-end=\"713\" class=\"\">\r\n<p data-start=\"684\" data-end=\"713\" class=\"\">Strategic Digital Marketing</p>\r\n</li>\r\n<li data-start=\"714\" data-end=\"752\" class=\"\">\r\n<p data-start=\"716\" data-end=\"752\" class=\"\">Intelligent CRM &amp; Automation Tools</p>\r\n</li>\r\n<li data-start=\"753\" data-end=\"790\" class=\"\">\r\n<p data-start=\"755\" data-end=\"790\" class=\"\">Visual Branding &amp; Creative Design</p>\r\n</li>\r\n<li data-start=\"791\" data-end=\"833\" class=\"\">\r\n<p data-start=\"793\" data-end=\"833\" class=\"\">Performance-Driven Mobile Applications</p>\r\n</li>\r\n<li data-start=\"834\" data-end=\"874\" class=\"\">\r\n<p data-start=\"836\" data-end=\"874\" class=\"\">Seamless User Experience &amp; UI Design</p>\r\n</li>\r\n</ul><p>\r\n\r\n\r\n\r\n</p><p data-start=\"876\" data-end=\"1065\" class=\"\">At Auctech, innovation is more than a buzzword â€” it\'s the core of every project. The teamâ€™s passion for technology and creativity continues to redefine what\'s possible in the digital space.</p>', '2025-04-07 13:10:06'),
(4, 'auctech-vision', 'Beyond Boundaries: Auctechâ€™s Vision for the Future', 'As the digital world rapidly evolves, Auctech Marketing Communication Pvt. Ltd. remains at the forefront â€” not just keeping pace with change, but actively shaping it.', 'Auctechâ€™s Vision for the Future', 'Auctechâ€™s Vision ', 'The Ultimate MarketingEngine', '<p data-start=\"370\" data-end=\"746\" class=\"\">From its foundation in 2006 to becoming a trusted name in digital innovation, Auctechâ€™s journey is defined by a clear vision: to empower businesses through technology-driven, human-centric solutions. With each passing year, the company has expanded its services, sharpened its strategies, and embraced the latest technologies to help clients thrive in a hyper-connected world.</p><p data-start=\"748\" data-end=\"771\" class=\"\">Auctech specializes in:</p><ul data-start=\"773\" data-end=\"988\">\r\n<li data-start=\"773\" data-end=\"808\" class=\"\">\r\n<p data-start=\"775\" data-end=\"808\" class=\"\">Enterprise Software Development</p>\r\n</li>\r\n<li data-start=\"809\" data-end=\"842\" class=\"\">\r\n<p data-start=\"811\" data-end=\"842\" class=\"\">ROI-Focused Digital Marketing</p>\r\n</li>\r\n<li data-start=\"843\" data-end=\"880\" class=\"\">\r\n<p data-start=\"845\" data-end=\"880\" class=\"\">Branding that Connects &amp; Converts</p>\r\n</li>\r\n<li data-start=\"881\" data-end=\"912\" class=\"\">\r\n<p data-start=\"883\" data-end=\"912\" class=\"\">Custom Mobile App Solutions</p>\r\n</li>\r\n<li data-start=\"913\" data-end=\"947\" class=\"\">\r\n<p data-start=\"915\" data-end=\"947\" class=\"\">UI/UX that Enhances Engagement</p>\r\n</li>\r\n<li data-start=\"948\" data-end=\"988\" class=\"\">\r\n<p data-start=\"950\" data-end=\"988\" class=\"\">Omni-channel Marketing Communication</p>\r\n</li>\r\n</ul><p data-start=\"990\" data-end=\"1129\" class=\"\">Backed by a talented team of strategists, designers, developers, and marketers, Auctech doesnâ€™t just deliver projects â€” it delivers impact.</p><p>\r\n\r\n\r\n\r\n</p><p data-start=\"1131\" data-end=\"1247\" class=\"\"><strong data-start=\"1131\" data-end=\"1228\">â€œEvery solution we build is a step toward our clients\' long-term growth and digital success.â€</strong><br data-start=\"1228\" data-end=\"1231\">\r\nâ€” Team Auctech</p>', '2025-04-07 13:16:25'),
(7, 'Simple-Strategies-for-Long-Term-Financial-Success-update', 'Expert Engineering Consulting for Precision & Innovation', 'TMT was established in 1984 under the leadership of Padma Bhushan Late Maulana Dr. Kalbe Sadiq Sahab in Lucknow. The purpose of forming this trust was to support education of the under privileged children of the society.', 'TMT was established in 1984 under the leadership of Padma Bhushan Late Maulana Dr. Kalbe Sadiq Sahab in Lucknow. The purpose of forming this trust was to support education of the under privileged children of the society. He believed everyone should be given the opportunity to educate themselves and a person\'s socio-economic condition should not be a barrier in achieving that goal. TMT was born as a link between those willing to learn but lacking the means to do so, and philanthropists eager to contribute towards positive change in the society and since then TMT with the help of its donors is working hard in the upliftment of the underprivileged Individuals. TMT\'s mission is to use education as a tool to combat ignorance and poverty. Along with Education, TMT also provide Medical Aid and Rehabilitation Aid to the underprivileged. In 40 years, TMT has helped a lot of individuals and families through its institutes and aid programs.', 'TMT was established in 1984 under the leadership of Padma Bhushan Late Maulana Dr. Kalbe Sadiq Sahab in Lucknow. The purpose of forming this trust was to support education of the under privileged children of the society. He believed everyone should be given the opportunity to educate themselves and a person\'s socio-economic condition should not be a barrier in achieving that goal. TMT was born as a link between those willing to learn but lacking the means to do so, and philanthropists eager to contribute towards positive change in the society and since then TMT with the help of its donors is working hard in the upliftment of the underprivileged Individuals. TMT\'s mission is to use education as a tool to combat ignorance and poverty. Along with Education, TMT also provide Medical Aid and Rehabilitation Aid to the underprivileged. In 40 years, TMT has helped a lot of individuals and families through its institutes and aid programs.', 'Auctech marketing', '<p data-pm-slice=\"1 1 []\">TMT was established in 1984 under the leadership of Padma Bhushan Late Maulana Dr. Kalbe Sadiq Sahab in Lucknow. The purpose of forming this trust was to support education of the under privileged children of the society. He believed everyone should be given the opportunity to educate themselves and a person\'s socio-economic condition should not be a barrier in achieving that goal. TMT was born as a link between those willing to learn but lacking the means to do so, and philanthropists eager to contribute towards positive change in the society and since then TMT with the help of its donors is working hard in the upliftment of the underprivileged Individuals. TMT\'s mission is to use education as a tool to combat ignorance and poverty. Along with Education, TMT also provide Medical Aid and Rehabilitation Aid to the underprivileged. In 40 years, TMT has helped a lot of individuals and families through its institutes and aid programs.<span style=\"font-size: 1rem;\">TMT was established in 1984 under the leadership of Padma Bhushan Late Maulana Dr. Kalbe Sadiq Sahab in Lucknow. The purpose of forming this trust was to support education of the under privileged children of the society. He believed everyone should be given the opportunity to educate themselves and a person\'s socio-economic condition should not be a barrier in achieving that goal. TMT was born as a link between those willing to learn but lacking the means to do so, and philanthropists eager to contribute towards positive change in the society and since then TMT with the help of its donors is working hard in the upliftment of the underprivileged Individuals. TMT\'s mission is to use education as a tool to combat ignorance and poverty. Along with Education, TMT also provide Medical Aid and Rehabilitation Aid to the underprivileged. In 40 years, TMT has helped a lot of individuals and families through its institutes and aid programs.</span></p>', '2025-04-10 13:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_images`
--

CREATE TABLE `blogs_images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `logos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs_images`
--

INSERT INTO `blogs_images` (`id`, `blog_id`, `image`, `logos`) VALUES
(8, 1, '1-design.png', 'CRM Integration.jpg'),
(9, 1, '1-design.png', 'Lead Generation Tools.jpg'),
(10, 1, '1-design.png', 'Marketing Campaign Management.jpg'),
(11, 1, '1-design.png', 'The Ultimate Marketing Engine.jpg'),
(12, 2, 'ARST-LOGO.jpg', ''),
(13, 2, '', 'ARST logo 1080x1080.png'),
(21, 3, 'Marketing Campaign Management.jpg', 'The Ultimate Marketing Engine.jpg'),
(22, 3, 'Marketing Campaign Management.jpg', 'Lead Generation Tools.jpg'),
(23, 3, 'Marketing Campaign Management.jpg', 'CRM Integration.jpg'),
(24, 3, 'Marketing Campaign Management.jpg', '1-design.png'),
(25, 4, 'The Ultimate Marketing Engine.jpg', 'Marketing Campaign Management.jpg'),
(26, 4, 'The Ultimate Marketing Engine.jpg', 'Lead Generation Tools.jpg'),
(27, 4, 'The Ultimate Marketing Engine.jpg', 'CRM Integration.jpg'),
(28, 4, 'The Ultimate Marketing Engine.jpg', '1-design.png'),
(29, 5, 'Background.jpg', ''),
(30, 5, '', 'Background.jpg'),
(31, 5, '', 'Kids.png'),
(32, 5, '', 'Manisha Banner.jpg'),
(33, 6, 'Background.jpg', ''),
(34, 6, '', 'Background.jpg'),
(35, 6, '', 'Kids.png'),
(36, 6, '', 'Manisha Banner.jpg'),
(37, 7, 'Anxiety-&-Stress.jpg', ''),
(38, 7, '', 'Anxiety-&-Stress.jpg'),
(39, 7, '', 'phemosis.jpg'),
(40, 7, '', 'about_img_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `added_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_banner`
--
ALTER TABLE `add_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_job`
--
ALTER TABLE `add_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_testimonial`
--
ALTER TABLE `add_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs_images`
--
ALTER TABLE `blogs_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_banner`
--
ALTER TABLE `add_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_job`
--
ALTER TABLE `add_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_testimonial`
--
ALTER TABLE `add_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs_images`
--
ALTER TABLE `blogs_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
