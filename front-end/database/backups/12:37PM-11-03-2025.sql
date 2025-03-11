-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2025 at 04:08 AM
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
-- Database: `athlon`
--

-- --------------------------------------------------------

--
-- Table structure for table `faleConosco`
--

CREATE TABLE `faleConosco` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mensagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faleConosco`
--

INSERT INTO `faleConosco` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'Marcos ', 'marcos@asd', 'asdasd'),
(7, 'Dr. Ítalo ', 'italoflexa@uepa.doutor.br', 'Baseado no meu doutorado, considero está uma das melhores academias do Pará!'),
(8, 'Fellipe', 'fellipe@feliipe.com', 'idk makes this exercise'),
(9, 'Renato Cariani', 'renatocariane@gym.com', 'Em todos esses anos, nunca vi uma academia com equipamentos com tanta qualidade'),
(10, 'Julio Balestrine', 'juliao@balestrine.com', 'A área verde para o pós-treino é incrível!!'),
(11, 'Pitico', 'pitico@braganca.com', 'mesmo sendo frango, fui recebido muito bem pela equipe!  Os CEO\'s estão de parabéns.'),
(12, 'Vivian Rodrigues', 'vivian@braganca.com', 'Sem dúvida uma das melhores academias!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `email`, `senha`, `tipo`) VALUES
(2, 'marcos', 'marcos@gmail', '123', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faleConosco`
--
ALTER TABLE `faleConosco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faleConosco`
--
ALTER TABLE `faleConosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
