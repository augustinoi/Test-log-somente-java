-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Set-2017 às 01:03
-- Versão do servidor: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bancophp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `cod_not` int(11) NOT NULL AUTO_INCREMENT,
  `manchete_not` varchar(20) NOT NULL,
  `resumo_not` varchar(30) NOT NULL,
  `texto_not` text NOT NULL,
  PRIMARY KEY (`cod_not`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`cod_not`, `manchete_not`, `resumo_not`, `texto_not`) VALUES
(1, 'Mundo da Bola', 'Hoje tivemos um grande jogo.', 'Barcelona como sempre ganhou do Real Madri com dois golaços de Messi o rei da Espanha o melhor do Mundo '),
(2, 'Rik', 'O cara e Lindo msm', 'ele se acha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(20) NOT NULL,
  `login_user` varchar(10) NOT NULL,
  `senha_user` varchar(10) NOT NULL,
  PRIMARY KEY (`cod_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_user`, `nome_user`, `login_user`, `senha_user`) VALUES
(1, 'Administrador', 'admin', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
