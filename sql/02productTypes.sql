USE `mvc`;

DROP TABLE IF EXISTS `product_types`;
CREATE TABLE `product_types` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `product_types` (`id`, `name`) VALUES
(1, 'cervezas'),
(2, 'refrescos'),
(3, 'licores'),
(4, 'caf�s'),
(5, 'combinados'),
(6, 'tapas'),
(7, 'bocadillos')
;
