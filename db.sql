-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 06 Avril 2016 à 11:34
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vietnamesefood`
--

-- --------------------------------------------------------

--
-- Structure de la table `bigbanner`
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
-- Contenu de la table `bigbanner`
--

INSERT INTO `bigbanner` (`id`, `image`, `linkTo`, `subPage`, `belongToPage`, `published`, `order`, `created_at`, `updated_at`) VALUES
(2, 'http://trungdungmedia.app/sources/banner/1.jpg', '1', 0, NULL, 1, 1, 1457323160, 1459929440),
(3, 'http://trungdungmedia.app/sources/banner/2.jpg', '2', 0, NULL, 1, 2, 1457323194, 1459929450),
(5, 'http://trungdungmedia.app/sources/banner/hero_3.jpg', 'dsfdsf', 1, 'tin-tuc', 1, 0, 1457649191, 1457649191),
(6, 'http://trungdungmedia.app/sources/banner/1.jpg', '', 1, 'san-pham', 1, 21, 1457649730, 1457650664),
(7, 'http://trungdungmedia.app/sources/banner/woman-in-shop-for-ancillary.png', '', 1, 'gioi-thieu', 1, 123, 1457650737, 1457650737),
(8, 'http://trungdungmedia.app/sources/banner/growth.jpg', '', 1, 'ly-do-chon-td', 1, 0, 1457679741, 1457679741),
(9, 'http://trungdungmedia.app/sources/banner/641implementationservices.jpg', '', 1, 'support', 1, 23, 1457679803, 1457679803),
(10, 'http://trungdungmedia.app/sources/banner/growth.jpg', '', 1, 'san-xuat-chuong-trinh', 1, 1, 1459411705, 1459411705),
(11, 'http://trungdungmedia.app/sources/banner/hero_3.jpg', '', 1, 'tiep-thi-va-tai-tro', 1, 2, 1459412031, 1459412031);

-- --------------------------------------------------------

--
-- Structure de la table `client_say`
--

CREATE TABLE IF NOT EXISTS `client_say` (
`id` int(5) NOT NULL,
  `who_say` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` int(3) DEFAULT NULL,
  `updated_at` int(3) DEFAULT NULL,
  `published` tinyint(2) DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `client_say`
--

INSERT INTO `client_say` (`id`, `who_say`, `position`, `avatar`, `content`, `created_at`, `updated_at`, `published`) VALUES
(3, 'Hung Nguyen', 'Coder', 'http://tamdiem.home/sources/images/10314575_235219536675594_4194748899344208847_n.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 1419790254, 1419790254, 1),
(4, 'Tester ', 'Business', '', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 1419790350, 1419790350, 1),
(5, 'Tester2', '', '', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 1419790360, 1419790360, 1);

-- --------------------------------------------------------

--
-- Structure de la table `configs`
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
-- Contenu de la table `configs`
--

INSERT INTO `configs` (`id`, `general`, `social`, `config_online`, `created_at`, `updated_at`) VALUES
(1, 'a:11:{s:9:"site_name";s:24:"VietnameseFoodTraditonal";s:15:"company_address";s:15:"dia chi cong ty";s:5:"phone";s:20:"HOTLINE: 000 000 000";s:10:"seo_k_home";s:0:"";s:13:"seo_desc_home";s:0:"";s:8:"video_td";s:0:"";s:12:"company_name";s:24:"VietnameseFoodTraditonal";s:3:"fax";s:11:"000 000 000";s:7:"hotline";s:11:"000 000 000";s:7:"website";s:32:"www.VietnameseFoodTraditonal.Com";s:5:"email";s:33:"info@VietnameseFoodTraditonal.com";}', 'a:4:{s:8:"facebook";s:25:"https://www.facebook.com/";s:7:"twitter";s:20:"https://twitter.com/";s:3:"rss";s:38:"http://vnexpress.net/rss/cong-dong.rss";s:7:"youtube";s:29:"https://www.youtube.com/user/";}', 's:31:"online,today,yesterday,total,No";', NULL, 1459929292);

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'editor', 'Editor');

-- --------------------------------------------------------

