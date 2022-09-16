-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: af_suplementos
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
-- Table structure for table `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `nome_admin` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_admin` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senha_admin` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto_admin` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_admin`
--

LOCK TABLES `tb_admin` WRITE;
/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_carrinho`
--

DROP TABLE IF EXISTS `tb_carrinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_carrinho` (
  `id_pedido` int NOT NULL AUTO_INCREMENT,
  `cliente_pedido` int NOT NULL,
  `produto_pedido` int NOT NULL,
  `quantidade_produto` int NOT NULL,
  `preco_produto` decimal(7,2) NOT NULL,
  `preco_pedido` decimal(7,2) NOT NULL,
  `foto_produto` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `estado_pedido` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_carrinho`
--

LOCK TABLES `tb_carrinho` WRITE;
/*!40000 ALTER TABLE `tb_carrinho` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_carrinho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_cliente` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senha_cliente` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto_cliente` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cidade_cliente` varchar(60) COLLATE utf8mb3_unicode_ci NOT NULL,
  `endereco_cliente` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `telefone_cliente` varchar(16) COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (1,'Lulian Costa','luliancs@gmail.com','123','foto-lulian.jpg','','',''),(2,'Renata Cristina','rntcris@gmail.com','000','foto-renata-cristina.jpg','','',''),(3,'Thainá Moreira','thainá_moreira@outlook.com','0123456789','foto-thiana-moreira.jpg','','',''),(4,'Larissa Chaves','larissachaves@outlook.com','MTIzNDU2Nzg5','63128765ef709.jpeg','pacajus','nº500, rua das flores','85996578821'),(5,'Renata Vasconcelos','renatavs32@gmail.com','cmVuYXRh','631288978d483.png','horizonte','nº200, rua dos esmeros','85991528675'),(6,'Bruno Carvalho','brcarvalho@outlook.com','dGVzdGU=','6312891e650e1.jpeg','chorozinho','nº520, rua das esmeraldas','85992582649'),(7,'Tatiele dos Santos Pereira','tatipereiras@gmail.com','dGVzdGU=','631289afeb810.png','chorozinho','nº320, rua da luz','85994521644'),(8,'Karine dos Santos','ksantosbr@gmail.com','MTIz','63128a1b74c04.jpeg','horizonte','n°222, rua da luz','85992653785'),(9,'Karine dos Santos','ksantosbr@gmail.com','','63128b4537453.jpeg','horizonte','n°222, rua da luz','85992653785');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_produto`
--

DROP TABLE IF EXISTS `tb_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_produto` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `tipo_produto` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_produto` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_produto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamanho_produto` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao_produto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco_compra_produto` decimal(7,2) NOT NULL,
  `preco_venda_produto` decimal(7,2) NOT NULL,
  `quantidade_produto` int NOT NULL,
  `foto_produto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `promocao_produto` int DEFAULT NULL,
  `disponibilidade_produto` int DEFAULT '1',
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_produto`
--

LOCK TABLES `tb_produto` WRITE;
/*!40000 ALTER TABLE `tb_produto` DISABLE KEYS */;
INSERT INTO `tb_produto` VALUES (3,'grao','marca A','Produto A','600g','Descrição do produto A.',1.00,2.00,60,'6323d53f1fc4b.png',NULL,1),(4,'po','Max Titanium','Creatina ','450g','Uma dose de creatina Max para aumentar sua energia nos treinos diários.',65.00,90.00,30,'6323cea237e32.jpeg',NULL,1),(26,'pilula','Scientifica','Ômega 1000','180g','Contém 60 pílulas na embalagem.',40.00,79.00,15,'6323cf6956a7b.jpeg',NULL,1),(30,'po','Raio','Whey Protein','2kg','Whey protein Raio...',85.00,115.00,35,'6323d0876928c.jpg',NULL,1),(31,'pilula','Nutry','Barra de cereal','22g','Uma barrinha deliciosa para um lanche rápido em dias corridos.',3.00,6.00,60,'6323d15948e24.jpg',NULL,1);
/*!40000 ALTER TABLE `tb_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_promocao`
--

DROP TABLE IF EXISTS `tb_promocao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_promocao` (
  `id_promocao` int NOT NULL AUTO_INCREMENT,
  `nome_promocao` int NOT NULL,
  `descricao_promocao` int NOT NULL,
  `valor_promocao` decimal(7,2) NOT NULL,
  PRIMARY KEY (`id_promocao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_promocao`
--

LOCK TABLES `tb_promocao` WRITE;
/*!40000 ALTER TABLE `tb_promocao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_promocao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'af_suplementos'
--

--
-- Dumping routines for database 'af_suplementos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-16 15:29:24
