-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Abr-2021 às 03:25
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

-- ---------------------------------------------------------

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
(30, 'Infinity Son ', 'Balancing epic and intensely personal stakes, bestselling author Adam Silvera’s Infinity Son is a gritty, fast-paced adventure about two brothers caught up in a magical war generations in the making.  Growing up in New York, brothers Emil and Brighton always idolized the Spell Walkers—a vigilante group sworn to rid the world of specters. While the Spell Walkers and other celestials are born with powers, specters take them, violently stealing the essence of endangered magical creatures.', 30, 'uploads/book10.jpg'),
(31, 'Invisible Planets ', 'Invisible Planets is a groundbreaking anthology of Chinese short speculative fiction. The thirteen stories in this collection, including two by Cixin Liu and the Hugo and Sturgeon award-nominated “Folding Beijing” by Hao Jingfang, add up to a strong and diverse representation of Chinese SF.', 12, 'uploads/book9.jpg'),
(32, 'I, Robot” - 1951', 'The three laws of Robotics: 1) A robot may not injure a human being or, through inaction, allow a human being to come to harm 2) A robot must obey orders givein to it by human beings except where such orders would conflict with the First Law. 3) A robot must protect its own existence as long as such protection does not conflict with the First or Second Law.', 0, 'uploads/book5.jpg'),
(33, '100 Books You Must Read Before You Die', 'This 1st volume of contains the following 50 works, arranged alphabetically by authors’ last names:  Alcott, Louisa May: Little Women Austen, Jane: Pride and Prejudice Austen, Jane: Emma Balzac, Honoré de: Father Goriot Barbusse, Henri: The Inferno Brontë, Anne: The Tenant of Wildfell Hall Brontë, Charlotte: Jane Eyre Brontë, Emily: Wuthering Heights Burroughs, Edgar Rice: Tarzan of the Apes Butler, Samuel: The Way of All Flesh Carroll, Lewis: Alice’s Adventures in Wonderland Cather, Willa: My Ántonia', 29, 'uploads/book1111.jpg'),
(34, 'Dying Earth', 'Dying Earth is a fantasy series by the American author Jack Vance, comprising four books originally published from 1950 to 1984. Some have been called picaresque. They vary from short story collections to a fix-up (novel created from older short stories), perhaps all the way to novel.', 56, 'uploads/book2.jpg'),
(35, 'Ready Player One', 'The book is actually a collection of 9 short stories written by the Russian author Isaac Asimov.', 22, 'uploads/book4.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