--
-- Structure de la table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
`id` int(5) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web_site` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(3) DEFAULT NULL,
  `updated_at` int(3) DEFAULT NULL,
  `published` tinyint(2) DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `partner`
--

INSERT INTO `partner` (`id`, `logo`, `company_name`, `web_site`, `created_at`, `updated_at`, `published`) VALUES
(1, 'http://tamdiem.com.vn/sources/partner/htv.jpg', 'Đài truyền hình HTV', 'http://htv.com.vn/', 1419660647, 1419897663, 1),
(3, 'http://tamdiem.com.vn/sources/partner/vtv.jpg', 'Đài truyền hình VTV', 'http://vtv.vn/', 1419665129, 1419897624, 1),
(4, 'http://tamdiem.com.vn/sources/partner/vtv_ct.jpg', 'VTC', '', 1419665144, 1419897770, 1),
(5, 'http://tamdiem.com.vn/sources/partner/thvl.jpg', 'VTC Cần Thơ', '', 1419665157, 1419897828, 1),
(6, 'http://tamdiem.com.vn/sources/partner/la34.jpg', 'Truyền hình Vĩnh Long', '', 1419665176, 1419897867, 1),
(7, 'http://tamdiem.com.vn/sources/partner/thtpct-logo.png', 'VTC', '', 1419671713, 1419897983, 1),
(8, 'http://tamdiem.com.vn/sources/partner/wbtv-logo.png', 'QBTV', '', 1419898108, 1419898108, 1),
(9, 'http://tamdiem.com.vn/sources/partner/vtc.jpg', 'VTC', '', 1419898123, 1419898123, 1),
(10, 'http://tamdiem.com.vn/sources/partner/THDT.png', 'THĐT', '', 1419898316, 1419898316, 1),
(11, 'http://tamdiem.com.vn/sources/partner/QRT.png', 'QRT', '', 1419898347, 1419898347, 1),
(12, 'http://tamdiem.com.vn/sources/partner/BTV.png', 'BTV', '', 1419898409, 1419898409, 1),
(13, 'http://tamdiem.com.vn/sources/partner/PTQ.png', 'PTQ', '', 1419898450, 1419898450, 1);

-- --------------------------------------------------------

--
-- Structure de la table `resource`
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
  `product_code` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=151 ;

--
-- Contenu de la table `resource`
--

INSERT INTO `resource` (`id`, `title`, `title_en`, `alias`, `parent`, `content_type`, `long_title`, `long_title_en`, `description`, `description_en`, `intro`, `intro_en`, `content`, `content_en`, `menu_title`, `menu_title_en`, `link_attr`, `external_link`, `hide_from_menu`, `image`, `icon`, `show_home`, `is_default`, `is_hot`, `deleted_status`, `menu_index`, `show_gallery`, `created_at`, `updated_at`, `published`, `price`, `price_promotion`, `product_code`) VALUES
(2, 'Vietnamese Food', 'Vietnam Food', 'gioi-vietnam-food', 0, 'introduction', '', '', '', '', '<p>Intro vi</p>', '<p>Intro en</p>', '<p>Content vi</p>', '<p>content en</p>', 'Vietnamese Food', 'Vietnam Food', '', '', 0, '', '', 1, 1, 0, 0, 0, 0, 1419448607, 1459886885, 1, 0, 0, NULL),
(13, 'Tôn chỉ hoạt động', NULL, 'ton-chi-hoat-dong', 0, 'introduction', 'Tôn chỉ hoạt động, Về tâm điểm, Cty Tâm Điểm, Tâm Điểm, Tâm Điểm Communications, Quảng Cáo Tâm Điểm, Cty TNHH Tâm Điểm', NULL, 'Tôn chỉ hoạt động', NULL, '<p>T&ocirc;n chỉ hoạt động</p>', NULL, '<p><img src="/tinymce/source/Hinh up bai/tam diem_he-thong-ton-chi.jpg" alt="" width="437" height="283" /></p>\n<p style="text-align: justify;"><strong>HỆ THỐNG T&Ocirc;N CHỈ CỦA C&Ocirc;NG TY T&Acirc;M ĐIỂM &ndash; GIAI ĐOẠN 2014 - 2018</strong></p>\n<p style="text-align: justify;"><strong><span style="text-decoration: underline;">TẦM NH&Igrave;N</span></strong>:</p>\n<p style="text-align: justify;">Khẳng định vị thế uy t&iacute;n của T&acirc;m Điểm trong việc cung cấp giải ph&aacute;p to&agrave;n diện về truyền th&ocirc;ng tiếp thị, dẫn đầu (Top 5) về sản xuất chương tr&igrave;nh v&agrave; quảng c&aacute;o truyền h&igrave;nh tại Việt Nam.</p>\n<p style="text-align: justify;"><strong><span style="text-decoration: underline;">SỨ MỆNH:</span></strong></p>\n<p style="text-align: justify;">Tạo ra những giải ph&aacute;p tối ưu đem lại gi&aacute; trị cao nhất cho kh&aacute;ch h&agrave;ng v&agrave; CBNV c&ocirc;ng ty, đ&oacute;ng g&oacute;p t&iacute;ch cực cho sự ph&aacute;t triển chung của cộng đồng.</p>\n<p style="text-align: justify;"><strong><span style="text-decoration: underline;">GI&Aacute; TRỊ CỐT L&Otilde;I:</span></strong></p>\n<p style="text-align: justify;"><strong>Kh&aacute;ch h&agrave;ng l&agrave; trọng t&acirc;m</strong></p>\n<ul style="text-align: justify;">\n<li>Thấu hiểu nhu cầu, nguyện vọng của kh&aacute;ch h&agrave;ng</li>\n<li>Mang lại giải ph&aacute;p tối ưu v&agrave; ph&ugrave; hợp</li>\n<li>Thoả m&atilde;n kh&aacute;ch h&agrave;ng - động lực l&agrave;m việc của CBNV</li>\n</ul>\n<p style="text-align: justify;"><strong>Chuy&ecirc;n nghiệp</strong></p>\n<ul style="text-align: justify;">\n<li>Chuy&ecirc;n m&ocirc;n nghiệp vụ vững v&agrave;ng</li>\n<li>Thao t&aacute;c chuẩn x&aacute;c: đảm bảo chất lượng, tiến độ cam kết</li>\n<li>Văn ho&aacute; ứng xử chuẩn mực.</li>\n</ul>\n<p style="text-align: justify;"><strong>S&aacute;ng tạo</strong></p>\n<ul style="text-align: justify;">\n<li>Ti&ecirc;n phong về &yacute; tưởng thực hiện</li>\n<li>Sản phẩm, dịch vụ kh&aacute;c biệt</li>\n<li>Li&ecirc;n tục cải tiến, đổi mới, ph&aacute;t triển</li>\n</ul>\n<p style="text-align: justify;"><strong>Đối t&aacute;c chiến lược của c&ocirc;ng ty</strong>: Đ&agrave;i truyền h&igrave;nh Việt Nam, Đ&agrave;i truyền h&igrave;nh Tp.HCM, Đ&agrave;i truyền h&igrave;nh Vĩnh Long v&agrave; c&aacute;c đối t&aacute;c kh&aacute;c thuộc hệ thống ph&aacute;t thanh &ndash; truyền h&igrave;nh tr&ecirc;n cả nước</p>\n<p style="text-align: justify;">&nbsp;</p>\n<p style="text-align: justify;"><strong>SLOGAN</strong></p>\n<p style="text-align: justify;">T&acirc;m Điểm&ndash;Giải ph&aacute;p truyền th&ocirc;ng gi&uacute;p Doanh nghiệp tỏa s&aacute;ng</p>', NULL, 'Tôn chỉ hoạt động', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419495014, 1421286930, 1, 0, 0, NULL),
(14, 'Tin tổng hợp', NULL, 'tin-tong-hop', 0, 'cate_news', 'Tin tổng hợp', NULL, 'Tin tổng hợp', NULL, '', NULL, '', NULL, 'Tin tổng hợp', NULL, '', '', 0, '', '', 0, 0, 0, 0, 2, 0, 1419561267, 1420481294, 1, 0, 0, NULL),
(24, '1. Thế mạnh của Tâm Điểm ở khu vực nào và các đài truyền hình nào?', NULL, 'question-2', 0, 'faq', '', NULL, '', NULL, '', NULL, '<p style="text-align: justify;">Với phương ch&acirc;m mang đến cho kh&aacute;ch h&agrave;ng giải ph&aacute;p truyền th&ocirc;ng to&agrave;n diện, T&acirc;m Điểm kh&ocirc;ng ngừng ph&aacute;t triển mạng lưới hợp t&aacute;c với c&aacute;c Đ&agrave;i truyền h&igrave;nh l&otilde;i tr&ecirc;n c&aacute;c thị trường lớn cũng như c&aacute;c đ&agrave;i địa phương. Ch&uacute;ng t&ocirc;i sẽ tư vấn cho Qu&yacute; Kh&aacute;ch h&agrave;ng việc chọn lựa k&ecirc;nh truyền h&igrave;nh hiệu quả về chi ph&iacute; &amp; tiếp cận đ&uacute;ng kh&aacute;n giả mục ti&ecirc;u.</p>', NULL, 'Question 2', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419568559, 1419960696, 1, 0, 0, NULL),
(48, '2. Việc tài trợ 1 chương trình dự báo thời tiết có những lợi ích gì tốt hơn so với các thể loại chương trình khác?', NULL, 'question-1', 0, 'faq', '', NULL, '', NULL, '', NULL, '<p style="text-align: justify;"><strong><em>Thời điểm ph&aacute;t s&oacute;ng</em>:</strong> Bản tin Dự b&aacute;o thời tiết tr&ecirc;n c&aacute;c k&ecirc;nh truyền h&igrave;nh nh&igrave;n chung thường nằm s&aacute;t chương tr&igrave;nh phim v&agrave; thời sự trong ng&agrave;y. Ch&iacute;nh v&igrave; thế, Quảng c&aacute;o của Qu&yacute; vị sẽ thu h&uacute;t 2 luồng kh&aacute;n giả xem chương tr&igrave;nh giải tr&iacute; v&agrave; thời sự.</p>\n<p style="text-align: justify;"><strong><em>Thời gian ph&aacute;t s&oacute;ng</em>:</strong> Bản tin Dự b&aacute;o thời tiết được ph&aacute;t s&oacute;ng h&agrave;ng ng&agrave;y suốt cả năm n&ecirc;n tần suất xuất hiện đều đặn v&agrave; ổn định hơn.</p>\n<p style="text-align: justify;">Ngo&agrave;i ra, ch&uacute;ng t&ocirc;i đảm bảo quyền lợi quảng c&aacute;o trong chương tr&igrave;nh v&agrave; chi ph&iacute; t&agrave;i trợ một c&aacute;ch hợp l&yacute; nhằm gi&uacute;p Qu&yacute; Kh&aacute;ch h&agrave;ng gắn kết l&acirc;u d&agrave;i c&ugrave;ng chương tr&igrave;nh.</p>', NULL, 'Question 1', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419789952, 1419960819, 1, 0, 0, NULL),
(49, '3. Những điều kiện được nhận chế độ hậu mãi, giá ưu đãi?', NULL, 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit-', 0, 'faq', '', NULL, '', NULL, '', NULL, '<p>Ch&uacute;ng t&ocirc;i xem mỗi kh&aacute;ch h&agrave;ng l&agrave; một đối t&aacute;c l&acirc;u d&agrave;i &amp; mong muốn c&ugrave;ng nhau ph&aacute;t triển bền vững. Căn cứ v&agrave;o từng y&ecirc;u cầu cụ thể của mỗi kh&aacute;ch h&agrave;ng, ch&uacute;ng t&ocirc;i cam kết đảm bảo quyền lợi của Kh&aacute;ch h&agrave;ng một c&aacute;ch tối ưu &amp; c&oacute; lợi nhất.</p>', NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419789988, 1419899683, 1, 0, 0, NULL),
(52, 'Hình ảnh hoạt động', NULL, 'hinh-anh-hoat-dong', 0, 'guide', '', NULL, '', NULL, '', NULL, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>', NULL, 'Hình ảnh hoạt động', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419790797, 1420552075, 0, 0, 0, NULL),
(53, 'Điện thoại hỗ trợ', NULL, 'dien-thoai-ho-tro', 0, 'phone_support', 'Điện thoại cho Tâm Điểm', NULL, '', NULL, '', NULL, '<h2><img style="float: left;" src="/tinymce/source/Hinh up bai/Dich-vu-ho-tro.jpg" alt="" width="270" /></h2>\n<h2>&nbsp;</h2>\n<h2>&nbsp;<img src="/tinymce/source/Hinh up bai/Hotline.gif" alt="" /></h2>\n<h2>&nbsp;</h2>\n<h2>&nbsp;</h2>\n<h2>&nbsp;</h2>\n<h2>&nbsp;</h2>', NULL, 'Điện thoại hỗ trợ', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, NULL, 1421307652, 1, 0, 0, NULL),
(54, 'Sơ đồ đường đi', NULL, 'so-do-duong-di', 0, 'map', '', NULL, '', NULL, '', NULL, '<p><img src="/tinymce/source/Ban Do TD.JPG" alt="" /></p>', NULL, 'Sơ đồ đường đi', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, NULL, 1440841907, 1, 0, 0, NULL),
(56, '4.  Làm sao tôi biết được lịch đăng ký quảng cáo của tôi có được phát sóng hay không?', NULL, '4- lam-sao-toi-biet-duoc-lich-dang-ky-quang-cao-cua-toi-co-duoc-phat-song-hay-khong-', 0, 'faq', '', NULL, '', NULL, '', NULL, '<p>Mỗi th&aacute;ng ch&uacute;ng t&ocirc;i sẽ đưa cho kh&aacute;ch h&agrave;ng chứng nhận ph&aacute;t s&oacute;ng do Đ&agrave;i cung cấp. Dựa v&agrave;o chứng nhận n&agrave;y, kh&aacute;ch h&agrave;ng c&oacute; thể biết được quảng c&aacute;o của b&ecirc;n m&igrave;nh c&oacute; được ph&aacute;t đ&uacute;ng như lịch đ&atilde; đăng k&yacute; hay kh&ocirc;ng.</p>', NULL, '4.  Làm sao tôi biết được lịch đăng ký quảng cáo của tôi có được phát sóng hay không?', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419899798, 1419899798, 1, 0, 0, NULL),
(57, '5. Trong trường hợp Đài không phát hoặc phát sai khung giờ quảng cáo, Tâm Điểm sẽ giải quyết như thế nào?', NULL, '5-trong-truong-hop-dai-khong-phat-hoac-phat-sai-khung-gio-quang-cao-tam-diem-se-giai-quyet-nhu-the-nao-', 0, 'faq', '', NULL, '', NULL, '', NULL, '<p>T&acirc;m Điểm sẽ đại diện kh&aacute;ch h&agrave;ng tiến h&agrave;nh t&igrave;m hiểu &amp; thương lượng với Đ&agrave;i truyền h&igrave;nh nhằm đảm bảo quyền lợi tốt nhất cho kh&aacute;ch h&agrave;ng.</p>', NULL, '5. Trong trường hợp Đài không phát hoặc phát sai khung giờ quảng cáo, Tâm Điểm sẽ giải quyết như thế nào?', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419899829, 1419899829, 1, 0, 0, NULL),
(58, 'Lý do chọn TrungDung Media', NULL, 'ly-do-chon-trung-dung-media', 0, 'whychooseTD', 'TrungDung Media', NULL, '', NULL, '', NULL, '<p><img src="/tinymce/source/Hinh up bai/LY DO CHON TAM DIEM 2015.jpg" alt="" width="892" height="672" /></p>', NULL, 'Lý do chọn TrungDung Media', NULL, '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1419900162, 1457218802, 1, 0, 0, NULL),
(77, '2', NULL, '2', 75, 'product_item', '', NULL, '', NULL, '', NULL, '<p>Hiện nay tất cả c&aacute;c bản tin dự b&aacute;o thời tiết của T&acirc;m Điểm đều sử dụng phim trường ảo do T&acirc;m Điểm tự thiết kế. Kh&ocirc;ng chỉ gi&uacute;p tiết kiệm chi ph&iacute; đầu tư cơ sở hạ tầng v&agrave; trang thiết bị, phim trường ảo c&ograve;n c&oacute; thể tạo ra những g&oacute;c quay đẹp, điều chỉnh linh hoạt, ph&ugrave; hợp y&ecirc;u cầu h&igrave;nh ảnh cụ thể. Những kh&ocirc;ng gian v&ocirc; tận được tạo ra từ c&aacute;c kỹ thuật vi&ecirc;n đồ họa c&oacute; thể được đưa v&agrave;o chương tr&igrave;nh.</p>\n<p>C&ugrave;ng với sự ph&aacute;t triển của c&ocirc;ng nghệ truyền h&igrave;nh v&agrave; c&ocirc;ng nghệ th&ocirc;ng tin, giải ph&aacute;p n&agrave;y l&agrave; sự thay thế hữu hiệu cho phim trường truyền thống.</p>\n<p>&nbsp;<img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/source/images/thiet-ke-phim-truong-ao2.jpg" alt="" /></p>', NULL, '2', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/thi%E1%BA%BFt-k%E1%BA%BF-phim-tr%C6%B0%E1%BB%9Dn-%E1%BA%A3o2.jpg', '', 0, 0, 0, 0, 0, 0, 1420165489, 1440843457, 1, 0, 0, NULL),
(78, '3', NULL, '3', 75, 'product_item', '', NULL, '', NULL, '', NULL, '<p>Hiện nay tất cả c&aacute;c bản tin dự b&aacute;o thời tiết của T&acirc;m Điểm đều sử dụng phim trường ảo do T&acirc;m Điểm tự thiết kế. Kh&ocirc;ng chỉ gi&uacute;p tiết kiệm chi ph&iacute; đầu tư cơ sở hạ tầng v&agrave; trang thiết bị, phim trường ảo c&ograve;n c&oacute; thể tạo ra những g&oacute;c quay đẹp, điều chỉnh linh hoạt, ph&ugrave; hợp y&ecirc;u cầu h&igrave;nh ảnh cụ thể. Những kh&ocirc;ng gian v&ocirc; tận được tạo ra từ c&aacute;c kỹ thuật vi&ecirc;n đồ họa c&oacute; thể được đưa v&agrave;o chương tr&igrave;nh.</p>\n<p>C&ugrave;ng với sự ph&aacute;t triển của c&ocirc;ng nghệ truyền h&igrave;nh v&agrave; c&ocirc;ng nghệ th&ocirc;ng tin, giải ph&aacute;p n&agrave;y l&agrave; sự thay thế hữu hiệu cho phim trường truyền thống.</p>\n<p>&nbsp;<img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/source/images/thiet-ke-phim-truong-ao3.jpg" alt="" /></p>', NULL, '3', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/thi%E1%BA%BFt-k%E1%BA%BF-phim-tr%C6%B0%E1%BB%9Dn-%E1%BA%A3o3.jpg', '', 0, 0, 0, 0, 0, 0, 1420165540, 1420333591, 1, 0, 0, NULL),
(79, 'Nhóm sản phẩm 1', 'group product 1', 'nhom-san-pham-1', 0, 'cate_product', '', 'seo en', '', 'desc en', 'Mô tả về nhóm sản phẩm 1', 'short text en', '<p>content vi</p>', '<p>content en</p>', 'Nhóm sản phẩm 1', 'menu group product 1', '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 1420166030, 1459886552, 1, 0, 0, NULL),
(85, 'TUYẾN GẤP KỸ THUẬT VIÊN ĐỒ HỌA', NULL, 'tuyen-gap-ky-thuat-vien-do-hOa', 0, 'job', '', NULL, '', NULL, 'Mô tả công việc: thiết kế, chỉnh sửa video/hình ảnh, xử lý âm thanh; dựng phim; biên tập hình ảnh các bản tin dự báo thời tiết…', NULL, '<p><strong>M&ocirc; tả c&ocirc;ng việc:</strong> thiết kế, chỉnh sửa video/h&igrave;nh ảnh, xử l&yacute; &acirc;m thanh; dựng phim; bi&ecirc;n tập h&igrave;nh ảnh c&aacute;c bản tin dự b&aacute;o thời tiết&hellip;</p>\n<p><strong>Điều kiện tuyển dụng:</strong></p>\n<ul>\n<li>Biết về Graphic Design</li>\n<li>Sử dụng th&agrave;nh thạo c&aacute;c phần mềm: Ps, AE, AI, Corel Draw&hellip;</li>\n<li>C&oacute; học qua về mỹ thuật ứng dụng</li>\n<li>Ưu ti&ecirc;n những ứng vi&ecirc;n biết th&ecirc;m về quay phim v&agrave; phần mềm thiết kế đồ họa 3D</li>\n</ul>\n<p><strong>Mức lương:</strong> Thỏa thuận</p>\n<p>Ứng vi&ecirc;n nộp hồ sơ trước ng&agrave;y <strong>31/05/2015.</strong></p>\n<p>Mọi chi tiết vui l&ograve;ng li&ecirc;n hệ: (08) 3910 4081 &ndash; Gặp Ms Quy&ecirc;n (Ph&ograve;ng Sản xuất chương tr&igrave;nh).</p>', NULL, 'TUYẾN GẤP KỸ THUẬT VIÊN ĐỒ HỌA', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/tuyendung.jpg', '', 0, 0, 0, 0, 1, 0, 1422441777, 1431311967, 1, 0, 0, NULL),
(114, 'Tâm Điểm vinh dự được trao tặng Giấy khen thực hiện tốt nghĩa vụ nộp thuế', NULL, 'tam-diem-vinh-du-duoc-trao-tang-giay-khen-thuc-hien-tot-nghia-vu-nop-thue', 15, 'news_item', 'Tâm Điểm vinh dự được trao tặng Giấy khen thực hiện tốt nghĩa vụ nộp thuế', NULL, 'Vừa qua, tại hội nghị tuyên dương tổ chức - cá nhân thực hiện tốt nghĩa vụ nộp thuế năm 2014, Chi Cục Thuế Quận 1, TP.HCM đã trao giấy khen cho công ty TNHH Tâm Điểm cùng 120 tổ chức, cá nhân tiêu biểu về thành tích chấp hành tốt những quy định về chính sách thuế.', NULL, 'Vừa qua, tại hội nghị tuyên dương tổ chức - cá nhân thực hiện tốt nghĩa vụ nộp thuế năm 2014, Chi Cục Thuế Quận 1, TP.HCM đã trao giấy khen cho công ty TNHH Tâm Điểm cùng 120 tổ chức, cá nhân tiêu biểu về thành tích chấp hành tốt những quy định về chính sách thuế.', NULL, '<p style="text-align: justify;"><strong>Vừa qua, tại hội nghị tuy&ecirc;n dương tổ chức - c&aacute; nh&acirc;n thực hiện tốt nghĩa vụ nộp thuế năm 2014, Chi Cục Thuế Quận 1, TP.HCM đ&atilde; trao giấy khen cho c&ocirc;ng ty TNHH T&acirc;m Điểm c&ugrave;ng 120 tổ chức, c&aacute; nh&acirc;n ti&ecirc;u biểu về th&agrave;nh t&iacute;ch chấp h&agrave;nh tốt những quy định về ch&iacute;nh s&aacute;ch thuế.</strong></p>\n<p><em><img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/source/thue 4.jpg" alt="" width="500" height="330" />&nbsp;</em></p>\n<p style="text-align: justify;">Ph&aacute;t biểu tại Hội nghị, &ocirc;ng L&ecirc; Duy Minh &ndash; Ph&oacute; cục trưởng cục thuế TP.Hồ Ch&iacute; Minh, Chi cục trưởng Chi cục thuế Quận 1 cho biết: Những năm qua, trong điều kiện nền kinh tế Th&agrave;nh phố cũng như cả nước phải đối mặt với nhiều biến động, t&igrave;nh h&igrave;nh sản xuất kinh doanh gặp nhiều kh&oacute; khăn, c&aacute;c Doanh nghiệp tr&ecirc;n địa b&agrave;n Quận 1 đ&atilde; nỗ lực, n&acirc;ng cao &yacute; thức tự gi&aacute;c chấp h&agrave;nh ph&aacute;p luật. Số thu ng&acirc;n s&aacute;ch nh&agrave; nước trong những năm qua li&ecirc;n tục tăng, đạt tỷ lệ tr&ecirc;n 20% mỗi năm giai đoạn 2012 &ndash; 2014. Ri&ecirc;ng năm 2014, số thu ng&acirc;n s&aacute;ch nh&agrave; nước của Quận 1 l&agrave; 6,385 tỷ đồng, đạt 142% dự to&aacute;n ph&aacute;p lệnh v&agrave; tăng 67% so với c&ugrave;ng kỳ năm 2013. Quận 1 c&oacute; số thu lớn nhất trong c&aacute;c chi cục thế của cả nước.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/source//thue 3.jpg" alt="" width="500" height="330" /></p>\n<p><em>&nbsp;</em></p>\n<p style="text-align: justify;">V&agrave; để ghi nhận sự nỗ lực cũng như những đ&oacute;ng g&oacute;p to lớn của c&aacute;c doanh nghiệp, Chi cục thuế Quận 1 đ&atilde; được sự đồng thuận của Tổng cục thuế tổ chức vinh danh 120 doanh nghiệp &ndash; c&aacute; nh&acirc;n ti&ecirc;u biểu đ&atilde; thực hiện tốt nghĩa vụ nộp thuế năm 2014, đ&oacute;ng g&oacute;p t&iacute;ch cực v&agrave;o ng&acirc;n s&aacute;ch nh&agrave; nước. C&ocirc;ng ty TNHH T&acirc;m Điểm vinh dự được nhận giấy khen đ&atilde; c&oacute; th&agrave;nh t&iacute;ch chấp h&agrave;nh tốt nghĩa vụ nộp thuế năm 2014.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" src="/tinymce/source//thue 2.JPG" alt="" width="500" height="330" /></p>\n<p style="text-align: justify;">&nbsp;</p>\n<p style="text-align: right;"><em>T&acirc;m Điểm</em></p>', NULL, 'Tâm Điểm vinh dự được trao tăng Giấy khen thực hiện tốt nghĩa vụ nộp thuế', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/thue%205.jpg', '', 0, 0, 0, 0, 200, 0, 1441081544, 1446529889, 1, 0, 0, NULL),
(122, 'Khánh Ly mừng nghệ sĩ Thanh Thủy ra mắt phim đầu tay', NULL, 'khanh-ly-mung-nghe-si-thanh-thuy-ra-mat-phim-dau-tay', 15, 'news_item', 'Khánh Ly, nghệ sĩ Thanh Thủy, Ôsin nổi loạn', NULL, 'Nữ danh ca dành thời gian dự buổi họp mặt đoàn phim "Ôsin nổi loạn" và chia sẻ cảm nhận của bà về kịch bản phim về người lao động bình dân.', NULL, 'Nữ danh ca dành thời gian dự buổi họp mặt đoàn phim "Ôsin nổi loạn" và chia sẻ cảm nhận của bà về kịch bản phim về người lao động bình dân.', NULL, '<p class="Normal" style="text-align: justify;"><strong>Tối 13/9, diễn vi&ecirc;n Thanh Thủy c&oacute; buổi họp mặt đo&agrave;n phim truyền h&igrave;nh <a href="http://giaitri.vnexpress.net/tin-tuc/phim/sau-man-anh/ngoc-giau-dien-bi-hai-trong-phim-oshin-noi-loan-3161231.html" target="_blank"><em>&Ocirc;sin nổi loạn</em></a>. Đ&acirc;y l&agrave; phim đầu tay do Thanh Thủy giữ vai tr&ograve; sản xuất. Chị cũng đ&oacute;ng một vai trong phim.</strong></p>\n<p class="Normal" style="text-align: justify;">Đ&acirc;y cũng l&agrave; dự &aacute;n phim ảnh đầu ti&ecirc;n ca sĩ hải ngoại Quang Th&agrave;nh. Anh từ l&acirc;u l&agrave; cậu em th&acirc;n thiết, gắn b&oacute; với Kh&aacute;nh Ly trong nhiều hoạt động. V&igrave; thế, b&agrave; d&agrave;nh thời gian đến buổi họp mặt đo&agrave;n phim chia sẻ niềm vui ng&agrave;y phim đ&oacute;ng m&aacute;y. Đồng h&agrave;nh với b&agrave; c&ograve;n c&oacute; ca sĩ L&ecirc; Uy&ecirc;n.</p>\n<table class="tplCaption" style="width: 429px; height: 415px;" border="0" cellspacing="0" cellpadding="3" align="center">\n<tbody>\n<tr>\n<td><img style="width: 491px;" src="http://c1.f9.img.vnecdn.net/2015/09/14/quang-thanh-1-1465-1442204997.jpg" alt="Từ tr&aacute;i qua: ca sĩ L&ecirc; Uy&ecirc;n Phương, diễn vi&ecirc;n Thanh Thủy, ca sĩ Kh&aacute;nh Ly" height="328" data-pwidth="470.4" data-width="500" data-natural-width="500" /></td>\n</tr>\n<tr>\n<td>\n<p class="Image">Từ tr&aacute;i qua: ca sĩ L&ecirc; Uy&ecirc;n, diễn vi&ecirc;n Thanh Thủy, ca sĩ Kh&aacute;nh Ly, Nghệ sĩ Nh&acirc;n d&acirc;n Ngọc Gi&agrave;u v&agrave; Quang Th&agrave;nh.</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p class="Normal" style="text-align: justify;">Kh&aacute;nh Ly t&acirc;m sự ngo&agrave;i c&ocirc;ng việc ca h&aacute;t, b&agrave; lu&ocirc;n d&agrave;nh thời gian quan t&acirc;m t&igrave;m hiểu hoạt động văn nghệ, giải tr&iacute; trong v&agrave; ngo&agrave;i nước. Phim ảnh cũng l&agrave; lĩnh vực b&agrave; quan t&acirc;m. "T&ocirc;i rất th&iacute;ch th&uacute; với bộ phim c&oacute; nội dung về những người lao động b&igrave;nh d&acirc;n. Đạo diễn L&ecirc; Ngọc Linh từng chia sẻ qua phim n&agrave;y anh gửi lời tri &acirc;n về những người phụ nữ Việt Nam vốn sinh ra đời đ&atilde; c&oacute; m&aacute;u ''&ocirc; sin'' trong người. Họ d&agrave;nh cả đời để chăm s&oacute;c chồng con, chu to&agrave;n gia đ&igrave;nh. Bản th&acirc;n t&ocirc;i cũng l&agrave; một ''&ocirc; sin'' như thế v&agrave; rất hạnh ph&uacute;c khi m&igrave;nh được l&agrave;m ''nghề'' n&agrave;y".</p>\n<p class="Normal" style="text-align: justify;">Phim truyền h&igrave;nh <em>&Ocirc;sin nổi loạn</em> d&agrave;i 38 tập do t&aacute;c giả Nguyễn Vũ bi&ecirc;n kịch, quy tụ gần 40 diễn vi&ecirc;n như NSND Ngọc Gi&agrave;u, NSƯT L&ecirc; Thiện, NSƯT Diệu Đức, Phi Phụng, ca sĩ Phương Thanh, Tường Vi, Ho&agrave;ng Anh, Minh Dũng, ca sĩ Long Nhật, Lương Duy&ecirc;n, nh&agrave; thiết kế Sĩ Ho&agrave;ng... Trong đ&oacute;, vai Tom Mũ Ni của ca sĩ Quang Th&agrave;nh được đạo diễn "đo ni đ&oacute;ng gi&agrave;y" cho anh, khắc họa một ch&agrave;ng trai c&oacute; t&iacute;nh c&aacute;ch n&aacute;o nhiệt, kh&ocirc;i h&agrave;i v&agrave; đam m&ecirc; ca h&aacute;t.</p>\n<table class="tplCaption" style="width: 493px; height: 386px;" border="0" cellspacing="0" cellpadding="3" align="center">\n<tbody>\n<tr>\n<td><img style="width: 484px;" src="http://c1.f9.img.vnecdn.net/2015/09/14/ngoc-giau-6-8747-1427084057-2243-1442204997.jpg" alt="Trong phim, Ngọc Gi&agrave;u c&ograve;n ph&aacute;t huy thế mạnh ca vọng cổ, cải lương." height="324" data-pwidth="470.4" data-width="500" data-natural-width="500" /></td>\n</tr>\n<tr>\n<td>\n<p class="Image">Trong phim, Nghệ sĩ Nh&acirc;n d&acirc;n Ngọc Gi&agrave;u (giữa) c&ograve;n ph&aacute;t huy thế mạnh ca vọng cổ, cải lương.</p>\n</td>\n</tr>\n</tbody>\n</table>\n<p class="Normal" style="text-align: justify;">Tại buổi họp mặt, nghệ sĩ Thanh Thủy kh&ocirc;ng giấu được sự x&uacute;c động khi lần đầu giữ vai tr&ograve; nh&agrave; sản xuất phim. Hơn nửa năm theo đuổi dự &aacute;n n&agrave;y tr&ecirc;n phim trường trong m&ocirc;i trường l&agrave;m việc tập thể lớn, Thanh Thủy c&agrave;ng thấm th&iacute;a vất vả, cực nhọc của nghề l&agrave;m phim. C&oacute; những ng&agrave;y trăn trở một chi tiết trong kịch bản hoặc th&ecirc;m thắt m&agrave;u sắc cho vai diễn n&agrave;o đ&oacute;, chị kh&ocirc;ng ngủ được, gọi điện thoại ngay trong đ&ecirc;m với anh em đo&agrave;n phim, diễn vi&ecirc;n để b&agrave;n bạc.</p>\n<p class="Normal" style="text-align: justify;">"Phim c&oacute; rất nhiều diễn vi&ecirc;n nhưng mỗi người đều c&oacute; đất diễn ri&ecirc;ng. T&ocirc;i v&agrave;o vai &Yacute; Lạ, nằm trong tuyến nh&acirc;n vật g&acirc;y cười nhưng cũng để lại nhiều suy nghĩ về c&aacute;ch nh&igrave;n nhận của mọi người d&agrave;nh cho người chuyển giới. Họ cũng l&agrave; những người b&igrave;nh thường v&agrave; ho&agrave;n to&agrave;n c&oacute; thể l&agrave;m những c&ocirc;ng việc b&igrave;nh thường để kiếm sống", ca sĩ Long Nhật chia sẻ.</p>\n<p class="Normal" style="text-align: justify;">Chất h&agrave;i v&agrave; bi l&agrave; hai yếu tố đạo diễn Nguyễn Vũ gửi gắm trong nội dung bộ phim n&oacute;i về c&aacute;c c&acirc;u chuyện xoay quanh đời sống gia đ&igrave;nh, giữ g&igrave;n nếp nh&agrave; n&agrave;y.&nbsp;Phim ph&aacute;t s&oacute;ng tr&ecirc;n truyền h&igrave;nh v&agrave;o giữa th&aacute;ng 9.</p>\n<p class="Normal" style="text-align: right;"><em>Theo vnexpress.net</em></p>', NULL, 'Khánh Ly mừng nghệ sĩ Thanh Thủy ra mắt phim đầu tay', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/hop%20bao.jpg', '', 0, 0, 0, 0, 199, 0, 1442228037, 1444016065, 1, 0, 0, NULL),
(123, 'Long Nhật gây tò mò khi diện váy cưới trắng tinh', NULL, 'long-nhat-gay-to-mo-khi-dien-vay-cuoi-trang-tinh', 15, 'news_item', 'Long Nhật, Ô Sin nổi loạn, NSND Ngọc Giàu, NSƯT Thanh Thủy', NULL, 'Nam ca sỹ Long Nhật hóa trang thành cô dâu mặc váy trắng, trang điểm đậm trong buổi họp báo ra mắt phim truyền hình Ô Sin nổi loạn vào chiều ngày 13.9 tại một phòng trà ở TP.HCM. Đây là một bộ phim tâm lý hài hước, kể về cuộc đời của những người giúp việc biết vượt lên số phận và sống vui nhộn.', NULL, 'Nam ca sỹ Long Nhật hóa trang thành cô dâu mặc váy trắng, trang điểm đậm trong buổi họp báo ra mắt phim truyền hình Ô Sin nổi loạn vào chiều ngày 13.9 tại một phòng trà ở TP.HCM. Đây là một bộ phim tâm lý hài hước, kể về cuộc đời của những người giúp việc biết vượt lên số phận và sống vui nhộn.', NULL, '<p><strong>Tạo h&igrave;nh ấn tượng của Long Nhật khi ra mắt vai diễn &ocirc; sin chuyển giới.</strong></p>\n<div class="contentbaiviet">\n<p style="text-align: justify;">Nam ca sỹ Long Nhật h&oacute;a trang th&agrave;nh c&ocirc; d&acirc;u mặc v&aacute;y trắng, trang điểm đậm trong buổi họp b&aacute;o ra mắt phim truyền h&igrave;nh <em>&Ocirc; Sin nổi loạn v</em>&agrave;o chiều ng&agrave;y 13.9 tại một ph&ograve;ng tr&agrave; ở TP.HCM. Đ&acirc;y l&agrave; một bộ phim t&acirc;m l&yacute; h&agrave;i hước, kể về cuộc đời của những người gi&uacute;p việc biết vượt l&ecirc;n số phận v&agrave; sống vui nhộn.</p>\n<p align="center"><img id="news-image-id-0" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 1" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--9-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 1" width="411" height="654" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Long Nhật h&oacute;a trang th&agrave;nh c&ocirc; d&acirc;u trong buổi ra mắt phim &Ocirc; Sin nổi loạn</p>\n<p style="text-align: justify;">Trong phim, Long Nhật v&agrave;o vai c&oacute; c&aacute;i t&ecirc;n đặc biệt &Yacute; Lạ. Đ&acirc;y l&agrave; nh&acirc;n vật một ca sỹ kh&ocirc;ng gặp thời, mang t&ecirc;n thật l&agrave; Hinh, h&aacute;t hay, y&ecirc;u nghề nhưng kh&ocirc;ng được kh&aacute;n giả quan t&acirc;m. Từ sau khi Hinh chuyển giới v&agrave; lấy t&ecirc;n &Yacute; Lạ, anh bỗng nổi như cồn với những&nbsp; chi&ecirc;u tr&ograve; lạ đời.</p>\n<p style="text-align: justify;">&Yacute; Lạ c&ugrave;ng với bạn g&aacute;i Thi&ecirc;n Tơ (Tường Vy thủ vai) v&agrave; đại gia Biếu (Vương Bảo Tuấn) th&agrave;nh lập c&ocirc;ng ty đ&agrave;o tạo v&agrave; cho thu&ecirc; &ocirc; sin &ldquo;xuy&ecirc;n quốc gia&rdquo;. Nhiều t&igrave;nh huống hỷ nộ &aacute;i ố diễn ra từ khi c&ocirc;ng ty &ocirc; sin ra đời. Trong phim, nh&acirc;n vật chuyển giới của Long Nhật ngo&agrave;i việc c&oacute; tạo h&igrave;nh xinh đẹp c&ograve;n mang trong l&ograve;ng mối t&igrave;nh duy nhất từ thời thơ ấu đến khi trưởng th&agrave;nh.</p>\n<p style="text-align: justify;">B&ecirc;n cạnh Long Nhật, bộ phim c&ograve;n c&oacute; sự g&oacute;p mặt của d&agrave;n sao t&ecirc;n tuổi như NSND Ngọc Gi&agrave;u,&nbsp;NSƯT L&ecirc; Thiện, NSƯT Thanh Thủy, NSƯT Diệu Đức, diễn vi&ecirc;n điện ảnh&nbsp;Ho&agrave;ng Anh, ca sĩ Phương Thanh, Phi Phụng, Xu&acirc;n Hiệp , Minh Dũng, L&ecirc; Như, ca sỹ&nbsp;hải ngoại Quang Th&agrave;nh...</p>\n<p style="text-align: justify;">Trong buổi họp b&aacute;o, Long Nhật h&eacute; lộ một phần tạo h&igrave;nh nh&acirc;n vật chuyển giới khi h&oacute;a trang th&agrave;nh c&ocirc; d&acirc;u l&ecirc;n h&aacute;t song ca với ca sỹ Vương Bảo Tuấn &ndash; người đ&oacute;ng vai đại gia Biếu.</p>\n<p style="text-align: justify;">Phim sẽ được ph&aacute;t s&oacute;ng rộng r&atilde;i tr&ecirc;n đ&agrave;i truyền h&igrave;nh cả nước v&agrave;o cuối th&aacute;ng 9.2015.</p>\n<p style="text-align: justify;">Một số h&igrave;nh ảnh Long Nhật v&agrave; d&agrave;n diễn vi&ecirc;n phim<em> &Ocirc; Sin nổi loạn:</em></p>\n<p align="center"><img id="news-image-id-1" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 2" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--1-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 2" width="508" height="348" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Long Nhật c&ugrave;ng d&agrave;n diễn vi&ecirc;n ra mắt phim</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-2" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 3" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--11-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 3" width="513" height="342" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Tr&ecirc;n s&acirc;n khấu ph&ograve;ng tr&agrave; l&agrave; nơi tổ chức họp b&aacute;o phim, Long Nhật thể hiện&nbsp;diễn</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">t&agrave;i năng ca h&aacute;t với ca kh&uacute;c "T&igrave;nh ngh&egrave;o c&oacute; nhau"</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-3" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 4" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--12-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 4" width="514" height="329" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">M&agrave;n kết hợp kiểu "t&igrave;nh tay ba" giữa Long Nhật v&agrave; hai người bạn: Việt kiều Minh Ly</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">v&agrave; nam ca sỹ Vương Bảo Tuấn.</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-4" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 5" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--8-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 5" width="516" height="344" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Nam ca sỹ độn ngực, h&oacute;a trang đậm v&agrave; mặc v&aacute;y c&ocirc; d&acirc;u.</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;"><img id="news-image-id-5" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 6" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--11-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 6" width="512" height="341" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Long Nhật c&ugrave;ng "người t&igrave;nh tin đồn" biểu diễn t&igrave;nh cảm.</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-6" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 7" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--9-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 7" width="510" height="810" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><span style="text-align: justify;">​"C&ocirc; d&acirc;u" Long Nhật hứa hẹn mang đến một vai diễn h&agrave;i hước độc đ&aacute;o.</span></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-7" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 8" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--13-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 8" width="508" height="525" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Chụp ảnh t&igrave;nh cảm với "bạn g&aacute;i Thi&ecirc;n Tơ" do Tường Vy thủ vai</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-8" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 9" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--2-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 9" width="509" height="438" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Một trang phục giả g&aacute;i kh&aacute;c của nam ca sỹ trong buổi họp b&aacute;o</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-9" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 10" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--7-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 10" width="513" height="356" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Ngồi trong ph&ograve;ng tr&agrave;, Long Nhật tự tin với bộ t&oacute;c giả v&agrave; phục trang nữ giới.</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-10" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 11" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--6-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 11" width="504" height="616" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Giọng ca "T&igrave;nh ngh&egrave;o c&oacute; nhau" c&ugrave;ng&nbsp;NSND Ngọc Gi&agrave;u</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-11" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 12" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--5-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 12" width="503" height="492" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center">Diện &aacute;o d&agrave;i c&aacute;ch điệu, Long Nhật ng&agrave;y c&agrave;ng chứng tỏ sở th&iacute;ch đ&oacute;ng&nbsp;giả g&aacute;i</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-12" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 13" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--4-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 13" width="508" height="709" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;">Pha chụp h&igrave;nh t&igrave;nh cảm c&ugrave;ng&nbsp;ca sỹ Vương Bảo Tuấn &ndash; người đ&oacute;ng vai đại gia Biếu trong phim.</p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><img id="news-image-id-13" class="news-image" title="Long Nhật g&acirc;y t&ograve; m&ograve; khi diện v&aacute;y cưới trắng tinh - 14" src="http://streaming1.danviet.vn/upload/3-2015/images/2015-09-14/1442215256-long-nhat--3-.jpg" alt="long nhat gay to mo khi dien vay cuoi trang tinh - 14" width="502" height="693" data-pagespeed-loaded="1" data-pagespeed-onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /></p>\n<p style="color: #0000ff; font-style: italic; text-align: center;" align="center"><span style="text-align: justify;">​Hai nam ca sỹ &ocirc;m eo t&igrave;nh tứ trước b&aacute;o giới.</span></p>\n<p style="color: #0000ff; font-style: italic; text-align: right;" align="center"><span style="text-align: justify; color: #000000;">Theo D&acirc;n Việt</span></p>\n</div>', NULL, 'Long Nhật gây tò mò khi diện váy cưới trắng tinh', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/long-nhat.jpg', '', 0, 0, 0, 0, 198, 0, 1442287656, 1449288814, 1, 0, 0, NULL);
INSERT INTO `resource` (`id`, `title`, `title_en`, `alias`, `parent`, `content_type`, `long_title`, `long_title_en`, `description`, `description_en`, `intro`, `intro_en`, `content`, `content_en`, `menu_title`, `menu_title_en`, `link_attr`, `external_link`, `hide_from_menu`, `image`, `icon`, `show_home`, `is_default`, `is_hot`, `deleted_status`, `menu_index`, `show_gallery`, `created_at`, `updated_at`, `published`, `price`, `price_promotion`, `product_code`) VALUES
(147, 'Cát-xê một đêm của danh hài Việt đủ sống một đời?', NULL, 'cat-xe-mot-dem-cua-danh-hai-viet-du-song-mot-doi', 14, 'news_item', 'Cát-xê, danh hài Việt, Hoài Linh, Trường Giang hay Trấn Thành', NULL, 'Với mức cát-xê đồn thổi cao ngất ngưởng, thực sự các danh hài Hoài Linh, Trường Giang hay Trấn Thành giàu đến mức nào? ', NULL, 'Với mức cát-xê đồn thổi cao ngất ngưởng, thực sự các danh hài Hoài Linh, Trường Giang hay Trấn Thành giàu đến mức nào? ', NULL, '<p><strong>Với mức c&aacute;t-x&ecirc; đồn thổi cao ngất ngưởng, thực sự c&aacute;c danh h&agrave;i Ho&agrave;i Linh, Trường Giang hay Trấn Th&agrave;nh gi&agrave;u đến mức n&agrave;o?</strong></p>\n<div class="the-article-body">\n<p><strong>Danh h&agrave;i Ho&agrave;i Linh</strong></p>\n<table class="picture" align="center">\n<tbody>\n<tr>\n<td class="pic"><img src="http://img.v3.news.zdn.vn/w660/Uploaded/ycgmvvbt/2016_01_10/hoailinh.jpg" alt="C&aacute;t-x&ecirc; một đ&ecirc;m của danh h&agrave;i Việt đủ sống một đời?" /></td>\n</tr>\n<tr>\n<td class="pCaption caption">\n<p><span style="color: #808080;">Ho&agrave;i Linh l&agrave; diễn vi&ecirc;n c&oacute; c&aacute;t-x&ecirc; khủng nhất hiện nay.</span></p>\n</td>\n</tr>\n</tbody>\n</table>\n<p style="text-align: justify;">C&aacute;ch đ&acirc;y &iacute;t l&acirc;u, dư luận trong v&agrave; ngo&agrave;i giới giải tr&iacute; đều cho&aacute;ng v&aacute;ng trước tin đồn c&aacute;t-x&ecirc; 3 tỷ đồng để mời danh h&agrave;i Ho&agrave;i Linh đ&oacute;ng phim. Mặc d&ugrave; tin đồn chưa được chứng thực nhưng những người trong giới đều biết Ho&agrave;i Linh l&agrave; danh h&agrave;i thuộc h&agrave;ng đắt s&ocirc; nhất hiện nay. V&agrave; mặc d&ugrave; c&aacute;t-x&ecirc; của Ho&agrave;i Linh rất cao nhưng hầu hết c&aacute;c bầu show đều cho rằng xứng đ&aacute;ng.</p>\n<p style="text-align: justify;">Mọi người hay thắc mắc, so s&aacute;nh c&aacute;t-x&ecirc; của những ng&ocirc;i sao ca nhạc hạng A, hạng B m&agrave; &iacute;t khi để &yacute; đến những nghệ sĩ trong những lĩnh vực nghệ thuật kh&aacute;c. Ch&iacute;nh v&igrave; thế, khi c&aacute;t-x&ecirc; của Ho&agrave;i Linh được h&eacute; lộ, kh&ocirc;ng &iacute;t người cho&aacute;ng v&aacute;ng.&nbsp;</p>\n<p style="text-align: justify;">Theo th&ocirc;ng tin một người giấu t&ecirc;n chuy&ecirc;n tổ chức c&aacute;c chương tr&igrave;nh ca nhạc tạp kỹ đ&atilde; cho biết: "C&aacute;t-x&ecirc; của danh h&agrave;i Ho&agrave;i Linh tầm khoảng 100 triệu đồng, nếu biểu diễn ở ph&ograve;ng tr&agrave;. T&igrave;nh nghĩa, du di th&igrave; gi&aacute; thấp nhất cũng khoảng 80 triệu đồng. C&ograve;n c&aacute;c show lẻ tẻ ở c&aacute;c chương tr&igrave;nh lẻ tẻ th&igrave; c&oacute; gi&aacute; khoảng v&agrave;i chục triệu v&agrave;o dịp Tết".</p>\n<p style="text-align: justify;">Ho&agrave;i Linh vốn đắt show quanh năm v&igrave; vậy "v&agrave;o dịp tết, muốn mời Ho&agrave;i Linh phải đặt trước từ rất l&acirc;u&rdquo;. Cũng ch&iacute;nh v&igrave; chạy show Tết nhiều, Ho&agrave;i Linh từng kiệt sức đến mức phải nhập viện.</p>\n<p style="text-align: justify;">Thậm ch&iacute;, từng c&oacute; chuyện c&aacute;c ph&ograve;ng tr&agrave; đẳng cấp ở S&agrave;i G&ograve;n vốn chỉ mời c&aacute;c ca sĩ nổi tiếng về h&aacute;t đ&atilde; ph&aacute; lệ sang trọng mời Ho&agrave;i Linh về diễn. Tiền phụ thu cho một kh&aacute;ch v&agrave;o ph&ograve;ng tr&agrave;, chưa kể tiền nước đ&atilde; l&agrave; 800.000 đồng.</p>\n<p style="text-align: justify;">Mặc d&ugrave; c&aacute;t-x&ecirc; của Ho&agrave;i Linh rất cao nhưng hầu hết c&aacute;c bầu show đều cho rằng xứng đ&aacute;ng với những g&igrave; danh h&agrave;i đầu tư bởi đa phần c&aacute;c tiểu phẩm h&agrave;i đều do tự tay anh viết kịch bản, đo ni đ&oacute;ng gi&agrave;y cho ch&iacute;nh m&igrave;nh.</p>\n<p style="text-align: justify;">Điều l&agrave;m n&ecirc;n c&aacute;i chất Ho&agrave;i Linh l&agrave; nội dung c&aacute;c tiểu phẩm đều gần gũi đời thường, ch&acirc;m biếm một c&aacute;ch s&acirc;u cay những th&oacute;i hư, tật xấu. Ch&iacute;nh v&igrave; vậy, Ho&agrave;i Linh lu&ocirc;n đắt show v&agrave; cao gi&aacute;. Nhiều người s&agrave;nh sỏi showbiz cũng đồn đại, nếu n&oacute;i đại gia trong giới th&igrave; Ho&agrave;i Linh mới xứng danh. Tuy nhi&ecirc;n, ở ngo&agrave;i đời, anh rất xuề xo&agrave;, kh&ocirc;ng trau chuốt h&agrave;ng hiệu như những ng&ocirc;i sao kh&aacute;c n&ecirc;n &iacute;t g&acirc;y sự ch&uacute; &yacute; về mức độ gi&agrave;u c&oacute;.&nbsp;</p>\n<p><strong>Danh h&agrave;i Xu&acirc;n Bắc</strong></p>\n<table class="picture" align="center">\n<tbody>\n<tr>\n<td class="pic"><img src="http://img.v3.news.zdn.vn/w660/Uploaded/ycgmvvbt/2016_01_10/xuanbac.jpg" alt="C&aacute;t-x&ecirc; một đ&ecirc;m của danh h&agrave;i Việt đủ sống một đời?" /></td>\n</tr>\n<tr>\n<td class="pCaption caption">\n<p><span style="color: #808080;">Xu&acirc;n Bắc đang l&agrave; người sở hữu c&aacute;t-x&ecirc; cao nhất với 8 tỷ đồng.</span></p>\n</td>\n</tr>\n</tbody>\n</table>\n<p style="text-align: justify;">C&aacute;ch đ&acirc;y v&agrave;i th&aacute;ng, dư luận được một phen &ldquo;ngỡ ng&agrave;ng&rdquo; với mức c&aacute;t-x&ecirc; 8 tỷ đồng của MC, nghệ sĩ h&agrave;i Xu&acirc;n Bắc. Con số 8 tỷ đồng vốn l&agrave; một con số rất lớn, v&agrave; đối với Xu&acirc;n Bắc l&agrave; một nghệ sĩ h&agrave;i, MC th&igrave; mức c&aacute;t-x&ecirc; n&agrave;y g&acirc;y bất ngờ cho rất nhiều người. Thậm ch&iacute; nhiều kh&aacute;n giả c&ograve;n kh&ocirc;ng tin, tỏ ra &ldquo;nghi ngờ&rdquo; về con số n&agrave;y.</p>\n<p style="text-align: justify;">Con số 8 tỷ đồng m&agrave; Xu&acirc;n Bắc nhận được l&agrave; sự thật. Đ&oacute; l&agrave; mức c&aacute;t-x&ecirc; m&agrave; Xu&acirc;n Bắc nhận được khi một c&ocirc;ng ty mua bản quyền h&igrave;nh ảnh, tiếng của anh với chương tr&igrave;nh Đuổi h&igrave;nh bắt chữ. Đ&acirc;y l&agrave; một th&ocirc;ng tin đ&atilde; l&agrave;m &ldquo;s&aacute;ng tỏ&rdquo; con số c&aacute;t-x&ecirc; &ldquo;khủng&rdquo; kia v&agrave; kh&aacute;n giả đều cho rằng Xu&acirc;n Bắc ho&agrave;n to&agrave;n xứng đ&aacute;ng bởi những đ&oacute;ng g&oacute;p của anh cho th&agrave;nh c&ocirc;ng của chương tr&igrave;nh Đuổi h&igrave;nh bắt chữ.</p>\n<p><strong>Danh h&agrave;i Trấn Th&agrave;nh</strong></p>\n<table class="picture" align="center">\n<tbody>\n<tr>\n<td class="pic"><img src="http://img.v3.news.zdn.vn/w660/Uploaded/ycgmvvbt/2016_01_10/tranthanh.jpg" alt="C&aacute;t-x&ecirc; một đ&ecirc;m của danh h&agrave;i Việt đủ sống một đời?" /></td>\n</tr>\n<tr>\n<td class="pCaption caption"><span style="color: #808080;">Trấn Th&agrave;nh.</span></td>\n</tr>\n</tbody>\n</table>\n<p style="text-align: justify;">&nbsp;</p>\n<p style="text-align: justify;">Một trong những ng&ocirc;i sao trẻ đ&igrave;nh đ&aacute;m nhất của l&agrave;ng h&agrave;i hiện n&agrave;y l&agrave; Trấn Th&agrave;nh. Với sự th&ocirc;ng minh v&agrave; hoạt ng&ocirc;n, Trấn Th&agrave;nh xuất hiện với tần suất ch&oacute;ng mặt tr&ecirc;n truyền h&igrave;nh với c&aacute;c vai tr&ograve;: diễn h&agrave;i, MC, đ&oacute;ng phim, l&agrave;m gi&aacute;m khảo v&agrave; cả ca h&aacute;t.</p>\n<p style="text-align: justify;">Chỉ cần mỗi lần kh&aacute;n giả thấy sự xuất hiện của Trấn Th&agrave;nh tr&ecirc;n truyền h&igrave;nh, anh đ&atilde; thu về cho m&igrave;nh tầm 30 triệu đồng. C&ograve;n với c&aacute;c chương tr&igrave;nh b&ecirc;n ngo&agrave;i, một bầu show tiết lộ để mời Trấn Th&agrave;nh th&igrave; c&aacute;i gi&aacute; l&ecirc;n tới 6.000 USD.</p>\n<p style="text-align: justify;">C&aacute;i t&ecirc;n Trấn Th&agrave;nh cũng rất thu h&uacute;t c&aacute;c nh&atilde;n h&agrave;ng n&ecirc;n anh c&ograve;n c&oacute; thể kiếm được v&agrave;i tỷ đồng cho những hợp đồng quảng c&aacute;o. Trong một số liệu về tổng thu nhập, Trấn Th&agrave;nh khiến cho nhiều kh&aacute;n giả bất ngờ khi con số của anh cao gấp đ&ocirc;i so với danh h&agrave;i l&atilde;o l&agrave;ng Xu&acirc;n Bắc.</p>\n<p><strong>Danh h&agrave;i Trường Giang</strong></p>\n<table class="picture" align="center">\n<tbody>\n<tr>\n<td class="pic"><img src="http://img.v3.news.zdn.vn/w660/Uploaded/ycgmvvbt/2016_01_10/truonggiang.jpg" alt="C&aacute;t-x&ecirc; một đ&ecirc;m của danh h&agrave;i Việt đủ sống một đời?" /></td>\n</tr>\n<tr>\n<td class="pCaption caption">\n<p><span style="color: #808080;">Trường Giang đang l&agrave; nam diễn vi&ecirc;n được y&ecirc;u mến.</span></p>\n</td>\n</tr>\n</tbody>\n</table>\n<p style="text-align: justify;">C&aacute;ch đ&acirc;y 10 năm, Trường Giang c&ograve;n đang phải sống vất vả c&ugrave;ng với gia đ&igrave;nh ở Đồng Nai. Được bạn b&egrave; khuy&ecirc;n thi v&agrave;o trường S&acirc;n khấu điện ảnh, Trường Giang quyết định rời qu&ecirc; để l&ecirc;n S&agrave;i G&ograve;n học.</p>\n<p style="text-align: justify;">Từ những vai quần ch&uacute;ng, Trường Giang bắt đầu thể hiện được t&agrave;i năng v&agrave; dần khẳng định m&igrave;nh ở trung t&acirc;m Nụ Cười Mới. Ở thời điểm đ&oacute;, Trường Giang cho biết th&ugrave; lao chỉ l&agrave; 50.000 đồng.</p>\n<p style="text-align: justify;">Trong tiểu phẩm <em>Kh&oacute;</em>, Trường Giang g&acirc;y ấn tượng mạnh mẽ cho kh&aacute;n giả với h&igrave;nh ảnh &ocirc;ng gi&agrave; Quảng Nam kh&oacute; t&iacute;nh nhưng rất duy&ecirc;n d&aacute;ng, h&agrave;i hước. Sau vai diễn n&agrave;y, t&ecirc;n tuổi của Trường Giang bắt đầu được c&ocirc;ng ch&uacute;ng biết đến v&agrave; anh thực hiện nhiều minishow c&ugrave;ng c&aacute;c c&aacute;c nghệ sĩ nổi tiếng như Ho&agrave;i Linh, Ch&iacute; T&agrave;i, Trấn Th&agrave;nh...</p>\n<p style="text-align: justify;">Hiện tại, th&ugrave; lao để mời được Trường Giang biểu diễn một tiết mục l&agrave; con số kh&aacute; khủng - từ 40 đến 60 triệu đồng. Ngo&agrave;i ra, c&aacute;c chương tr&igrave;nh m&agrave; Trường Giang l&agrave;m MC gi&uacute;p anh thu về 30 triệu đồng cho mỗi tập. Tất cả l&agrave; c&ograve;n chưa kể đến những thu nhập từ quảng c&aacute;o v&agrave; đ&oacute;ng phim.</p>\n<p style="text-align: justify;">Trường Giang b&acirc;y giờ đang l&agrave; một trong những nghệ sĩ h&agrave;i đắt show nhất hiện tại. Kh&ocirc;ng phải v&ocirc; duy&ecirc;n v&ocirc; cớ m&agrave; bộ phim <em>49 ng&agrave;y</em> do Trường Giang thủ vai ch&iacute;nh đ&atilde; đem về doanh thu 15 tỷ đồng sau 3 ng&agrave;y c&ocirc;ng chiếu. Như vậy, Trường Giang ho&agrave;n to&agrave;n c&oacute; thể thu về cho m&igrave;nh hơn 1 tỷ đồng cho mỗi th&aacute;ng l&agrave;m việc.</p>\n<p><strong>NSƯT Đức Hải</strong></p>\n<table class="picture" style="height: 804px;" width="529" align="center">\n<tbody>\n<tr>\n<td class="pic"><img src="http://img.v3.news.zdn.vn/w660/Uploaded/ycgmvvbt/2016_01_10/duchai.jpg" alt="C&aacute;t-x&ecirc; một đ&ecirc;m của danh h&agrave;i Việt đủ sống một đời?" width="523" height="785" /></td>\n</tr>\n<tr>\n<td class="pCaption caption">\n<p><span style="color: #808080;">NSƯT Đức Hải chịu &aacute;p lực lớn kinh tế v&igrave; anh c&oacute; tới 4 đứa con trong đ&oacute; lần thứ 2 l&agrave; sinh 3.</span></p>\n</td>\n</tr>\n</tbody>\n</table>\n<p style="text-align: justify;">NSƯT Đức Hải được biết đến l&agrave; một diễn vi&ecirc;n h&agrave;i mang lại tiếng cười cho kh&aacute;n giả với lối diễn xuất h&agrave;i hước, d&iacute; dỏm. Tuy nhi&ecirc;n trong v&agrave;i năm trở lại đ&acirc;y, anh kh&aacute; im tiếng khi phải tập trung lo cho gia đ&igrave;nh v&agrave; c&aacute;c c&ocirc;ng việc l&agrave;m th&ecirc;m b&ecirc;n ngo&agrave;i. Mặc d&ugrave; hoạt động kh&aacute; im tiếng nhưng Đức Hải tiết lộ rằng mức c&aacute;t-x&ecirc; của anh vẫn rất cao.</p>\n<p style="text-align: justify;">"Show n&agrave;o mời t&ocirc;i m&agrave; c&aacute;t-x&ecirc; dưới 2.000 USD, chưa kể thuế l&agrave; t&ocirc;i kh&ocirc;ng l&agrave;m. Nếu t&ocirc;i l&agrave;m 2,3 show một th&aacute;ng với mức c&aacute;t-x&ecirc; đ&oacute; th&igrave; cuộc sống của t&ocirc;i ổn định, nhưng nếu c&aacute;t-x&ecirc; thấp hơn, một th&aacute;ng t&ocirc;i phải chạy mấy chục show, li&ecirc;n tục 30 ng&agrave;y th&igrave; đ&oacute; l&agrave; t&ocirc;i đang b&agrave;o m&ograve;n cơ thể, kh&ocirc;ng c&oacute; thời gian d&agrave;nh cho cho gia đ&igrave;nh. Đ&oacute; l&agrave; lối đi của t&ocirc;i, nhưng lựa chọn như thế n&agrave;o l&agrave; chuyện của kh&aacute;ch h&agrave;ng, thực tế t&ocirc;i vẫn c&oacute; rất nhiều lời mời biểu diễn. Cũng c&oacute; những chương tr&igrave;nh t&ocirc;i kh&ocirc;ng lấy c&aacute;t-x&ecirc;, t&ugrave;y t&acirc;m v&agrave;o nh&agrave; sản xuất v&agrave; t&ocirc;i sẽ đ&oacute;ng g&oacute;p v&agrave;o th&agrave;nh c&ocirc;ng của chương tr&igrave;nh." - nghệ sĩ Đức Hải thẳng thắn chia sẻ.</p>\n<p style="text-align: justify;">Nam nghệ sĩ cho hay, sau khi trở th&agrave;nh bố của bốn đứa con, anh chịu &aacute;p lực lớn về kinh tế. Anh kh&ocirc;ng ngại ra gi&aacute; cao trong hoạt động nghệ thuật để c&oacute; tiền lo cho gia đ&igrave;nh.&nbsp;</p>\n<p style="text-align: right;"><em>Theo K.N/B&aacute;o Gia Đ&igrave;nh &amp; X&atilde; Hội</em></p>\n</div>', NULL, 'Cát-xê một đêm của danh hài Việt đủ sống một đời', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/hoailinh.jpg', '', 0, 0, 1, 0, 495, 0, 1452485693, 1452485873, 1, 0, 0, NULL),
(150, 'Dự báo thời tiết ngày 27/01/2016', NULL, 'du-bao-thoi-tiet-ngay-27-01-2016', 149, 'news_item', 'Dự báo thời tiết', NULL, 'Không khí lạnh có cường độ suy yếu dần. Khu vực Nam Bộ nằm ở rìa phía nam của khối khí lạnh này. Do vậy, thời tiết không mưa, ngày nắng và nhiệt độ có khuynh hướng nhích nhẹ lên. Tuy nhiên vào ban đêm và sáng sớm, nền nhiệt vẫn phổ biến dưới 23 độ, trong đó một số nơi ở miền Đông trời lạnh với nền nhiệt dưới 20 độ.', NULL, 'Không khí lạnh có cường độ suy yếu dần. Khu vực Nam Bộ nằm ở rìa phía nam của khối khí lạnh này. Do vậy, thời tiết không mưa, ngày nắng và nhiệt độ có khuynh hướng nhích nhẹ lên. Tuy nhiên vào ban đêm và sáng sớm, nền nhiệt vẫn phổ biến dưới 23 độ, trong đó một số nơi ở miền Đông trời lạnh với nền nhiệt dưới 20 độ.', NULL, '<p style="text-align: justify;">Kh&ocirc;ng kh&iacute; lạnh c&oacute; cường độ suy yếu dần. Khu vực Nam Bộ nằm ở r&igrave;a ph&iacute;a nam của khối kh&iacute; lạnh n&agrave;y. Do vậy, thời tiết kh&ocirc;ng mưa, ng&agrave;y nắng v&agrave; nhiệt độ c&oacute; khuynh hướng nh&iacute;ch nhẹ l&ecirc;n. Tuy nhi&ecirc;n v&agrave;o ban đ&ecirc;m v&agrave; s&aacute;ng sớm, nền nhiệt vẫn phổ biến dưới 23 độ, trong đ&oacute; một số nơi ở miền Đ&ocirc;ng trời lạnh với nền nhiệt dưới 20 độ.</p>\n<p>&nbsp;</p>\n<p><iframe style="display: block; margin-left: auto; margin-right: auto;" src="http://www.youtube.com/embed/KJgRsnUxRh8" width="708" height="439"></iframe></p>', NULL, 'Dự báo thời tiết ngày 27/01/2016', NULL, '', '', 0, 'http://tamdiem.com.vn/sources/images/DBTT_1.JPG', '', 0, 0, 1, 0, 1, 0, 1453865560, 1453866222, 1, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `send_faq`
--

CREATE TABLE IF NOT EXISTS `send_faq` (
`id` int(5) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mess` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `send_faq`
--

