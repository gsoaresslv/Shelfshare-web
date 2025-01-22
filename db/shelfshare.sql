-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 09:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shelfshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `curtir`
--

CREATE TABLE `curtir` (
  `id_curtir` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`id_genero`, `descricao`) VALUES
(1, 'Romance'),
(2, 'Suspense'),
(3, 'Terror'),
(4, 'Biografia'),
(5, 'Ação'),
(6, 'Crônicas'),
(7, 'Científico'),
(8, 'Ficção'),
(9, 'Infantil'),
(10, 'Poesia');

-- --------------------------------------------------------

--
-- Table structure for table `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livro`
--

INSERT INTO `livro` (`id_livro`, `titulo`, `autor`, `descricao`, `cidade`, `id_genero`, `id_usuario`) VALUES
(9, 'Título de Teste', 'Guilherme Soares', 'Tá bem conservado até', 'Vitória', 4, 1),
(10, 'É assim que acaba', 'Não conheço cara', 'Novo, possui alguns amassados e paginas um pouco amarelas', 'Vitória', 1, 1),
(11, 'Outro titulo de teste', 'Guilherme Soares de ', 'Esse livro é de ação', 'Vitória', 5, 1),
(13, 'Mais um titulo de teste', 'Guilherme Soares Ter', 'TIpo 2', 'Vitória', 2, 1),
(14, 'Um titulo de teste bem imenso ', 'Esse livro é grande', 'Tudo ja foi dito, o livro é grande!', 'Vitória', 7, 1),
(15, 'Titulo de teste novamente', '12345678901234567890', 'Dessa vez vou testar o nome do autor, contando letra por letra. Também vou testar para caso um engraçadinho queira colocar um descrição muito longa, para saber o que aconteceria numa situação hipotética de descrição longa e teste com o text truncate', 'Vitória', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seguir`
--

CREATE TABLE `seguir` (
  `id_seguir` int(11) NOT NULL,
  `id_seguidor` int(11) NOT NULL,
  `id_seguido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `email`, `telefone`, `senha`) VALUES
(1, 'gsoaresslv', 'guigamergg94@gmail.com', '27 998513127', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curtir`
--
ALTER TABLE `curtir`
  ADD PRIMARY KEY (`id_curtir`),
  ADD KEY `fk_id_usuario` (`id_usuario`),
  ADD KEY `fk_id_livro` (`id_livro`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`),
  ADD KEY `fk_livro_genero` (`id_genero`),
  ADD KEY `fk_livro_usuario` (`id_usuario`);

--
-- Indexes for table `seguir`
--
ALTER TABLE `seguir`
  ADD PRIMARY KEY (`id_seguir`),
  ADD KEY `fk_id_seguidor` (`id_seguidor`),
  ADD KEY `fk_id_seguido` (`id_seguido`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curtir`
--
ALTER TABLE `curtir`
  MODIFY `id_curtir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seguir`
--
ALTER TABLE `seguir`
  MODIFY `id_seguir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `curtir`
--
ALTER TABLE `curtir`
  ADD CONSTRAINT `fk_id_livro` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id_livro`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE;

--
-- Constraints for table `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `fk_livro_genero` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_livro_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seguir`
--
ALTER TABLE `seguir`
  ADD CONSTRAINT `fk_id_seguido` FOREIGN KEY (`id_seguido`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_id_seguidor` FOREIGN KEY (`id_seguidor`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
