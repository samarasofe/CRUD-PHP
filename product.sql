-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Abr-2021 às 02:20
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `flexy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(4000) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `stock`, `image`) VALUES
(13, 'I, Robot” - 1950', 'The book is actually a collection of 9 short stories written by the Russian author Isaac Asimov.', 99, 'uploads/book1.jpg'),
(14, 'I, Robot” - 1950', 'The book is actually a collection of 9 short stories written by the Russian author Isaac Asimov.', 18, 'uploads/book2.jpg'),
(15, 'I, Robot” - 1950', 'The book is actually a collection of 9 short stories written by the Russian author Isaac Asimov.', 99, 'uploads/book3.jpg'),
(16, 'I, Robot” - 1950', 'The book is actually a collection of 9 short stories written by the Russian author Isaac Asimov.', 50, 'uploads/book4.jpg'),
(17, 'I, Robot” - 1950', 'The book is actually a collection of 9 short stories written by the Russian author Isaac Asimov.', 30, 'uploads/book5.jpg'),
(18, 'I, Robot” - 1950', 'The book is actually a collection of 9 short stories written by the Russian author Isaac Asimov.', 9, 'uploads/book7.jpg'),
(22, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'dfhdfgh', 0, 'uploads/download20210400154423.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
