CREATE DATABASE  IF NOT EXISTS `livro_aberto` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `livro_aberto`;
-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: livro_aberto
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `emprestimos`
--

DROP TABLE IF EXISTS `emprestimos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emprestimos` (
  `cod_emprestimo` int NOT NULL AUTO_INCREMENT,
  `cod_leitor` varchar(30) DEFAULT NULL,
  `cod_livro` varchar(30) DEFAULT NULL,
  `data_hoje` date DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  PRIMARY KEY (`cod_emprestimo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emprestimos`
--

LOCK TABLES `emprestimos` WRITE;
/*!40000 ALTER TABLE `emprestimos` DISABLE KEYS */;
INSERT INTO `emprestimos` VALUES (1,'Gabriely','Heartstopper','2022-09-09','2022-09-15'),(2,'Isa','Conectadas','2022-09-16','2022-09-20');
/*!40000 ALTER TABLE `emprestimos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leitores`
--

DROP TABLE IF EXISTS `leitores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leitores` (
  `cod_leitor` int NOT NULL AUTO_INCREMENT,
  `nome_leitor` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`cod_leitor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leitores`
--

LOCK TABLES `leitores` WRITE;
/*!40000 ALTER TABLE `leitores` DISABLE KEYS */;
/*!40000 ALTER TABLE `leitores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `livros`
--

DROP TABLE IF EXISTS `livros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `livros` (
  `cod_livro` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `material` varchar(40) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `editora` varchar(30) DEFAULT NULL,
  `ano` varchar(4) DEFAULT NULL,
  `serie` varchar(15) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `exemplares` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`cod_livro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livros`
--

LOCK TABLES `livros` WRITE;
/*!40000 ALTER TABLE `livros` DISABLE KEYS */;
INSERT INTO `livros` VALUES (1,'Heartstopper','livro',' Literatura juvenil','Alice Oseman','Schwarcz S.A. ','2019','43527','563627','3');
/*!40000 ALTER TABLE `livros` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-15 10:40:15
