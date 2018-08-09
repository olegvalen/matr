-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: yii2basic
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `attribute`
--

DROP TABLE IF EXISTS `attribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attribute` (
  `attribute_group_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `sort_order` int(3) NOT NULL,
  PRIMARY KEY (`attribute_group_id`,`attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attribute`
--

LOCK TABLES `attribute` WRITE;
/*!40000 ALTER TABLE `attribute` DISABLE KEYS */;
INSERT INTO `attribute` VALUES (1,1,1),(1,2,2),(2,3,1),(2,4,2),(2,5,3),(2,6,4),(2,7,5),(2,8,6),(2,9,7),(2,10,8),(2,11,9),(2,12,10),(2,13,11),(3,14,1),(3,15,2),(4,16,1),(4,17,2),(4,18,3),(4,20,4),(5,21,1),(5,22,2),(5,23,3);
/*!40000 ALTER TABLE `attribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attribute_description`
--

DROP TABLE IF EXISTS `attribute_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attribute_description` (
  `attribute_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_url` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h1` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`attribute_id`,`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attribute_description`
--

LOCK TABLES `attribute_description` WRITE;
/*!40000 ALTER TABLE `attribute_description` DISABLE KEYS */;
INSERT INTO `attribute_description` VALUES (1,1,'Недорогие','nedorogie','недорогие','недорогие','недорогие','недорогие'),(2,1,'Премиум','premium','премиум','премиум','премиум','премиум'),(3,1,'90x190','90x190','90x190','90 на 190','90x190','90x190'),(4,1,'90x200','90x200','90x200','90 на 200','90x200','90x200'),(5,1,'100x190','100x190','100x190','100 на 190','100x190','100x190'),(6,1,'100x200','100x200','100x200','100 на 200','100x200','100x200'),(7,1,'140x190','140x190','140x190','140 на 190','140x190','140x190'),(8,1,'140x200','140x200','140x200','140 на 200','140x200','140x200'),(9,1,'150x190','150x190','150x190','150 на 190','150x190','150x190'),(10,1,'150x200','150x200','150x200','150 на 200','150x200','150x200'),(11,1,'160x190','160x190','160x190','160 на 190','160x190','160x190'),(12,1,'160x200','160x200','160x200','160 на 200','160x200','160x200'),(13,1,'200x200','200x200','200x200','200 на 200','200x200','200x200'),(14,1,'3 см',NULL,NULL,NULL,NULL,NULL),(15,1,'5 см',NULL,NULL,NULL,NULL,NULL),(16,1,'Холлофайбер','hollowfiber','холлофайбер','холлофайбер','холлофайбер, hollowfiber','холлофайбер'),(17,1,'Микрофибра','microfiber','микрофибра','микрофибра','микрофибра, microfiber','микрофибра'),(18,1,'Полиэстер','polyester','полиэстер','полиэстер','полиэстер, polyester','полиэстер'),(20,1,'Хлопок','cotton','хлопок','хлопок','хлопок, cotton','хлопок'),(21,1,'Искусственный пух','iskussvennyy-puh','искусственный пух','искусственный пух','искусственный пух','искусственный пух'),(22,1,'Утинное перо','utinnoe-pero','натуральное утинное перо','натуральное утинное перо','натуральное утинное перо','натуральное утинное перо'),(23,1,'Гусинное  перо','gusinnoe-pero','натуральное гусинное перо','натуральное гусинное перо','натуральное гусинное перо','натуральное гусинное перо');
/*!40000 ALTER TABLE `attribute_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attribute_group`
--

DROP TABLE IF EXISTS `attribute_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attribute_group` (
  `attribute_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `sort_order` int(3) NOT NULL,
  `option` tinyint(1) NOT NULL,
  `filter` tinyint(1) NOT NULL,
  PRIMARY KEY (`attribute_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attribute_group`
--

LOCK TABLES `attribute_group` WRITE;
/*!40000 ALTER TABLE `attribute_group` DISABLE KEYS */;
INSERT INTO `attribute_group` VALUES (1,1,0,1),(2,2,1,1),(3,3,0,0),(4,5,0,1),(5,4,0,1);
/*!40000 ALTER TABLE `attribute_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attribute_group_description`
--

DROP TABLE IF EXISTS `attribute_group_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attribute_group_description` (
  `attribute_group_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_url` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h1` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nofollow` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noindex` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`attribute_group_id`,`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attribute_group_description`
--

LOCK TABLES `attribute_group_description` WRITE;
/*!40000 ALTER TABLE `attribute_group_description` DISABLE KEYS */;
INSERT INTO `attribute_group_description` VALUES (1,1,'Категория','category','категория:','категория','категория',NULL,'follow','index'),(2,1,'Размер','size','размер:','размер','размер','размером','follow','index'),(3,1,'Высота',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,1,'Материал чехла','cover','материал чехла:','материал чехла','материал чехла','с материалом чехла','follow','index'),(5,1,'Материал наполнителя','fill','материал наполнителя:','материал наполнителя','материал наполнителя','с материалом наполнителя','follow','index');
/*!40000 ALTER TABLE `attribute_group_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `sort_order` int(5) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `seo_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`category_id`),
  KEY `seo_url` (`seo_url`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Матрасы',NULL,0,0,1,'2018-05-07 17:10:32','2018-05-07 17:10:34','matrasy'),(2,'Топперы',NULL,1,0,1,'2018-05-07 17:11:06','2018-05-07 17:11:09','toppery');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_attribute_group`
--

DROP TABLE IF EXISTS `category_attribute_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_attribute_group` (
  `category_id` int(11) NOT NULL,
  `attribute_group_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`attribute_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_attribute_group`
--

LOCK TABLES `category_attribute_group` WRITE;
/*!40000 ALTER TABLE `category_attribute_group` DISABLE KEYS */;
INSERT INTO `category_attribute_group` VALUES (2,1),(2,2),(2,3),(2,4),(2,5);
/*!40000 ALTER TABLE `category_attribute_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_description`
--

DROP TABLE IF EXISTS `category_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_description` (
  `category_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_description` mediumtext COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_description`
--

LOCK TABLES `category_description` WRITE;
/*!40000 ALTER TABLE `category_description` DISABLE KEYS */;
INSERT INTO `category_description` VALUES (1,1,'Матрасы',NULL,NULL,NULL,NULL,NULL),(2,1,'Топперы','<p><b>Для чего нужен матрас топпер?</b>&nbsp;<br></p><p>В первую очередь, для комфорта. Независимо от того, в каком состоянии ваше нынешнее спальное место, вы можете его в разы улучшить с помощью топпера. Он подарит вам ощущение мягкой перьевой подушки, которая возьмет вас в свой комфортный плен. Кроме этого, такой матрас является защитой от загрязнений спальной поверхности кровати. Он позволит продлить срок службы матраса, а вас весь этот период вознаградит крепким и здоровым отдыхом.&nbsp;</p><p><b>С какой целью приобретают топпер:</b></p><ul><li>получить дополнительный слой комфорта в тот момент, когда это необходимо;</li><li>улучшить качество существующего матраса, если нет возможности купить новый;</li><li>дополнительная защита спального места от загрязнений;</li><li>универсален для сохранения здоровья всей семьи – топпер изготовлен из экологичных материалов, состав которых абсолютно гипоаллергенен;</li><li>с помощью данного аксессуара вы можете максимально сэкономить на приобретении нового дорогостоящего матраса.</li></ul><p><b>Мягкость + Комфорт = Топпер</b><br></p><p>Каждый раз, когда вы будете пользоваться им, вы будете ощущать мягкую перьевую основу. Этот спальный аксессуар подойдет для ежедневного использования, в качестве дополнительного покрытия на матрас/диван или подарка на любой праздник. Подарите не только себе комфорт, а и свои близким и друзьям.</p><p><b>Элегантность во всем</b></p><p>Топпер не только внешне выглядит аккуратно и компактно. Качество этого предмета прослеживается в каждом прошитом стежке. Благодаря уникальной современной технологии удалось равномерно распределить наполнитель внутри матраса. Даже при самом активном использовании топпера, наполнитель не сбивается и не меняет форму воздушности на протяжении всего срока использования.</p><p><b>Гиппоаллергенные материалы – гарантия безопасности использования</b></p><p>Топперы произведены из экологичных материалов. Ими могут пользоваться абсолютно все члены семьи, включая самых маленьких жителей вашей квартиры.&nbsp;</p><ul><li>чехол из холофайбера: этот материал обладает высокой степенью теплоизоляции и не накапливает влагу внутри покрытия;</li><li>качественный искусственный пух: использование этого материала не только не вызывает аллергии, а и сохраняет форму на протяжении всего срока эксплуатации;</li><li>аллергенный барьер: сколько бы вы не пользовались матрасом в нем не заведутся бактерии, мелкие паразиты, плесень и пыль. Об этом позаботились еще на этапе производства матраса;</li><li>защита матраса: аксессуар позволяет предотвратить от загрязнений и деформации основное спальное место.</li></ul><p>Топпер – это универсальное и многофункциональное решение, которое пришлось по душе уже многим. Он не занимает много места при хранении. Может быть использован на матрасе любого типа, прикрепляясь с четырех сторон эластичными резинками. Удобство и здоровый отдых способен подарить вам топпер. Он создан для того, чтобы дарить уют всем членам вашей семьи.</p>','Купить топпер в Днепре, Киеве, Одессе, Харькове | Matrasovich.com.ua','Топперы','Топперы. Большой выбор, оперативная бесплатная доставка, недорого, всегда в наличии. (098) 682-36-17','топпер, футон, раскладной, недорого');
/*!40000 ALTER TABLE `category_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_path`
--

DROP TABLE IF EXISTS `category_path`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_path` (
  `category_id` int(11) NOT NULL,
  `path_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`path_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_path`
--

LOCK TABLES `category_path` WRITE;
/*!40000 ALTER TABLE `category_path` DISABLE KEYS */;
INSERT INTO `category_path` VALUES (2,1);
/*!40000 ALTER TABLE `category_path` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Ivanov'),(2,'Petrov'),(3,'Sidorov');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filePath` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` int(1) DEFAULT NULL,
  `modelName` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlAlias` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'Products/Product1/matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-1.jpg',1,1,'Product','matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-1',NULL),(2,'Products/Product1/matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-2.jpg',1,0,'Product','matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-2',NULL),(3,'Products/Product1/matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-3.jpg',1,0,'Product','matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-3',NULL),(4,'Products/Product1/matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-4.jpg',1,0,'Product','matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-4',NULL),(5,'Products/Product1/matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-5.jpg',1,0,'Product','matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-5',NULL),(6,'Products/Product2/matras-topper-gipoallergennyy-ekstra-plyush-stegannyy-1.jpg',2,1,'Product','matras-topper-gipoallergennyy-ekstra-plyush-stegannyy-1',NULL),(7,'Products/Product2/matras-topper-gipoallergennyy-ekstra-plyush-stegannyy-2.jpg',2,0,'Product','matras-topper-gipoallergennyy-ekstra-plyush-stegannyy-2',NULL),(8,'Products/Product2/matras-topper-gipoallergennyy-ekstra-plyush-stegannyy-3.jpg',2,0,'Product','matras-topper-gipoallergennyy-ekstra-plyush-stegannyy-3',NULL),(9,'Products/Product3/matras-topper-pad-1.jpg',3,1,'Product','matras-topper-pad-1',NULL),(10,'Products/Product3/matras-topper-pad-2.jpg',3,0,'Product','matras-topper-pad-2',NULL),(11,'Products/Product3/matras-topper-pad-3.jpg',3,0,'Product','matras-topper-pad-3',NULL),(12,'Products/Product3/matras-topper-pad-4.jpg',3,0,'Product','matras-topper-pad-4',NULL),(13,'Products/Product3/matras-topper-pad-5.jpg',3,0,'Product','matras-topper-pad-5',NULL),(14,'Products/Product3/matras-topper-pad-6.jpg',3,0,'Product','matras-topper-pad-6',NULL),(15,'Products/Product4/matras-topper-korolevskiy-plyush-1.jpg',4,1,'Product','matras-topper-korolevskiy-plyush-1',NULL),(16,'Products/Product4/matras-topper-korolevskiy-plyush-2.jpg',4,0,'Product','matras-topper-korolevskiy-plyush-2',NULL),(17,'Products/Product4/matras-topper-korolevskiy-plyush-3.jpg',4,0,'Product','matras-topper-korolevskiy-plyush-3',NULL),(18,'Products/Product4/matras-topper-korolevskiy-plyush-4.jpg',4,0,'Product','matras-topper-korolevskiy-plyush-4',NULL),(19,'Products/Product4/matras-topper-korolevskiy-plyush-5.jpg',4,0,'Product','matras-topper-korolevskiy-plyush-5',NULL),(20,'Products/Product5/matras-topper-super-myagkiy-gipoallergennyy-1.jpg',5,1,'Product','matras-topper-super-myagkiy-gipoallergennyy-1',NULL),(21,'Products/Product5/matras-topper-super-myagkiy-gipoallergennyy-2.jpg',5,0,'Product','matras-topper-super-myagkiy-gipoallergennyy-2',NULL),(22,'Products/Product5/matras-topper-super-myagkiy-gipoallergennyy-3.jpg',5,0,'Product','matras-topper-super-myagkiy-gipoallergennyy-3',NULL),(23,'Products/Product6/matras-topper-polyester-1.jpg',6,1,'Product','matras-topper-polyester-1',NULL),(24,'Products/Product6/matras-topper-polyester-2.jpg',6,0,'Product','matras-topper-polyester-2',NULL),(25,'Products/Product6/matras-topper-polyester-3.jpg',6,0,'Product','matras-topper-polyester-3',NULL),(26,'Products/Product6/matras-topper-polyester-4.jpg',6,0,'Product','matras-topper-polyester-4',NULL),(27,'Products/Product7/matras-topper-belyy-plyush-1.jpg',7,1,'Product','matras-topper-belyy-plyush-1',NULL),(28,'Products/Product7/matras-topper-belyy-plyush-2.jpg',7,0,'Product','matras-topper-belyy-plyush-2',NULL),(29,'Products/Product7/matras-topper-belyy-plyush-3.jpg',7,0,'Product','matras-topper-belyy-plyush-3',NULL),(30,'Products/Product8/matras-topper-cotton-top-1.jpg',8,1,'Product','matras-topper-cotton-top-1',NULL),(31,'Products/Product9/matras-topper-dream-gipoallergennyy-1.jpg',9,1,'Product','matras-topper-dream-gipoallergennyy-1',NULL),(32,'Products/Product10/matras-topper-emoli-gipoallergennyy-1.jpg',10,1,'Product','matras-topper-emoli-gipoallergennyy-1',NULL),(33,'Products/Product10/matras-topper-emoli-gipoallergennyy-2.jpg',10,0,'Product','matras-topper-emoli-gipoallergennyy-2',NULL),(34,'Products/Product10/matras-topper-emoli-gipoallergennyy-3.jpg',10,0,'Product','matras-topper-emoli-gipoallergennyy-3',NULL),(35,'Products/Product10/matras-topper-emoli-gipoallergennyy-4.jpg',10,0,'Product','matras-topper-emoli-gipoallergennyy-4',NULL),(36,'Products/Product11/matras-topper-ekstra-plyush-lux-1.jpg',11,1,'Product','matras-topper-ekstra-plyush-lux-1',NULL),(37,'Products/Product11/matras-topper-ekstra-plyush-lux-2.jpg',11,0,'Product','matras-topper-ekstra-plyush-lux-2',NULL),(38,'Products/Product11/matras-topper-ekstra-plyush-lux-3.jpg',11,0,'Product','matras-topper-ekstra-plyush-lux-3',NULL),(39,'Products/Product11/matras-topper-ekstra-plyush-lux-4.jpg',11,0,'Product','matras-topper-ekstra-plyush-lux-4',NULL),(40,'Products/Product11/matras-topper-ekstra-plyush-lux-5.jpg',11,0,'Product','matras-topper-ekstra-plyush-lux-5',NULL),(41,'Products/Product11/matras-topper-ekstra-plyush-lux-6.jpg',11,0,'Product','matras-topper-ekstra-plyush-lux-6',NULL),(42,'Products/Product12/matras-topper-plyush-premium-1.jpg',12,1,'Product','matras-topper-plyush-premium-1',NULL),(43,'Products/Product13/matras-topper-mini-pero-1.jpg',13,1,'Product','matras-topper-mini-pero-1',NULL),(44,'Products/Product13/matras-topper-mini-pero-2.jpg',13,0,'Product','matras-topper-mini-pero-2',NULL),(45,'Products/Product13/matras-topper-mini-pero-3.jpg',13,0,'Product','matras-topper-mini-pero-3',NULL),(46,'Products/Product13/matras-topper-mini-pero-4.jpg',13,0,'Product','matras-topper-mini-pero-4',NULL),(47,'Products/Product13/matras-topper-mini-pero-5.jpg',13,0,'Product','matras-topper-mini-pero-5',NULL),(48,'Products/Product14/matras-topper-naturalnoe-gusinnoe-pero-1.jpg',14,1,'Product','matras-topper-naturalnoe-gusinnoe-pero-1',NULL),(49,'Products/Product14/matras-topper-naturalnoe-gusinnoe-pero-2.jpg',14,0,'Product','matras-topper-naturalnoe-gusinnoe-pero-2',NULL),(50,'Products/Product14/matras-topper-naturalnoe-gusinnoe-pero-3.jpg',14,0,'Product','matras-topper-naturalnoe-gusinnoe-pero-3',NULL),(51,'Products/Product14/matras-topper-naturalnoe-gusinnoe-pero-4.jpg',14,0,'Product','matras-topper-naturalnoe-gusinnoe-pero-4',NULL),(52,'Products/Product14/matras-topper-naturalnoe-gusinnoe-pero-5.jpg',14,0,'Product','matras-topper-naturalnoe-gusinnoe-pero-5',NULL),(53,'Products/Product14/matras-topper-naturalnoe-gusinnoe-pero-6.jpg',14,0,'Product','matras-topper-naturalnoe-gusinnoe-pero-6',NULL),(54,'Products/Product15/matras-topper-naturalnoe-utinnoe-pero-1.jpg',15,1,'Product','matras-topper-naturalnoe-utinnoe-pero-1',NULL),(55,'Products/Product15/matras-topper-naturalnoe-utinnoe-pero-2.jpg',15,0,'Product','matras-topper-naturalnoe-utinnoe-pero-2',NULL),(56,'Products/Product15/matras-topper-naturalnoe-utinnoe-pero-3.jpg',15,0,'Product','matras-topper-naturalnoe-utinnoe-pero-3',NULL);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'item1'),(2,'item2'),(3,'item3');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,1,1,1),(3,2,3,0),(7,3,6,1),(9,3,7,1),(10,3,8,0);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_item`
--

DROP TABLE IF EXISTS `order_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_item` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_item`
--

LOCK TABLES `order_item` WRITE;
/*!40000 ALTER TABLE `order_item` DISABLE KEYS */;
INSERT INTO `order_item` VALUES (1,1),(1,2),(3,1),(3,2),(3,3),(7,2);
/*!40000 ALTER TABLE `order_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(15,2) DEFAULT '0.00',
  `sort_order` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `viewed` int(5) DEFAULT '0',
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `seo_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `seo_url` (`seo_url`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,2,'Матрас топпер супер мягкий гипоаллергенный Облако','matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-1.jpg',1675.00,1,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh'),(2,2,'Матрас топпер гипоаллергенный экстра плюш стеганный','matras-topper-gipoallergennyy-ekstra-plyush-stegannyy-1.jpg',2645.00,2,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-gipoallergennyy-ekstra-plyush-stegannyy'),(3,2,'Матрас топпер Пад','matras-topper-pad-1.jpg',2825.00,3,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-pad'),(4,2,'Матрас топпер королевский плюш','matras-topper-korolevskiy-plyush-1.jpg',2560.00,4,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-korolevskiy-plyush'),(5,2,'Матрас топпер супер мягкий гипоаллергенный','matras-topper-super-myagkiy-gipoallergennyy-1.jpg',2630.00,5,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-super-myagkiy-gipoallergennyy'),(6,2,'Матрас топпер полиэстер','matras-topper-polyester-1.jpg',2215.00,6,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-polyester'),(7,2,'Матрас топпер белый плюш','matras-topper-belyy-plyush-1.jpg',3320.00,7,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-belyy-plyush'),(8,2,'Матрас топпер Котон Топ','matras-topper-cotton-top-1.jpg',3300.00,8,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-cotton-top'),(9,2,'Матрас топпер Дрим гипоаллергенный','matras-topper-dream-gipoallergennyy-1.jpg',3495.00,9,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-dream-gipoallergennyy'),(10,2,'Матрас топпер Эмоли гипоаллергенный','matras-topper-emoli-gipoallergennyy-1.jpg',2795.00,10,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-emoli-gipoallergennyy'),(11,2,'Матрас топпер экстра плюш люкс','matras-topper-ekstra-plyush-lux-1.jpg',4045.00,11,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-ekstra-plyush-lux'),(12,2,'Матрас топпер плюш премиум','matras-topper-plyush-premium-1.jpg',4425.00,12,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-plyush-premium'),(13,2,'Матрас топпер мини-перо','matras-topper-mini-pero-1.jpg',3615.00,13,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-mini-pero'),(14,2,'Матрас топпер натуральное гусинное перо','matras-topper-naturalnoe-gusinnoe-pero-1.jpg',2990.00,14,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-naturalnoe-gusinnoe-pero'),(15,2,'Матрас топпер натуральное утинное перо','matras-topper-naturalnoe-utinnoe-pero-1.jpg',3600.00,15,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-naturalnoe-utinnoe-pero');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_attribute`
--

DROP TABLE IF EXISTS `product_attribute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_attribute` (
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_attribute`
--

LOCK TABLES `product_attribute` WRITE;
/*!40000 ALTER TABLE `product_attribute` DISABLE KEYS */;
INSERT INTO `product_attribute` VALUES (1,1),(1,3),(1,4),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,15),(1,16),(1,21),(2,1),(2,7),(2,8),(2,9),(2,10),(2,11),(2,12),(2,13),(2,15),(2,17),(2,21),(3,3),(3,4),(3,5),(3,6),(3,7),(3,8),(3,9),(3,10),(3,11),(3,12),(3,13),(3,14),(3,17),(3,21),(4,1),(4,3),(4,4),(4,5),(4,6),(4,7),(4,8),(4,9),(4,10),(4,11),(4,12),(4,13),(4,15),(4,17),(4,21),(5,1),(5,3),(5,4),(5,5),(5,6),(5,7),(5,8),(5,9),(5,10),(5,11),(5,12),(5,13),(5,15),(5,16),(5,21),(6,1),(6,3),(6,4),(6,5),(6,6),(6,7),(6,8),(6,9),(6,10),(6,11),(6,12),(6,13),(6,15),(6,18),(6,21),(7,3),(7,4),(7,5),(7,6),(7,7),(7,8),(7,9),(7,10),(7,11),(7,12),(7,13),(7,15),(7,17),(7,21),(8,3),(8,4),(8,5),(8,6),(8,7),(8,8),(8,9),(8,10),(8,11),(8,12),(8,13),(8,15),(8,20),(8,21),(9,2),(9,3),(9,4),(9,5),(9,6),(9,7),(9,8),(9,9),(9,10),(9,11),(9,12),(9,13),(9,15),(9,17),(9,21),(10,3),(10,4),(10,5),(10,6),(10,7),(10,8),(10,9),(10,10),(10,11),(10,12),(10,13),(10,14),(10,17),(10,21),(11,2),(11,3),(11,4),(11,5),(11,6),(11,7),(11,8),(11,9),(11,10),(11,11),(11,12),(11,13),(11,15),(11,16),(11,21),(12,2),(12,3),(12,4),(12,5),(12,6),(12,7),(12,8),(12,9),(12,10),(12,11),(12,12),(12,15),(12,17),(12,21),(13,2),(13,3),(13,4),(13,5),(13,6),(13,7),(13,8),(13,9),(13,10),(13,11),(13,12),(13,13),(13,15),(13,20),(13,22),(14,2),(14,3),(14,4),(14,5),(14,6),(14,7),(14,8),(14,9),(14,10),(14,11),(14,12),(14,13),(14,15),(14,20),(14,23),(15,2),(15,3),(15,4),(15,5),(15,6),(15,7),(15,8),(15,9),(15,10),(15,11),(15,12),(15,13),(15,15),(15,20),(15,22);
/*!40000 ALTER TABLE `product_attribute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_description`
--

DROP TABLE IF EXISTS `product_description`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_description` (
  `product_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_description` mediumtext COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`product_id`,`language_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_description`
--

LOCK TABLES `product_description` WRITE;
/*!40000 ALTER TABLE `product_description` DISABLE KEYS */;
INSERT INTO `product_description` VALUES (1,1,'Матрас топпер супер мягкий гипоаллергенный искусственный пух','&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;div&gt;Если вы хотите каждую ночь ощущать чувство изумительного комфорта и невероятной неги, обратите внимание на эту модель. &lt;b&gt;Недорогие матрасы топперы&lt;/b&gt;, толщиной всего в 5 см, превратят ваш сон в настоящее блаженство.&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Наполнение матраса ничем не отличается от натурального гусиного пуха. Вы высоко оцените возможность каждую ночь наслаждаться облачной мягкостью этой модели.&lt;/div&gt;&lt;div&gt;Тонкие беспружинные матрасы способны превратить любую поверхность спального места в роскошное и комфортное ложе. Искусственный пух прекрасно удерживает ваше тело во время сна, позволяя ему максимально расслабиться и отдохнуть.&lt;/div&gt;&lt;div&gt;Чехол матраса имеет ряд преимуществ:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;к нему приятно прикасаться;&lt;/li&gt;&lt;li&gt;он хорошо пропускает воздух;&lt;/li&gt;&lt;li&gt;поверхность материала имеет антиаллергенные и антибактериальные свойства;&lt;/li&gt;&lt;li&gt;специальное покрытие защищает от появления пылевых клещей и грибка;&lt;/li&gt;&lt;li&gt;на чехле имеются прочные фиксаторы для крепления топпера;&lt;/li&gt;&lt;li&gt;особая техника прошивки чехла не позволяет воздушному наполнителю сбиваться в комки или смещаться.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;Чехол матраса, это его «лицо». Эта модель будет великолепно гармонировать с любым интерьером.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Матрасы Облако выгодно отличаются от других похожих моделей по цене. Вы можете &lt;b&gt;купить топперы недорого&lt;/b&gt;, но при этом получить безупречное качество и здоровый сон.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Тонкие матрасы на кровать не требуют особого и сложного ухода. Они прекрасно очищаются в стиральной машине, не теряя при этом своих достоинств.&amp;nbsp;&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – холлофайбер.&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Почему выгодно приобрести эту модель:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;легко ухаживать;&lt;/li&gt;&lt;li&gt;удобно хранить и перевозить;&lt;/li&gt;&lt;li&gt;удивительный комфорт и защитные свойства матраса обеспечивают спокойный и безопасный сон даже самым маленьким детям;&lt;/li&gt;&lt;li&gt;можно купить топперы недорого и сделать приятный и полезный подарок своим родным и близким;&lt;/li&gt;&lt;li&gt;матрас не теряет своего элегантного вида и формы даже при длительной эксплуатации;&lt;/li&gt;&lt;li&gt;гарантированное качество всех материалов;&lt;/li&gt;&lt;li&gt;чехол хорошо пропускает воздух, обеспечивая вентиляцию наполнителя.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;К этим несомненным достоинствам необходимо прибавить еще одно, самое важное – каждую ночь вы будете засыпать с ощущением свежести и невесомости.&lt;/div&gt;&lt;h3&gt;Где купить&amp;nbsp;&lt;/h3&gt;&lt;div&gt;&lt;b&gt;Где купить тонкий матрас недорого&lt;/b&gt;? В нашем интернет-магазине вы можете подобрать топпер необходимого вам размера. Купите матрас, не выходя из дома. Мы доставляем наши товары во все города Украины.&amp;nbsp;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Twin&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Full&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Queen&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;King&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;','Матрас топпер супер мягкий гипоаллергенный Облако недорого | Matrasovich.com.ua','Матрас топпер супер мягкий гипоаллергенный Облако','Этот тонкий недорогой матрас по наполнению ничем не отличается от натурального гусиного пуха и способен превратить любую поверхность спального места в роскошное и комфортное ложе. Чехол из холлофайбера. Наполнитель - искусственный пух. (098) 682-36-17','Матрас топпер, гипоаллергенный, пух, раскладной, недорого'),(2,1,'Матрас топпер гипоаллергенный экстра плюш стеганный',NULL,NULL,NULL,NULL,NULL),(3,1,'Матрас топпер Пад',NULL,NULL,NULL,NULL,NULL),(4,1,'Матрас топпер королевский плюш',NULL,NULL,NULL,NULL,NULL),(5,1,'Матрас топпер супер мягкий гипоаллергенный',NULL,NULL,NULL,NULL,NULL),(6,1,'Матрас топпер полиэстер',NULL,NULL,NULL,NULL,NULL),(7,1,'Матрас топпер белый плюш',NULL,NULL,NULL,NULL,NULL),(8,1,'Матрас топпер Котон Топ',NULL,NULL,NULL,NULL,NULL),(9,1,'Матрас топпер Дрим гипоаллергенный',NULL,NULL,NULL,NULL,NULL),(10,1,'Матрас топпер Эмоли гипоаллергенный',NULL,NULL,NULL,NULL,NULL),(11,1,'Матрас топпер экстра плюш люкс',NULL,NULL,NULL,NULL,NULL),(12,1,'Матрас топпер плюш премиум',NULL,NULL,NULL,NULL,NULL),(13,1,'Матрас топпер мини-перо',NULL,NULL,NULL,NULL,NULL),(14,1,'Матрас топпер натуральное гусинное перо',NULL,NULL,NULL,NULL,NULL),(15,1,'Матрас топпер натуральное утинное перо',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `product_description` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_option`
--

DROP TABLE IF EXISTS `product_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_option` (
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` decimal(15,2) DEFAULT '0.00',
  PRIMARY KEY (`product_id`,`attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_option`
--

LOCK TABLES `product_option` WRITE;
/*!40000 ALTER TABLE `product_option` DISABLE KEYS */;
INSERT INTO `product_option` VALUES (1,3,1675.00),(1,4,1675.00),(1,7,2300.00),(1,8,2300.00),(1,9,2495.00),(1,10,2495.00),(1,11,2495.00),(1,12,2495.00),(1,13,2690.00);
/*!40000 ALTER TABLE `product_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `url_alias`
--

DROP TABLE IF EXISTS `url_alias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `url_alias` (
  `url_alias_id` int(11) NOT NULL AUTO_INCREMENT,
  `query` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`url_alias_id`),
  KEY `query` (`query`),
  KEY `keyword` (`keyword`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `url_alias`
--

LOCK TABLES `url_alias` WRITE;
/*!40000 ALTER TABLE `url_alias` DISABLE KEYS */;
INSERT INTO `url_alias` VALUES (1,'category_id=2','toppery');
/*!40000 ALTER TABLE `url_alias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-19 13:34:04
