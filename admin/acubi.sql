-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 10, 2024 lúc 06:00 AM
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
-- Cấu trúc bảng cho bảng `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `bill_id` int(11) NOT NULL,
  `bill_date` date NOT NULL DEFAULT current_timestamp(),
  `payment_method` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `total_money` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill`
--

INSERT INTO `tbl_bill` (`bill_id`, `bill_date`, `payment_method`, `first_name`, `last_name`, `address`, `phone_number`, `total_money`) VALUES
(2, '2024-04-09', 'Bank-transfer', 'eqe', 'ewqe', 'eqwe', 'eqweq', 0),
(3, '2024-04-09', 'Bank-transfer', 'eqe', 'ewqe', 'eqwe', 'eqweq', 0),
(4, '2024-04-09', 'Bank-transfer', 'eqe', 'ewqe', 'eqwe', 'eqweq', 0),
(5, '2024-04-09', 'Bank-transfer', 'eqe', 'ewqe', 'eqwe', 'eqweq', 0),
(6, '2024-04-09', 'Bank-transfer', 'eqe', 'ewqe', 'eqwe', 'ewqeq', 0),
(7, '2024-04-09', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqe', 0),
(8, '2024-04-09', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqe', 0),
(9, '2024-04-09', 'Bank-transfer', 'eqwe', 'ewqe', 'qewqe', 'ewqe', 0),
(10, '2024-04-10', 'Bank-transfer', 'eqwe', 'ewq', 'eqwe', 'eqw', 0),
(11, '2024-04-10', 'Bank-transfer', 'eqwe', 'ewq', 'eqwe', 'eqw', 0),
(12, '2024-04-10', 'Bank-transfer', 'eqwe', 'ewq', 'eqwe', 'eqw', 0),
(13, '2024-04-10', 'Bank-transfer', 'eqwe', 'ewq', 'eqwe', 'eqw', 0),
(14, '2024-04-10', 'Bank-transfer', 'eqwe', 'ewq', 'eqwe', 'eqw', 0),
(15, '2024-04-10', 'Bank-transfer', 'eqwe', 'ewq', 'eqwe', 'eqw', 0),
(16, '2024-04-10', 'Bank-transfer', 'eqwe', 'ewq', 'eqwe', 'eqw', 0),
(17, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(18, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(19, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(20, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(21, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(22, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(23, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(24, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(25, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(26, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(27, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwhe', 'eqwje', 'ewqe', 0),
(28, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(29, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(30, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(31, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(32, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(33, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(34, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(35, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(36, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(37, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'eqwe', 0),
(38, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(39, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(40, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(41, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(42, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(43, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(44, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(45, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(46, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(47, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(48, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(49, '2024-04-10', 'Bank-transfer', 'eqwe', 'eqwe', 'eqwe', 'ewqeq', 0),
(50, '2024-04-10', 'Bank-transfer', 'Hii', 'ba', 'dsd', 'dsd', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill_product`
--

CREATE TABLE `tbl_bill_product` (
  `bill_product_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill_product`
--

INSERT INTO `tbl_bill_product` (`bill_product_id`, `bill_id`, `product_id`, `product_name`, `quantity`, `price`) VALUES
(1, 49, 11, 'Korean full set', 1, 50),
(2, 49, 10, 'Y2k Black crop top', 1, 22),
(3, 49, 3, 'Men cotton shirt', 2, 24),
(4, 50, 11, 'Korean full set', 1, 50),
(5, 50, 10, 'Y2k Black crop top', 2, 44),
(6, 50, 7, 'Y2k shirt long sleeves', 1, 44),
(7, 50, 3, 'Men cotton shirt', 2, 24);

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
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_img`) VALUES
(1, 'TOP', ''),
(2, 'BOTTOM', '');

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
-- Cấu trúc bảng cho bảng `tbl_product_bought`
--

CREATE TABLE `tbl_product_bought` (
  `product_bought_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product_bought`
--

INSERT INTO `tbl_product_bought` (`product_bought_id`, `product_id`, `product_img`, `product_name`, `quantity`, `price`, `subtotal`) VALUES
(5, 11, 'i8.jpg', 'Korean full set', 4, 50, 250),
(6, 3, 'm6.jpg', 'Men cotton shirt', 1, 12, 12);

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
(15, 'admin', '1234@gmail.com', '$2y$10$1BYUI.OK9AfqTWTFtldXieUSDwRut81jpTaySlgV3Txrch.my.gzO', 'TẠ', 'NGUYÊN', '0918988154', 'ấp thanh bình 1', 1, '4670f5ea868922005e8553ca8a7dfda0'),
(16, 'Nguyen', 'alanswift094@gmail.com', '$2y$10$yqZ6rFB8ykcTL7Dk5lm4BOj2fMli7ybKpl1Had03hWtV73SNIEm7G', 'TẠ', 'NGUYÊN', '0918988154', 'ấp thanh bình 1', 1, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Chỉ mục cho bảng `tbl_bill_product`
--
ALTER TABLE `tbl_bill_product`
  ADD PRIMARY KEY (`bill_product_id`);

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
-- Chỉ mục cho bảng `tbl_product_bought`
--
ALTER TABLE `tbl_product_bought`
  ADD PRIMARY KEY (`product_bought_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `tbl_bill_product`
--
ALTER TABLE `tbl_bill_product`
  MODIFY `bill_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT cho bảng `tbl_product_bought`
--
ALTER TABLE `tbl_product_bought`
  MODIFY `product_bought_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
