-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 30, 2019 lúc 11:33 AM
-- Phiên bản máy phục vụ: 10.3.15-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contestants`
--

CREATE TABLE `contestants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contestants`
--

INSERT INTO `contestants` (`id`, `name`, `firstname`, `dob`, `class`, `grade`, `school`, `address`, `ward`, `district`, `province`, `parentname`, `email`, `phone`, `name_link`, `link`, `created_at`, `updated_at`) VALUES
(2, 'gregr gr111', 'hivgbuh', 'vug', 'v', 'uv', 'yuv', 'u', 'vu', 'v', 'uv', 'u', 'vuv43fsdfs@dfds', 'uv', 'u', 'vbu', '2019-09-26 02:46:17', '2019-09-30 00:48:40'),
(3, 'gregr gr', 'hivgbuh', 'vug', 'v', 'uv', 'yuv', 'u', 'vu', 'v', 'uv', 'u', 'vuv', 'uv', 'u', 'vbu', '2019-09-26 03:00:31', '2019-09-26 03:00:31'),
(4, 'g', 'uyv', 'uyv', 'uy', 'vuy', 'v', 'uyv', 'u', 'vu', 'v', 'yuv', 'uy', 'vgbuyvb', 'uyv', 'bui', '2019-09-29 19:17:13', '2019-09-29 19:17:13'),
(5, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'qq', 'q', 'q', '2019-09-29 19:19:29', '2019-09-29 19:19:29'),
(6, 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', '2019-09-29 19:46:17', '2019-09-29 19:46:17'),
(7, 'ư2', 'ưggg', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'sdfsdf@dfsdfsdf', 'ư', 'ư', 'ư', '2019-09-29 20:06:51', '2019-09-29 20:06:51'),
(8, 'ưrtert', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ưhtrhrth', 'ư', 'ư', 'ư', '4324@gdfghf', 'ư', 'ư', 'ư', '2019-09-29 20:08:09', '2019-09-29 20:08:09'),
(9, 'ưfasfsdkkkkkkkkkkk', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'ư', 'fsdfsd@fsdf', 'ưfdsfsdfsdfsd', 'ư', 'ư', '2019-09-29 20:28:42', '2019-09-29 20:40:21'),
(10, 'kKk', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', '2019-09-30 00:49:19', '2019-09-30 00:49:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_26_075551_create_news_table', 2),
(4, '2019_09_26_084813_create_contestants_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hightlight` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `slug_title`, `description`, `content`, `image`, `hightlight`, `created_at`, `updated_at`) VALUES
(3, 'Người thứ 3 trong gia đình ông chủ Alibaba bị tạm giữ khẩn cấp', 'nguoi-thu-3-trong-gia-dinh-ong-chu-alibaba-bi-tam-giu-khan-cap', 'Sau khi mời ông Nguyễn Thái Lực lên làm việc, Cơ quan CSĐT Công an TP HCM đã thi hành lệnh tạm giữ ông Lực để làm rõ một số hành vi lừa đảo ở Alibaba.', '<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">&nbsp;Thái Luyện, Chủ tịch HĐQT Công ty CP Địa ốc Alibaba) lên làm việc thì khuya 25-9, Công an TP HCM đã thi hành giữ người trong trường hợp khẩn cấp.</p><p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">Công an TP HCM tạm giữ Nguyễn Thái Lực để lấy lời khai liên quan đến hành vi lừa đảo chiếm đoạt tài sản tại Alibaba.</p><p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">Ông Nguyễn Thái Lực là giám đốc 2 Công ty Địa ốc Xanh (trụ sở tại tỉnh Bà Rịa- Vũng Tàu) và Công ty Địa ốc Long Thành ALI (trụ sở tại tỉnh Đồng Nai).</p><p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">Trước đó, ngày 24-9, Cơ quan CSĐT Công an TP HCM đã phối hợp với Công an tỉnh Bình Thuận, Đồng Nai, Bà Rịa-Vũng Tàu gửi giấy triệu tập gần 20 giám đốc công ty con của&nbsp;<a class=\"TextlinkBaiviet\" href=\"https://www.24h.com.vn/bat-giam-doc-cong-ty-dia-oc-alibaba-c46e5941.html\" title=\"Công ty CP Địa ốc Alibaba\" style=\"color: rgb(0, 0, 255); line-height: 1.6;\">Công ty CP Địa ốc Alibaba</a>.</p><p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\"><img class=\"news-image initial loading\" alt=\"Người thứ 3 trong gia đình ông chủ Alibaba bị tạm giữ khẩn cấp - 1\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/1569472435-img5303-1569470919561196577519.jpg\" width=\"660\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p class=\"img_chu_thich_0407\" data-placeholder=\"[nhập chú thích]\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6; color: rgb(37, 37, 37); font-style: italic; text-align: center; margin-top: -15px;\">Đến nay Công an TP HCM đã nhận gần 1000 đơn tố cáo</p><p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">Trước đó, Công an TP HCM đã tạm giam&nbsp;<a class=\"TextlinkBaiviet\" href=\"https://www.24h.com.vn/bat-giam-doc-cong-ty-dia-oc-alibaba-c46e5941.html\" title=\"Nguyễn Thái Lĩnh\" style=\"color: rgb(0, 0, 255); line-height: 1.6;\">Nguyễn Thái Lĩnh</a>&nbsp;(Tổng Giám đốc Alibaba) và Nguyễn Thái Luyện (Chủ tịch HĐQT Alibaba).</p><p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">Tính đến nay, VKSND TP HCM đã phê chuẩn quyết định tạm giam Nguyễn Thái Lĩnh và Nguyễn Thái Luyện thời hạn 4 tháng để điều tra hà</p>', '7l3e-storm.jpg', 0, '2019-09-26 01:42:55', '2019-09-26 01:42:55'),
(4, 'Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất', 'tau-bay-a321neo-acf-240-ghe-xuat-hien-noi-bat-tai-san-bay-tan-son-nhat', 'Hãng hàng không thế hệ mới Vietjet vừa bổ sung vào đội tàu trẻ, hiện đại của mình tàu bay Airbus thế hệ mới A321neo ACF (Airbus Cabin Flex) 240 ghế đầu tiên trên thế giới.', '<section style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px;\"><article class=\"nwsHt nwsUpgrade\"><p align=\"center\" style=\"font-size: 15px; line-height: 1.6; text-align: center;\"><img class=\"news-image initial loading\" alt=\"Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất - 1\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-1-1569478784-568-width660height383.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p style=\"font-size: 15px; line-height: 1.6;\"><img class=\"news-image initial loaded\" alt=\"Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất - 2\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-2-1569478784-329-width660height346.jpg\" data-original=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-2-1569478784-329-width660height346.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p align=\"center\" style=\"font-size: 15px; line-height: 1.6; text-align: center;\"><img class=\"news-image initial loaded\" alt=\"Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất - 3\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-3-1569478784-850-width660height439.jpg\" data-original=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-3-1569478784-850-width660height439.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p class=\"img_chu_thich_0407\" style=\"font-size: 15px; line-height: 1.6; color: rgb(37, 37, 37); font-style: italic; text-align: center; margin-top: -15px;\">Phó Tổng Giám đốc Vietjet Nguyễn Đức Thịnh (giữa) chào đón phi hành đoàn trên tàu bay thế hệ mới nhất của Airbus</p><p align=\"center\" style=\"font-size: 15px; line-height: 1.6; text-align: center;\"><img class=\"news-image initial loaded\" alt=\"Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất - 4\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-4-1569478784-924-width660height269.jpg\" data-original=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-4-1569478784-924-width660height269.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p align=\"center\" style=\"font-size: 15px; line-height: 1.6; text-align: center;\"><img class=\"news-image initial loaded\" alt=\"Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất - 5\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-5-1569478784-138-width660height440.jpg\" data-original=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-5-1569478784-138-width660height440.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p align=\"center\" style=\"font-size: 15px; line-height: 1.6; text-align: center;\"><img class=\"news-image loaded\" alt=\"Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất - 6\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-6-1569478784-428-width660height416.jpg\" data-original=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-6-1569478784-428-width660height416.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p class=\"img_chu_thich_0407\" style=\"font-size: 15px; line-height: 1.6; color: rgb(37, 37, 37); font-style: italic; text-align: center; margin-top: -15px;\">Tàu bay mang số hiệu VN-A520 của Vietjet về tới sân bay Tân Sơn Nhất</p><p style=\"font-size: 15px; line-height: 1.6;\">Tàu bay A321neo ACF có cấu trúc khoang hành khách được cải tiến thiết kế, đảm bảo tiêu chuẩn về kích thước và khoảng cách giữa các ghế, mang lại trải nghiệm bay tốt nhất cho khách hàng.</p><p align=\"center\" style=\"font-size: 15px; line-height: 1.6; text-align: center;\"><img class=\"news-image loaded\" alt=\"Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất - 7\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-7-1569478784-504-width660height440.jpg\" data-original=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-7-1569478784-504-width660height440.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p align=\"center\" style=\"font-size: 15px; line-height: 1.6; text-align: center;\"><img class=\"news-image loaded\" alt=\"Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất - 8\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-8-1569478784-4-width660height440.jpg\" data-original=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-8-1569478784-4-width660height440.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p class=\"img_chu_thich_0407\" style=\"font-size: 15px; line-height: 1.6; color: rgb(37, 37, 37); font-style: italic; text-align: center; margin-top: -15px;\">Nội thất ghế da sang trọng, êm ái, tạo sự thoải mái tối đa cho khách hàng trong suốt hành trình bay</p><p style=\"font-size: 15px; line-height: 1.6;\">Tàu bay A321neo ACF giúp giảm tiêu thụ nhiên liệu tối thiểu 16%, tiết giảm tiếng ồn tới 75% và lượng khí thải ra môi trường tới 50%. Vietjet hiện đang sở hữu đội tàu bay mới, hiện đại hàng đầu thế giới, tuổi bình quân chỉ 2,7 năm với chi phí vận hành tối ưu giúp mang lại thêm nhiều cơ hội bay tiết kiệm cho hành khách.</p><p style=\"font-size: 15px; line-height: 1.6;\">Nhà sản xuất máy bay hàng đầu thế giới Airbus cho biết, A321neo ACF sẽ là cơ sở cho Airbus phát triển dòng máy bay thân hẹp bay các chặng bay dài hơn như A321LR.</p><p style=\"font-size: 15px; line-height: 1.6;\">Với 129 đường bay trong nước và quốc tế, Vietjet hiện đang khai thác đội tàu với độ tin cậy kĩ thuật đạt tới 99,64%, thuộc nhóm cao nhất thế giới.</p><p align=\"center\" style=\"font-size: 15px; line-height: 1.6; text-align: center;\"><img class=\"news-image loaded\" alt=\"Tàu bay A321neo ACF 240 ghế xuất hiện nổi bật tại sân bay Tân Sơn Nhất - 9\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-9-1569478784-868-width660height440.jpg\" data-original=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-26/Tau-bay-A321neo-ACF-240-ghe-xuat-hien-noi-bat-tai-san-bay-Tan-Son-Nhat-tau-bay-9-1569478784-868-width660height440.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p class=\"img_chu_thich_0407\" style=\"font-size: 15px; line-height: 1.6; color: rgb(37, 37, 37); font-style: italic; text-align: center; margin-top: -15px;\">Tiếp viên trẻ trung, thân thiện của Vietjet đã sẵn sàng phục vụ hành khách trên tàu bay hiện đại</p><p style=\"font-size: 15px; line-height: 1.6;\">Tàu bay A321neo ACF về tới sân bay Tân Sơn Nhất sáng nay và sẽ được đưa vào khai thác ngay để phục vụ khách hàng trên các chặng bay tầm trung mà hãngfrgg hàng không thế hệ mới Vietjet đang khai thác.</p><div><br></div><div id=\"zone_banner_sponser_product\"><div id=\"ADS_201_15s\" class=\"txtCent\" style=\"text-align: center;\"></div></div></article></section>', 'vEvO-cropper-picture.jpg', 0, '2019-09-26 01:44:16', '2019-09-26 01:45:32'),
(5, 'Man City chốt HLV thay Pep Guardiola cực sốc, \"Người Hà Lan bay\" là ai?', 'man-city-chot-hlv-thay-pep-guardiola-cuc-soc-nguoi-ha-lan-bay-la-ai', 'Theo tiết lộ của báo chí Anh, Man City đã sẵn sàng lên kế hoạch thay thế Pep Guardiola trong trường hợp xấu nhất xảy ra.', '<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">rdiola&nbsp;đang bước vào mùa giải thứ 4 cùng với Man City. Sau cú \"ăn 3\" quốc nội mùa giải trước, mục tiêu của nhà cầm quân người Tây Ban Nha là đem về chiếc cúp&nbsp;Chanpions League đầu tiên trong lịch sử về sân Etihad.&nbsp;</p><p align=\"center\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6; text-align: center;\"><img class=\"news-image initial loading\" alt=\"Man City chốt HLV thay Pep Guardiola cực sốc, &amp;#34;Người Hà Lan bay&amp;#34; là ai? - 1\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-09-30/Cuc-soc-Man-City-chot-HLV-thay-Pep-Guardiola-pep2-1569778387-698-width660height371.jpg\" data-was-processed=\"true\" style=\"font-size: 12px; border: 0px; max-width: 660px;\"></p><p align=\"center\" class=\"img_chu_thich_0407\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6; color: rgb(37, 37, 37); font-style: italic; text-align: center; margin-top: -15px;\">HLV Pep Guardiola</p><p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">Theo hợp đồng, Pep Guardiola và Man City đang có giao kèo tới năm 2022 sau khi gia hạn hồi tháng 5/2018. Dưới bàn tay của nhà cầm quân Tây Ban Nha, Man City vẫn đang trình diễn lối chơi đẹp mắt cống hiến và khiến những đội bóng&nbsp;<a class=\"TextlinkBaiviet\" href=\"https://www.24h.com.vn/bong-da-ngoai-hang-anh-c149.html\" title=\"Ngoại hạng Anh\" style=\"color: rgb(0, 0, 255); line-height: 1.6;\">Ngoại hạng Anh</a>&nbsp;phải nể&nbsp;sợ.</p><p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">Dù vậy,&nbsp;các CĐV Man City có lý do để lo lắng về tương lai vị thuyền trưởng của mình. Cách đây ít lâu, Pep đã chọn người kế nhiệm tại Man City và khẳng định Arteta có thể đảm nhận vai trò HLV trưởng đội bóng. Thậm chí Pep còn bóng gió sẽ chia tay đội chủ sân Etihad giống như Sir Alex từng làm với MU.</p><p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 15px; line-height: 1.6;\">\"Liệu ai có thể tồn tại lâu như Sir Alex Ferguson ở Old Trafford? Thật khó khăn và phức tạp. Ngày nay, việc gắn bó với một đội bóng lâu dài là điều không tưởng.\"</p><div id=\"ADS_159_15s\" class=\"txtCent\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; text-align: center;\"><span name=\"ADS_159_15s_0\" id=\"ADS_159_15s_0\" class=\"m_banner_show\" bgcolor=\"#FFFCDA\" align=\"center\" valign=\"top\" style=\"display: block; margin: 0px auto; width: 640px;\"><div class=\"banner_inread\" style=\"border: 0px; margin: 0px auto;\"><div id=\"div-gpt-ad-1492584112323-21\" data-google-query-id=\"CKu_n4rc9-QCFZ0xKgod2zoEZg\" style=\"margin: 0px auto; height: 360px; width: 640px; border: 0px; position: relative;\"></div></div></span></div>', 'Sxqe-anbu-squad-kakashi-itachi-yamato-naruto-anime-4k-uhdpaper.com-3.jpg', 0, '2019-09-29 21:39:13', '2019-09-29 21:39:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'fdsfgdfgfd', 'datnt@iefsdfg.vn', 'exI-cun.png', NULL, '$2y$10$j6YB5/XsN.0lGw4hLqmiL.hicHMHcOpIUt0.oHAhpTvNo8ItSBrnq', '1', NULL, '2019-09-26 00:34:35', '2019-09-26 00:50:57'),
(3, 'Nguyễn Tiến Đạt', 'datnt@ieg.vn', 't9d-64abcd88-5061-4dc4-8baa-1e31d92c922a.png', NULL, '$2y$10$1mXnvx20XZ577ycmYh/J9.bvWvTfm2oJ4ga1LR/W53.pLaMQI9giW', '1', NULL, '2019-09-26 00:50:49', '2019-09-26 00:50:49'),
(4, 'tiendat', 'datnt@ieg.vn1', '', NULL, '$2y$10$SRcK6nqY.fmFzCiX2MSDWu3S8h5Xte8H82zmYW4FhjbljBXBDXi3e', '1', NULL, '2019-09-29 21:37:50', '2019-09-29 21:37:50');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contestants`
--
ALTER TABLE `contestants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
