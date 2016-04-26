-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 09:05 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vietnamesefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `bigbanner`
--

CREATE TABLE IF NOT EXISTS `bigbanner` (
`id` int(3) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `linkTo` varchar(255) DEFAULT NULL,
  `subPage` tinyint(1) NOT NULL DEFAULT '0',
  `belongToPage` varchar(255) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(3) NOT NULL DEFAULT '1',
  `created_at` int(3) DEFAULT NULL,
  `updated_at` int(3) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `bigbanner`
--

INSERT INTO `bigbanner` (`id`, `image`, `linkTo`, `subPage`, `belongToPage`, `published`, `order`, `created_at`, `updated_at`) VALUES
(2, 'http://vietnamesefood.app/sources/banner/1.jpg', '1', 0, NULL, 1, 1, 1457323160, 1460575623),
(3, 'http://vietnamesefood.app/sources/banner/2.jpg', '2', 0, NULL, 1, 2, 1457323194, 1460575612),
(5, 'http://trungdungmedia.app/sources/banner/hero_3.jpg', 'dsfdsf', 1, 'tin-tuc', 1, 0, 1457649191, 1457649191),
(6, 'http://trungdungmedia.app/sources/banner/1.jpg', '', 1, 'san-pham', 1, 21, 1457649730, 1457650664),
(7, 'http://trungdungmedia.app/sources/banner/woman-in-shop-for-ancillary.png', '', 1, 'gioi-thieu', 1, 123, 1457650737, 1457650737),
(8, 'http://trungdungmedia.app/sources/banner/growth.jpg', '', 1, 'ly-do-chon-td', 1, 0, 1457679741, 1457679741),
(9, 'http://trungdungmedia.app/sources/banner/641implementationservices.jpg', '', 1, 'support', 1, 23, 1457679803, 1457679803),
(10, 'http://trungdungmedia.app/sources/banner/growth.jpg', '', 1, 'san-xuat-chuong-trinh', 1, 1, 1459411705, 1459411705),
(11, 'http://trungdungmedia.app/sources/banner/hero_3.jpg', '', 1, 'tiep-thi-va-tai-tro', 1, 2, 1459412031, 1459412031);

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
`id` int(3) NOT NULL,
  `general` longtext COLLATE utf8_unicode_ci,
  `social` longtext COLLATE utf8_unicode_ci,
  `config_online` text COLLATE utf8_unicode_ci,
  `created_at` int(3) DEFAULT NULL,
  `updated_at` int(3) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `general`, `social`, `config_online`, `created_at`, `updated_at`) VALUES
(1, 'a:11:{s:9:"site_name";s:24:"VietnameseFoodTraditonal";s:15:"company_address";s:56:"Số 0 TKD, P.Tân Định, Quận 1, Tp. Hồ Chí Minh";s:5:"phone";s:12:"+84 11111111";s:10:"seo_k_home";s:24:"VietnameseFoodTraditonal";s:13:"seo_desc_home";s:24:"VietnameseFoodTraditonal";s:12:"company_name";s:24:"VietnameseFoodTraditonal";s:3:"fax";s:13:"+84 111111111";s:7:"hotline";s:14:"0122 67 69 373";s:7:"website";s:33:"www.vietnamesetraditionalfood.com";s:5:"email";s:23:"info@vietnamesefood.com";s:11:"admin_email";s:16:"tinapc@gmail.com";}', 'a:5:{s:8:"facebook";s:25:"https://www.facebook.com/";s:7:"twitter";s:20:"https://twitter.com/";s:7:"youtube";s:29:"https://www.youtube.com/user/";s:9:"pinterest";s:0:"";s:6:"google";s:0:"";}', 's:31:"online,today,yesterday,total,No";', NULL, 1460613854);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'editor', 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
`id` int(3) NOT NULL,
  `pro_id` int(3) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `pro_id`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(2, 159, 'http://vietnamesefood.app/sources/product/sp1-big.jpg', 'http://vietnamesefood.app/sources/product/san-pham-chi-tiet.jpg', 'http://vietnamesefood.app/sources/product/sp1.jpg', '', ''),
