-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: estacionamento
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.29-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `caixa`
--

DROP TABLE IF EXISTS `caixa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caixa` (
  `id_trans` int(11) NOT NULL AUTO_INCREMENT,
  `id_func` int(11) DEFAULT NULL,
  `id_operacao` int(11) DEFAULT NULL,
  `tipo_operacao` varchar(15) NOT NULL,
  `valor` float NOT NULL,
  `dt_operacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `saldo` float NOT NULL,
  PRIMARY KEY (`id_trans`),
  KEY `id_func` (`id_func`),
  KEY `id_operacao` (`id_operacao`),
  CONSTRAINT `id_func` FOREIGN KEY (`id_func`) REFERENCES `funcionarios` (`id_func`),
  CONSTRAINT `id_operacao` FOREIGN KEY (`id_operacao`) REFERENCES `entrada_saida` (`id_operacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `entrada_saida`
--

DROP TABLE IF EXISTS `entrada_saida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrada_saida` (
  `id_operacao` int(11) NOT NULL AUTO_INCREMENT,
  `placa` int(7) NOT NULL,
  `motorista` varchar(30) NOT NULL,
  `dt_entrada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_func_entrada` int(11) NOT NULL,
  `dt_saida` timestamp NULL DEFAULT NULL,
  `id_func_saida` int(11) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `pago_ate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_operacao`),
  KEY `func_entrada` (`id_func_entrada`),
  KEY `func_saida` (`id_func_saida`),
  CONSTRAINT `func_entrada` FOREIGN KEY (`id_func_entrada`) REFERENCES `funcionarios` (`id_func`),
  CONSTRAINT `func_saida` FOREIGN KEY (`id_func_saida`) REFERENCES `funcionarios` (`id_func`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `id_func` int(11) NOT NULL AUTO_INCREMENT,
  `nome_func` varchar(70) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `tipo_acesso` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `logado` tinyint(1) NOT NULL,
  `dt_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_ultima_modificacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_func`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `valores`
--

DROP TABLE IF EXISTS `valores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valores` (
  `id_valores` int(11) NOT NULL AUTO_INCREMENT,
  `primeira_hora` float NOT NULL,
  `demais_horas` float NOT NULL,
  `diaria` float NOT NULL,
  `mensal` float NOT NULL,
  `id_func` int(11) NOT NULL,
  `data_ultima_modificacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_valores`),
  KEY `id_func_foreign_valores` (`id_func`),
  CONSTRAINT `id_func_foreign_valores` FOREIGN KEY (`id_func`) REFERENCES `funcionarios` (`id_func`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-12 14:33:12
