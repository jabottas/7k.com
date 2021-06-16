-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jun-2021 às 13:40
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `7k`
--
CREATE DATABASE IF NOT EXISTS `7k` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `7k`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bd_avaliacao`
--

DROP TABLE IF EXISTS `bd_avaliacao`;
CREATE TABLE IF NOT EXISTS `bd_avaliacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomemsc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nota` int NOT NULL,
  `favoritar` enum('★','') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `bd_avaliacao`
--

INSERT INTO `bd_avaliacao` (`id`, `nomemsc`, `album`, `nota`, `favoritar`) VALUES
(80, 'Drift de yasuo', 'MPD3', 7, ''),
(79, 'Cálifornia (Tour)', 'MPD2', 10, '★'),
(78, 'Riders x', 'MPD3', 10, '★'),
(77, 'Rejeites falsos icones', 'MPD3', 8, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bd_registro`
--

DROP TABLE IF EXISTS `bd_registro`;
CREATE TABLE IF NOT EXISTS `bd_registro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `sexo` enum('m','f') COLLATE utf8_unicode_ci NOT NULL,
  `termos` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `bd_registro`
--

INSERT INTO `bd_registro` (`id`, `nome`, `email`, `senha`, `data`, `sexo`, `termos`) VALUES
(6, 'teste', 'teste@gmail.com', 'teste1', '2021-06-16', 'f', 1),
(7, 'kaua', 'mama@gmail.com', '10999kqjw', '2021-06-15', 'm', 1),
(8, '', '', '', '0000-00-00', 'm', 0),
(9, '', '', '', '0000-00-00', 'm', 0),
(10, '', '', '', '0000-00-00', 'm', 0),
(11, '', '', '', '0000-00-00', 'm', 0),
(12, '', '', '', '0000-00-00', 'm', 0),
(13, '', '', '', '0000-00-00', 'm', 0),
(14, '', '', '', '0000-00-00', 'm', 1),
(15, '', '', '', '0000-00-00', 'm', 0),
(16, '', '', '', '0000-00-00', 'm', 0),
(17, '', '', '', '0000-00-00', 'm', 0),
(18, '', '', '', '0000-00-00', 'm', 0),
(19, '', '', '', '0000-00-00', 'm', 0),
(20, '', '', '', '0000-00-00', 'm', 0),
(21, '', '', '', '0000-00-00', 'm', 0),
(22, '', '', '', '0000-00-00', 'm', 0),
(23, '', '', '', '0000-00-00', 'm', 0),
(24, '', '', '', '0000-00-00', 'm', 0),
(25, '', '', '', '0000-00-00', 'm', 0),
(26, 'kaua', 'henermanDS@gmail.com', 'sxaxwxws', '2021-06-03', 'f', 0),
(27, '', '', '', '0000-00-00', 'm', 0),
(28, '', '', '', '0000-00-00', 'm', 0),
(29, '', '', '', '0000-00-00', 'm', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
