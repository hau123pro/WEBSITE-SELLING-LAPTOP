-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 02:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` char(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `power` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `username`, `password`, `hoten`, `ngaysinh`, `sodienthoai`, `gioitinh`, `email`, `diachi`, `status`, `power`) VALUES
('AD1', 'nguyenthanhsang', 'admin', 'Nguyễn Thanh Sang', '1-1-1111', '911', 'nam', 'nguyenthanhsang@gmail.com', '220 Trần Bình Trọng, Quận 5', 'normal', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `id_cthd` varchar(30) NOT NULL,
  `masanpham` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `soluong` int(30) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`id_cthd`, `masanpham`, `tensp`, `soluong`, `tongtien`) VALUES
('0', 10001, 'Laptop ASUS TUF GAMING A15 FA506IH - AL018', 1, 20490000),
('1', 10001, 'Laptop ASUS TUF GAMING A15 FA506IH - AL018', 2, 40980000),
('1', 10002, 'Laptop ASUS TUF Gaming A15 FA506IU AL127T', 2, 50980000),
('2', 10002, 'Laptop ASUS TUF Gaming A15 FA506IU AL127T', 1, 25490000),
('2', 10054, 'Laptop Dell Inspiron 15 3593-N3593C', 3, 33270000),
('3', 10002, 'Laptop ASUS TUF Gaming A15 FA506IU AL127T', 1, 25490000),
('4', 10008, 'Laptop Gaming Asus ROG Strix G15 G512 IAL001T', 1, 28990000),
('4', 10009, 'Laptop Gaming Asus ROG Strix G17 G712L UEV075T', 1, 34990000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hd` char(20) NOT NULL,
  `id` char(20) NOT NULL,
  `ngaymua` varchar(100) NOT NULL,
  `statuss` varchar(50) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id_hd`, `id`, `ngaymua`, `statuss`, `tongtien`) VALUES
('0', 'NV1', '21-05-11/13:05:43', 'Not Process', 20490000),
('1', 'NV1', '21-05-12/04:39:25', 'Not Process', 91960000),
('2', 'NV1', '21-05-12/17:42:01', 'Not Process', 58760000),
('3', 'KH1', '21-05-14/09:03:18', 'Not Process', 25490000),
('4', 'QL1', '21-05-14/09:04:36', 'Not Process', 63980000);

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `ma_chucvu` varchar(50) NOT NULL,
  `<i class="fas fa-apple-alt"></i>` varchar(50) NOT NULL,
  `<i class="fas fa-user"></i>` varchar(50) NOT NULL,
  `<i class="fas fa-plus-square"></i>` varchar(50) NOT NULL,
  `<i class="fas fa-clipboard"></i>` varchar(50) NOT NULL,
  `<i class="far fa-list-alt"></i>` varchar(50) NOT NULL,
  `<i class="fas fa-user-plus"></i>` varchar(50) NOT NULL,
  `<i class="fas fa-users-cog"></i>` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`ma_chucvu`, `<i class="fas fa-apple-alt"></i>`, `<i class="fas fa-user"></i>`, `<i class="fas fa-plus-square"></i>`, `<i class="fas fa-clipboard"></i>`, `<i class="far fa-list-alt"></i>`, `<i class="fas fa-user-plus"></i>`, `<i class="fas fa-users-cog"></i>`) VALUES
('AD1', '10', '10', '10', '10', '10', '1', '1'),
('NV1', '1', '10', '1', '1', '10', '10', '10'),
('QL1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` char(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `gioitinh` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `username`, `password`, `hoten`, `ngaysinh`, `sodienthoai`, `gioitinh`, `email`, `diachi`, `status`, `power`) VALUES
('KH1', 'nguyenvana', '12345678', 'Nguyễn Văn A', '2001-04-23', '0779636115', 'nam', 'giangbaoluan5@gmail.com', '15ewfewfewfewf', 'normal', 'guest'),
('KH2', 'nguyenvanb', '12345678', 'Nguyễn Văn B', '2001-04-23', '0779636115', 'nam', 'giangbaoluan5@gmail.com', '15ewfewfewfewf', 'normal', 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `link_quyen`
--

CREATE TABLE `link_quyen` (
  `ma_chucvu` varchar(50) NOT NULL,
  `quanlysp.php` varchar(50) NOT NULL,
  `quanlyuser.php` varchar(50) NOT NULL,
  `themsp.php` varchar(50) NOT NULL,
  `quanlydonhang.php` varchar(50) NOT NULL,
  `thongke.php` varchar(50) NOT NULL,
  `themuser.php` varchar(50) NOT NULL,
  `setquyen.php` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link_quyen`
--

INSERT INTO `link_quyen` (`ma_chucvu`, `quanlysp.php`, `quanlyuser.php`, `themsp.php`, `quanlydonhang.php`, `thongke.php`, `themuser.php`, `setquyen.php`) VALUES
('AD1', '10', '10', '10', '10', '10', '1', '1'),
('NV1', '1', '10', '1', '1', '10', '10', '10'),
('QL1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id_nv` char(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `power` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhan_vien`
--

INSERT INTO `nhan_vien` (`id_nv`, `username`, `password`, `hoten`, `ngaysinh`, `sodienthoai`, `gioitinh`, `email`, `diachi`, `status`, `power`) VALUES
('NV1', 'thaigiaduc', 'thaigiaduc', 'Thái Gia Đức', '23-04-2001', '0779636115', 'nam', 'giaduc12a1@gmail.com', '51/3 Bãi Sậy p1 q6', 'normal', 'nhanvien');

-- --------------------------------------------------------

--
-- Table structure for table `quan_ly`
--

CREATE TABLE `quan_ly` (
  `id_ql` char(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quan_ly`
--

INSERT INTO `quan_ly` (`id_ql`, `username`, `password`, `hoten`, `ngaysinh`, `sodienthoai`, `gioitinh`, `email`, `diachi`, `status`, `power`) VALUES
('QL1', 'sontungmtp', 'sontungmtp', 'Sơn Tùng MTP', '1-1-2001', '0779636115', 'nam', 'hello@gmail.com', 'sài gòn', 'normal', 'quanly');

-- --------------------------------------------------------

--
-- Table structure for table `quyenhan`
--

CREATE TABLE `quyenhan` (
  `ma_chucvu` varchar(50) NOT NULL,
  `Quản_lý_sản_phẩm` varchar(50) NOT NULL,
  `Quản_lý_user` varchar(50) NOT NULL,
  `Thêm_sản_phẩm` varchar(50) NOT NULL,
  `Quản_lý_đơn_hàng` varchar(50) NOT NULL,
  `Thống_kê` varchar(50) NOT NULL,
  `Thêm_users` varchar(50) NOT NULL,
  `Set_quyền` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quyenhan`
--

INSERT INTO `quyenhan` (`ma_chucvu`, `Quản_lý_sản_phẩm`, `Quản_lý_user`, `Thêm_sản_phẩm`, `Quản_lý_đơn_hàng`, `Thống_kê`, `Thêm_users`, `Set_quyền`) VALUES
('AD1', '10', '10', '10', '10', '10', '1', '1'),
('NV1', '1', '10', '1', '1', '1', '10', '10'),
('QL1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `Loai` varchar(50) NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `Tensp` varchar(100) NOT NULL,
  `Gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `Hinh_ct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID`, `Loai`, `Hinh`, `Tensp`, `Gia`, `soluong`, `Hinh_ct`) VALUES
(10001, 'asus', 'images/Laptop ASUS TUF GAMING A15 FA506IH - AL018Thinh1.jpg', 'Laptop ASUS TUF GAMING A15 FA506IH - AL018', 20490000, 99, 'images/Laptop ASUS TUF GAMING A15 FA506IH - AL018Tct.jpg'),
(10002, 'asus', 'images/Laptop ASUS TUF Gaming A15 FA506IU AL127Thinh1.jpg', 'Laptop ASUS TUF Gaming A15 FA506IU AL127T', 25490000, 100, 'images/Laptop ASUS TUF Gaming A15 FA506IU AL127Tct.jpg'),
(10003, 'asus', 'images/Laptop ASUS TUF Gaming A15 FA506IV - HN202Thinh1.jpg', 'Laptop ASUS TUF Gaming A15 FA506IV - HN202T', 32990000, 100, 'images/Laptop ASUS TUF Gaming A15 FA506IV - HN202Tct.jpg'),
(10004, 'asus', 'images/Laptop ASUS TUF Gaming FA506II AL012Thinh1.jpg', 'Laptop ASUS TUF Gaming FA506II AL012T', 21990000, 100, 'images/Laptop ASUS TUF Gaming FA506II AL012Tct.jpg'),
(10005, 'asus', 'images/Laptop ASUS TUF Gaming FA506II AL016Thinh1.jpg', 'Laptop ASUS TUF Gaming FA506II AL016T', 23990000, 100, 'images/Laptop ASUS TUF Gaming FA506II AL016Tct.jpg'),
(10006, 'asus', 'images/Laptop gaming ASUS TUF FX505DT HN478Thinh1.jpg', 'Laptop gaming ASUS TUF FX505DT HN478T', 19290000, 100, 'images/Laptop gaming ASUS TUF FX505DT HN478Thinh1.jpg'),
(10007, 'asus', 'images/Laptop gaming ASUS TUF FX505DT HN488Thinh1.jpg', 'Laptop gaming ASUS TUF FX505DT HN488T', 18290000, 100, 'images/Laptop gaming ASUS TUF FX505DT HN488Tct.jpg'),
(10008, 'asus', 'images/Laptop Gaming Asus ROG Strix G15 G512 IAL001Thinh1.jpg', 'Laptop Gaming Asus ROG Strix G15 G512 IAL001T', 28990000, 99, 'images/Laptop Gaming Asus ROG Strix G15 G512 IAL001Tct.jpg'),
(10009, 'asus', 'images/Laptop Gaming Asus ROG Strix G17 G712L UEV075Thinh1.jpg', 'Laptop Gaming Asus ROG Strix G17 G712L UEV075T', 34990000, 99, 'images/Laptop Gaming Asus ROG Strix G17 G712L UEV075Tct.jpg'),
(10010, 'asus', 'images/Laptop gaming ASUS ROG Strix G G531GT HN553Thinh1.jpg', 'Laptop gaming ASUS ROG Strix G G531GT HN553T', 22990000, 100, 'images/Laptop gaming ASUS ROG Strix G G531GT HN553Tct.jpg'),
(10011, 'asus', 'images/Laptop Gaming Asus ROG Strix SCAR 15 G532L VAZ044Thinh1.jpg', 'Laptop Gaming Asus ROG Strix SCAR 15 G532L VAZ044T', 47990000, 100, 'images/Laptop Gaming Asus ROG Strix SCAR 15 G532L VAZ044Tct.jpg'),
(10012, 'asus', 'images/Laptop gaming ASUS ROG Zephyrus Duo 15 GX550LXS HC055Rhinh1.jpg', 'Laptop gaming ASUS ROG Zephyrus Duo 15 GX550LXS HC', 120000000, 100, 'images/Laptop gaming ASUS ROG Zephyrus Duo 15 GX550LXS HC055Rct.jpg'),
(10013, 'asus', 'images/Laptop gaming ASUS ROG Zephyrus G14 GA401IU HA171Thinh1.jpg', 'Laptop gaming ASUS ROG Zephyrus G14 GA401IU HA171T', 39990000, 100, 'images/Laptop gaming ASUS ROG Zephyrus G14 GA401IU HA171Tct.jpg'),
(10014, 'asus', 'images/Laptop Gaming Asus ROG Zephyrus S GX701GXR H6072Thinh1.jpg', 'Laptop Gaming Asus ROG Zephyrus S GX701GXR H6072T', 79990000, 100, 'images/Laptop Gaming Asus ROG Zephyrus S GX701GXR H6072Tct.jpg'),
(10015, 'asus', 'images/Laptop gaming Asus ROG Zephyrus S GX701LXS HG038Thinh1.jpg', 'Laptop gaming Asus ROG Zephyrus S GX701LXS HG038T', 84990000, 100, 'images/Laptop gaming Asus ROG Zephyrus S GX701LXS HG038Tct.jpg'),
(10016, 'asus', 'images/Laptop Asus ZenBook UX434FAC A6064Thinh1.jpg', 'Laptop Asus ZenBook UX434FAC A6064T', 24490000, 100, 'images/Laptop Asus ZenBook UX434FAC A6064Tct.jpg'),
(10017, 'asus', 'images/Laptop ASUS ZenBook Duo UX481FL BM049Thinh1.jpg', 'Laptop ASUS ZenBook Duo UX481FL BM049T', 39990000, 100, 'images/Laptop ASUS ZenBook Duo UX481FL BM049Tct.jpg'),
(10018, 'asus', 'images/Laptop ASUS ProArt Studiobook W700G1T AV046Thinh1.jpg', 'Laptop ASUS ProArt Studiobook W700G1T AV046T', 46990000, 100, 'images/Laptop ASUS ProArt Studiobook W700G1T AV046Tct.jpg'),
(10019, 'asus', 'images/Laptop ASUS ExpertBook B9450FA BM0324Thinh1.jpg', 'Laptop ASUS ExpertBook B9450FA BM0324T', 37990000, 100, 'images/Laptop ASUS ExpertBook B9450FA BM0324Hct.jpg'),
(10020, 'asus', 'images/Laptop ASUS ExpertBook B9450FA BM0616Rhinh1.jpg', 'Laptop ASUS ExpertBook B9450FA BM0616R', 49990000, 100, 'images/Laptop ASUS ExpertBook B9450FA BM0616Rct.jpg'),
(10021, 'asus', 'images/Laptop ASUS Expertbook P1410CJA EK355Thinh1.jpg', 'Laptop ASUS Expertbook P1410CJA EK355T', 15790000, 100, 'images/Laptop ASUS Expertbook P1410CJA EK355Tct.jpg'),
(10022, 'asus', 'images/Laptop ASUS ExpertBook P2451FA EK0229Thinh1.jpg', 'Laptop ASUS ExpertBook P2451FA EK0229T', 17990000, 100, 'images/Laptop ASUS ExpertBook P2451FA EK0229Tct.jpg'),
(10023, 'asus', 'images/Laptop ASUS ExpertBook P2451FA EK0262Rhinh1.jpg', 'Laptop ASUS ExpertBook P2451FA EK0262R', 24990000, 100, 'images/Laptop ASUS ExpertBook P2451FA EK0262Rct.jpg'),
(10024, 'asus', 'images/Laptop ASUS A412FA EK1187Thinh1.jpg', 'Laptop ASUS A412FA EK1187T', 11990000, 100, 'images/Laptop ASUS A412FA EK1187Tct.jpg'),
(10025, 'asus', 'images/Laptop Asus VivoBook S14 S433EA EB100Thinh1.jpg', 'Laptop Asus VivoBook S14 S433EA EB100T', 18990000, 100, 'images/Laptop Asus VivoBook S14 S433EA EB100Tct.jpg'),
(10026, 'asus', 'images/Laptop Asus VivoBook S14 S433EA EB101Thinh1.jpg', 'Laptop Asus VivoBook S14 S433EA EB101T', 18990000, 100, 'images/Laptop Asus VivoBook S14 S433EA EB101Tct.jpg'),
(10027, 'asus', 'images/Laptop Asus Vivobook X409JA EK283Thinh1.jpg', 'Laptop Asus Vivobook X409JA EK283T', 10190000, 100, 'images/Laptop Asus Vivobook X409JA EK283Tct.jpg'),
(10028, 'acer', 'images/Laptop Acer Aspire 3 A315 56 37DV 1.jpg', 'Laptop Acer Aspire 3 A315 56 37DV', 10290000, 100, 'images/Laptop Acer Aspire 3 A315 56 37DV ct.jpg'),
(10029, 'acer', 'images/Laptop Acer Aspire 3 A315 56 59XY.jpg', 'Laptop Acer Aspire 3 A315 56 59XY', 11990000, 100, 'images/Laptop Acer Aspire 3 A315 56 59XY ct.jpg'),
(10030, 'acer', 'images/Laptop Acer Aspire 5 A514 53 38GF.jpg', 'Laptop Acer Aspire 5 A514 53 38GF', 14990000, 100, 'images/Laptop Acer Aspire 5 A514 53 38GF ct.jpg'),
(10031, 'acer', 'images/Laptop Acer Aspire 5 A514 53 50JA.jpg', 'Laptop Acer Aspire 5 A514 53 50JA', 15690000, 100, 'images/Laptop Acer Aspire 5 A514 53 50JA ct.jpg'),
(10032, 'acer', 'images/Laptop Acer Aspire 5 A514 53 50P9.jpg', 'Laptop Acer Aspire 5 A514 53 50P9', 16990000, 100, 'images/Laptop Acer Aspire 5 A514 53 50P9 ct.jpg'),
(10033, 'acer', 'images/Laptop Acer Aspire 5 A514 54 39KU.jpg', 'Laptop Acer Aspire 5 A514 54 39KU', 13490000, 100, 'images/Laptop Acer Aspire 5 A514 54 39KU ct.jpg'),
(10034, 'acer', 'images/Laptop Acer Aspire 5 A515 55 37HD.jpg', 'Laptop Acer Aspire 5 A515 55 37HD', 13190000, 100, 'images/Laptop Acer Aspire 5 A515 55 37HD ct.jpg'),
(10035, 'acer', 'images/Laptop Acer Aspire 5 A515 55 55HG.jpg', 'Laptop Acer Aspire 5 A515 55 55HG', 17190000, 100, 'images/Laptop Acer Aspire 5 A515 55 55HG ct.jpg'),
(10036, 'acer', 'images/Laptop Acer Aspire 5 A515 55G 5633.jpg', 'Laptop Acer Aspire 5 A515 55G 5633', 18690000, 100, 'images/Laptop Acer Aspire 5 A515 55G 5633 ct.jpg'),
(10037, 'acer', 'images/Laptop gaming Acer Aspire 7 A715 41G R150.jpg', 'Laptop gaming Acer Aspire 7 A715 41G R150', 20990000, 100, 'images/Laptop gaming Acer Aspire 7 A715 41G R150 ct.jpg'),
(10038, 'acer', 'images/Laptop gaming Acer Aspire 7 A715 41G R282.jpg', 'Laptop gaming Acer Aspire 7 A715 41G R282', 19990000, 100, 'images/Laptop gaming Acer Aspire 7 A715 41G R282 ct.jpg'),
(10039, 'acer', 'images/Acer Predator Helios 300 PH315-51.jpg', 'Acer Predator Helios 300 PH315-51', 34990000, 100, 'images/Acer Predator Helios 300 PH315-51 ct.jpg'),
(10040, 'acer', 'images/Laptop Gaming ACER Predator Helios PH315 53 770L 1.jpg', 'Laptop Gaming ACER Predator Helios PH315 53 770L', 37390000, 100, 'images/Laptop Gaming ACER Predator Helios PH315 53 770L ct.jpg'),
(10041, 'acer', 'images/Laptop Gaming Acer Nitro 5 2020 AN515-55 70AX 1.jpg', 'Laptop Gaming Acer Nitro 5 2020 AN515-55 70AX', 29990000, 100, 'images/Laptop Gaming Acer Nitro 5 2020 AN515-55 70AX ct.jpg'),
(10042, 'acer', 'images/Laptop gaming Acer Nitro 5 AN515 43 R4VJ 1.jpg', 'Laptop gaming Acer Nitro 5 AN515 43 R4VJ', 20990000, 100, 'images/Laptop gaming Acer Nitro 5 AN515 43 R4VJ ct.jpg'),
(10043, 'acer', 'images/Laptop gaming Acer Nitro 5 AN515 55 55E3 1.jpg', 'Laptop gaming Acer Nitro 5 AN515 55 55E3', 31990000, 100, 'images/Laptop gaming Acer Nitro 5 AN515 55 55E3 ct.jpg'),
(10044, 'acer', 'images/Laptop gaming Acer Nitro 5 AN515 55 77P9.jpg', 'Laptop gaming Acer Nitro 5 AN515 55 77P9', 28990000, 100, 'images/Laptop gaming Acer Nitro 5 AN515 55 77P9 ct.jpg'),
(10045, 'acer', 'images/Acer Nitro 5 AN515 55 5923 1.jpg', 'Laptop gaming Acer Nitro 5 AN515 43 R4VJ', 23990000, 100, 'images/Acer Nitro 5 AN515 55 5923 ct.jpg'),
(10046, 'acer', 'images/Laptop Acer Swift 3 SF314-57G 53T1 1.jpg', 'Laptop Acer Swift 3 SF314-57G 53T1', 20190000, 100, 'images/Laptop Acer Swift 3 SF314-57G 53T1 ct.jpg'),
(10047, 'acer', 'images/Laptop Acer Swift 3 SF314-58 39BZ 1.jpg', 'Laptop Acer Swift 3 SF314-58 39BZ', 14990000, 100, 'images/Laptop Acer Swift 3 SF314-58 39BZ ct.jpg'),
(10048, 'acer', 'images/Laptop Acer Swift 3 SF314-58 55RJ .jpg', 'Laptop Acer Swift 3 SF314-58 55RJ', 14990000, 100, 'images/Laptop Acer Swift 3 SF314-58 55RJ ct.jpg'),
(10049, 'acer', 'images/Laptop ACER Swift 5 SF514 54T 793C 1.jpg', 'Laptop ACER Swift 5 SF514 54T 793C', 29990000, 100, 'images/Laptop ACER Swift 5 SF514 54T 793C ct.jpg'),
(10050, 'acer', 'images/Laptop Gaming Acer Predator Triton 500 PT515-52 72U2 1.jpg', 'Laptop Gaming Acer Predator Triton 500 PT515-52 72', 79990000, 100, 'images/Acer Predator Triton 500 PT515-52 72U2 ct.jpg'),
(10051, 'acer', 'images/Laptop Gaming Acer Predator Triton 500 PT515-52 78PN 1.jpg', 'Laptop Gaming Acer Predator Triton 500 PT515-52 78', 69990000, 100, 'images/Laptop Gaming Acer Predator Triton 500 PT515-52 78PN ct.jpg'),
(10052, 'acer', 'images/Acer Predator Triton 900 1.jpg', 'Acer Predator Triton 900', 62990000, 100, 'images/Acer Predator Triton 900 ct.jpg'),
(10053, 'dell', 'images/13 7391 7391-N3TI5008Wpic1.jpg', 'Laptop Dell Inspiron 13 7391 7391-N3TI5008W', 26490000, 100, 'images/13 7391 7391-N3TI5008Wct.jpg'),
(10054, 'dell', 'images/15 3593-N3593Cpic1.jpg', 'Laptop Dell Inspiron 15 3593-N3593C', 11090000, 97, 'images/15 3593-N3593Cct.jpg'),
(10055, 'dell', 'images/15 5593 5593-70196703pic1.jpg', 'Laptop Dell Inspiron 15 5593 5593-70196703', 12990000, 100, 'images/15 5593 5593-70196703ct.jpg'),
(10056, 'dell', 'images/15 5593 5593-N5I5461Wpic1.jpg', 'Laptop Dell Inspiron 15 5593 5593-N5I5461W', 19490000, 100, 'images/15 5593 5593-N5I5461Wct.jpg'),
(10057, 'dell', 'images/15 5593 N5593A-P90F002N93Apic1.jpg', 'Laptop Dell Inspiron 15 5593 N5593A-P90F002N93A', 24990000, 100, 'images/15 5593 N5593A-P90F002N93Act.jpg'),
(10058, 'dell', 'images/15 7501 X3MRY1pic1.jpg', 'Laptop Dell Inspiron 15 7501 X3MRY1', 30490000, 100, 'images/15 7501 X3MRY1ct.jpg'),
(10059, 'dell', 'images/5570-M5I5413Wpic1.jpg', 'Laptop Dell Inspiron 5570-M5I5413W', 22490000, 100, 'images/5570-M5I5413Wct.jpg'),
(10060, 'dell', 'images/5584-N5I5413Wpic1.jpg', 'Laptop Dell Inspiron 5584-N5I5413W', 21890000, 100, 'images/5584-N5I5413Wct.jpg'),
(10061, 'dell', 'images/7373-TI501OWpic1.jpg', 'Laptop Dell Inspiron 7373-TI501OW', 27190000, 100, 'images/7373-TI501OWct.jpg'),
(10062, 'dell', 'images/7591-N5I5591Wpic1.jpg', 'Laptop Dell Inspiron 7591-N5I5591W', 25490000, 100, 'images/7591-N5I5591Wct.jpg'),
(10063, 'dell', 'images/14 3490-70211829pic1.jpg', 'Laptop Dell Vostro 14 3490-70211829', 10990000, 100, 'images/14 3490-70211829picct.jpg'),
(10064, 'dell', 'images/15 3590-GRMGK1pic1.jpg', 'Laptop Dell Vostro 15 3590-GRMGK1', 14590000, 100, 'images/15 3590-GRMGK1picct.jpg'),
(10065, 'dell', 'images/3578-V3578Bpic1.jpg', 'Laptop Dell Vostro 3578-V3578B', 25490000, 100, 'images/3578-V3578Bpicct.jpg'),
(10066, 'dell', 'images/5471-70146452pic1.jpg', 'Laptop Dell Vostro 5471-70146452', 25690000, 100, 'images/5471-70146452picct.jpg'),
(10067, 'dell', 'images/5481-V4I5229Wpic1.jpg', 'Laptop Dell Vostro 5481-V4I5229W', 18490000, 100, 'images/5481-V4I5229Wpicct.jpg'),
(10068, 'dell', 'images/5481-V5481Apic1.jpg', 'Laptop Dell Vostro 5481-V5481A', 20490000, 100, 'images/5481-V5481Apicct.jpg'),
(10069, 'dell', 'images/5568-077M512pic1.jpg', 'Laptop Dell Vostro 5568-077M512', 14590000, 100, 'images/5568-077M512picct.jpg'),
(10070, 'dell', 'images/5581-70175952pic1.jpg', 'Laptop Dell Vostro 5581-70175952', 18000000, 100, 'images/5581-70175952picct.jpg'),
(10071, 'dell', 'images/13 9300 0N90H1pic1.jpg', 'Laptop Dell XPS13 9300 0N90H1', 59990000, 100, 'images/13 9300 0N90H1picct.jpg'),
(10073, 'apple', 'images/2018 MRE82pic1.jpg', 'Apple Macbook Air 2018 MRE82', 31900000, 100, 'images/2018 MRE82ct.jpg'),
(10074, 'apple', 'images/2018 MREE2pic1.jpg', 'Apple Macbook Air 2018 MREE2', 31900000, 100, 'images/2018 MREE2ct.jpg'),
(10075, 'apple', 'images/2018 MREA2pic1.jpg', 'Apple Mabook Air 2018 MREA2', 31900000, 100, 'images/2018 MRE82ct.jpg'),
(10076, 'apple', 'images/2019 MVFL2SA_Apic1.jpg', 'Apple Macbook Air /2019 MVFL2SA_A', 36990000, 100, 'images/2019 MVFL2SA_Apicct.jpg'),
(10077, 'apple', 'images/2020 MVH42SA_Apic1.jpg', 'Apple Macbook Air 2020 MVH42SA_A', 35900000, 100, 'images/2020 MVH42SA_Apicct.jpg'),
(10078, 'apple', 'images/2020 MVH52SA_Apic1.jpg', 'Apple Macbook Air 2020 MVH52SA_A', 35900000, 100, 'images/2020 MVH52SA_Apicct.jpg'),
(10079, 'apple', 'images/2020 MWTJ2SA_Apic1.jpg', 'Apple Macbook Air 2020 MWTJ2SA_A', 28990000, 100, 'images/2020 MWTJ2SA_Apicct.jpg'),
(10080, 'apple', 'images/2020 MWTK2SA_Apic1.jpg', 'Apple Macbook Air 2020 MWTK2SA_A', 28990000, 100, 'images/2020 MWTK2SA_Apicct.jpg'),
(10081, 'apple', 'images/2020 MWTL2SA_Apic1.jpg', 'Apple Macbook Air 2020 MWTL2SA_A', 31900000, 130, 'images/2020 MWTL2SA_Apicct.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `ID` char(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`ID`, `username`, `password`, `hoten`, `ngaysinh`, `sodienthoai`, `gioitinh`, `email`, `diachi`, `status`, `power`) VALUES
('AD1', 'admin', 'admin', 'ADMIN', '2021-1-1', '113', 'nam', 'admin@gmail.com', '92 Hàm tử', 'normal', 'admin'),
('KH1', 'nguyenvana', '12345678', 'Nguyễn Văn A', '2001-1-1', '0902463571', 'nam', 'nguyenvana@gmail.com', '92 Hàm Tử', 'normal', 'khach hang'),
('KH2', 'nguyenvanb', '12345678', 'Nguyễn Văn B', '2001-1-1', '0902463571', 'nu', 'nguyenvana@gmail.com', '92 Hàm Tử', 'normal', 'khach hang'),
('NV1', 'thaigiaduc', 'thaigiaduc', 'Thái Gia Đức', '2001-04-23', '0779636115', 'nam', 'giaduc12a1@gmail.com', 'Quận 6 tp Hồ Chí Minh', 'normal', 'nhan vien'),
('QL1', 'sontungmtp', 'sontungmtp', 'Sơn Tùng MTP', '20201-1-1', '0779636115', 'nam', 'sontung@gmail.com', 'Sky', 'normal', 'quan ly');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `tentheloai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`tentheloai`) VALUES
('acer'),
('apple'),
('asus'),
('dell');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`id_cthd`,`masanpham`),
  ADD KEY `masanpham` (`masanpham`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`ma_chucvu`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `link_quyen`
--
ALTER TABLE `link_quyen`
  ADD PRIMARY KEY (`ma_chucvu`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id_nv`);

--
-- Indexes for table `quan_ly`
--
ALTER TABLE `quan_ly`
  ADD PRIMARY KEY (`id_ql`);

--
-- Indexes for table `quyenhan`
--
ALTER TABLE `quyenhan`
  ADD PRIMARY KEY (`ma_chucvu`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Loai` (`Loai`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`tentheloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10083;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_ad`) REFERENCES `tai_khoan` (`ID`);

--
-- Constraints for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD CONSTRAINT `ct_hoadon_ibfk_1` FOREIGN KEY (`id_cthd`) REFERENCES `hoa_don` (`id_hd`),
  ADD CONSTRAINT `ct_hoadon_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`ID`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tai_khoan` (`ID`);

--
-- Constraints for table `icon`
--
ALTER TABLE `icon`
  ADD CONSTRAINT `icon_ibfk_1` FOREIGN KEY (`ma_chucvu`) REFERENCES `tai_khoan` (`ID`);

--
-- Constraints for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `khach_hang_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `tai_khoan` (`ID`);

--
-- Constraints for table `link_quyen`
--
ALTER TABLE `link_quyen`
  ADD CONSTRAINT `link_quyen_ibfk_1` FOREIGN KEY (`ma_chucvu`) REFERENCES `tai_khoan` (`ID`);

--
-- Constraints for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `nhan_vien_ibfk_1` FOREIGN KEY (`id_nv`) REFERENCES `tai_khoan` (`ID`);

--
-- Constraints for table `quan_ly`
--
ALTER TABLE `quan_ly`
  ADD CONSTRAINT `quan_ly_ibfk_1` FOREIGN KEY (`id_ql`) REFERENCES `tai_khoan` (`ID`);

--
-- Constraints for table `quyenhan`
--
ALTER TABLE `quyenhan`
  ADD CONSTRAINT `quyenhan_ibfk_1` FOREIGN KEY (`ma_chucvu`) REFERENCES `tai_khoan` (`ID`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`Loai`) REFERENCES `theloai` (`tentheloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
