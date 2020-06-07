-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 05:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `lista_tareas`
--

CREATE TABLE `lista_tareas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fechaRealizada` date NOT NULL,
  `fechaLimite` date NOT NULL,
  `finalizada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lista_tareas`
--

INSERT INTO `lista_tareas` (`id`, `descripcion`, `fechaRealizada`, `fechaLimite`, `finalizada`) VALUES
(8, 'ki', '2019-10-19', '2019-10-25', 0),
(9, ' no', '0000-00-00', '0000-00-00', 0),
(10, 'fdfbdnb', '2019-10-17', '2019-10-11', 0),
(11, 'ttttttttttttttttttttttttt', '2019-10-19', '2019-10-25', 0),
(12, 'saltar', '2019-10-18', '2019-10-20', 0),
(13, 'saltar', '2019-10-18', '2019-10-20', 0),
(14, 'saltar', '2019-10-18', '2019-10-20', 0),
(15, 'saltar', '2019-10-18', '2019-10-20', 0),
(16, 'saltar', '2019-10-18', '2019-10-20', 0),
(17, 'mirar', '2019-10-17', '2019-10-25', 0),
(18, 'jjjjjjjjjjjjjjjjjjjjjjj', '2019-10-12', '2019-10-18', 1),
(19, 'jjjjjjjjjjjjjjjjjjjjjjj', '2019-10-12', '2019-10-18', 1),
(20, 'pensar', '2019-10-10', '2019-10-12', 1),
(21, 'leer', '2019-10-04', '2019-10-06', 1),
(22, 'leerlibro', '2019-10-18', '2019-10-19', 1),
(25, 'ir al parque', '2019-10-25', '2019-10-25', 1),
(26, 'mirar2', '2019-10-11', '2019-10-11', 1),
(27, 'ir a la caja', '2019-10-05', '2019-10-05', 1),
(28, 'ir a la caja', '2019-10-05', '2019-10-05', 1),
(29, 'ir a la caja', '2019-10-05', '2019-10-05', 1),
(30, 'ir a la caja', '2019-10-05', '2019-10-05', 1),
(31, 'ir a la caja', '2019-10-05', '2019-10-05', 1),
(32, 'ir a la caja', '2019-10-05', '2019-10-05', 1),
(33, 'ir a la caja', '2019-10-05', '2019-10-05', 1),
(35, 'ir al hospital', '2019-10-11', '2019-10-17', 1),
(36, 'salir a correr', '2019-10-12', '2019-10-14', 1),
(37, 'salir a caminar', '2019-10-10', '2019-10-15', 1),
(39, 'salir al cine', '2019-10-10', '2019-10-19', 1),
(43, 'cantar', '2019-10-11', '2019-10-12', 1),
(44, 'leer', '2019-10-13', '2019-10-14', 1),
(45, 'leer libro', '2019-11-09', '2019-11-11', 1),
(46, '', '0000-00-00', '0000-00-00', 0),
(47, '', '0000-00-00', '0000-00-00', 0),
(48, '', '0000-00-00', '0000-00-00', 0),
(49, 'iiiii', '2019-11-23', '2019-11-30', 0),
(50, 'cantar', '2019-11-13', '2019-11-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `reingrese_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `email`, `usuario`, `password`, `reingrese_password`) VALUES
(1, '', '', 'fefe@gmail.com.ar', 'aldana', '$2y$10$UFJ.665SM7wXLyvNwnCR5.5LM3aTtz0UD28BJKZUulv6nETni1EV.', ''),
(2, '', '', '', 'aldana', '$2y$10$lWxB28sIBxHOzJMzTV0saO/4XK9bsIVqlOaBxxgPv.QGUIUFPI3yW', ''),
(3, '', '', '', 'aldana', '$2y$10$dQQb3Ip4Yj5QrV5NoBfGne49cK5Vz54/LbmsbCpXMPGbigJlT3z7e', ''),
(4, '', '', '', 'pepe', '$2y$10$Xe1fxU6BNEoEX/j9ViXRkeOya6dE0sR5IeBKJ1qWsdZwQ0ssWt.pq', ''),
(5, '', '', '', 'pepa', '$2y$10$9Mjy74VKr8emaBuZe3w2muP7CmJkQ1eKqa1Vmq7JxmvZthA.Hwa/m', ''),
(6, '', '', '', 'pepepe', '$2y$10$vkGhQaF0DrTzJ6VVI1uuhOOim/EQPDZocNoh9CSR92OAY1oaq0Rj2', ''),
(7, '', '', '', 'lololo', '$2y$10$SASzeExjftbwIJh4i2VIHOGfYVepxy4FUFjgDEoUTpeMW2Adyz/.C', ''),
(8, '', '', '', 'nononono', '$2y$10$5vvJ0ShI4JlvvKMlGPdgquzqtkOhALTP2q71/KAly/bV5C8hWLM3K', ''),
(9, '', '', '', 'iupi', '$2y$10$hfnDxdpvizv0pW8H8K8lWOPLLk9epq.sYQFioPUjDLqadwl48MCW6', ''),
(10, 'sabri', 'pereyra', 'lili@gmail.com', 'sabri', '$2y$10$VfAmGeEpiaeEiaIRz2y1O.AuBy8oSTRmohIWc32XD57lrU4yMfGXm', '$2y$10$VfAmGeEpiaeEiaIRz2y1O.AuBy8oSTRmohIWc32XD57lrU4yMfGXm'),
(11, 'favioR', 'dsf', 'pelope@gmail.com', 'favio1985', '$2y$10$ZhMJjtNSsPBiF4vfhs286uz48CWgRWy5jaIqlJ.l7AFdYzDcisD6W', '$2y$10$ZhMJjtNSsPBiF4vfhs286uz48CWgRWy5jaIqlJ.l7AFdYzDcisD6W'),
(12, 'mapa', 'pelo', 'pelo@gmail.com', 'mapa02', '$2y$10$vmXFpEELbmzwrkXDIg826.Wt0s5vJ/VWGrwzf5mT0luzATKk6NpoK', '$2y$10$vmXFpEELbmzwrkXDIg826.Wt0s5vJ/VWGrwzf5mT0luzATKk6NpoK'),
(14, 'lala', 'lele', 'lale@gmail.com', 'lale', '$2y$10$oHgVtizmbkZ96kVRkbeq3uEcBPLweyIadaNI6aYAComtUo09XhCbq', '$2y$10$oHgVtizmbkZ96kVRkbeq3uEcBPLweyIadaNI6aYAComtUo09XhCbq'),
(15, 'pelope', 'pelo', 'pelo@gmail.com', 'pelo', '$2y$10$mWXD71f8iI6kSVK72cU2Ue.v/HHk2af6xaWF4s0Hp3eNbaNS0e3I.', '$2y$10$mWXD71f8iI6kSVK72cU2Ue.v/HHk2af6xaWF4s0Hp3eNbaNS0e3I.'),
(16, 'yoyo', 'yo', 'yoyo@gmail.com', 'yoyo', '$2y$10$W9WJtBZATZxYDnl1uTC0ve9HZyj9Qqc4pLXX5w.2t6upqkN5afQMW', '$2y$10$W9WJtBZATZxYDnl1uTC0ve9HZyj9Qqc4pLXX5w.2t6upqkN5afQMW'),
(17, 'yoyo', 'yo', 'yoyo@gmail.com', 'yoyo', '$2y$10$YpZ4Wqbr8J32WHrC8kibyOnuAi7vcLfZ5h5NnzRwfZZk7LX4Wvn1S', '$2y$10$YpZ4Wqbr8J32WHrC8kibyOnuAi7vcLfZ5h5NnzRwfZZk7LX4Wvn1S'),
(18, 'yoyo', 'yo', 'yoyo@gmail.com', 'yoyo', '$2y$10$YcVHeJ2gBdhwSlkaY5wdTeayvjsP//FW7u6q.oxjlv2qLVlxGVcwa', '$2y$10$YcVHeJ2gBdhwSlkaY5wdTeayvjsP//FW7u6q.oxjlv2qLVlxGVcwa'),
(19, 'yoyoyo', 'yoyo', 'yoyoyo@gmail.com', 'yo', '$2y$10$uUFNUQ4pCL1YPe0sid6N0Os2nO32X3mmwsQLXq2NUypOdKeCZrGqa', '$2y$10$uUFNUQ4pCL1YPe0sid6N0Os2nO32X3mmwsQLXq2NUypOdKeCZrGqa'),
(20, 'pepepe', 'pelo', 'pelo@gmail.com', 'pepepe', '$2y$10$lPjbB.cT7RQzsVvOY216hOKmj7l622MoiIYdOIuisGK2Xy.PcdXea', '$2y$10$lPjbB.cT7RQzsVvOY216hOKmj7l622MoiIYdOIuisGK2Xy.PcdXea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lista_tareas`
--
ALTER TABLE `lista_tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lista_tareas`
--
ALTER TABLE `lista_tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
