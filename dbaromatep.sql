# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     dbaromatep
# Server version:               5.0.51b-community-nt
# Server OS:                    Win32
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    2014-10-03 23:41:11
# --------------------------------------------------------

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI,NO_BACKSLASH_ESCAPES';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'dbaromatep'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "dbaromatep" /*!40100 DEFAULT CHARACTER SET utf8 */;

USE "dbaromatep";


#
# Table structure for table 'categorias'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "categorias" (
  "idCATE" int(3) unsigned NOT NULL auto_increment,
  "nomCATE" varchar(50) NOT NULL,
  PRIMARY KEY  ("idCATE"),
  UNIQUE KEY "idCATE" ("idCATE")
) AUTO_INCREMENT=4;



#
# Dumping data for table 'categorias'
#

LOCK TABLES "categorias" WRITE;
/*!40000 ALTER TABLE "categorias" DISABLE KEYS;*/
INSERT IGNORE INTO "categorias" ("idCATE", "nomCATE") VALUES
	('1','Escencias');
INSERT IGNORE INTO "categorias" ("idCATE", "nomCATE") VALUES
	('2','Almohadones');
INSERT IGNORE INTO "categorias" ("idCATE", "nomCATE") VALUES
	('3','Decoracion');
/*!40000 ALTER TABLE "categorias" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'productos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "productos" (
  "idPROD" int(9) unsigned NOT NULL auto_increment,
  "descPROD" varchar(100) default 'NULL',
  "origenPROD" varchar(9) NOT NULL,
  "precioPROD" int(10) unsigned NOT NULL,
  "catePROD" int(5) unsigned NOT NULL,
  PRIMARY KEY  ("idPROD"),
  UNIQUE KEY "idPROD" ("idPROD")
) AUTO_INCREMENT=7;



#
# Dumping data for table 'productos'
#

LOCK TABLES "productos" WRITE;
/*!40000 ALTER TABLE "productos" DISABLE KEYS;*/
INSERT IGNORE INTO "productos" ("idPROD", "descPROD", "origenPROD", "precioPROD", "catePROD") VALUES
	('1','Aceite Esencial De Incienso Sagrado','China','20','1');
INSERT IGNORE INTO "productos" ("idPROD", "descPROD", "origenPROD", "precioPROD", "catePROD") VALUES
	('2','3 Packs Inciensos Energizantes','Marruecos','100','1');
INSERT IGNORE INTO "productos" ("idPROD", "descPROD", "origenPROD", "precioPROD", "catePROD") VALUES
	('3','Almohadon Con Frases Tipograficas Motivacionales','Marruecos','200','2');
INSERT IGNORE INTO "productos" ("idPROD", "descPROD", "origenPROD", "precioPROD", "catePROD") VALUES
	('4','Almohadon En Eco Cuero','Jordania','300','2');
INSERT IGNORE INTO "productos" ("idPROD", "descPROD", "origenPROD", "precioPROD", "catePROD") VALUES
	('5','Porta Incienso En Bronce','China','100','3');
INSERT IGNORE INTO "productos" ("idPROD", "descPROD", "origenPROD", "precioPROD", "catePROD") VALUES
	('6','Porta Incienso tortuga','India','100','3');
/*!40000 ALTER TABLE "productos" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
