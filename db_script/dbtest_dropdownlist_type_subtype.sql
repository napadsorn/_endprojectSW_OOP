-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.9-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_test.tbl_product
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `prod_id` varchar(10) NOT NULL,
  `prod_name` varchar(50) DEFAULT NULL,
  `type_id` varchar(10) DEFAULT NULL,
  `sub_type_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_test.tbl_product: ~17 rows (approximately)
DELETE FROM `tbl_product`;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` (`prod_id`, `prod_name`, `type_id`, `sub_type_id`) VALUES
	('P001', 'AIIZ สีดำ', 'T001', 'S002'),
	('P002', 'G2000 สีขาว', 'T001', 'S001'),
	('P003', 'H&M แขนยาวสีฟ้า', 'T001', 'S003'),
	('P004', 'FF ลายทางแขนยาว', 'T001', 'S003'),
	('P005', 'Jaguar แขนสั้น', 'T001', 'S001'),
	('P006', 'AIIZ ยีน', 'T002', 'S004'),
	('P007', 'GAP ยีน', 'T002', 'S004'),
	('P008', 'AIIZ ยีน', 'T002', 'S005'),
	('P009', 'Promod', 'T002', 'S005'),
	('P010', 'GAP ยีน', 'T002', 'S005'),
	('P011', 'GUESS สีดำ', 'T003', 'S006'),
	('P012', 'GUSS สีขาว', 'T003', 'S006'),
	('P013', 'BAJA น้ำตาล', 'T003', 'S007'),
	('P014', 'BAJA ดำ', 'T003', 'S007'),
	('P015', 'GUESS สีฟ้า', 'T003', 'S008'),
	('P017', 'Nike สีดำ', 'T003', 'S008'),
	('PO16', 'Lacoste สีเหลือง', 'T003', 'S008');
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;


-- Dumping structure for table db_test.tbl_sub_type
CREATE TABLE IF NOT EXISTS `tbl_sub_type` (
  `sub_type_id` varchar(10) NOT NULL,
  `sub_type_name` varchar(50) DEFAULT NULL,
  `type_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`sub_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_test.tbl_sub_type: ~8 rows (approximately)
DELETE FROM `tbl_sub_type`;
/*!40000 ALTER TABLE `tbl_sub_type` DISABLE KEYS */;
INSERT INTO `tbl_sub_type` (`sub_type_id`, `sub_type_name`, `type_id`) VALUES
	('S001', 'เสื้อคอปก', 'T001'),
	('S002', 'เสื้อคอกลม', 'T001'),
	('S003', 'เสื้อเชิ๊ต', 'T001'),
	('S004', 'กางเกงขาสั้น', 'T002'),
	('S005', 'กางเกงขายาว', 'T002'),
	('S006', 'รองเท้าแตะ', 'T003'),
	('S007', 'รองเท้าหนัง', 'T003'),
	('S008', 'รองเท้าผ้าใบ', 'T003');
/*!40000 ALTER TABLE `tbl_sub_type` ENABLE KEYS */;


-- Dumping structure for table db_test.tbl_type
CREATE TABLE IF NOT EXISTS `tbl_type` (
  `type_id` varchar(10) NOT NULL,
  `type_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_test.tbl_type: ~3 rows (approximately)
DELETE FROM `tbl_type`;
/*!40000 ALTER TABLE `tbl_type` DISABLE KEYS */;
INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
	('T001', 'เสื้อ'),
	('T002', 'กางเกง'),
	('T003', 'รองเท้า');
/*!40000 ALTER TABLE `tbl_type` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
