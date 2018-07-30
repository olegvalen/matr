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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(11,2) DEFAULT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (61,2,10,12,1,3180.00);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
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
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `sum` decimal(11,2) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (11,2,1,2300.00,'2018-07-25 13:04:01'),(12,2,1,2300.00,'2018-07-25 13:05:03');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (12,1,7,1,2300.00);
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
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
INSERT INTO `product` VALUES (1,2,'Матрас топпер супер мягкий гипоаллергенный Облако','matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh-1.jpg',1390.00,1,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-super-myagkiy-gipoallergennyy-iskusstvennyy-puh'),(2,2,'Матрас топпер гипоаллергенный экстра плюш стеганный','matras-topper-gipoallergennyy-ekstra-plyush-stegannyy-1.jpg',1930.00,2,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-gipoallergennyy-ekstra-plyush-stegannyy'),(3,2,'Матрас топпер Пад','matras-topper-pad-1.jpg',1680.00,3,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-pad'),(4,2,'Матрас топпер королевский плюш','matras-topper-korolevskiy-plyush-1.jpg',1680.00,4,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-korolevskiy-plyush'),(5,2,'Матрас топпер супер мягкий гипоаллергенный','matras-topper-super-myagkiy-gipoallergennyy-1.jpg',1930.00,5,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-super-myagkiy-gipoallergennyy'),(6,2,'Матрас топпер полиэстер','matras-topper-polyester-1.jpg',1710.00,6,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-polyester'),(7,2,'Матрас топпер белый плюш','matras-topper-belyy-plyush-1.jpg',2430.00,7,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-belyy-plyush'),(8,2,'Матрас топпер Котон Топ','matras-topper-cotton-top-1.jpg',3100.00,8,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-cotton-top'),(9,2,'Матрас топпер Дрим гипоаллергенный','matras-topper-dream-gipoallergennyy-1.jpg',2600.00,9,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-dream-gipoallergennyy'),(10,2,'Матрас топпер Эмоли гипоаллергенный','matras-topper-emoli-gipoallergennyy-1.jpg',2600.00,10,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-emoli-gipoallergennyy'),(11,2,'Матрас топпер экстра плюш люкс','matras-topper-ekstra-plyush-lux-1.jpg',2320.00,11,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-ekstra-plyush-lux'),(12,2,'Матрас топпер плюш премиум','matras-topper-plyush-premium-1.jpg',2860.00,12,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-plyush-premium'),(13,2,'Матрас топпер мини-перо','matras-topper-mini-pero-1.jpg',5860.00,13,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-mini-pero'),(14,2,'Матрас топпер натуральное гусинное перо','matras-topper-naturalnoe-gusinnoe-pero-1.jpg',2900.00,14,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-naturalnoe-gusinnoe-pero'),(15,2,'Матрас топпер натуральное утинное перо','matras-topper-naturalnoe-utinnoe-pero-1.jpg',2860.00,15,1,0,'2018-05-07 17:18:42','2018-05-07 17:18:43','matras-topper-naturalnoe-utinnoe-pero');
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
INSERT INTO `product_description` VALUES (1,1,'Матрас топпер супер мягкий гипоаллергенный искусственный пух','&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;div&gt;Если вы хотите каждую ночь ощущать чувство изумительного комфорта и невероятной неги, обратите внимание на эту модель. &lt;b&gt;Недорогие матрасы топперы&lt;/b&gt;, толщиной всего в 5 см, превратят ваш сон в настоящее блаженство.&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Наполнение матраса ничем не отличается от натурального гусиного пуха. Вы высоко оцените возможность каждую ночь наслаждаться облачной мягкостью этой модели.&lt;/div&gt;&lt;div&gt;Тонкие беспружинные матрасы способны превратить любую поверхность спального места в роскошное и комфортное ложе. Искусственный пух прекрасно удерживает ваше тело во время сна, позволяя ему максимально расслабиться и отдохнуть.&lt;/div&gt;&lt;div&gt;Чехол матраса имеет ряд преимуществ:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;к нему приятно прикасаться;&lt;/li&gt;&lt;li&gt;он хорошо пропускает воздух;&lt;/li&gt;&lt;li&gt;поверхность материала имеет антиаллергенные и антибактериальные свойства;&lt;/li&gt;&lt;li&gt;специальное покрытие защищает от появления пылевых клещей и грибка;&lt;/li&gt;&lt;li&gt;на чехле имеются прочные фиксаторы для крепления топпера;&lt;/li&gt;&lt;li&gt;особая техника прошивки чехла не позволяет воздушному наполнителю сбиваться в комки или смещаться.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;Чехол матраса, это его «лицо». Эта модель будет великолепно гармонировать с любым интерьером.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Матрасы Облако выгодно отличаются от других похожих моделей по цене. Вы можете &lt;b&gt;купить топперы недорого&lt;/b&gt;, но при этом получить безупречное качество и здоровый сон.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Тонкие матрасы на кровать не требуют особого и сложного ухода. Они прекрасно очищаются в стиральной машине, не теряя при этом своих достоинств.&amp;nbsp;&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – холлофайбер.&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Почему выгодно приобрести эту модель:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;легко ухаживать;&lt;/li&gt;&lt;li&gt;удобно хранить и перевозить;&lt;/li&gt;&lt;li&gt;удивительный комфорт и защитные свойства матраса обеспечивают спокойный и безопасный сон даже самым маленьким детям;&lt;/li&gt;&lt;li&gt;можно купить топперы недорого и сделать приятный и полезный подарок своим родным и близким;&lt;/li&gt;&lt;li&gt;матрас не теряет своего элегантного вида и формы даже при длительной эксплуатации;&lt;/li&gt;&lt;li&gt;гарантированное качество всех материалов;&lt;/li&gt;&lt;li&gt;чехол хорошо пропускает воздух, обеспечивая вентиляцию наполнителя.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;К этим несомненным достоинствам необходимо прибавить еще одно, самое важное – каждую ночь вы будете засыпать с ощущением свежести и невесомости.&lt;/div&gt;&lt;h3&gt;Где купить&amp;nbsp;&lt;/h3&gt;&lt;div&gt;&lt;b&gt;Где купить тонкий матрас недорого&lt;/b&gt;? В нашем интернет-магазине вы можете подобрать топпер необходимого вам размера. Купите матрас, не выходя из дома. Мы доставляем наши товары во все города Украины.&amp;nbsp;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Twin&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Full&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Queen&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;King&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;','Матрас топпер супер мягкий гипоаллергенный Облако недорого | Matrasovich.com.ua','Матрас топпер супер мягкий гипоаллергенный Облако','Этот тонкий недорогой матрас по наполнению ничем не отличается от натурального гусиного пуха и способен превратить любую поверхность спального места в роскошное и комфортное ложе. Чехол из холлофайбера. Наполнитель - искусственный пух. (098) 682-36-17','Матрас топпер, гипоаллергенный, пух, раскладной, недорого'),(2,1,'Матрас топпер гипоаллергенный экстра плюш стеганный','&lt;div&gt;&lt;div&gt;Если вы, просыпаясь по утрам, чувствуйте себя «разбитым», бессильным и угрюмым – самое время задуматься о качестве вашего сна. Иногда у нас нет возможности купить новую удобную кровать или диван. В этом случае можно приобрести &lt;b&gt;недорого мягкие матрасы&lt;/b&gt;.&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Самым большим преимуществом этой линейки моделей можно назвать уникальный по качеству наполнитель. Искусственный пух ни в чем не уступает гусиному. Обволакивающая мягкость матраса обеспечит вам прекрасный отдых каждую ночь.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Многие колеблются с выбором – какой &lt;b&gt;жесткий или мягкий матрас&lt;/b&gt; будет комфортней для сна. Можно решить эту проблему довольно легко. &lt;b&gt;Мягкие тонкие матрасы на диван&lt;/b&gt; позволяют гармонично сочетать два этих качества.&lt;/div&gt;&lt;div&gt;Жесткая поверхность старого спального места послужит хорошей опорой для «нежной облачности» плюшевых мягких матрасов.&lt;/div&gt;&lt;div&gt;Используя этот матрас можно не только регулировать жесткость, а также выравнивать дефекты спальной поверхности. Матрас позволит вам без особых финансовых напряжений значительно улучшить качество сна.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Одна из приятных особенностей тонких мягких топперов – их компактность. Матрас удобно возить в машине. Теперь вы можете насладиться прекрасным и крепким сном на природе или на даче.&amp;nbsp;&lt;/div&gt;&lt;div&gt;&lt;b&gt;Недорогие мягкие матрасы&lt;/b&gt;, это как раз тот случай, когда качество превосходит стоимость.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Специальная конструкция и метод двойных швов позволяет наполнению матраса не сбиваться и не комкаться даже после стирки. Дайте матрасу просохнуть, и вы увидите, что он нисколько не пострадал от встречи со стиральной машиной. Матрас не требует никаких особых условий при эксплуатации.&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – микрофибра.&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Покупая недорого мягкие матрасы, высота которых всего 5 см, вы получаете отменное качество. Это только одно из основных преимуществ. Рассмотрим другие:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;самый мягкий матрас из линейки топперов;&lt;/li&gt;&lt;li&gt;наполнитель и оболочка – экологически чистый продукт, не взывающий аллергию;&lt;/li&gt;&lt;li&gt;легко перевозить и хранить;&lt;/li&gt;&lt;li&gt;имеются прочные и надежные фиксаторы для опоры;&lt;/li&gt;&lt;li&gt;просто ухаживать;&lt;/li&gt;&lt;li&gt;хорошо держит форму;&lt;/li&gt;&lt;li&gt;с помощью топпера можно утеплить игровое место для малыша.&lt;/li&gt;&lt;/ul&gt;&lt;h3&gt;Где купить?&lt;/h3&gt;&lt;div&gt;Мягкие матрасы купить достаточно просто. Разместите свою заявку в нашем интернет-магазине. Опытные консультанты свяжутся с вами и обсудят все детали покупки. Мы осуществляем доставку по всей территории страны.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 140х190, 140х200, 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;&lt;/div&gt;','Матрас топпер мягкий экстра плюш стеганный недорого | Matrasovich.com.ua','Матрас топпер мягкий экстра плюш стеганный','Этот тонкий мягкий матрас содержит уникальный по качеству наполнитель, не уступающий натуральному гусиному пуху. Обволакивающая мягкость матраса обеспечит прекрасный отдых каждую ночь. (098) 682-36-17','матрас топпер, гипоаллергенный, мягкий, плюш, стеганный, искусственный пух, раскладной, недорого'),(3,1,'Матрас топпер Пад','&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;div&gt;Что делать, если ваше спальное место доставляет вам дискомфорт и неудобство во время сна? Сегодня решить эту проблему довольно просто. &lt;b&gt;Тонкие матрасы топперы в Днепре&lt;/b&gt; придут вам на помощь и превратят старый диван и матрас в роскошное ложе.&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Почему вам необходимо купить тонкий матрас на диван? Эта модель поможет вам выровнять любую неровную спальную поверхность. Вы добавляете поверх дивана не просто матрас, а слой неимоверного комфорта и наслаждения.&lt;/div&gt;&lt;div&gt;Хотя у этой модели высота всего 3 см, она достойно справляется с проблемой улучшения спальной поверхности и повышения качества сна. Искусственный пух внутри изделия по своей мягкости и воздушности ни чем ни отличается от натурального пуха. Он хорошо пропускает воздух, прекрасно держит форму и дает ощущение прохлады и полного расслабления.&lt;/div&gt;&lt;div&gt;Оболочки матраса приятно касаться руками и телом. Она шелковистая, мягкая и очень прочная. Чехол матраса прошит специальным методом двойной иглы. Такая техника стежка не позволяет наполнению сбиваться или перемещаться.&lt;/div&gt;&lt;div&gt;Прочные угловые крепления зафиксируют этот легкий и мягкий матрас на любой спальной поверхности. Вам не придется беспокоиться, что топпер будет сползать или сдвигаться во время сна. Если вы хотите испытать ощущение, что вы спите на воздушных подушках, присмотритесь к достоинствам этой модели.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Уход за топпером Пад не требует никаких усилий. Матрас прекрасно очищается от грязи в стиральной машине. В процессе стирки он не деформируется и не сбивается.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – микрофибра.&amp;nbsp;&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Несмотря на небольшую высоту в 3 см, эта модель обладает целым набором неоспоримых преимуществ:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;любая старая спальная поверхность быстро становится областью расслабления и неги;&lt;/li&gt;&lt;li&gt;смело можно брать ребенка в кровать, так как топпер состоит из гипоаллергенных материалов;&lt;/li&gt;&lt;li&gt;здоровый сон защищен от пылевых клещей, сырости и грибка;&lt;/li&gt;&lt;li&gt;воздушный матрас легко и компактно складывается.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;И одно из самых важных достоинств – вы не экономите деньги, пытаясь урезать бюджет семьи, чтобы купить новое спальное место.&lt;/div&gt;&lt;h3&gt;Где купить&lt;/h3&gt;&lt;div&gt;&lt;b&gt;Где купить топпер в Днепре&lt;/b&gt;? В нашем интернет-магазине мы предлагаем огромный выбор спальных аксессуаров высочайшего качества. Выберите модель, соответствующую вашим запросам и сделайте онлайн-заявку. Для нас не имеет значения, в какой город доставить вашу покупку, в &lt;b&gt;Днепр&lt;/b&gt; или Ровно. Тонкие матрасы всегда поставляются в намеченный срок.&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div&gt;Twin&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div&gt;X-Long Twin&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;	&lt;/span&gt;99x203 см (для матрасов 90х200, 100х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Full&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Full XL&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;	&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x203 см (для матрасов 140х200)&lt;/div&gt;&lt;div&gt;Queen&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;King&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;','Матрас топпер Пад в Днепре, Киеве, Одессе, Харькове | Matrasovich.com.ua','Матрас топпер Пад','В этой модели искусственный пух внутри изделия по своей мягкости и воздушности ни чем не отличается от натурального пуха. Чехол шелковистый, мягкий и очень прочный. Прочные угловые крепления для фиксации на любой спальной поверхности. Днепр. (098) 682-36-','Матрас топпер, искусственный пух, днепр, недорого'),(4,1,'Матрас топпер королевский плюш','&lt;div&gt;&lt;div&gt;Если вы всю ночь ищете удобное для сна положение тела и не можете уснуть – ваше спальное место пора менять. Что делать, если это пока невозможно? Альтернативное решение – приобрести &lt;b&gt;недорого тонкие матрасы на диван&lt;/b&gt;.&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Высота этого матраса только 5 см, но он идеально подходит для комфортного отдыха и крепкого сна. Постелите матрас Топпер королевский плюш на старый и продавленный диван и вы сразу же увидите разницу.&lt;/div&gt;&lt;div&gt;Основное преимущество этого матраса состоит в том, что он может легко превращать старую мебель в царское ложе. Словно гусиный пух искусственный наполнитель придает топперу непревзойденную и обволакивающую мягкость. Вы погружаетесь, словно в облако, и парите в невесомости в течение сна.&lt;/div&gt;&lt;div&gt;Стоит обратить внимание на особую прошивку матраса. Вертикальные перегородки и метод двойной иглы удерживают наполнитель на месте и не дают ему сбиваться. Микрофибра очень приятна для телесного контакта. Она создает ощущение прохлады и свежести.&lt;/div&gt;&lt;div&gt;Матрас легко крепится на любое спальное место. Угловые фиксаторы не дают ему сдвигаться. Топпер может вдохнуть новую жизнь и в старый матрас. Просто постелите его сверху и закрепите.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Хорошая идея &lt;b&gt;купить недорогой матрас топпер&lt;/b&gt; в подарок на свадьбу, новоселье или рождение ребенка. Топпер королевский плюш обладает противогрибковыми свойствами и защитой от пылевого клеща. Все материалы модели экологически безопасны и не вызовут аллергию даже у самых маленьких деток.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Уход за матрасом не требует ни значительных усилий, ни дополнительных знаний. Его можно без опасений стирать в стиральной машине. Благодаря специальной технологии он не деформируется и не теряет своей мягкости. Оболочка матраса остается такой же гладкой и приятной на ощупь.&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – микрофибра.&lt;br&gt;&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Собираясь &lt;b&gt;купить тонкий матрас на диван&lt;/b&gt;, обратите внимание на несомненные преимущества этой модели:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;не теряет своей формы после нагрузок и стирки;&lt;/li&gt;&lt;li&gt;гипоаллергенный - подходит для сна детей;&lt;/li&gt;&lt;li&gt;топпер невероятно мягкий и приятный;&lt;/li&gt;&lt;li&gt;чехол имеет антибактериальное покрытие;&lt;/li&gt;&lt;li&gt;удобно перевозить;&lt;/li&gt;&lt;li&gt;легко стирается;&lt;/li&gt;&lt;li&gt;исправляет неровности, регулирует жесткость спального места;&lt;/li&gt;&lt;li&gt;прекрасный подарок родным и близким людям.&lt;/li&gt;&lt;/ul&gt;&lt;h3&gt;Где купить?&lt;/h3&gt;&lt;div&gt;Если вы решили &lt;b&gt;купить топпер в интернет-магазине дешево&lt;/b&gt; – делайте заявку на нашем сайте. Мы предлагаем доставку в любой город страны и гарантируем высокое качество наших товаров.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;/div&gt;&lt;p&gt;Фактические размеры матрасов:&lt;/p&gt;&lt;p&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/p&gt;&lt;p&gt;X-Long Twin &lt;span style=&quot;white-space:pre&quot;&gt;	&lt;/span&gt;99x203 см (для матрасов 90х200, 100х200)&lt;/p&gt;&lt;p&gt;Full &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;/p&gt;&lt;p&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/p&gt;&lt;p&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/p&gt;','Матрас топпер недорого королевский плюш в интернет-магазине | Matrasovich.com.ua','Матрас топпер королевский плюш','Этот недорогой матрас топпер королевский плюш содержит наполнитель, придающий непревзойденную и обволакивающую мягкость. Особая прошивка матраса, удерживающая наполнитель от перемещений внутри изделия. (098) 682-36-17','Матрас топпер, недорого, интернет-магазин\r\n'),(5,1,'Матрас топпер супер мягкий гипоаллергенный','&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;/p&gt;&lt;p&gt;Комфортный сон – залог здоровья, энергии и прекрасного настроения. Можно много читать и смотреть видео о пользе пружинных ортопедических матрасов. Но что делать, если такой матрас уже есть, но спать на нем стало не так комфортно как раньше? &lt;b&gt;Ортопедические матрасы из холлофайбера&lt;/b&gt; способны значительно улучшить сложившуюся ситуацию.&lt;/p&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;p&gt;Эта модель матраса покоряет своей удивительной мягкостью. Искусственный пух нежно обволакивает ваше тело и помогает расслабиться. Всего 5 см матраса смогут кардинально поменять ваше представление о здоровом и крепком сне.&lt;/p&gt;&lt;p&gt;К чехлу топпера приятно прикасаться, он нежный и гладкий. Но это не единственное его достоинство. Специальная техника двойного шва, удерживает пушистое содержимое матраса на месте, и не дает ему перемещаться или сбиваться. Специальное покрытие обеспечивает материалу антибактериальные и гипоаллергенные свойства. Чехол прекрасно пропускает воздух, позволяя искусственному пуху буквально «дышать».&lt;/p&gt;&lt;p&gt;Вы можете подобрать и &lt;b&gt;купить матрас холлофайбер в Киеве&lt;/b&gt; именно того размера, который вам необходим. Топпер можно использовать для улучшения любого спального места. Закрепите его при помощи боковых фиксаторов и ваше новое королевское ложе готово. Позвольте себе несравненное удовольствие спать в облаках!&amp;nbsp;&lt;/p&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;p&gt;Тонкие и мягкие матрасы из искусственного пуха выгодно отличаются от своих пружинных собратьев. Их не надо постоянно переворачивать с места на место для проветривания. Они не собирают пыль и не имеют вышедших из строя пружин.&lt;/p&gt;&lt;p&gt;По мере загрязнения загружайте их в стиральную машину, а потом сушите естественным способом. Во время стирки матрас не деформируется и не теряет своей уникальной мягкости.&amp;nbsp;&lt;/p&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – холлофайбер.&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;p&gt;Основные преимущества этой модели:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;простой уход;&lt;/li&gt;&lt;li&gt;удобная транспортировка;&lt;/li&gt;&lt;li&gt;абсолютная безопасность для детей и взрослых;&lt;/li&gt;&lt;li&gt;доступная цена;&lt;/li&gt;&lt;li&gt;высокая степень износостойкости;&lt;/li&gt;&lt;li&gt;антибактериальная защита;&lt;/li&gt;&lt;li&gt;удобная фиксация;&lt;/li&gt;&lt;li&gt;безупречное качество;&lt;/li&gt;&lt;li&gt;особая элегантность изделия премиум класса.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Этот супер мягкий гипоаллергенный топпер создаст уголок теплоты и уюта в вашей квартире.&lt;/p&gt;&lt;h3&gt;Где купить&amp;nbsp;&lt;/h3&gt;&lt;p&gt;&lt;b&gt;Где купить матрас холлофайбер в Киеве&lt;/b&gt;? В нашем интернет-магазине подберите модель, которая вам понравилась. Сделайте заявку онлайн. А мы в указанные сроки доставим вашу покупку прямо в ваш город.&lt;/p&gt;&lt;div style=&quot;&quot;&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Twin&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Full&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Queen&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;King&amp;nbsp;&lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;','Матрас топпер супер мягкий с холлофайбером в Киеве | Matrasovich.com.ua','Матрас топпер супер мягкий с холлофайбером','Эта модель матраса с холлофайбером покоряет своей удивительной мягкостью. Искусственный пух нежно обволакивает ваше тело и помогает расслабиться. Всего 5 см матраса смогут кардинально поменять ваше представление о здоровом и крепком сне. Киев. (098) 682-3','Матрас топпер, супер мягкий, холлофайбер, Киев'),(6,1,'Матрас топпер полиэстер','&lt;div&gt;&lt;div&gt;Комфорт и полноценное расслабление во время сна – важная составляющая здорового образа жизни. Если вы просыпаетесь с плохим настроением и полностью «разбитым» телом, пора задуматься о том, как улучшить свое спальное место. &lt;b&gt;Тонкие складные матрасы для диванов&lt;/b&gt; прекрасно справятся с этой задачей.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Матрас топпер полиэстер призван превратить ваш ночной сон в бесконечное блаженство. Вам не захочется просыпаться, а поднявшись с кровати, будете чувствовать прилив бодрости и энергии.&amp;nbsp;&lt;/div&gt;&lt;div&gt;&lt;b&gt;Тонкие складные топперы&lt;/b&gt; – прекрасное решение для тех, кто не может позволить себе более дорогостоящий матрас или покупку нового дивана. Матрас прекрасно фиксируется на любой спальной поверхности при помощи прочных угловых креплений. Это позволяет вам спокойно спать, не волнуясь, что матрас сместиться или собьется.&lt;/div&gt;&lt;div&gt;Наполнение матраса подобно натуральному пуху. Топпер воздушный как облако и мягкий, словно морская волна. Просто удивительно, как матрас высотой в 5 см, может обеспечить такой невероятный комфорт и блаженство.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Вы можете купить &lt;b&gt;тонкий матрас&lt;/b&gt; 160х200 &lt;b&gt;недорого&lt;/b&gt; и получить комфортное и уютное место для вашего сна. Матрас выглядит очень современно, что делает его стильным украшением вашей комнаты.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Уход за матрасом очень прост. Он не деформируется и не съеживается во время машинной стирки. Топпер компактно складывается, его легко хранить и перевозить – он не теряет своей формы и внешнего вида.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – 100 % полиэстер.&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;&lt;b&gt;Тонкий складной матрас&lt;/b&gt; имеет ряд преимуществ:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;гарантированное качество изделия;&amp;nbsp;&lt;/li&gt;&lt;li&gt;специальная обработка матраса делает его неуязвимым для пылевого клеща и плесени;&lt;/li&gt;&lt;li&gt;прекрасный внешний вид;&lt;/li&gt;&lt;li&gt;не вызывает аллергии, его можно использовать для сна самых маленьких членов семьи;&lt;/li&gt;&lt;li&gt;боковые фиксаторы прочно удерживают матрас на любой поверхности;&lt;/li&gt;&lt;li&gt;приятный для тела чехол из полиэстера, прошит методом двойной иглы – это не дает смещаться и сбиваться воздушному наполнителю;&lt;/li&gt;&lt;li&gt;матрас хорошо держит форму даже при интенсивной нагрузке.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;И еще одно важное преимущество – вы может приобрести тонкие матрасы на диван недорого в качестве подарка для юбилея, свадьбы, новоселья или любого другого знаменательного дня.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Где купить&amp;nbsp;&lt;/h3&gt;&lt;div&gt;&lt;b&gt;Где купить тонкий матрас недорого&lt;/b&gt;? Посетите наш интернет-магазин. Здесь представлено множество аксессуаров для сна современного дизайна и гарантированного качества. Мы доставим вашу покупку прямо вам на дом.&amp;nbsp;&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;&lt;/div&gt;','Матрас топпер складной полиэстер недорого | Matrasovich.com.ua','Матрас топпер полиэстер складной','Этот тонкий складной матрас - прекрасное решение для тех, кто не может позволить себе более дорогостоящий матрас. Наполнение подобно натуральному пуху. Топпер воздушный как облако и мягкий, как морская волна. Стильный и недорогой матрас. (098) 682-36-17\r\n','Матрас топпер, полиэстер, недорого, складной\r\n'),(7,1,'Матрас топпер белый плюш','&lt;div&gt;Если вы устали спать на неровной поверхности и хотите улучшить свое спальное место, &lt;b&gt;купите матрас футон&lt;/b&gt;. Топпер толщиной всего 5 см избавит вас от бессонных ночей и подарит здоровый и крепкий сон.&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Тонкий матрас на диван для сна в Киеве приобрести довольно легко. Зайдите на наш сайт, здесь вы можете получить дополнительную информацию о товаре, оформить заказ онлайн или по телефону. Вы сможете &lt;b&gt;купить футон в Киеве&lt;/b&gt;, даже не выходя из дома.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Оболочка из микрофибры приятная на ощупь, мягкая и бесшумная. Шелковистая поверхность хорошо пропускает воздух, обеспечивает прекрасную вентиляцию наполнителя матраса. Чехол хорошо держит форму и вес тела.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Основная особенность этого топпера – напоминающая гусиный пух начинка. Этот плотный, но невероятно мягкий плюшевый наполнитель превратит неудобное и старое спальное место в роскошное ложе. Искусственный пух обеспечит исключительный комфорт и здоровый сон.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Гипоаллергенный материал чехла и наполнителя экологически чист и не вызывает аллергических реакций. Топпер подходит для спокойного и безопасного сна новорожденных.&amp;nbsp;&amp;nbsp;&lt;/div&gt;&lt;div&gt;Складной тонкий матрас для дивана удобно хранить. Его также можно использовать для обустройства места для игр детей.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Специальные перегородки матраса, выполнены методом двойной иглы. Это позволяет не бояться смещения внутренних слоев наполнителя в процессе стирки изделия. Не оставляйте футон в барабане машинки надолго, чтобы не допустить образование складок на поверхности чехла.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – микрофибра&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;тонкие матрасы обладают неоспоримыми преимуществами, особенно если рассматривать их в связке – &quot;цена + качество&quot;;&lt;/li&gt;&lt;li&gt;выравнивает продавленную или деформированную поверхность спального места;&lt;/li&gt;&lt;li&gt;можно &lt;b&gt;купить футон недорого&lt;/b&gt; и получить при этом максимум комфорта во время сна;&lt;/li&gt;&lt;li&gt;матрас легко перевозить и хранить;&lt;/li&gt;&lt;li&gt;футон с успехом используют в качестве теплой подстилки на пикнике или в туристической палатке;&lt;/li&gt;&lt;li&gt;экологически безопасен;&lt;/li&gt;&lt;li&gt;легко стирается;&lt;/li&gt;&lt;li&gt;не теряет форму после нагрузки и стирки;&lt;/li&gt;&lt;li&gt;обладает ортопедическим эффектом.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;Даже если вы не живете в Киеве, &lt;b&gt;купить футон матрас&lt;/b&gt; на нашем сайте выгодно и удобно. Мы осуществляем доставку по всей территории страны. Наши клиенты могут быть абсолютно уверены в безупречном качестве всех товаров. Вместе с матрасом они приобретают комфортный и здоровый сон.&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;&lt;/div&gt;','Матрас футон белый плюш в Днепре, Киеве, Одессе, Харькове | Matrasovich.com.ua','Матрас топпер футон белый плюш','Матрас футон белый плюш в Киеве. Оболочка из микрофибры. Напоминающий гусиный пух наполнитель. Этот плюшевый матрас превратит неудобное ложе в роскошное место для сна. (098) 682-36-17','Матрас топпер, футон, Киев, недорого'),(8,1,'Матрас топпер Котон Топ','&lt;p&gt;Этот тонкий матрас легко превращает любое спальное место в зону комфорта и здорового сна. Высота &lt;b&gt;ортопедического матраса 5 см&lt;/b&gt;, но он удивительно мягок и помогает получить максимальное расслабление, и отдых.&amp;nbsp;&lt;/p&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;p&gt;Наиболее часто принимают решение &lt;b&gt;купить тонкий матрас 160х200&lt;/b&gt;, чтобы дать «второй шанс» старой мебели. Он прекрасно выравнивает изношенный диван, помогает обновить старый матрас, делает менее жесткой кровать.&amp;nbsp;&lt;/p&gt;&lt;p&gt;При изготовлении этой модели, производитель использует только безопасные, экологически чистые материалы. Это очень важно для тех, кто страдает от аллергических реакций.&lt;/p&gt;&lt;p&gt;Матрас топпер «Котон Топ» отличается долговечностью, практичностью и удобством в использовании. При этом он выглядит роскошно и дорого. Если вы еще не решили, что подарить на свадьбу или новоселье, можете смело &lt;b&gt;купить матрас высотой 5 см&lt;/b&gt;. Его легко транспортировать, к тому же такой подарок поможет создать в доме атмосферу тепла и уюта.&lt;/p&gt;&lt;p&gt;Основное преимущество этого топпера – невероятно мягкая, похожая на гусиный пух начинка. Она прекрасно держит форму, не сбивается со временем и не теряет своих уникальных свойств во время стирки.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Еще одна немаловажная особенность – прочный двойной чехол. Сверху он изготовлен из натурального хлопка, снизу – стопроцентный полиэстер. Чехол хорошо держит наполнитель, при этом он мягкий и приятный на ощупь.&lt;/p&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;p&gt;Красиво простеганный матрас имеет двойной шов прошивки. Это не позволяет смещаться искусственному пуху во время сна. Многие помнят, как приходилось долго взбивать перед сном пуховые «бабушкины» перины. Современный топпер прекрасно держит форму и не требует дополнительных усилий, чтобы обеспечить покой и негу во время отдыха.&lt;/p&gt;&lt;p&gt;Смело закладывайте футон в стиральную машинку – он не потеряет своих ортопедических свойств и эстетичного вида.&amp;nbsp;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – 100 % хлопок и 100 % полиэстер.&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;p&gt;Достоинства, которые не могут не нравиться:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;оптимальное соотношение цены и качества;&lt;/li&gt;&lt;li&gt;простой уход;&lt;/li&gt;&lt;li&gt;комфорт, прочность, гипоаллергенность;&amp;nbsp;&lt;/li&gt;&lt;li&gt;помогает хорошо выспаться на любой продавленной или жесткой поверхности.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Вы можете зайти на наш сайт и &lt;b&gt;купить матрас высотой 5 см 160х200&lt;/b&gt; или других размеров. Мы гарантируем отменное качество наших матрасов и осуществляем их доставку по территории страны. Свяжитесь с нами для получения более подробной информации.&lt;/p&gt;&lt;p&gt;Фактические размеры матрасов:&lt;br&gt;&lt;/p&gt;&lt;p&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/p&gt;&lt;p&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/p&gt;&lt;p&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/p&gt;&lt;p&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/p&gt;','Матрас топпер высотой 5 см 160х200 Котон Топ в Днепре, Киеве | Matrasovich.com.ua','Матрас топпер Котон Топ','Этот матрас топпер высотой всего 5 см и размером 160х200 может дать &quot;второй шанс&quot; вашему старому дивану. Прекрасно выравнивает изношенный диван, помогает обновить старый матрас, делает менее жесткой кровать. (098) 682-36-17','Матрас топпер, высота 5 см, 160х200'),(9,1,'Матрас топпер Дрим гипоаллергенный','&lt;div&gt;&lt;div&gt;Толщина этой модели всего 5 см, но его эффективность и функциональность поможет обеспечить спальному месту удивительный комфорт и ортопедические свойства. &lt;b&gt;Тонкий ортопедический матрас на диван&lt;/b&gt; подарит здоровый сон и ежедневное бодрое утро.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;К сожалению, купить дорогостоящий матрас для полноценного ночного отдыха не всегда возможно. &lt;b&gt;Матрас топпер с ортопедическим эффектом&lt;/b&gt; поможет наилучшим образом решить проблему.&lt;/div&gt;&lt;div&gt;Матрас топпер «Дрим» обладает неоспоримыми достоинствами. Искусственный пух начинки, словно облако обволакивает вас, позволяя насладиться блаженством комфортного сна. Микрофибра чехла отличается повышенной прочностью. Чехол очень мягкий и приятный для тела. Сон на таком матрасе доставит истинное удовольствие.&lt;/div&gt;&lt;div&gt;Очень важное преимущество – антибактериальная защита и гипоаллергенные свойства матраса. Он прекрасно подходят для семей, где растут малыши. Вы можете смело брать ребенка к себе в кровать – его сон будет безмятежным и безопасным.&lt;/div&gt;&lt;div&gt;Если вам необходимо убрать неровности и дефекты спальной поверхности, просто постелите матрас топпер на диван. Вы будете поражены, как быстро произойдет превращение «старой развалюхи», в роскошное ложе.&lt;/div&gt;&lt;div&gt;Вы можете &lt;b&gt;купить тонкий ортопедический матрас&lt;/b&gt; в подарок на юбилей или любой другой праздник. Будьте уверены, что вас будут вспоминать с благодарностью каждую ночь.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Тонкий матрас на диван выглядит невероятно стильно и элегантно. Может показаться, что с такого изделия придется сдувать пылинки. Однако это не так. Вы можете использовать для очистки матраса стиральную машину. Это не испортит ни его внешних достоинств, ни внутренней начинки.&lt;/div&gt;&lt;div&gt;Матрас удобно перевозить и хранить. Он складывается компактно. Его чехол не мнется, а внутреннее наполнение не сбивается.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – микрофибра.&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Основные достоинства тонкого матраса:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;уникальный метод прошивки чехла, обеспечивает равномерное распределение наполнителя в течение всего срока эксплуатации;&lt;/li&gt;&lt;li&gt;специальные крепления надежно фиксируют матрас;&lt;/li&gt;&lt;li&gt;несложный уход;&lt;/li&gt;&lt;li&gt;матрас может быть использован для спального места ребенка;&lt;/li&gt;&lt;li&gt;выравнивает и улучшает любую поверхность.&lt;/li&gt;&lt;/ul&gt;&lt;h3&gt;Где купить&lt;/h3&gt;&lt;div&gt;На нашем сайте представлен большой выбор моделей. Оформите заказ онлайн, и мы привезем покупку прямо вам на дом. Мы осуществляем доставку и в другие города Украины.&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;&lt;/div&gt;','Матрас топпер ортопедический Дрим гипоаллергенный | Matrasovich.com.ua','Матрас топпер Дрим гипоаллергенный','Матрас топпер с ортопедическим эффектом содержит искусственный пух. Чехол из микрофибры отличается повышенной прочностью и комфортом. Антибактериальная защита и гипоаллергенные свойства. (098) 682-36-17','Матрас топпер, гипоаллергенный, ортопедический'),(10,1,'Матрас топпер Эмоли гипоаллергенный','&lt;div&gt;&lt;div&gt;Всего три сантиметра этого матраса способны преобразовать старый и неудобный диван в комфортабельное место для сна. Раскладными диванами пользуются многие. Иногда отсутствие свободных средств или маленькие габариты квартиры вносят свои коррективы. Получается дилемма – сидеть на диване удобно, выглядит он красиво, а вот выспаться на нем невозможно. &lt;b&gt;Матрас мягкий тонкий&lt;/b&gt; поможет выйти из этого положения.&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Гипоаллергенный топпер Эмоли может значительно продлить «службу» старого дивана. Он скроет стыки между подушками, сделает спальную поверхность ровной и изумительно мягкой. Его легко зафиксировать специальными фиксаторами и он не будет скользить и сбиваться. Практичная экономичность этой модели станет идеальным решением, если вы не можете поменять спальное место.&lt;/div&gt;&lt;div&gt;Специальные свойства чехла не допускают появления сырости внутри наполнителя, а также защищают матрас от колоний грибка и пылевых клещей. Микрофибра хорошо пропускает воздух, что обеспечивает прекрасную вентиляцию изделия.&lt;/div&gt;&lt;div&gt;Особое значение для семьи, где растут малыши, имеет гипоаллергенность и экологическая чистота матраса. Постелив &lt;b&gt;мягкий матрас на диван&lt;/b&gt;, вы сделаете детский сон безопасным и сладким.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Воздушный, исключительно нежный наполнитель напоминает по своему составу натуральный пух. Спать на нем просто блаженство – ваше уставшее за день тело максимально расслабится и отдохнет.&lt;/div&gt;&lt;div&gt;Вы можете &lt;b&gt;купить мягкий матрас на диван&lt;/b&gt; для улучшения сна на старом матрасе. Просто расстелите его и закрепите. Вы сразу же почувствуйте разницу и оцените «новые свойства» вашей кровати.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Тонкий матрас на диван очень удобен в эксплуатации. Он прекрасно помещается в стиральную машинку и стирается в ней в обычном режиме. При этом он не деформируется и не теряет своей мягкости.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – микрофибра.&amp;nbsp;&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Важные достоинства этой модели:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;изумительная мягкость при небольшой высоте;&lt;/li&gt;&lt;li&gt;можно с успехом использовать на любой спальной поверхности;&lt;/li&gt;&lt;li&gt;вертикальные перегородки обеспечивают равномерное распределение наполнителя.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;Этот малобюджетный матрас позволит вам долгое время экономить на покупке новой мебели.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Где купить мягкий матрас на диван?&lt;/h3&gt;&lt;div&gt;Купить тонкий мягкий матрас вы можете у нас в интернет-магазине. Мы предлагаем своим клиентам только товары, качество которых проверенно временем.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;/div&gt;&lt;p&gt;Фактические размеры матрасов:&lt;/p&gt;&lt;p&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/p&gt;&lt;p&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/p&gt;&lt;p&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/p&gt;&lt;p&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/p&gt;','Матрас топпер мягкий Эмоли гипоаллергенный | Matrasovich.com.ua','Матрас топпер Эмоли гипоаллергенный мягкий','Этот мягкий тонкий матрас на диван может продлить &quot;службу&quot; старого матраса или дивана. Скроет стыки между поодушками, сделает спальную поверхность ровной и мягкой. Имеет специальные фиксаторы для крепления. Чехол из микрофибры. (098) 682-36-17','Матрас топпер, мягкий, гипоаллергенный\r\n'),(11,1,'Матрас топпер экстра плюш люкс','&lt;div&gt;&lt;div style=&quot;&quot;&gt;Этот тонкий, невероятно мягкий и плюшевый топпер превратит ваш продавленный диван в удобное и комфортное ложе. Вы сможете легко «обновить» старый матрас или избавить себя от сна на жесткой кровати. Выбирая матрас на диван для сна складной тонкий, вы получаете прекрасное самочувствие в течение дня.&lt;/div&gt;&lt;h3 style=&quot;&quot;&gt;Описание&lt;/h3&gt;&lt;div style=&quot;&quot;&gt;Матрас топпер экстра плюш люкс прекрасно подходит для обустройства проблемного спального места. Он имеет специальные фиксаторы, что позволяет ему прочно крепиться к любой поверхности.&amp;nbsp;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Искусственный пух наполнителя, словно теплые волны, окружает вас и убаюкивает. Вы снова вспомните, каким долгим и сладким может быть сон. Матрас рекомендован для людей с больными суставами и проблемной спиной.&amp;nbsp;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Супер мягкий наполнитель не скатывается, не сбивается, не деформируется со временем. Специальная конструкция изделия позволяют матрасу держать форму даже при интенсивных нагрузках. Сам чехол очень гладкий и бесшумный.&amp;nbsp;&lt;/div&gt;&lt;div style=&quot;&quot;&gt;Хранить матрас очень удобно. Высота его всего 5 см. Он компактно складывается, что позволяет брать его с собой на природу или на дачу. Отправляясь в отпуск, вы легко найдете место в вашей машине для целого матраса!&lt;/div&gt;&lt;h3 style=&quot;&quot;&gt;Уход&lt;/h3&gt;&lt;div style=&quot;&quot;&gt;Уход за матрасом довольно прост. Его можно смело стирать в машинке. Во время стирки вы можете использовать привычные для вас моющие средства. Ничего специального, чтобы очистить загрязнения, оболочке матраса не требуется.&lt;/div&gt;&lt;h3 style=&quot;&quot;&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – холлофайбер.&amp;nbsp;&lt;br&gt;&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3 style=&quot;&quot;&gt;Преимущества&lt;/h3&gt;&lt;div style=&quot;&quot;&gt;Почему эту модель нужно купить:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;мягкий наполнитель – обеспечит комфорт на долгие годы;&lt;/li&gt;&lt;li&gt;специальная конструкция прочно держит форму изделия;&lt;/li&gt;&lt;li&gt;материал чехла не поддается заражению клещом или грибком, он гипоаллергенный;&lt;/li&gt;&lt;li&gt;микрофибра – хорошо пропускает воздух, ваш матрас словно дышит;&lt;/li&gt;&lt;li&gt;матрас универсальный – его можно использовать дома, в отпуске, на даче.&lt;/li&gt;&lt;/ul&gt;&lt;h3 style=&quot;&quot;&gt;Где купить топпер с холлофайбером?&lt;/h3&gt;&lt;div style=&quot;&quot;&gt;На нашем сайте вам легко будет получить подробную информацию, ознакомиться с ценой. Вы можете купить топпер в интернет магазине не вставая с дивана. И не имеет значения, где вы живете. Можно одинаково просто оформить заявку и &lt;b&gt;купить тонкий матрас в Днепре&lt;/b&gt;, Киеве или Одессе. Мы доставляем свои товары в любые города Украины.&lt;/div&gt;&lt;h3 style=&quot;&quot;&gt;Отзывы&amp;nbsp;&lt;/h3&gt;&lt;div style=&quot;&quot;&gt;Напишите отзыв, если вы уже приобретали у нас эту модель. Удобен ли в эксплуатации &lt;b&gt;матрас из холлофайбера&lt;/b&gt;? Отзывы и комментарии клиентов – важная составляющая нашей работы.&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/div&gt;&lt;p&gt;Фактические размеры матрасов:&lt;/p&gt;&lt;p&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/p&gt;&lt;p&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/p&gt;&lt;p&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/p&gt;&lt;p&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/p&gt;','Матрас топпер с холлофайбером экстра плюш люкс в Днепре | Matrasovich.com.ua','Матрас топпер экстра плюш люкс холлофайбер','Этот матрас топпер прекрасно подходит для обустройства проблемного спального места. Он имеет специальные фиксаторы, что позволяет ему прочно крепиться к любой поверхности. Супер мягкий наполнитель не скатывается, не сбивается, не деформируется со временем','Матрас топпер, холлофайбер, Днепр, экстра плюш люкс'),(12,1,'Матрас топпер плюш премиум','&lt;div&gt;&lt;div&gt;Тонкие матрасы прочно завоевали широкую популярность и утвердились в качестве лидирующих аксессуаров для сна. &lt;b&gt;Тонкий матрас 160х200&lt;/b&gt; помогает исправить недостатки любой спальной поверхности и дает максимальный отдых уставшему телу.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Описание&amp;nbsp;&lt;/h3&gt;&lt;div&gt;У этой модели много неоспоримых достоинств. Ее высота всего 5 см, но это не мешает ей превращать старый и продавленный диван в роскошное место для комфортного сна и расслабляющей неги.&amp;nbsp;&lt;/div&gt;&lt;div&gt;&lt;b&gt;Мягкий ортопедический матрас&lt;/b&gt; выглядит элегантно и роскошно. Его внутренняя «начинка» так же хороша, как и внешний вид. Искусственный пух наполнения удивительно мягок и пушист. Вы чувствуйте себя словно на облаке – свободно и невесомо.&lt;/div&gt;&lt;div&gt;Чехол матраса изготовлен из современного и прочного материала. Он покрыт специальным антибактериальным покрытием, не вызывает аллергии, и не допускает появления плесени. Материал оболочки матраса имеет высокий показатель воздухопроницаемости, что обеспечивает вентиляцию изделия и положительно влияет на качество сна.&lt;/div&gt;&lt;div&gt;Удивительная конструкция матраса обеспечивает ему долговечность и прочность даже при интенсивных нагрузках. Чехол простеган методом двойного шва. Такая техника пошива обеспечивает равномерное распределение пушистого наполнителя.&lt;/div&gt;&lt;h3&gt;Уход&amp;nbsp;&lt;/h3&gt;&lt;div&gt;Ухаживать за матрасом довольно просто. Он не деформируется и не портится после машинной стирки. Сушится топпер естественным способом. Не стоит класть мокрый матрас на отопительные приборы или сушить его при помощи утюга.&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – микрофибра.&amp;nbsp;&lt;/li&gt;&lt;li&gt;Наполнитель – искусственный пух.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&amp;nbsp;&lt;/h3&gt;&lt;div&gt;&lt;b&gt;Ортопедический матрас топпер&lt;/b&gt; уникален и многофункционален.&amp;nbsp; Вот только некоторые из его достоинств:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;простой уход;&lt;/li&gt;&lt;li&gt;гипоаллергенные материалы;&lt;/li&gt;&lt;li&gt;прекрасно подходит для любой спальной поверхности;&lt;/li&gt;&lt;li&gt;непередаваемый комфорт и отдых во время сна;&lt;/li&gt;&lt;li&gt;бодрое и прекрасное настроение после пробуждения;&lt;/li&gt;&lt;li&gt;прочные боковые фиксаторы;&lt;/li&gt;&lt;li&gt;матрас идеально подходит для сна самых маленьких детей;&lt;/li&gt;&lt;li&gt;топпер компактно складывается и его можно брать на природу или на дачу.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;И еще одно преимущество – современный и стильный дизайн этой модели хорошо гармонирует с любым интерьером комнаты.&lt;/div&gt;&lt;h3&gt;Где можно &lt;b&gt;купить ортопедические тонкие матрасы на диван&lt;/b&gt;?&lt;/h3&gt;&lt;div&gt;&amp;nbsp;В нашем магазине мы предлагаем своим клиентам большой выбор матрасов высочайшего качества. Сделайте онлайн-заявку и мы доставим вашу покупку в любой город страны.&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;&lt;/div&gt;','Матрас топпер ортопедический  160х200 | Matrasovich.com.ua','Матрас топпер плюш премиум ортопедический','Этот мягкий ортопедический матрас выглядит элегантно и роскошно. Его внутренняя «начинка» так же хороша, как и внешний вид. Искусственный пух наполнения удивительно мягок и пушист. Вы почувствуйте себя словно на облаке – свободно и невесомо. (098) 682-36-','Матрас топпер, плюш, премиум, ортопедический, 160х200'),(13,1,'Матрас топпер мини-перо','&lt;div&gt;&lt;div&gt;Вы решили обновить старое спальное место и приобрести тонкий топпер? Не спешите. Мы можем предложить вам купить матрас 5 см и получить все достоинства полноценной перины. Матрас топпер мини-перо – инновационная разработка в линейке спальных аксессуаров с положительными &lt;b&gt;отзывами покупателей&lt;/b&gt;.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Эта модель выгодно отличается от других тонких матрасов натуральным наполнителем и выгодной ценой для изделия такого уровня.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Она содержит 95 % натурального утиного пера. Особую воздушность матрасу придает то, что перьевая начинка тщательно отсортирована – каждое перышко 2-4 см. Современная 15-ступенчатая очистка перьев полностью удаляет грязь и пыль. Перо очищается от аллергенов, не теряя своей невесомости.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Топпер плотно упакован для транспортировки. Достаньте его и распушите. Через пару часов перина полностью восстановит свою форму. Специальная конструкция равномерно распределяет перо внутри матраса и не дает ему перемещаться.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Если вы не знаете что лучше для сна мягкий или жесткий матрас – &lt;b&gt;купите тонкий матрас топпер&lt;/b&gt; мини-перо. Положите его на твердую поверхность дивана и таким образом создайте необходимый баланс жесткости. Перина прекрасно подходит для обновления старого матраса. При помощи креплений она прочно фиксируется и не сдвигается во время отдыха.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Поддерживать невероятную «пушистость» этой перины очень легко. Раз в неделю слегка взбивайте ее. Таким образом, вы придаете матрасу еще большую воздушность и равномерно распределяете наполнитель.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – хлопок.&lt;/li&gt;&lt;li&gt;Наполнитель – натуральное утиное перо.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Если вы не знаете, как определить в интернет-магазине какой матрас мягче – обратите свое внимание на Топпер мини-перо. Это самый мягкий и воздушный матрас из линейки ему подобных. Еще несколько преимуществ:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;натуральный чехол и наполнитель;&lt;/li&gt;&lt;li&gt;удобно хранить и перевозить;&lt;/li&gt;&lt;li&gt;защищен от появления плесени, пылевых клещей, грибка, гипоаллергенен;&lt;/li&gt;&lt;li&gt;матрас прекрасно подходит для блаженного сна ваших детей.&lt;/li&gt;&lt;/ul&gt;&lt;h3&gt;Где купить&amp;nbsp;&lt;/h3&gt;&lt;div&gt;Вы можете сделать онлайн-заявку на нашем сайте. Опытные специалисты помогут оформить покупку и спланировать доставку в любой город страны.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Отзывы&amp;nbsp;&lt;/h3&gt;&lt;div&gt;Напишите в комментариях, если вы уже счастливый обладатель этой модели. Понравился ли вам ортопедический матрас топпер? &lt;b&gt;Отзывы&lt;/b&gt; помогают формировать нашу товарную базу. Мы подбираем ассортимент магазина, ориентируясь на высокое качество и предпочтения наших покупателей.&lt;br&gt;&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;&lt;/div&gt;','Тонкий матрас топпер мини-перо отзывы | Matrasovich.com.ua','Матрас топпер мини-перо','Это прекрасный тонкий матрас из натуральных компонентов: хлопок и утиное перо. Перо тщательно отсортировано (не более 4 см) с 15-ступенчатой очисткой. Уникальный комфорт, мягкость, удовольствие от сна обеспечены. Положительные отзывы покупателей. (098) 68','Матрас топпер, тонкий, мини-перо, отзывы, натуральное утинное перо'),(14,1,'Матрас топпер натуральное гусинное перо','&lt;div&gt;&lt;div&gt;Если ваше спальное место не помогает максимально расслабиться во время сна, примите решение купить ортопедический топпер. Он сделает ваш сон полноценным и максимально комфортным.&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Высота матраса не превышает 5-ти сантиметров, но он словно облако дарит покой и поддержку уставшему телу. Ортопедические свойства воздушного топпера идеально подойдут для обустройства любой спальной поверхности. Это &lt;b&gt;лучшие мягкие матрасы&lt;/b&gt;, представленные в сегменте спальных аксессуаров.&lt;/div&gt;&lt;div&gt;Наполнение матраса – натуральное гусиное перо, прошедшее многоступенчатую очистку и тщательный отбор. Чехол матраса – 100% натуральный хлопок, плотность которого составляет 230 нитей на квадратный дюйм. Специальная прошивка и конструкция топпера равномерно распределяет перо и не позволяет ему сбиваться.&lt;/div&gt;&lt;div&gt;Основная особенность этой модели – матрас словно «дышит». Все натуральные материалы хорошо пропускают воздух, создавая ощущение сухости и свежести. Просыпаясь, вы будете чувствовать себя полностью отдохнувшим и энергичным.&lt;/div&gt;&lt;div&gt;Обустраивая свое спальное место, вы задумываетесь над тем, &lt;b&gt;какой матрас лучше – жесткий или мягкий&lt;/b&gt;.&amp;nbsp; Постелив шелковистый и удобный топпер на твердую поверхность, вы добьетесь «золотой» середины. Топпер превращает «убитый» диван или старый матрас в роскошное ложе.&lt;/div&gt;&lt;div&gt;&lt;b&gt;Цена матраса топпера&lt;/b&gt; позволяет купить его в качестве подарка. Доставьте радость своим близким – подарите им здоровый и крепкий сон.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Уход за матрасом не составит труда. Достаточно раз в неделю взбивать перину руками, чтобы придать ей воздушность и вернуть первоначальный вид.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – натуральный хлопок.&lt;br&gt;&lt;/li&gt;&lt;li&gt;Наполнитель – натуральное гусиное перо.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Рассматривая достоинства этой модели можно с уверенностью сказать, что &lt;b&gt;цена мягких матрасов&lt;/b&gt; довольно приятная. Такую покупку могут себе позволить и молодые семьи, и старшее поколение. Так же к достоинствам топпера можно отнести:&lt;/div&gt;&lt;ul&gt;&lt;li&gt;наполнение этого премиум класса;&lt;/li&gt;&lt;li&gt;простой уход;&lt;/li&gt;&lt;li&gt;надежные угловые фиксаторы;&lt;/li&gt;&lt;li&gt;безупречное качество;&lt;/li&gt;&lt;li&gt;непревзойденный комфорт;&lt;/li&gt;&lt;li&gt;защита от грибка и пылевых клещей.&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;Матрас гипоаллергенный, что позволяет использовать его для здорового и безмятежного сна ребенка.&lt;/div&gt;&lt;h3&gt;Где купить&amp;nbsp;&lt;/h3&gt;&lt;div&gt;На нашем сайте вы можете получить подробную консультацию, оформить заявку в режиме онлайн и заказать доставку прямо к себе домой. Мы осуществляем перевозки наших товаров по всей территории Украины.&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;&lt;/div&gt;','Матрас топпер натуральное гусиное перо. Цены. | Matrasovich.com.ua','Матрас топпер натуральное гусиное перо','Этот топпер - один из лучших тонких матрасов в своей ценовой категории. Чехол - натуральный хлопок, наполнитель - натуральное гусиное перо, прошедшее многоступенчатую очистку и отбор. Непревзойденный комфорт и нежная поддержка. (098) 682-36-17','Матрас топпер, натуральное гусиное перо, лучший, цены'),(15,1,'Матрас топпер натуральное утинное перо','&lt;div&gt;&lt;div&gt;Несмотря на высоту в 5 см этот потрясающий матрас превратит ваш диван в ложе, достойное королей. Мягкий, воздушный, шелковистый топпер позволит расслабиться и отдохнуть. Сон перестанет быть пыткой, а утром вы будете бодры и полны сил.&lt;/div&gt;&lt;h3&gt;Описание&lt;/h3&gt;&lt;div&gt;Матрас топпер натуральное утиное перо прекрасно подходит для улучшения любой спальной поверхности. С его помощью, можно легко скрыть дефекты спального места – продавленные пружины, ямы между подушками дивана. Положите матрас на диван и зафиксируйте его при помощи прочных креплений.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Наполнение матраса – натуральное утиное перо. С помощью инновационных технологий оно тщательно очищается и сортируется. Одинаковый размер утиных перьев придает изделию особую воздушность и пышность.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Чехол матраса из 100% натурального хлопка, плотность материала – 230 нитей на квадратный дюйм. Специальный метод двойной прошивки обеспечивает равномерное распределение перьев даже при длительной эксплуатации изделия.&amp;nbsp;&lt;/div&gt;&lt;div&gt;Натуральные составляющие матраса делают его мягким, приятным и безопасным для самых маленьких деток. Специальная обработка топпера защищает его от пылевых клещей и плесени. Все составляющие топпера обладают гипоаллергенными свойствами.&lt;/div&gt;&lt;div&gt;Просматривая &lt;b&gt;тонкие матрасы в интернет-магазине&lt;/b&gt;, обязательно обратите внимание на эту модель. Безупречное качество и комфорт этого топпера обеспечивают ему несомненное лидерство. Вы можете легко &lt;b&gt;купить топпер в Харькове&lt;/b&gt;, Сумах, Одессе или в любом другом городе даже не выходя из дома.&lt;/div&gt;&lt;h3&gt;Уход&lt;/h3&gt;&lt;div&gt;Уход за матрасом очень прост. Раз в неделю слегка взбивайте его руками. Так вы возвращаете изделию воздушность и мягкость.&amp;nbsp;&lt;/div&gt;&lt;h3&gt;Состав&amp;nbsp;&lt;/h3&gt;&lt;ol&gt;&lt;li&gt;Чехол – натуральный хлопок.&lt;/li&gt;&lt;li&gt;Наполнитель – натуральное утиное перо.&lt;/li&gt;&lt;/ol&gt;&lt;h3&gt;Преимущества&lt;/h3&gt;&lt;div&gt;Прежде чем &lt;b&gt;купить в интернете матрас топпер&lt;/b&gt;, внимательно присмотритесь к этой модели. Основные достоинства:&amp;nbsp;&lt;/div&gt;&lt;ul&gt;&lt;li&gt;легкий уход;&lt;/li&gt;&lt;li&gt;гарантированное качество;&lt;/li&gt;&lt;li&gt;хорошо пропускает воздух;&lt;/li&gt;&lt;li&gt;наполнитель и чехол из натуральных материалов;&lt;/li&gt;&lt;li&gt;защита от грибка и пылевых клещей;&lt;/li&gt;&lt;li&gt;легко хранить и транспортировать;&lt;/li&gt;&lt;li&gt;можно использовать для детей.&amp;nbsp;&lt;/li&gt;&lt;/ul&gt;&lt;div&gt;Вы можете преподнести этот матрас в качестве подарка, поверьте, вам будут благодарны очень долгое время.&lt;/div&gt;&lt;h3&gt;Где купить&amp;nbsp;&lt;/h3&gt;&lt;div&gt;Где можно &lt;b&gt;купить тонкие матрасы на диван в Харькове&lt;/b&gt;? На нашем сайте представлен большой выбор современных и удобных аксессуаров для сна. Оформите заявку онлайн и мы доставим покупку прямо в ваш город.&lt;br&gt;&lt;/div&gt;&lt;/div&gt;&lt;div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Фактические размеры матрасов:&lt;/div&gt;&lt;div&gt;Twin&lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;99x190 см (для матрасов 90х190, 100х190)&lt;/div&gt;&lt;div&gt;Full &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;137x190 см (для матрасов 140х190, 140х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;Queen &lt;span style=&quot;white-space: pre;&quot;&gt;		&lt;/span&gt;153x203 см (для матрасов 150х190, 160х190, 160х190, 160х200)&lt;br&gt;&lt;/div&gt;&lt;div&gt;King &lt;span style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;198x203 см (для матрасов 200х200)&lt;/div&gt;&lt;/div&gt;','Матрас топпер натуральное утиное перо Харькове. Интернет-магазин. | Matrasovich.com.ua','Матрас топпер натуральное утиное перо','Матрас топпер натуральное утиное перо в Харькове.  Роскошный и теплый топпер для любого времени года. Специальная конструкция перегородок для придания пушистости и равномерного распределения наполнителя. Интернет-магазин. (098) 682-36-17','Матрас топпер, натуральное утиное перо, харьков, интернет-магазин');
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
INSERT INTO `product_option` VALUES (1,3,1390.00),(1,5,1390.00),(1,7,2170.00),(1,8,2170.00),(1,9,2350.00),(1,10,2350.00),(1,11,2350.00),(1,12,2350.00),(1,13,2530.00),(2,3,1930.00),(2,5,1930.00),(2,7,2530.00),(2,8,2530.00),(2,9,2900.00),(2,10,2900.00),(2,11,2900.00),(2,12,2900.00),(2,13,3480.00),(3,3,1680.00),(3,4,1680.00),(3,5,1680.00),(3,6,1680.00),(3,7,2100.00),(3,8,2100.00),(3,9,2130.00),(3,10,2130.00),(3,11,2130.00),(3,12,2130.00),(3,13,2170.00),(4,3,2090.00),(4,4,2090.00),(4,5,2090.00),(4,6,2090.00),(4,7,2530.00),(4,8,2530.00),(4,9,2750.00),(4,10,2750.00),(4,11,2750.00),(4,12,2750.00),(4,13,3320.00),(5,3,1930.00),(5,5,1930.00),(5,7,2530.00),(5,8,2530.00),(5,9,2900.00),(5,10,2900.00),(5,11,2900.00),(5,12,2900.00),(5,13,3480.00),(6,3,1710.00),(6,5,1710.00),(6,7,2280.00),(6,8,2280.00),(6,9,2280.00),(6,10,2280.00),(6,11,2280.00),(6,12,2280.00),(6,13,3150.00),(7,3,2430.00),(7,5,2430.00),(7,7,2630.00),(7,8,2630.00),(7,9,2800.00),(7,10,2800.00),(7,11,2800.00),(7,12,2800.00),(7,13,2800.00),(8,3,3100.00),(8,5,3100.00),(8,9,4850.00),(8,10,4850.00),(8,11,4850.00),(8,12,4850.00),(9,3,2600.00),(9,5,2600.00),(9,7,3070.00),(9,8,3070.00),(9,9,3180.00),(9,10,3180.00),(9,11,3180.00),(9,12,3180.00),(9,13,3960.00),(10,3,2600.00),(10,5,2600.00),(10,7,3070.00),(10,8,3070.00),(10,9,3180.00),(10,10,3180.00),(10,11,3180.00),(10,12,3180.00),(10,13,3960.00),(11,3,2320.00),(11,5,2320.00),(11,7,2900.00),(11,8,2900.00),(11,9,3900.00),(11,10,3900.00),(11,11,3900.00),(11,12,3900.00),(11,13,4260.00),(12,3,2860.00),(12,5,2860.00),(12,7,3430.00),(12,8,3430.00),(12,9,3980.00),(12,10,3980.00),(12,11,3980.00),(12,12,3980.00),(12,13,4840.00),(13,9,5860.00),(13,10,5860.00),(13,11,5860.00),(13,12,5860.00),(14,3,2900.00),(14,5,2900.00),(14,7,4040.00),(14,8,4040.00),(14,9,4150.00),(14,10,4150.00),(14,11,4150.00),(14,12,4150.00),(14,13,4760.00),(15,3,2860.00),(15,5,2860.00),(15,7,4470.00),(15,8,4470.00),(15,9,5090.00),(15,10,5090.00),(15,11,5090.00),(15,12,5090.00),(15,13,6200.00);
/*!40000 ALTER TABLE `product_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribe` (
  `subscribe_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_subscribed` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`subscribe_id`),
  KEY `subscribe_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribe`
--

LOCK TABLES `subscribe` WRITE;
/*!40000 ALTER TABLE `subscribe` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribe` ENABLE KEYS */;
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

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_subscribed` tinyint(1) DEFAULT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_email_index` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'yii2admin','matrasovich.com@gmail.com','$2y$13$DBtpuNxuBgMrvyLAQ4wkc.WAK0UL9gnKA8g1..si4XWZRfbE9NP/6','ZaBb1TjsCpeZnOg2uw21pKJT4vLM6pVZ',0,'067-638-42-28'),(2,'Ivan','oleg.valen.com@i.ua','$2y$13$C2G0Q/L9DeeR0eWsglbykOASKrH7BmTMLpjy89mjbU2icaTomJi.W','QxeCffo23eBqUApNgVQnGbkwoWMfTop4',1,'067-638-42-28');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-30 14:23:31
