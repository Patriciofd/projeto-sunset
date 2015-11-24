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
-- Estrutura da tabela `PRODUTOS`
--

CREATE TABLE IF NOT EXISTS `PRODUTOS` (
  `CODIGO` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) DEFAULT NULL,
  `MARCA` varchar(50) DEFAULT NULL,
  `UNIDADES` varchar(10) DEFAULT NULL,
  `PRECO` double DEFAULT NULL,
  `TIPO` varchar(50) DEFAULT NULL,
  `QUANTIDADE` double DEFAULT NULL,
  PRIMARY KEY (`CODIGO`),
  KEY `PRECO` (`PRECO`),
  KEY `PRECO_2` (`PRECO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `PRODUTOS`
--

INSERT INTO `PRODUTOS` (`CODIGO`, `NOME`, `MARCA`, `UNIDADES`, `PRECO`, `TIPO`, `QUANTIDADE`) VALUES
(1, 'Pfsgsdfg', 'ddfgdfg', 'dfgdfg', 123, 'werwr', NULL),
(2, 'CREATE TABLE PRODUTOS ( CODIGO INTEGER NOT NULL PRIMARY KEY, NOME VARCHAR(100), MARCA VARCHAR(50), U', 'CREATE TABLE PRODUTOS ( CODIGO INTEGER NOT NULL PR', 'CREATE TAB', 12, '1sgdfg', NULL),
(3, 'wrwerwe', 'rwerwer', 'werwer', 123, 'werwer', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
