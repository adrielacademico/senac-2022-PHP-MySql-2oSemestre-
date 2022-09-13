﻿CREATE DATABASE  IF NOT EXISTS `loja` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `loja`;
-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: loja
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `endereco` text,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'KARINA LIMA PEIXOTO','FEMININO','JOSE AFONSO RODRIGUES PASCOAL','11111111111','8311111111'),(2,'KARLA KARINA ABRANTES REGO','FEMININO','JOSE ARI DO NASCIMENTO','11111222222','8311111222'),(3,'KARLA MARILIA VIEIRA COSTA DE MIRANDA','FEMININO','JOSE ARTUR DE SANTANA SILVA','11111333333','8311111333'),(4,'KARLA XAVIER FERNANDES ARAUJO','FEMININO','JOSE AUGUSTO DA SILVA','11111444444','8311111444'),(5,'KAROLINE POMBO DINIZ','FEMININO','JOSE AUGUSTO MONTEIRO DE MOURA','11111555555','8311111555'),(6,'KATIUSKA FLORENÇO MONTEIRO','FEMININO','JOSE CARLOS DA SILVA','11111666666','8311111666'),(7,'KELLY GOMES COSTA','FEMININO','JOSE CARLOS DA SILVA JUNIOR','11111777777','8311111777'),(8,'KENIA SAMARA FARIAS QUIRINO','FEMININO','JOSE CARLOS DA SILVA VIANA','11111888888','8311111888'),(9,'KEZIA THALITA SOARES PEREIRA','FEMININO','JOSE CARLOS SILVA','11111999999','8311111999'),(10,'KILMA VENANCIO RODRIGUES VICTOR','FEMININO','JOSE DE ARIMATEIA DE LUCENA CIRNE JUNIOR','11112111110','8311112110'),(11,'KLEBER EVARISTO DE MACENA','MASCULINO','JOSE DE ASSIS LUIZ RODRIGUES','11112222221','8311112221'),(12,'KLEDSON DE ALBUQUERQUE ALVES','MASCULINO','JOSE DE VASCONCELOS MEIRA JUNIOR','11112333332','8311112332'),(13,'KLEITON OLIVEIRA SANTOS','MASCULINO','JOSE ELTON DE SOUZA E SILVA','11112444443','8311112443'),(14,'KLERCIO LIMA VÉRAS','MASCULINO','JOSE EVANGELISTA DE SOUSA','11112555554','8311112554'),(15,'LAILANE SANTANA DE MELO','FEMININO','JOSÉ FELISBERTO CARDOSO DA SILVA','11112666665','8311112665'),(16,'LARISSA FREIRE DE OLIVEIRA','FEMININO','JOSE FERNANDO RIBEIRO COUTINHO','11112777776','8311112776'),(17,'LARISSA GENUINO CARNEIRO MARTINI','FEMININO','JOSE GERONIMO DANTAS','11112888887','8311112887'),(18,'LAUDENICE PAULINO RODRIGUES BEZERRA','FEMININO','JOSE IVO DE SOUZA','11112999998','8311112998'),(19,'MICHELLE CABRAL DA SILVA','FEMININO','JOSE IZAAC LEITE DE AMORIM','11113111109','8311113109'),(20,'MIKARLA RODRIGUES GUEDES DA SILVA','FEMININO','JOSE JARBAS MARCELINO DE ARRUDA','11113222220','8311113220'),(21,'MINERVINO GENILDO FARIAS FURTADO','MASCULINO','JOSE KLEBER PEREIRA SILVA','11113333331','8311113331'),(22,'MONICA CALBAR DA SILVA','FEMININO','JOSÉ LEONARDO SOARES DA SILVA','11113444442','8311113442'),(23,'MONICA DE VASCONCELOS VIDAL','FEMININO','JOSE LUIZ DO NASCIMENTO FILHO','11113555553','8311113553'),(24,'MOUZEM ROSTENY DE OLIVEIRA SANTOS','FEMININO','JOSE MASSILON DE LIMA RAMALHO','11113666664','8311113664'),(25,'NADJANE VIRGINIO DA SILVA FERREIR','FEMININO','JOSE MENEZES VIANA','11113777775','8311113775'),(26,'SILVANA RODRIGUES DO NASCIMENTO','FEMININO','JOSÉ NILTON FERREIRA DE ARAÚJO','11113888886','8311113886'),(27,'SIMONE KEYLA TORRES DI PACE GOMES','FEMININO','JOSE NIVALDO DA SILVA','11113999997','8311113997'),(28,'SOLANGE SOARES DA SILVA SOUZA','FEMININO','JOSE PINTO DA SILVA FILHO','11114111108','8311114108'),(29,'SOLANGE VIEIRA DE MELO SOARES','FEMININO','JOSE RENATO CAMARA DE ALMEIDA','11114222219','8311114219'),(30,'SUETONIO RODRIGUES GALDINO','MASCULINO','JOSE ROMERO DA SILVA COSTA','11114333330','8311114330'),(31,'TACIANO OLIVEIRA FERNANDES','MASCULINO','JOSE SAMARONE MIRANDA ALVES','11114444441','8311114441'),(32,'TATIANA PEREIRA DE ALMEIDA FIGUEIREDO','FEMININO','JOSE AUGUSTO MONTEIRO DE MOURA','11114555552','8311114552'),(33,'TATIANNE DA CONCEICAO FERREIRA','FEMININO','JOSE CARLOS DA SILVA','11114666663','8311114663'),(34,'TATYANE SALES DE ARAÚJO BATISTA','FEMININO','JOSE CARLOS DA SILVA JUNIOR','11114777774','8311114774'),(35,'TAYSE PRISCILLA DE ARAUJO SILVA BARBOSA','FEMININO','JOSE CARLOS DA SILVA VIANA','11114888885','8311114885'),(36,'TELMA MARIA BARBOSA BEZERRA LIMA','FEMININO','JOSE CARLOS SILVA','11114999996','8311114996'),(37,'TEREZA RACHEL DE ARAUJO MEDEIROS','FEMININO','JOSE DE ARIMATEIA DE LUCENA CIRNE JUNIOR','11115111107','8311115107'),(38,'THALLISON TARCISIO ALCANTARA DE SOUSA','FEMININO','JOSE DE ASSIS LUIZ RODRIGUES','11115222218','8311115218'),(39,'THAYSLENE PEREIRA NASCIMENTO','FEMININO','JOSE EVANGELISTA DE SOUSA','11115333329','8311115329'),(40,'THIAGO LIRA SOUZA SANTOS','MASCULINO','JOSÉ FELISBERTO CARDOSO DA SILVA','11115444440','8311115440'),(41,'DIEGO ARAUJO CLEMENTINO','MASCULINO','JOSE FERNANDO RIBEIRO COUTINHO','11115555551','8311115551'),(42,'DIEGO ELIAS PEREIRA','MASCULINO','JOSE GERONIMO DANTAS','11115666662','8311115662'),(43,'DIEGO SILVA','MASCULINO','JOSE IVO DE SOUZA','11115777773','8311115773'),(44,'DIMAS SOARES SOUSA','MASCULINO','JOSE IZAAC LEITE DE AMORIM','11115888884','8311115884'),(45,'DIOGENES ENEAS BARRETO','MASCULINO','JOSE JARBAS MARCELINO DE ARRUDA','11115999995','8311115995'),(46,'DJALMA ANDRADE VICENTE','MASCULINO','JOSE KLEBER PEREIRA SILVA','11116111106','8311116106'),(47,'DOMINGOS VICENTE NETO','MASCULINO','JOSE CARLOS DA SILVA JUNIOR','11116222217','8311116217'),(48,'EDIVALDO DE SOUZA BATISTA','MASCULINO','JOSE CARLOS DA SILVA VIANA','11116333328','8311116328'),(49,'EDMAR MACIEL DA SILVA','MASCULINO','JOSE CARLOS SILVA','11116444439','8311116439'),(50,'EDMILSON DA SILVA LIMA','MASCULINO','JOSE DE ARIMATEIA DE LUCENA CIRNE JUNIOR','11116555550','8311116550'),(51,'EDMIR PEREIRA DOS SANTOS','MASCULINO','JOSE DE ASSIS LUIZ RODRIGUES','11116666661','8311116661'),(52,'EDNALDO SILVA SANTOS','MASCULINO','JOSE DE VASCONCELOS MEIRA JUNIOR','11116777772','8311116772'),(53,'EDNALDO SOARES DE LIMA','MASCULINO','JOSE ELTON DE SOUZA E SILVA','11116888883','8311116883'),(54,'EDSON LIMA SANTOS','MASCULINO','JOSE EVANGELISTA DE SOUSA','11116999994','8311116994'),(55,'EDSON LUIZ DA SILVA NETO','MASCULINO','JOSÉ FELISBERTO CARDOSO DA SILVA','11117111105','8311117105'),(56,'EDUARDO DA SILVA TAVARES','MASCULINO','JOSE FERNANDO RIBEIRO COUTINHO','11117222216','8311117216'),(57,'EDUARDO WELLINGTON VERISSIMO DE SOUSA','MASCULINO','JOSE GERONIMO DANTAS','11117333327','8311117327'),(58,'EDVAN DA SILVA LUCAS','MASCULINO','JOSE IVO DE SOUZA','11117444438','8311117438'),(59,'EDVANILSON SANTOS DE OLIVEIRA','MASCULINO','JOSE IZAAC LEITE DE AMORIM','11117555549','8311117549'),(60,'ELENILSON GONÇALVES DOS SANTOS','MASCULINO','JOSE JARBAS MARCELINO DE ARRUDA','11117666660','8311117660');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente_possui_pedido`
--

DROP TABLE IF EXISTS `cliente_possui_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente_possui_pedido` (
  `id_pedido` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  KEY `id_pedido` (`id_pedido`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `cliente_possui_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  CONSTRAINT `cliente_possui_pedido_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente_possui_pedido`
