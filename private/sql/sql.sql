CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Datum` varchar(255) DEFAULT NULL,
  `Tijd` varchar(50) DEFAULT NULL,
  `Programma` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10001 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `agenda` (`id`, `Datum`, `Tijd`, `Programma`) VALUES
(1, 'Zaterdag 8 Juni', '20:30', 'Hells Kitchen'),
(2, 'Maandag 10 Juni', '21:00', 'Hotel Hell'),
(3, 'Woensdag 12 Juni', '22:00', 'Kitchen Nightmares'),
(4, 'Vrijdag 14 Juni', '20:45', 'MasterChef USA'),
(5, 'Zaterdag 15 Juni', '20:30', 'Hells Kitchen'),
(6, 'Maandag 17 Juni', '21:00', 'Hotel Hell'),
(7, 'Donderdag 20 Juni', '21:30', 'Kitchen Nightmares'),
(8, 'Vrijdag 21 Juni', '19:45', 'MasterChef Junior'),
(9, 'Maandag 24 Juni', '21:00', 'Hotel Hell'),
(10, 'Woensdag 26 Juni', '21:00', 'Hells Kitchen');
