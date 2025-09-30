CREATE DATABASE IF NOT EXISTS `LaptopShop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `LaptopShop`;

CREATE TABLE IF NOT EXISTS `laptops` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `brand` VARCHAR(100) NOT NULL,
  `model` VARCHAR(150) NOT NULL,
  `processor` VARCHAR(100) NOT NULL,
  `ram` INT NOT NULL,
  `storage` VARCHAR(100) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `laptops` (`brand`, `model`, `processor`, `ram`, `storage`, `price`) VALUES
('Dell', 'Inspiron 15', 'Intel i5-1135G7', 8, '512GB SSD', 15000000.00),
('HP', 'Pavilion 14', 'Intel i7-1165G7', 16, '1TB SSD', 22000000.00),
('Asus', 'TUF Gaming F15', 'Intel i5-11400H', 16, '512GB SSD', 25000000.00);
