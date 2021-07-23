-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 23, 2021 lúc 10:03 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fflt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`Username`, `Password`, `Role`) VALUES
('admin', '1234', 1),
('KhachHang10', '123', 0),
('linh', '000', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `MaHD` int(11) NOT NULL,
  `Bookingdate` text NOT NULL,
  `Quatity` int(11) NOT NULL,
  `Summoney` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`MaHD`, `Bookingdate`, `Quatity`, `Summoney`, `MaKH`) VALUES
(1, '22/07/2021', 3, 20000, 1),
(2, '20/07/2021', 5, 55000, 8),
(3, '22/07/2021', 2, 1030000, 5),
(4, '22/07/2021', 2, 1030000, 5),
(5, '22/07/2021', 2, 1030000, 5),
(6, '22/07/2021', 2, 1030000, 5),
(7, '22/07/2021', 2, 1030000, 5),
(8, '22/07/2021', 2, 1030000, 5),
(9, '22/07/2021', 2, 1030000, 5),
(10, '22/07/2021', 2, 1030000, 5),
(11, '22/07/2021', 2, 1030000, 5),
(12, '22/07/2021', 2, 1030000, 5),
(13, '22/07/2021', 2, 1030000, 5),
(14, '22/07/2021', 2, 1030000, 5),
(15, '22/07/2021', 2, 1030000, 5),
(16, '22/07/2021', 2, 1030000, 5),
(17, '22/07/2021', 2, 1030000, 5),
(18, '22/07/2021', 2, 1030000, 5),
(19, '22/07/2021', 2, 1030000, 5),
(20, '22/07/2021', 2, 1030000, 5),
(21, '22/07/2021', 2, 1030000, 5),
(22, '22/07/2021', 2, 1030000, 5),
(23, '22/07/2021', 2, 1030000, 5),
(24, '22/07/2021', 2, 1030000, 5),
(25, '22/07/2021', 2, 2000, 5),
(26, '22/07/2021', 2, 2000, 5),
(27, '22/07/2021', 2, 2000, 5),
(28, '22/07/2021', 2, 2000, 5),
(29, '22/07/2021', 2, 0, 5),
(30, '22/07/2021', 2, 1030000, 5),
(31, '22/07/2021', 2, 1030000, 5),
(32, '22/07/2021', 2, 1030000, 5),
(33, '22/07/2021', 2, 1030000, 5),
(34, '22/07/2021', 1, 30000, 4),
(35, '22/07/2021', 2, 1030000, 4),
(36, '22/07/2021', 3, 160000, 4),
(37, '23/07/2021', 1, 35000, 4),
(38, '23/07/2021', 1, 45000, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE `billdetail` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `billdetail`
--

INSERT INTO `billdetail` (`MaHD`, `MaSP`, `Price`, `Quantity`) VALUES
(1, 0, 500000, 5),
(5, 2, 20000, 20),
(23, 91, 30000, 1),
(24, 91, 30000, 1),
(25, 92, 2000, 1),
(26, 92, 2000, 1),
(27, 92, 2000, 1),
(28, 92, 2000, 1),
(28, 96, 0, 1),
(30, 90, 1000000, 1),
(30, 91, 30000, 1),
(31, 90, 1000000, 1),
(31, 91, 30000, 1),
(32, 90, 1000000, 1),
(32, 91, 30000, 1),
(33, 90, 1000000, 1),
(33, 91, 30000, 1),
(34, 91, 30000, 1),
(35, 90, 1000000, 1),
(35, 91, 30000, 1),
(36, 99, 45000, 2),
(36, 100, 35000, 1),
(36, 101, 35000, 1),
(37, 100, 35000, 1),
(38, 99, 45000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `informationcustomer`
--

CREATE TABLE `informationcustomer` (
  `MaKH` int(11) NOT NULL,
  `TenKH` text NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Numberphone` varchar(20) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Birthday` varchar(30) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `ImgCus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `informationcustomer`
--

INSERT INTO `informationcustomer` (`MaKH`, `TenKH`, `Address`, `Email`, `Numberphone`, `Gender`, `Birthday`, `Username`, `ImgCus`) VALUES
(1, 'ưewq', 'eqwe', 'eqwe', 'eqwe', 1, 'eqwe', 'eqwe', ''),
(4, 'Tất Dục Chí', 'Phu Loi, Thu Dau Mot, Binh Duong', 'Tatducchi@gmail.com', '0828758423', 0, '2000-07-03', 'KhachHang10', 'KhachHang10_1.jpg'),
(5, '', '', '', '', 0, '', 'linh', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `MaSP` int(11) NOT NULL,
  `TenSP` text NOT NULL,
  `ImgBig` varchar(50) NOT NULL,
  `ImgSmallfisrt` varchar(50) NOT NULL,
  `ImgSmallsecond` varchar(50) NOT NULL,
  `ImgSmallthird` varchar(50) NOT NULL,
  `ImgSmallfourth` varchar(50) NOT NULL,
  `ImgSmallfifth` varchar(50) NOT NULL,
  `MoTa` text NOT NULL,
  `Gia` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`MaSP`, `TenSP`, `ImgBig`, `ImgSmallfisrt`, `ImgSmallsecond`, `ImgSmallthird`, `ImgSmallfourth`, `ImgSmallfifth`, `MoTa`, `Gia`, `MaLSP`, `TenLSP`) VALUES
(97, 'Hambeger', 'Hambeger_1', 'Hambeger_2', 'Hambeger_3', 'Hambeger_4', 'Hambeger_5', 'Hambeger_6', 'Burger bò xúc xích với phần vỏ bánh mềm, xốp, giòn bọc lấy phần nhân thịt bò được tẩm ướp đậm đà, nướng vừa lửa. Mỗi miếng bánh lại đi kèm với phần rau củ tươi ngon và nước sốt đậm đà hòa quyện lại.', 50000, 11, 'FastFood'),
(99, 'SoDa Cam', 'SoDa Cam_1', 'SoDa Cam_2', 'SoDa Cam_3', 'SoDa Cam_4', 'SoDa Cam_5', 'SoDa Cam_6', 'Vị cam Soda mang lại cho người sử dụng cảm giác mát lạnh và sảng khoái nhất trong những ngày nóng bức, hãy thử tưởng tượng vào một ngày hè oi bức mà bạn nằm ở nhà hay ở bất cứ đâu thưởng thức những quả cam mát lạnh chỉ với sản phẩm Relx Pods nhỏ gọn vô cùng tiện lợi này.', 45000, 13, 'Drink'),
(100, 'Bánh Mì', 'Bánh Mì_1', 'Bánh Mì_2', 'Bánh Mì_3', 'Bánh Mì_4', 'Bánh Mì_5', 'Bánh Mì_6', 'Bạn sẽ có cơ hội được thưởng thức một ổ bánh mì giòn nóng và thơm ngon cùng với nhân là pate, đồ chua, hành,….hòa quyện với nước sốt béo béo thật là một ý tưởng tuyệt vời hấp dẫn với một tín đồ thèm và mê bánh mì.', 35000, 1, 'VietNamFood'),
(101, 'Hot Dog', 'Hot Dog_1', 'Hot Dog_2', 'Hot Dog_3', 'Hot Dog_4', 'Hot Dog_5', 'Hot Dog_6', 'rong mềm nóng, có vị hơi ngọt của bột, béo béo của phô mai và mùi vị đặc trưng của xúc xích. Tất cả hòa quyện với nhau, ăn mãi không muốn dừng.', 35000, 11, 'FastFood'),
(102, 'Escudella', 'Escudella_1', 'Escudella_2', 'Escudella_3', 'Escudella_4', 'Escudella_5', 'Escudella_6', 'Ẩm thực Excellente, xuất xứ, toute en finesse et riches en saveurs.', 90000, 8, 'EuropeFood'),
(103, 'Dolma', 'Dolma_1', 'Dolma_2', 'Dolma_3', 'Dolma_4', 'Dolma_5', 'Dolma_6', 'Dolma là thức ăn cho dạ dày, mắt và tâm hồn. Nếu bạn là động vật ăn tạp (tôi là vậy), bạn có thể ngạc nhiên bởi thực tế là bạn sẽ không bỏ lỡ thịt hoặc các sản phẩm động vật khác. Không gian và bầu không khí rất đẹp và yên tĩnh, nhân viên rất dễ mến và dường như là một cộng đồng thực sự. Các lựa chọn đồ uống rất thú vị và ngon! Và quán quân tuyệt đối là bánh sô cô la nhà truyền thống dolma', 90000, 8, 'EuropeFood'),
(104, 'Bánh Xèo', 'Bánh Xèo_1', 'Bánh Xèo_2', 'Bánh Xèo_3', 'Bánh Xèo_4', 'Bánh Xèo_5', 'Bánh Xèo_6', 'Người miền Nam thì lại đổ bánh xèo to phải nói gấp 3-4 lần bánh xèo Phan Thiết chắc bởi vì họ quen với lối sống hào sảng, thoải mái của mình. Vỏ bánh được tráng mỏng, giòn, hơi dai dai ở giữa, cực kỳ thơm bởi có nước cốt dừa. ', 45000, 1, 'VietNamFood'),
(105, 'Trà Sữa RoyalTea ', 'Trà Sữa RoyalTea _1', 'Trà Sữa RoyalTea _2', 'Trà Sữa RoyalTea _3', 'Trà Sữa RoyalTea _4', 'Trà Sữa RoyalTea _5', 'Trà Sữa RoyalTea _6', 'RoyalTea đứng đầu trong danh sách top những thương hiệu trà sữa ngon hiện nay. Trà sữa RoyalTea ra đời là sự kết hợp hoàn hảo của văn hóa Trung hoa và xu hướng khẩu vị của giới trẻ Châu Á. Với vẻ đẹp của văn hóa được hiện hữu mang hơi thở đạm nét trẻ trung của thời đại, RoyalTea đã trở thành thức uống nhận được sự yêu thích của đông đảo các bạn trẻ với vị kem cheese đặc trưng. Đến năm 2013, RoyalTea đã phát triển hệ thống trên 300 cửa hàng khắp Hong Kong, Đài Loan, Canada, Mỹ và Trung Quốc.', 35000, 13, 'Drink'),
(106, 'Bánh Tráng Trộn', 'Bánh Tráng Trộn_1', 'Bánh Tráng Trộn_2', 'Bánh Tráng Trộn_3', 'Bánh Tráng Trộn_4', 'Bánh Tráng Trộn_5', 'Bánh Tráng Trộn_6', 'Bánh tráng trộn không phải là món ăn xa lạ của giới trẻ, nói cách khác đây là món ăn vặt “thần thánh” đã chinh phục biết bao khẩu vị của người dùng, từ những em nhỏ còn cắp xách đến trường, các cô nàng văn phòng cho đến các cô chú bước vào giai đoạn trung niên.', 25000, 1, 'VietNamFood'),
(107, 'Banh kot', 'Banh kot_1', 'Banh kot_2', 'Banh kot_3', 'Banh kot_4', 'Banh kot_5', 'Banh kot_6', '3000', 5000000, 1, 'VietNamFood');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

CREATE TABLE `producttype` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `producttype`
--

INSERT INTO `producttype` (`MaLSP`, `TenLSP`) VALUES
(1, 'VietNamFood'),
(8, 'EuropeFood'),
(11, 'FastFood'),
(13, 'Drink');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`MaHD`);

--
-- Chỉ mục cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`MaHD`,`MaSP`);

--
-- Chỉ mục cho bảng `informationcustomer`
--
ALTER TABLE `informationcustomer`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`MaLSP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `informationcustomer`
--
ALTER TABLE `informationcustomer`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `producttype`
--
ALTER TABLE `producttype`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
