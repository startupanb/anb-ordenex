CREATE DATABASE  IF NOT EXISTS `msodn01_sm` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `msodn01_sm`;
-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: msodn01_sm
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.13.04.1

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
-- Table structure for table `msodn01_segmentos`
--

DROP TABLE IF EXISTS `msodn01_segmentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msodn01_segmentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `altered` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msodn01_segmentos`
--

LOCK TABLES `msodn01_segmentos` WRITE;
/*!40000 ALTER TABLE `msodn01_segmentos` DISABLE KEYS */;
INSERT INTO `msodn01_segmentos` VALUES (1,'Prestador de Serviços','0000-00-00 00:00:00',NULL),(2,'Venda de Produtos','0000-00-00 00:00:00',NULL),(3,'Prestador de Serviços e Venda de Produtos','0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `msodn01_segmentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msodn01_categorias_vendas`
--

DROP TABLE IF EXISTS `msodn01_categorias_vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msodn01_categorias_vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `altered` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msodn01_categorias_vendas`
--

LOCK TABLES `msodn01_categorias_vendas` WRITE;
/*!40000 ALTER TABLE `msodn01_categorias_vendas` DISABLE KEYS */;
INSERT INTO `msodn01_categorias_vendas` VALUES (1,'Arquitetura e Engenharia','2013-07-02 21:51:28',NULL),(2,'Arte e Antiguidades','2013-07-02 21:51:28',NULL),(3,'Artigos Religiosos','2013-07-02 21:51:28',NULL),(4,'Automóveis e Acessórios','2013-07-02 21:51:28',NULL),(5,'Bebês','2013-07-02 21:51:28',NULL),(6,'Brinquedos e Colecionáveis','2013-07-02 21:51:28',NULL),(7,'Cama, Mesa e Banho','2013-07-02 21:51:28',NULL),(8,'Celulares e Telefonia','2013-07-02 21:51:29',NULL),(9,'Clube de Compras','2013-07-02 21:51:29',NULL),(10,'Comida, Bebida e Nutricional','2013-07-02 21:51:29',NULL),(11,'Comércio Variado','2013-07-02 21:51:29',NULL),(12,'Construção e Jardinagem','2013-07-02 21:51:29',NULL),(13,'Consultoria Empresarial','2013-07-02 21:51:29',NULL),(15,'Câmeras','2013-07-02 21:51:29',NULL),(16,'Descarga de áudio/vídeo','2013-07-02 21:51:29',NULL),(17,'Desenvolvimento de Software','2013-07-02 21:51:29',NULL),(18,'Educação','2013-07-02 21:51:29',NULL),(19,'Eletrodomésticos','2013-07-02 21:51:29',NULL),(20,'Eletrônicos','2013-07-02 21:51:29',NULL),(21,'Entidades Públicas','2013-07-02 21:51:29',NULL),(22,'Esporte','2013-07-02 21:51:29',NULL),(23,'Eventos','2013-07-02 21:51:29',NULL),(24,'Filmes, Seriados e Shows','2013-07-02 21:51:29',NULL),(25,'Flores e Cestas','2013-07-02 21:51:29',NULL),(26,'Fotografia e Gravação','2013-07-02 21:51:29',NULL),(27,'Hardware e Acessórios','2013-07-02 21:51:29',NULL),(28,'Hospedagem de Sites','2013-07-02 21:51:29',NULL),(29,'Imóveis','2013-07-02 21:51:29',NULL),(30,'Indústria e Agronegócios','2013-07-02 21:51:29',NULL),(31,'Instrumentos Musicais','2013-07-02 21:51:29',NULL),(32,'Jogos Online','2013-07-02 21:51:29',NULL),(33,'Jogos, Lazer e Divertimento','2013-07-02 21:51:29',NULL),(34,'Jóias e Relógios','2013-07-02 21:51:29',NULL),(35,'Leilão de um centavo','2013-07-02 21:51:29',NULL),(36,'Livros','2013-07-02 21:51:29',NULL),(37,'Móveis e Decoração','2013-07-02 21:51:29',NULL),(38,'Outras atividades profissionais','2013-07-02 21:51:30',NULL),(39,'Papelaria','2013-07-02 21:51:30',NULL),(40,'Perfumaria e Cosméticos','2013-07-02 21:51:30',NULL),(41,'Pet Shop','2013-07-02 21:51:30',NULL),(42,'Publicidade e Pesquisas de Mercado','2013-07-02 21:51:30',NULL),(43,'Roupas e Acessórios','2013-07-02 21:51:30',NULL),(44,'Saúde','2013-07-02 21:51:30',NULL),(45,'Seguros e outros serviços financeiros','2013-07-02 21:51:30',NULL),(46,'Serviços','2013-07-02 21:51:30',NULL),(47,'Serviços Jurídicos','2013-07-02 21:51:30',NULL),(48,'Telecomunicações','2013-07-02 21:51:30',NULL),(49,'Terceiro Setor','2013-07-02 21:51:30',NULL),(50,'Utensílios domésticos','2013-07-02 21:51:30',NULL),(51,'Viagem e Turismo','2013-07-02 21:51:30',NULL),(52,'Conteúdo Adulto','2013-07-02 21:51:30',NULL),(53,'Empreendedor Forever Living','2013-07-02 21:51:30',NULL),(54,'Multicanalidade','2013-07-02 21:51:30',NULL),(55,'Fator5','2013-07-02 21:51:30',NULL),(56,'Mary Kay','2013-07-02 21:51:30',NULL),(57,'Quanta Educação','2013-07-02 21:51:30',NULL),(58,'Fast Commerce','2013-07-02 21:51:30',NULL),(59,'Innovar 8','2013-07-02 21:51:30',NULL),(60,'Maxi Store','2013-07-02 21:51:30',NULL),(61,'Bis2Bis','2013-07-02 22:04:40',NULL),(62,'Concept Commerce','2013-07-02 22:04:41',NULL),(63,'COOMETAS','2013-07-02 22:04:41',NULL),(64,'COMTAS','2013-07-02 22:04:41',NULL),(65,'ISET','2013-07-02 22:04:41',NULL),(66,'Doutor Resolve','2013-07-02 22:04:41',NULL),(68,'Boticário','2013-07-02 22:04:41',NULL),(69,'Avon','2013-07-02 22:04:41',NULL),(70,'SMZTO – Multicanalidade','2013-07-02 22:04:41',NULL),(71,'COOP TAXI - COOPATAXI','2013-07-02 22:04:41',NULL),(72,'COOP TAXI - BARRATOWN','2013-07-02 22:04:41',NULL),(74,'COOP TAXI - COOPERTRAMO','2013-07-02 22:04:41',NULL),(75,'Mary Kay','2013-07-02 22:04:41',NULL),(76,'BBom','2013-07-02 22:04:41',NULL),(77,'Valmari','2013-07-02 22:04:41',NULL);
/*!40000 ALTER TABLE `msodn01_categorias_vendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msodn01_pessoa_juridica`
--

DROP TABLE IF EXISTS `msodn01_pessoa_juridica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msodn01_pessoa_juridica` (
  `cnpj` varchar(30) NOT NULL,
  `nome_fantasia` varchar(100) NOT NULL,
  `razao_social` varchar(100) NOT NULL,
  `responsavel` varchar(50) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  PRIMARY KEY (`cnpj`),
  KEY `fk_msodn01_pessoa_juridica_msodn01_usuarios` (`usuarios_id`),
  CONSTRAINT `fk_msodn01_pessoa_juridica_msodn01_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `msodn01_usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msodn01_pessoa_juridica`
--

LOCK TABLES `msodn01_pessoa_juridica` WRITE;
/*!40000 ALTER TABLE `msodn01_pessoa_juridica` DISABLE KEYS */;
INSERT INTO `msodn01_pessoa_juridica` VALUES ('00020003004','Maxsam Tecnologia','Maxsam Tecnologia LTDA','Joyvis',4),('123123123213','Teste','Teste LTDA','Teste1',5),('123123123213123','Teste','Teste LTDA','Teste1',7),('asdsad','asdsad','asdsa','asdsad',2),('asdsad12','asdsad','asdsa','asdsad',3);
/*!40000 ALTER TABLE `msodn01_pessoa_juridica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msodn01_vendedores`
--

DROP TABLE IF EXISTS `msodn01_vendedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msodn01_vendedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loja_fisica` int(11) NOT NULL DEFAULT '0',
  `retirada_local` int(11) NOT NULL DEFAULT '0',
  `segmentos_id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_msodn01_vendedores_msodn01_segmentos1` (`segmentos_id`),
  KEY `fk_msodn01_vendedores_msodn01_usuarios1` (`usuarios_id`),
  CONSTRAINT `fk_msodn01_vendedores_msodn01_segmentos1` FOREIGN KEY (`segmentos_id`) REFERENCES `msodn01_segmentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_msodn01_vendedores_msodn01_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `msodn01_usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msodn01_vendedores`
--

LOCK TABLES `msodn01_vendedores` WRITE;
/*!40000 ALTER TABLE `msodn01_vendedores` DISABLE KEYS */;
INSERT INTO `msodn01_vendedores` VALUES (1,1,0,3,8),(2,1,0,3,9),(3,1,0,3,10),(4,1,0,3,11),(5,1,0,3,12),(6,1,0,3,13),(7,1,0,3,14),(8,1,0,3,15),(9,1,0,3,16),(10,1,0,3,17),(11,1,0,3,18),(12,1,0,3,19),(13,1,0,3,20),(14,1,0,3,21),(15,1,0,3,22),(16,1,0,3,23),(17,1,0,3,24),(18,0,1,1,29);
/*!40000 ALTER TABLE `msodn01_vendedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msodn01_vendedores_referencias`
--

DROP TABLE IF EXISTS `msodn01_vendedores_referencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msodn01_vendedores_referencias` (
  `vendedores_id` int(11) NOT NULL,
  `referencias_id` int(11) NOT NULL,
  KEY `fk_msodn01_vendedores_has_msodn01_referencias_msodn01_referen1` (`referencias_id`),
  KEY `fk_msodn01_vendedores_has_msodn01_referencias_msodn01_vendedo1` (`vendedores_id`),
  CONSTRAINT `fk_msodn01_vendedores_has_msodn01_referencias_msodn01_referen1` FOREIGN KEY (`referencias_id`) REFERENCES `msodn01_referencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_msodn01_vendedores_has_msodn01_referencias_msodn01_vendedo1` FOREIGN KEY (`vendedores_id`) REFERENCES `msodn01_vendedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msodn01_vendedores_referencias`
--

LOCK TABLES `msodn01_vendedores_referencias` WRITE;
/*!40000 ALTER TABLE `msodn01_vendedores_referencias` DISABLE KEYS */;
INSERT INTO `msodn01_vendedores_referencias` VALUES (1,1),(1,1),(17,34),(17,35),(18,36),(18,37);
/*!40000 ALTER TABLE `msodn01_vendedores_referencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msodn01_usuarios`
--

DROP TABLE IF EXISTS `msodn01_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msodn01_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(70) NOT NULL,
  `password` varchar(128) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(3) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone_residencial` varchar(20) NOT NULL,
  `telefone_comercial` varchar(20) DEFAULT NULL,
  `telefone_celular` varchar(20) NOT NULL,
  `site` varchar(100) DEFAULT NULL,
  `ativo` int(11) DEFAULT '0',
  `plano_vendedor` varchar(45) DEFAULT '0',
  `vendedor` int(11) DEFAULT '0',
  `comprador` int(11) DEFAULT '0',
  `admin` int(11) DEFAULT '0',
  `pessoa_fisica_juridica` varchar(45) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `altered` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msodn01_usuarios`
--

LOCK TABLES `msodn01_usuarios` WRITE;
/*!40000 ALTER TABLE `msodn01_usuarios` DISABLE KEYS */;
INSERT INTO `msodn01_usuarios` VALUES (1,'admin158@admin.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','zxczx','asdasds','','asdasd','asdasda','asd','asdas','asdasdsa','','1111111','',0,'0',0,0,0,'0','2013-06-30 11:08:43',NULL),(2,'admin15@admin.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','zxczx','asdasds','','asdasd','asdasda','asd','asdas','asdasdsa','','1111111','',0,'0',0,0,0,'1','2013-06-30 11:11:59',NULL),(3,'admin@admin.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','zxczx','asdasds','','asdasd','asdasda','asd','asdas','asdasdsa','','1111111','',0,'0',0,0,0,'1','2013-06-30 11:19:42',NULL),(4,'joyvis@joyvis.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Teste','41','fundos','parque bitarú','São Vicente','SP','11330220','1391229312','1391229312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'1','2013-06-30 15:22:13',NULL),(5,'jjs@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','sÃ£o vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'1','2013-07-01 17:49:27',NULL),(7,'jjs1@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','sÃ£o vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'1','2013-07-01 17:50:58',NULL),(8,'jjs5@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','São Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 15:50:18',NULL),(9,'jjs6@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','São Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 15:55:22',NULL),(10,'jjs7@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','São Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 15:56:49',NULL),(11,'jjs8@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃ£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 15:57:12',NULL),(12,'jjs9@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÂ£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 16:25:24',NULL),(13,'jjs10@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÂ£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 16:26:20',NULL),(14,'jjs11@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÂ£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 16:27:33',NULL),(15,'jjs12@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÂ£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 16:59:03',NULL),(16,'jjs13@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÂ£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 17:03:48',NULL),(17,'jjs14@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÆ’Ã‚Â£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 17:05:07',NULL),(18,'jjs15@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÆ’Ã‚Â£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 17:59:50',NULL),(19,'jjs16@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÆ’Ã‚Â£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 18:00:44',NULL),(20,'jjs17@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÆ’Ã‚Â£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 18:03:11',NULL),(21,'jjs18@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÆ’Ã‚Â£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 18:04:12',NULL),(22,'jjs19@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÆ’Ã‚Â£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 18:22:03',NULL),(23,'jjs20@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÆ’Ã‚Â£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 19:24:48',NULL),(24,'jjs21@kkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','SÃƒÆ’Ã‚Â£o Vicente','sp','11330220','13 3371-1259','13 9122-9312','1391229312','www.maxsam.com.br',0,'0',0,0,0,'0','2013-07-02 19:30:29',NULL),(25,'jjs111@jkkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','são vicente','sp','11330220','1391229312','1391229312','1391229312','www.maxsam.com.br',0,'0',0,1,0,'0','2013-07-03 12:28:18',NULL),(26,'jjs112255@jkkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','são vicente','sp','11330220','1391229312','1391229312','1391229312','www.maxsam.com.br',0,'0',0,1,0,'0','2013-07-03 12:29:31',NULL),(27,'jjs112256@jkkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','são vicente','sp','11330220','1391229312','1391229312','1391229312','www.maxsam.com.br',0,'0',0,1,0,'0','2013-07-03 12:33:10',NULL),(28,'jjs112257@jkkk.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','Rua Manoel do nasicmento junior, 41','41','fundos','parque bitaru','são vicente','sp','11330220','1391229312','1391229312','1391229312','www.maxsam.com.br',0,'0',0,1,0,'0','2013-07-03 12:33:24',NULL),(29,'test@teste.com','b2ccdf86c0bcd8453abcfdbb0c8bc0848ab2fc81','rua manoel do nascimento junior','41','fundos','parque bitaru','sÃ£o vicente','sp','11330220','1391229312','1391229312','1391229312','www.maxsam.com.br',0,'0',1,0,0,'0','2013-07-03 12:38:08',NULL);
/*!40000 ALTER TABLE `msodn01_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msodn01_pessoa_fisica`
--

DROP TABLE IF EXISTS `msodn01_pessoa_fisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msodn01_pessoa_fisica` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `sexo_m_f` int(11) NOT NULL DEFAULT '0' COMMENT '0 - Masculino \n1 - Feminino',
  `usuarios_id` int(11) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `fk_msodn01_pessoa_fisica_msodn01_usuarios1` (`usuarios_id`),
  CONSTRAINT `fk_msodn01_pessoa_fisica_msodn01_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `msodn01_usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msodn01_pessoa_fisica`
--

LOCK TABLES `msodn01_pessoa_fisica` WRITE;
/*!40000 ALTER TABLE `msodn01_pessoa_fisica` DISABLE KEYS */;
INSERT INTO `msodn01_pessoa_fisica` VALUES ('33333','Joyvis','1992-05-20',0,1),('333333333333','555555555555','2013-07-03',0,29),('33333444','Joyvis ','2013-07-03',0,8),('333334445','Joyvis ','2013-07-03',0,9),('3333344456','Joyvis ','2013-07-03',0,10),('33333444566','Joyvis ','2013-07-03',0,11),('3333344456610','Joyvis ','2013-07-03',0,15),('3333344456611','Joyvis ','2013-07-03',0,16),('3333344456612','Joyvis ','2013-07-03',0,17),('3333344456613','Joyvis ','2013-07-03',0,18),('3333344456614','Joyvis ','2013-07-03',0,19),('3333344456617','Joyvis ','2013-07-03',0,20),('3333344456618','Joyvis ','2013-07-03',0,21),('3333344456619','Joyvis ','2013-07-03',0,22),('3333344456620','Joyvis ','2013-07-03',0,23),('3333344456621','Joyvis ','2013-07-03',0,24),('333334445667','Joyvis ','2013-07-03',0,12),('333334445668','Joyvis ','2013-07-03',0,13),('333334445669','Joyvis ','2013-07-03',0,14),('333444555','Joyvis Santana','2013-07-03',0,25),('333444556','Joyvis Santana','2013-07-03',0,26),('3334445567','Joyvis Santana','2013-07-03',0,27),('3334445568','Joyvis Santana','2013-07-03',0,28);
/*!40000 ALTER TABLE `msodn01_pessoa_fisica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msodn01_vendedores_categoria_vendas`
--

DROP TABLE IF EXISTS `msodn01_vendedores_categoria_vendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msodn01_vendedores_categoria_vendas` (
  `vendedores_id` int(11) NOT NULL,
  `categoria_vendas_id` int(11) NOT NULL,
  KEY `fk_msodn01_vendedores_has_msodn01_categoria_vendas_msodn01_ca1` (`categoria_vendas_id`),
  KEY `fk_msodn01_vendedores_has_msodn01_categoria_vendas_msodn01_ve1` (`vendedores_id`),
  CONSTRAINT `fk_msodn01_vendedores_has_msodn01_categoria_vendas_msodn01_ca1` FOREIGN KEY (`categoria_vendas_id`) REFERENCES `msodn01_categorias_vendas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_msodn01_vendedores_has_msodn01_categoria_vendas_msodn01_ve1` FOREIGN KEY (`vendedores_id`) REFERENCES `msodn01_vendedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msodn01_vendedores_categoria_vendas`
--

LOCK TABLES `msodn01_vendedores_categoria_vendas` WRITE;
/*!40000 ALTER TABLE `msodn01_vendedores_categoria_vendas` DISABLE KEYS */;
/*!40000 ALTER TABLE `msodn01_vendedores_categoria_vendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msodn01_referencias`
--

DROP TABLE IF EXISTS `msodn01_referencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msodn01_referencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `telefone_comercial` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msodn01_referencias`
--

LOCK TABLES `msodn01_referencias` WRITE;
/*!40000 ALTER TABLE `msodn01_referencias` DISABLE KEYS */;
INSERT INTO `msodn01_referencias` VALUES (1,'Santana',NULL),(2,'Santana',NULL),(3,'Santana','12312312312'),(4,'Santana','12312312312'),(5,'Santana','12312312312'),(6,'Santana','12312312312'),(7,'Santana','12312312312'),(8,'Santana','12312312312'),(9,'Santana','12312312312'),(10,'Santana','12312312312'),(11,'Santana','12312312312'),(12,'Santana','123123123121'),(13,'Santana','123123123121'),(14,'Santana','123123123121'),(15,'Santana','123123123121'),(16,'Joyvis','123123123'),(17,'Santana','123123123121'),(18,'Joyvis1','123123123'),(19,'Joyvis1','123123123'),(20,'Santana1','123123123121'),(21,'Joyvis2','123123123'),(22,'Joyvis2','123123123'),(23,'Joyvis2','123123123'),(24,'Joyvis2','123123123'),(25,'Santana2','123123123121'),(26,'Joyvis2','123123123'),(27,'Santana2','123123123121'),(28,'Joyvis2','123123123'),(29,'Santana2','123123123121'),(30,'Joyvis2','123123123'),(31,'Santana2','123123123121'),(32,'Joyvis2','123123123'),(33,'Santana2','123123123121'),(34,'Joyvis2','123123123'),(35,'Santana2','123123123121'),(36,'Joyvis444','13912293125465'),(37,'Santana444','139122931254665');
/*!40000 ALTER TABLE `msodn01_referencias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-04 19:23:15