--

LOCK TABLES `cliente_possui_pedido` WRITE;
/*!40000 ALTER TABLE `cliente_possui_pedido` DISABLE KEYS */;
INSERT INTO `cliente_possui_pedido` VALUES (1,9),(2,3),(3,4),(4,5),(5,7),(6,5),(7,12),(8,45),(9,5),(10,33),(11,7),(12,5),(13,12),(14,29),(15,19),(16,39),(17,58),(18,37),(19,17),(20,12),(21,12),(22,5),(23,12),(24,3),(25,5),(26,7),(27,8),(28,6),(29,9),(30,21),(31,23),(32,32),(33,45),(34,6),(35,5),(36,7),(37,3),(38,9),(39,3),(40,4);
/*!40000 ALTER TABLE `cliente_possui_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forma_pagamento`
--

DROP TABLE IF EXISTS `forma_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forma_pagamento` (
  `id_forma_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`id_forma_pagamento`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forma_pagamento`
--

LOCK TABLES `forma_pagamento` WRITE;
/*!40000 ALTER TABLE `forma_pagamento` DISABLE KEYS */;
INSERT INTO `forma_pagamento` VALUES (1,'Dinheiro'),(2,'Cheque'),(3,'Boleto'),(4,'Visa Crédito'),(5,'Visa Débito'),(6,'Master Crédito'),(7,'Master Débito'),(8,'Hiper Crédito'),(9,'Dinners Crédito');
/*!40000 ALTER TABLE `forma_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `data_pagamento` datetime DEFAULT NULL,
  `data_pedido` datetime DEFAULT NULL,
  `data_entrega` datetime DEFAULT NULL,
  `id_forma_pagamento` int(11) DEFAULT NULL,
  `id_transportadora` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `id_forma_pagamento` (`id_forma_pagamento`),
  KEY `id_transportadora` (`id_transportadora`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_forma_pagamento`) REFERENCES `forma_pagamento` (`id_forma_pagamento`),
  CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_transportadora`) REFERENCES `transportadora` (`id_transportadora`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (1,'2016-01-06 10:12:11','2016-01-05 10:12:11','2016-01-07 10:12:11',2,2),(2,'2016-01-08 15:12:11','2016-01-07 15:12:11','2016-01-09 15:12:11',2,2),(3,'2016-01-10 20:12:11','2016-01-09 20:12:11','2016-01-11 20:12:11',3,1),(4,'2016-01-13 01:12:11','2016-01-12 01:12:11','2016-01-14 01:12:11',4,2),(5,'2016-01-15 06:12:11','2016-01-14 06:12:11','2016-01-16 06:12:11',3,1),(6,'2016-01-17 11:12:11','2016-01-16 11:12:11','2016-01-18 11:12:11',4,2),(7,'2016-01-19 16:12:11','2016-01-18 16:12:11','2016-01-20 16:12:11',5,2),(8,'2016-01-21 21:12:11','2016-01-20 21:12:11','2016-01-22 21:12:11',6,3),(9,'2016-01-24 02:12:11','2016-01-23 02:12:11','2016-01-25 02:12:11',5,2),(10,'2016-01-26 07:12:11','2016-01-25 07:12:11','2016-01-27 07:12:11',3,3),(11,'2016-01-28 12:12:11','2016-01-27 12:12:11','2016-01-29 12:12:11',4,4),(12,'2016-01-30 17:12:11','2016-01-29 17:12:11','2016-01-31 17:12:11',2,6),(13,'2016-02-01 22:12:11','2016-01-31 22:12:11','2016-02-02 22:12:11',6,8),(14,'2016-02-06 10:12:11','2016-02-05 10:12:11','2016-02-07 10:12:11',4,7),(15,'2016-02-08 15:12:11','2016-02-07 15:12:11','2016-02-09 15:12:11',2,8),(16,'2016-02-10 20:12:11','2016-02-09 20:12:11','2016-02-11 20:12:11',2,8),(17,'2016-02-13 01:12:11','2016-02-12 01:12:11','2016-02-14 01:12:11',3,2),(18,'2016-02-15 06:12:11','2016-02-14 06:12:11','2016-02-16 06:12:11',4,3),(19,'2016-02-17 11:12:11','2016-02-16 11:12:11','2016-02-18 11:12:11',3,2),(20,'2016-03-19 16:12:11','2016-03-18 16:12:11','2016-03-20 16:12:11',4,4),(21,'2016-03-20 16:12:11','2016-03-19 16:12:11','2016-03-21 16:12:11',5,3),(22,'2016-03-21 16:12:11','2016-03-20 16:12:11','2016-03-22 16:12:11',6,1),(23,'2016-03-22 16:12:11','2016-03-21 16:12:11','2016-03-23 16:12:11',5,5),(24,'2016-03-23 16:12:11','2016-03-22 16:12:11','2016-03-24 16:12:11',3,4),(25,'2016-03-24 16:12:11','2016-03-23 16:12:11','2016-03-25 16:12:11',4,4),(26,'2016-03-25 16:12:11','2016-03-24 16:12:11','2016-03-26 16:12:11',2,5),(27,'2016-04-06 10:12:11','2016-04-05 10:12:11','2016-04-07 10:12:11',6,6),(28,'2016-04-07 10:12:11','2016-04-06 10:12:11','2016-04-08 10:12:11',4,2),(29,'2016-04-08 10:12:11','2016-04-07 10:12:11','2016-04-09 10:12:11',3,3),(30,'2016-04-09 10:12:11','2016-04-08 10:12:11','2016-04-10 10:12:11',4,2),(31,'2016-04-10 10:12:11','2016-04-09 10:12:11','2016-04-11 10:12:11',2,2),(32,'2016-04-11 10:12:11','2016-04-10 10:12:11','2016-04-12 10:12:11',6,1),(33,'2016-04-12 10:12:11','2016-04-11 10:12:11','2016-04-13 10:12:11',4,1),(34,'2016-05-21 21:12:11','2016-05-20 21:12:11','2016-05-22 21:12:11',2,1),(35,'2016-05-22 21:12:11','2016-05-21 21:12:11','2016-05-23 21:12:11',2,2),(36,'2016-05-23 21:12:11','2016-05-22 21:12:11','2016-05-24 21:12:11',3,1),(37,'2016-05-24 21:12:11','2016-05-23 21:12:11','2016-05-25 21:12:11',4,3),(38,'2016-06-30 17:12:11','2016-06-29 17:12:11','2016-07-01 17:12:11',2,4),(39,'2016-07-01 17:12:11','2016-06-30 17:12:11','2016-07-02 17:12:11',6,3),(40,'2016-07-02 17:12:11','2016-07-01 17:12:11','2016-07-03 17:12:11',4,2);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_possui_produto`
--

DROP TABLE IF EXISTS `pedido_possui_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido_possui_produto` (
  `id_produto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `valor_produto` decimal(10,2) NOT NULL,
  `quantidade_produto` int(11) NOT NULL,
  KEY `id_produto` (`id_produto`),
  KEY `id_pedido` (`id_pedido`),
  CONSTRAINT `pedido_possui_produto_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`),
  CONSTRAINT `pedido_possui_produto_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_possui_produto`
--

LOCK TABLES `pedido_possui_produto` WRITE;
/*!40000 ALTER TABLE `pedido_possui_produto` DISABLE KEYS */;
INSERT INTO `pedido_possui_produto` VALUES (1,1,13.47,2),(2,1,8.00,1),(3,1,7.50,1),(4,1,12.22,2),(5,1,21.64,1),(6,1,1.83,2),(7,1,1.83,12),(8,1,1.83,1),(9,1,2.45,2),(10,1,2.45,12),(11,1,2.45,2),(12,1,1.50,3),(1,2,13.47,5),(2,2,8.00,6),(3,2,7.50,4),(4,3,12.22,3),(5,3,21.64,8),(6,4,1.83,2),(7,5,1.83,3),(8,6,1.83,53),(9,7,2.45,2),(10,7,2.45,3),(11,7,2.45,4),(12,8,1.50,7),(1,9,13.47,6),(2,9,8.00,4),(3,10,7.50,3),(4,10,12.22,9),(5,10,21.64,8),(6,10,1.83,5),(7,11,1.83,7),(8,11,1.83,2),(9,12,2.45,7),(10,13,2.45,8),(11,14,2.45,9),(12,14,1.50,6),(1,15,13.47,3),(2,15,8.00,2),(3,15,7.50,4),(4,15,12.22,5),(5,16,21.64,6),(6,16,1.83,8),(7,16,1.83,7),(8,17,1.83,6),(9,18,2.45,22),(10,19,2.45,23),(11,20,2.45,15),(12,20,1.50,17),(1,21,13.47,6),(2,21,8.00,4),(3,21,7.50,4),(4,22,12.22,3),(5,22,21.64,6),(6,22,1.83,7),(7,22,1.83,8),(8,22,1.83,9),(9,22,2.45,8),(10,22,2.45,7),(11,22,2.45,3),(12,22,1.50,4),(1,23,13.47,7),(2,23,8.00,9),(3,23,7.50,8),(4,23,12.22,7),(5,23,21.64,5),(6,23,1.83,45),(7,24,1.83,3),(8,24,1.83,12),(9,24,2.45,2),(10,25,2.45,3),(11,26,2.45,4),(12,26,1.50,14),(1,27,13.47,6),(2,28,8.00,9),(3,28,7.50,5),(4,30,12.22,3),(5,30,21.64,2),(6,30,1.83,1),(7,30,1.83,2),(8,31,1.83,3),(9,31,2.45,4),(10,31,2.45,7),(11,31,2.45,5),(12,31,1.50,9),(1,32,13.47,8),(2,32,8.00,3),(3,33,7.50,2),(4,33,12.22,3),(5,33,21.64,4),(6,33,1.83,9),(7,34,1.83,4),(8,34,1.83,3),(9,34,2.45,4),(10,34,2.45,6),(11,35,2.45,7),(12,35,1.50,4),(1,36,13.47,5),(2,36,8.00,5),(3,36,7.50,7),(4,37,12.22,8),(5,38,21.64,9),(6,38,1.83,4),(7,38,1.83,8),(8,38,1.83,4),(9,38,2.45,2),(10,39,2.45,7),(11,40,2.45,9),(12,40,1.50,7);
/*!40000 ALTER TABLE `pedido_possui_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `estoque` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Vick Vaporub Pomada Com 30 Gramas',13.47,30),(2,'Vick Inalador Com 5 Gramas',8.00,20),(3,'Vick Vaporub Pomada Com 12 Gramas',7.50,40),(4,'Vick Pyrena Com 5 Envelopes',12.22,30),(5,'Vick Vaporub Pomada Com 50 Gramas',21.64,20),(6,'Vick Cereja Com 5 Pastilhas',1.83,80),(7,'Vick Menta Com 5 Pastilhas',1.83,20),(8,'Vick Limão Com 5 Pastilhas',1.83,100),(9,'Vick Pyrena Sachê Com 5 Gramas',2.45,200),(10,'Vick Pyrena Camomila Sachê Com 5 Gramas',2.45,300),(11,'Vick Pyrena Sabor Canela E Maçã Sachê Com 5 Gramas',2.45,70),(12,'Vick Laranja Com 5 Pastilhas',1.50,200);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transportadora`
--

DROP TABLE IF EXISTS `transportadora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transportadora` (
  `id_transportadora` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`id_transportadora`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transportadora`
--

LOCK TABLES `transportadora` WRITE;
/*!40000 ALTER TABLE `transportadora` DISABLE KEYS */;
INSERT INTO `transportadora` VALUES (1,'Rapidão Cometa'),(2,'TransFigueredo'),(3,'BrasPress'),(4,'Correios PAC'),(5,'Correios SEDEX'),(6,'Correios SEDEX 10'),(7,'Correios Carta Normal'),(8,'Nacional Transportes');
/*!40000 ALTER TABLE `transportadora` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-18 23:06:05