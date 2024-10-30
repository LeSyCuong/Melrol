-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2024 lúc 06:57 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `melrol`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `messenger` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `category`, `messenger`) VALUES
(1, 'admin', 'lesycuong692003@gmail.com', 'cuu toi voi', 'app', 'zcxzx'),
(2, 'index.php', 'lesycuong692003@gmail.com', 'mình cần đăng ký vps', 'web-design', 'dsd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `content`
--

INSERT INTO `content` (`id`, `name`, `content`, `img`, `link`) VALUES
(1, 'Thông tin', 'Chúng tôi đặt tất cả niềm đam mê và tâm huyết của mình vào tất cả các dự án mà khách hàng đem đến cho chúng tôi. Vì chúng tôi cũng từng là khách hàng, chúng tôi hiểu được, sự chỉnh chu và hoàn thiện là thứ mà bất kì ai cũng muốn có.', 'https://melrol.com/wp-content/uploads/2022/12/nyssa_service1.jpg', '/thongtin.php'),
(2, 'Dịch vụ', 'Bạn có ý tưởng cần thực hiện? Bạn chưa tìm ra giải pháp hợp lý? Hãy đến với Melrol, ở đây chúng tôi sẽ cùng bạn lên ý tưởng cho website của riêng bạn. Hoặc bạn có thể lựa chọn trong danh sáchwebsite mẫu của chúng tôi ở đa dạng lĩnh vực.', 'https://melrol.com/wp-content/uploads/2022/12/nyssa_service2.jpg', '/dichvu.php'),
(3, 'Liên hệ', 'Liên hệ với chúng tôi qua biểu mẫu liên hệ dưới đây để thảo luận\r\nvề dự án của bạn, ý tưởng của bạn.', 'https://melrol.com/wp-content/uploads/2022/12/nyssa_service3.jpg', '/lienhe.php');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
