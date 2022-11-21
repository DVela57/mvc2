CREATE DATABASE IF NOT EXISTS `mvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mvc`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` BOOLEAN DEFAULT false,
  `admin` BOOLEAN DEFAULT false,
  UNIQUE INDEX (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `users` (`id`, `name`, `surname`, `email`, `birthdate`, `admin`) VALUES
(1, 'Pepe', 'Navarro', 'admin@penya.com', '2001-4-1', 1),
(2, 'Ana', 'Garcí­a', 'anagarcia@penya.com', '2001-4-1', 1),
(3, 'Juan', 'Sánchez', 'juan@penya.com', '2001-2-17', 0),
(4, 'Antonio', 'López', 'antonio@penya.com', '2001-8-18', 0),
(5, 'Marisa', 'Gonzáliz', 'marisa@penya.com', '2001-1-14', 0),
(6, 'Toni', 'López', 'toni@penya.com', '2001-8-18', 0),
(7, 'Nacho', 'Villa', 'nacho@penya.com', '2001-8-18', 0)
;
