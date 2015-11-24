-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Nov-2015 às 22:04
-- Versão do servidor: 5.5.38-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `Sunset`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `USUARIO`
--

CREATE TABLE IF NOT EXISTS `USUARIO` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) NOT NULL,
  `SENHA` varchar(25) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `ENDERECO` varchar(100) DEFAULT NULL,
  `NUMERO` varchar(5) DEFAULT NULL,
  `CIDADE` varchar(50) DEFAULT NULL,
  `CEP` varchar(9) DEFAULT NULL,
  `ESTADO` varchar(2) DEFAULT NULL,
  `TELEFONE` varchar(13) DEFAULT NULL,
  `CELULAR` varchar(14) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