INSERT INTO `send_faq` (`id`, `name`, `phone`, `email`, `mess`, `created_at`, `status`) VALUES
(9, 'tester 2', '00200', 'bb@test.com', 'tâm điểm..........', 1421988473, 1);

-- --------------------------------------------------------

--
-- Structure de la table `supports`
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
-- Contenu de la table `supports`
--

INSERT INTO `supports` (`id`, `yahoo`, `skype`, `name`, `position`, `phone`, `created_at`, `updated_at`, `published`) VALUES
(1, 'vietnamefood', 'vietnamefood', 'Vietname Food', 'Center', '000 000 000', 1419665725, 1459929417, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$pasqC.YOwV85ctSecaccpO7oUJzJFK1IBfB2OVC8E0O6P6wCwyNYW', '', 'admin@admin.com', '', NULL, NULL, '5RCAdiBmIf3pVmYOj2fBve', 1268889823, 1459926880, 1, 'Admin', 'istrator', 'ADMIN', '121212121212'),
(3, '::1', 'hung nguyen', '$2y$08$C5MsxhDtOOzPnuPq5CGFHeiLgciRsbspPaICjAFGPpbNAlxNwpBlS', NULL, 'hungnguyenphp@gmail.com', NULL, NULL, NULL, 'jbwnFqXtQvl2yAC0ORTE0e', 1419440484, 1459411300, 1, 'Hung', 'Nguyen', 'Web2Life.Net', '12345688'),
(4, '::1', 'test test', '$2y$08$QHrDF7XJK8uSOapsfvrr2.XnFJmuDXflxuA9MRlir575BdsfE.Hz2', NULL, 'tester@yahoo.com', '8100d4e849fb43fce8a0704f68ad13e655f8d5e9', NULL, NULL, NULL, 1419440560, NULL, 0, 'Test', 'test', 'test', '433123123123');

-- --------------------------------------------------------

--
-- Structure de la table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(20, 1, 1),
(21, 1, 2),
(22, 1, 3),
(15, 3, 1),
(16, 3, 2),
(8, 4, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bigbanner`
--
ALTER TABLE `bigbanner`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client_say`
--
ALTER TABLE `client_say`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `configs`
--
ALTER TABLE `configs`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partner`
--
ALTER TABLE `partner`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resource`
--
ALTER TABLE `resource`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `alias` (`alias`);

--
-- Index pour la table `send_faq`
--
ALTER TABLE `send_faq`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `supports`
--
ALTER TABLE `supports`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bigbanner`
--
ALTER TABLE `bigbanner`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `client_say`
--
ALTER TABLE `client_say`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `configs`
--
ALTER TABLE `configs`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `partner`
--
ALTER TABLE `partner`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `resource`
--
ALTER TABLE `resource`
MODIFY `id` bigint(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT pour la table `send_faq`
--
ALTER TABLE `send_faq`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `supports`
--
ALTER TABLE `supports`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
