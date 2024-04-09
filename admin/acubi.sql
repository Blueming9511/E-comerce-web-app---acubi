-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 09, 2024 lúc 10:42 AM
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
-- Cơ sở dữ liệu: `acubi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `category_id`, `brand_name`) VALUES
(2, 2, 'Y2K');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'TOP'),
(2, 'BOTTOM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_desc`, `product_img`) VALUES
(3, 1, 2, 'Men cotton shirt', 12, 'A men’s cotton shirt is a classic wardrobe staple that combines comfort and style. Made from cotton or a cotton-rich blend, these shirts are known for their breathability and softness', 'm6.jpg'),
(5, 2, 2, 'Female cotton dress', 13, 'This is a description', 'i2.jpg'),
(7, 1, 2, 'Y2k shirt long sleeves', 44, 'high-quality y2k cotton shirt', 'i1.jpg'),
(9, 2, 3, 'Men black jeans', 33, 'High-quality men black jeans acubi style', 'm1.jpg'),
(10, 1, 2, 'Y2k Black crop top', 22, 'This black crop top captures the essence of Y2K fashion with its sleek, cropped silhouette', 'i6.jpg'),
(11, 1, 2, 'Korean full set', 50, 'Cute acubi outfit korean style', 'i8.jpg'),
(12, 1, 2, 'Men Korean outfit', 66, 'Layering is key in Korean fashion Dont be afraid to experiment with different textures and lengths.', 'm2.jpg'),
(13, 2, 2, 'Black men jeans Y2k ', 14, 'Fit is crucial. Opt for slightly oversized tops and well-fitting bottoms for a flattering silhouette.', 'm3.jpg'),
(14, 2, 2, 'Blue Jacket ', 12, 'Oversized blue hoodie with graphic details or a printed bomber jacket.', 'm8.jpg'),
(15, 2, 2, 'New Jeans', 22, 'Bunnies New Y2k Jeans With Sparkling details', 'i7.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `activated` int(1) NOT NULL DEFAULT 0,
  `activate_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `username`, `email`, `password`, `firstname`, `lastname`, `phonenumber`, `address`, `activated`, `activate_token`) VALUES
(2, 'randomPerson', 'random@gmail.com', '$2y$10$nL7SEBU6mOwefyKBWEfDdO5z0qSO0oegCGR01Imihr7r26bwC3nwC', 'Van', 'Th', '1234567890', '163 QL55, TT. Phước Bửu, Xuyên Mộc, Bà Rịa - Vũng Tàu', 0, 'c0bbcf54885900ffa3005d42eb0d32a5'),
(3, 'ChanhHy', 'Hy@gmail.com', '$2y$10$yix0k/WBtyo3HqqujLxPseRJGrkb0wZen1tmyqmq92CQpgx/Bys72', 'Hy', 'Huynh', '12347590', 'Ho chi Minh', 0, 'd2c6726f992382256fa6a6cd8abaa7e0'),
(4, 'Yenne', 'YenYen@gmail.com', '$2y$10$lyPJ.CQc5qfacg2rCbIDjuhy8ihGTq5sE8Y39H07p2Vo2VtF5QOZC', 'Yen', 'Nguyen', '1082917381', 'HCM', 0, '4fe4957d158b6f1f88b36937cc24712b'),
(5, 'Nguyenne', 'nguyennguyen8343@gmail.com', '$2y$10$X1mkRUMcKekJV1uwAnWFyunDPTF5MQwTyB9cK/tYg3QTVne0cTI42', 'Nguyen', 'Ta', '0918988154', 'ấp thanh bình 1', 0, '6d7c3e1a1d6b6736af3e53f87ef5b35d');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