(5, 160, 'http://vietnamesefood.app/sources/product/businessman.jpg', '', '', '', ''),
(6, 158, 'http://vietnamesefood.app/sources/product/san-pham-chi-tiet.jpg', '', '', '', ''),
(7, 161, 'http://vietnamesefood.app/sources/product/sp1.jpg', '', '', '', ''),
(8, 162, NULL, NULL, NULL, NULL, NULL),
(10, 85, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE IF NOT EXISTS `resource` (
`id` bigint(15) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(5) NOT NULL DEFAULT '0',
  `content_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `long_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `long_title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `description_en` text COLLATE utf8_unicode_ci,
  `intro` text COLLATE utf8_unicode_ci,
  `intro_en` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `content_en` longtext COLLATE utf8_unicode_ci,
  `menu_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_attr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `external_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hide_from_menu` tinyint(2) DEFAULT '0',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `show_home` tinyint(2) DEFAULT '0',
  `is_default` tinyint(2) DEFAULT '0',
  `is_hot` tinyint(2) DEFAULT '0',
  `deleted_status` tinyint(2) DEFAULT '0',
  `menu_index` int(3) DEFAULT '0',
  `show_gallery` tinyint(2) DEFAULT '0',
  `created_at` int(3) DEFAULT NULL,
  `updated_at` int(3) DEFAULT NULL,
  `published` tinyint(2) DEFAULT '1',
  `price` int(3) DEFAULT '0',
  `price_promotion` int(3) DEFAULT '0',
  `product_code` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viewed` int(11) DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=164 ;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `title`, `title_en`, `alias`, `parent`, `content_type`, `long_title`, `long_title_en`, `description`, `description_en`, `intro`, `intro_en`, `content`, `content_en`, `menu_title`, `menu_title_en`, `link_attr`, `external_link`, `hide_from_menu`, `image`, `icon`, `show_home`, `is_default`, `is_hot`, `deleted_status`, `menu_index`, `show_gallery`, `created_at`, `updated_at`, `published`, `price`, `price_promotion`, `product_code`, `viewed`) VALUES
(2, 'Giới thiệu tổng quan', 'Vietnam Food', 'gioi-vietnam-food', 0, 'introduction', '', '', '', '', '<p>Intro vi</p>', '<p>Intro en</p>', '<p>Content vi</p>', '<p>content en</p>', 'Vietnamese Food', 'Vietnam Food', '', '', 0, '', '', 1, 1, 0, 0, 0, 0, 1419448607, 1460149506, 1, 0, 0, NULL, 0),
(14, 'Tin tổng hợp', NULL, 'tin-tong-hop', 0, 'cate_news', 'Tin tổng hợp', NULL, 'Tin tổng hợp', NULL, '', NULL, '', NULL, 'Tin tổng hợp', NULL, '', '', 0, '', '', 0, 0, 0, 0, 2, 0, 1419561267, 1420481294, 1, 0, 0, NULL, 0),
(52, 'Hình ảnh hoạt động', NULL, 'hinh-anh-hoat-dong', 0, 'guide', '', NULL, '', NULL, '', NULL, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>', NULL, 'Hình ảnh hoạt động', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419790797, 1420552075, 0, 0, 0, NULL, 0),
(53, 'Điện thoại hỗ trợ', NULL, 'dien-thoai-ho-tro', 0, 'phone_support', 'Điện thoại cho Tâm Điểm', NULL, '', NULL, '', NULL, '<h2><img style="float: left;" src="/tinymce/source/Hinh up bai/Dich-vu-ho-tro.jpg" alt="" width="270" /></h2>\n<h2>&nbsp;</h2>\n<h2>&nbsp;<img src="/tinymce/source/Hinh up bai/Hotline.gif" alt="" /></h2>\n<h2>&nbsp;</h2>\n<h2>&nbsp;</h2>\n<h2>&nbsp;</h2>\n<h2>&nbsp;</h2>', NULL, 'Điện thoại hỗ trợ', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, NULL, 1421307652, 1, 0, 0, NULL, 0),
(54, 'Sơ đồ đường đi', NULL, 'so-do-duong-di', 0, 'map', '', NULL, '', NULL, '', NULL, '<p><img src="/tinymce/source/Ban Do TD.JPG" alt="" /></p>', NULL, 'Sơ đồ đường đi', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, NULL, 1440841907, 1, 0, 0, NULL, 0),
(56, '4.	Làm sao tôi biết được lịch đăng ký quảng cáo của tôi có được phát sóng hay không?', NULL, '4-	lam-sao-toi-biet-duoc-lich-dang-ky-quang-cao-cua-toi-co-duoc-phat-song-hay-khong-', 0, 'faq', '', NULL, '', NULL, '', NULL, '<p>Mỗi th&aacute;ng ch&uacute;ng t&ocirc;i sẽ đưa cho kh&aacute;ch h&agrave;ng chứng nhận ph&aacute;t s&oacute;ng do Đ&agrave;i cung cấp. Dựa v&agrave;o chứng nhận n&agrave;y, kh&aacute;ch h&agrave;ng c&oacute; thể biết được quảng c&aacute;o của b&ecirc;n m&igrave;nh c&oacute; được ph&aacute;t đ&uacute;ng như lịch đ&atilde; đăng k&yacute; hay kh&ocirc;ng.</p>', NULL, '4.	Làm sao tôi biết được lịch đăng ký quảng cáo của tôi có được phát sóng hay không?', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419899798, 1419899798, 1, 0, 0, NULL, 0),
(57, '5. Trong trường hợp Đài không phát hoặc phát sai khung giờ quảng cáo, Tâm Điểm sẽ giải quyết như thế nào?', NULL, '5-trong-truong-hop-dai-khong-phat-hoac-phat-sai-khung-gio-quang-cao-tam-diem-se-giai-quyet-nhu-the-nao-', 0, 'faq', '', NULL, '', NULL, '', NULL, '<p>T&acirc;m Điểm sẽ đại diện kh&aacute;ch h&agrave;ng tiến h&agrave;nh t&igrave;m hiểu &amp; thương lượng với Đ&agrave;i truyền h&igrave;nh nhằm đảm bảo quyền lợi tốt nhất cho kh&aacute;ch h&agrave;ng.</p>', NULL, '5. Trong trường hợp Đài không phát hoặc phát sai khung giờ quảng cáo, Tâm Điểm sẽ giải quyết như thế nào?', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419899829, 1419899829, 1, 0, 0, NULL, 0),
(58, 'Lý do chọn TrungDung Media', NULL, 'ly-do-chon-trung-dung-media', 0, 'whychooseTD', 'TrungDung Media', NULL, '', NULL, '', NULL, '<p><img src="/tinymce/source/Hinh up bai/LY DO CHON TAM DIEM 2015.jpg" alt="" width="892" height="672" /></p>', NULL, 'Lý do chọn TrungDung Media', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419900162, 1457218802, 1, 0, 0, NULL, 0),
(77, '2', NULL, '2', 75, 'product_item', '', NULL, '', NULL, '', NULL, '<p>Hiện nay tất cả c&aacute;c bản tin dự b&aacute;o thời tiết của T&acirc;m Điểm đều sử dụng phim trường ảo do T&acirc;m Điểm tự thiết kế. Kh&ocirc;ng chỉ gi&uacute;p tiết kiệm chi ph&iacute; đầu tư cơ sở hạ tầng v&agrave; trang thiết bị, phim trường ảo c&ograve;n c&oacute; thể tạo ra những g&oacute;c quay đẹp, điều chỉnh linh hoạt, ph&ugrave; hợp y&ecirc;u cầu h&igrave;nh ảnh cụ thể. Những kh&ocirc;ng gian v&ocirc; tận được tạo ra từ c&aacute;c kỹ thuật vi&ecirc;n đồ họa c&oacute; thể được đưa v&agrave;o chương tr&igrave;nh.</p>\n<p>C&ugrave;ng với sự ph&aacute;t triển của c&ocirc;ng nghệ truyền h&igrave;nh v&agrave; c&ocirc;ng nghệ th&ocirc;ng tin, giải ph&aacute;p n&agrave;y l&agrave; sự thay thế hữu hiệu cho phim trường truyền thống.</p>\n<p>&nbsp;<img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/source/images/thiet-ke-phim-truong-ao2.jpg" alt="" /></p>', NULL, '2', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/thi%E1%BA%BFt-k%E1%BA%BF-phim-tr%C6%B0%E1%BB%9Dn-%E1%BA%A3o2.jpg', '', 0, 0, 0, 0, 0, 0, 1420165489, 1440843457, 1, 0, 0, NULL, 0),
(78, '3', NULL, '3', 75, 'product_item', '', NULL, '', NULL, '', NULL, '<p>Hiện nay tất cả c&aacute;c bản tin dự b&aacute;o thời tiết của T&acirc;m Điểm đều sử dụng phim trường ảo do T&acirc;m Điểm tự thiết kế. Kh&ocirc;ng chỉ gi&uacute;p tiết kiệm chi ph&iacute; đầu tư cơ sở hạ tầng v&agrave; trang thiết bị, phim trường ảo c&ograve;n c&oacute; thể tạo ra những g&oacute;c quay đẹp, điều chỉnh linh hoạt, ph&ugrave; hợp y&ecirc;u cầu h&igrave;nh ảnh cụ thể. Những kh&ocirc;ng gian v&ocirc; tận được tạo ra từ c&aacute;c kỹ thuật vi&ecirc;n đồ họa c&oacute; thể được đưa v&agrave;o chương tr&igrave;nh.</p>\n<p>C&ugrave;ng với sự ph&aacute;t triển của c&ocirc;ng nghệ truyền h&igrave;nh v&agrave; c&ocirc;ng nghệ th&ocirc;ng tin, giải ph&aacute;p n&agrave;y l&agrave; sự thay thế hữu hiệu cho phim trường truyền thống.</p>\n<p>&nbsp;<img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/source/images/thiet-ke-phim-truong-ao3.jpg" alt="" /></p>', NULL, '3', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/thi%E1%BA%BFt-k%E1%BA%BF-phim-tr%C6%B0%E1%BB%9Dn-%E1%BA%A3o3.jpg', '', 0, 0, 0, 0, 0, 0, 1420165540, 1420333591, 1, 0, 0, NULL, 0),
(79, 'Nhóm sản phẩm 1', 'group product 1', 'nhom-san-pham-1', 0, 'cate_product', '', 'seo en', '', 'desc en', 'Mô tả về nhóm sản phẩm 1', 'short text en', '<p>content vi</p>', '<p>content en</p>', 'Nhóm sản phẩm 1', 'menu group product 1', '', '', 0, 'http://vietnamesefood.app/sources/images/sp1-big.jpg', '', 1, 0, 0, 0, 0, 0, 1420166030, 1460452273, 1, 0, 0, NULL, 0),
(85, 'Khuyến mãi tháng 5', 'Promotion for July month', 'tuyen-dung-thang4', 0, 'job', 'Khuyến mãi tháng 5', '', 'Khuyến mãi tháng 5', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>', 'Khuyến mãi tháng 5', '', '', '', 0, 'http://vietnamesefood.app/sources/images/pic-promotion.jpg', '', 0, 0, 0, 0, 1, 0, 1422441777, 1460745846, 1, 0, 0, NULL, 0),
(151, 'Giới thiệu tổng quan', 'Introuduction', 'gioi-thieu-tong-quan', 0, 'page', 'key', '', '', '', 'Vi -Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<p>Giới thiệu tổng quan</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/source/images/businessman.jpg" alt="" width="726" height="484" /></p>', 'Giới thiệu tổng quan', 'Introuduction', NULL, NULL, 0, '', '', 0, 0, 0, 0, 0, 0, 1460445467, 1460447471, 1, 0, 0, NULL, 0),
(152, 'Khuyến mãi', 'Promotion', 'khuyen-mai', 0, 'page', '', '', '', '', 'Khuyến mãi', 'Promotion', '<p>Khuyến m&atilde;i</p>', '<p>Promotion</p>', 'Khuyến mãi', 'Promotion', NULL, NULL, 0, 'http://vietnamesefood.app/sources/images/sp1-big.jpg', '', 0, 0, 0, 0, 0, 0, 1460445846, 1460709284, 1, 0, 0, NULL, 0),
(153, 'Chất lượng', 'quality', 'chat-luong', 0, 'page', '', '', '', '', 'Chất lượng', 'quality', '<p>Chất lượng</p>', '<p>quality</p>', 'Chất lượng', 'quality', NULL, NULL, 0, '', '', 0, 0, 0, 0, 0, 0, 1460445873, 1460445873, 1, 0, 0, NULL, 0),
(154, 'Phân phối', 'distributary', 'phan-phoi', 0, 'page', '', '', '', '', 'Phân phối', 'distributary', '<p>Ph&acirc;n phối</p>', '<p>distributary</p>', 'Phân phối', 'distributary', NULL, NULL, 0, '', '', 0, 0, 0, 0, 0, 0, 1460445913, 1460445913, 1, 0, 0, NULL, 0),
(155, 'Tuyển dụng', 'Career', 'tuyen-dung', 0, 'page', '', '', '', '', 'Tuyển dụng', 'Career', '<p>Tuyển dụng</p>', '<p>Career</p>', 'Tuyển dụng', 'Career', NULL, NULL, 0, '', '', 0, 0, 0, 0, 0, 0, 1460446158, 1460446158, 1, 0, 0, NULL, 0),
(156, 'Nhóm sản phẩm 2', 'Product group 2', 'nhom-san-pham-2', 0, 'cate_product', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Product group 2', '<p>Nh&oacute;m sản phẩm 2</p>', '<p>Product group 2</p>', 'Nhóm sản phẩm 2', 'Product group 2', '', '', 0, 'http://vietnamesefood.app/sources/images/sp1-big.jpg', '', 1, 0, 0, 0, 2, 0, 1460451567, 1460452183, 1, 0, 0, NULL, 0),
(158, 'Tra Atiso loai 1', 'Tra Atiso loai 1', 'tra-atiso-loai-1', 79, 'product_item', '', NULL, '', NULL, 'Tra Atiso loai 1', 'Tra Atiso loai 1', '<p>content vi</p>', '<p>content en</p>', '0', NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, 1, 0, 1460494909, 1460563055, 1, 500, 250, 'sdsd', 18),
(159, 'san pham 2', 'product 2', 'san-pham-2', 79, 'product_item', '', NULL, '', NULL, 'san pham 2', 'san pham 2', '<p>san pham 2 - content</p>', '<p>san pham 2 - content en</p>', '0', NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, 2, 0, 1460495230, 1460495230, 1, 450, 0, '', 58),
(160, 'san pham 3', 'product 3', 'san-pham-3', 79, 'product_item', '', NULL, '', NULL, 'san pham 3', 'san pham 3', '<p>san pham 3</p>', '<p>san pham 3</p>', '0', NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, 2, 0, 1460535508, 1460535508, 1, 45, 12, '545', 22),
(161, 'sad', 'asd', 'sad', 79, 'product_item', '', NULL, '', NULL, 'asd', 'sad', '<p>sdsad</p>', '<p>sadsad</p>', '0', NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, 1460563327, 1460563327, 1, 345, 123, '', 13),
(162, 'dasd', 'asd en', 'dasd', 0, 'job', 'asd', 'xc', 'asd', 'zxc', 'asdasd', 'zxc', '<p>asdasdsa</p>', '<p>zxczxcxz</p>', 'asdasd', 'menu en', '', '', 0, 'http://vietnamesefood.app/sources/images/sp1-big.jpg', '', 0, 0, 0, 0, 3, 0, 1460742645, 1460742690, 1, 0, 0, NULL, 0),
(163, 'Chương trình big sale chưa từng có', 'Big sale for all', 'chuong-trinh-big-sale-chua-tung-co', 0, 'job', 'Chương trình big sale chưa từng có', '', 'Chương trình big sale chưa từng có', 'Chương trình big sale chưa từng có', 'Chương trình big sale chưa từng có', 'Chương trình big sale chưa từng có', '<p>Chương tr&igrave;nh big sale chưa từng c&oacute;</p>', '<p>Chương tr&igrave;nh big sale chưa từng c&oacute;</p>', 'Chương trình big sale chưa từng có', '', '', '', 0, 'http://vietnamesefood.app/sources/images/growth.jpg', '', 0, 0, 0, 0, 2, 0, 1460751288, 1460751288, 1, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `send_faq`
--

CREATE TABLE IF NOT EXISTS `send_faq` (
`id` int(5) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mess` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `send_faq`
--

INSERT INTO `send_faq` (`id`, `name`, `phone`, `email`, `mess`, `created_at`, `status`) VALUES
(9, 'tester 2', '00200', 'bb@test.com', 'tâm điểm..........', 1421988473, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE IF NOT EXISTS `supports` (
`id` int(3) NOT NULL,
  `yahoo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skype` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(3) DEFAULT NULL,
  `updated_at` int(3) DEFAULT NULL,
  `published` tinyint(2) DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `yahoo`, `skype`, `name`, `position`, `phone`, `created_at`, `updated_at`, `published`) VALUES
(1, 'vietnamefood', 'vietnamefood', 'Vietname Food', 'Center', '000 000 000', 1419665725, 1459929417, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$pasqC.YOwV85ctSecaccpO7oUJzJFK1IBfB2OVC8E0O6P6wCwyNYW', '', 'admin@admin.com', '', NULL, NULL, '0sigA5Lu4TTYu1jFJLvVI.', 1268889823, 1460742474, 1, 'Admin', 'istrator', 'ADMIN', '121212121212'),
(3, '::1', 'hung nguyen', '$2y$08$C5MsxhDtOOzPnuPq5CGFHeiLgciRsbspPaICjAFGPpbNAlxNwpBlS', NULL, 'hungnguyenphp@gmail.com', NULL, NULL, NULL, 'jbwnFqXtQvl2yAC0ORTE0e', 1419440484, 1459411300, 1, 'Hung', 'Nguyen', 'Web2Life.Net', '12345688'),
(4, '::1', 'test test', '$2y$08$QHrDF7XJK8uSOapsfvrr2.XnFJmuDXflxuA9MRlir575BdsfE.Hz2', NULL, 'tester@yahoo.com', '8100d4e849fb43fce8a0704f68ad13e655f8d5e9', NULL, NULL, NULL, 1419440560, NULL, 0, 'Test', 'test', 'test', '433123123123');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(20, 1, 1),
(21, 1, 2),
(22, 1, 3),
(15, 3, 1),
(16, 3, 2),
(8, 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bigbanner`
--
ALTER TABLE `bigbanner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `send_faq`
--
ALTER TABLE `send_faq`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bigbanner`
--
ALTER TABLE `bigbanner`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `send_faq`
--
ALTER TABLE `send_faq`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
