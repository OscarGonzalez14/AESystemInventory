-- MySQL dump 10.15  Distrib 10.0.30-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: AESystemInventory
-- ------------------------------------------------------
-- Server version	10.0.30-MariaDB-0+deb8u1

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
-- Table structure for table `Bodega`
--

DROP TABLE IF EXISTS `Bodega`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bodega` (
  `idBodega` int(11) NOT NULL AUTO_INCREMENT,
  `nombreBodega` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idBodega`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Categoria`
--

DROP TABLE IF EXISTS `Categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Mecanico`
--

DROP TABLE IF EXISTS `Mecanico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Mecanico` (
  `idMecanico` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMecanico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Productos`
--

DROP TABLE IF EXISTS `Productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Productos` (
  `codProducto` varchar(10) NOT NULL,
  `nombreProducto` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(150) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `fechaCreacion` timestamp NULL DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `Existencia` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`codProducto`),
  KEY `idCategoria` (`idCategoria`),
  CONSTRAINT `Productos_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `Categoria` (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Proveedor`
--

DROP TABLE IF EXISTS `Proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Proveedor` (
  `idProveedor` varchar(20) NOT NULL,
  `nombreProveedor` varchar(50) DEFAULT NULL,
  `contacto` varchar(25) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `detalleEntradas`
--

DROP TABLE IF EXISTS `detalleEntradas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalleEntradas` (
  `idEntrada` int(11) NOT NULL AUTO_INCREMENT,
  `fechaEntrada` timestamp NULL DEFAULT NULL,
  `codProducto` varchar(10) DEFAULT NULL,
  `Cantidad` varchar(10) DEFAULT NULL,
  `PrecioEntrada` varchar(10) DEFAULT NULL,
  `idBodega` int(11) DEFAULT NULL,
  `idProveedor` varchar(20) NOT NULL,
  `sku` varchar(45) DEFAULT NULL,
  `ccf` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEntrada`),
  KEY `codProducto` (`codProducto`),
  KEY `idBodega` (`idBodega`),
  KEY `fk_detalleEntradas_Proveedor1_idx` (`idProveedor`),
  CONSTRAINT `detalleEntradas_ibfk_1` FOREIGN KEY (`codProducto`) REFERENCES `Productos` (`codProducto`),
  CONSTRAINT `detalleEntradas_ibfk_2` FOREIGN KEY (`idBodega`) REFERENCES `Bodega` (`idBodega`),
  CONSTRAINT `fk_detalleEntradas_Proveedor1` FOREIGN KEY (`idProveedor`) REFERENCES `Proveedor` (`idProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2330 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER stock AFTER INSERT ON detalleEntradas
    FOR EACH ROW
    	 
        UPDATE Productos SET Existencia = Existencia + new.Cantidad where     								           		codProducto=new.codProducto */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `detalleSalida`
--

DROP TABLE IF EXISTS `detalleSalida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalleSalida` (
  `idSalida` int(11) NOT NULL AUTO_INCREMENT,
  `fechaSalida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cantidaSalida` float DEFAULT NULL,
  `PrecioSalida` float DEFAULT NULL,
  `codProducto` varchar(10) DEFAULT NULL,
  `idOrden` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idSalida`),
  KEY `codProducto` (`codProducto`),
  KEY `idOrden` (`idOrden`),
  CONSTRAINT `detalleSalida_ibfk_1` FOREIGN KEY (`codProducto`) REFERENCES `Productos` (`codProducto`),
  CONSTRAINT `detalleSalida_ibfk_2` FOREIGN KEY (`idOrden`) REFERENCES `ordenProduccion` (`idOrden`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER dieferencia AFTER INSERT ON detalleSalida
    FOR EACH ROW
     
    UPDATE Productos SET Existencia = Existencia - new.cantidaSalida where codProducto=new.codProducto */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `ordenProduccion`
--

DROP TABLE IF EXISTS `ordenProduccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ordenProduccion` (
  `idOrden` varchar(20) NOT NULL,
  `fechaCreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `equipo` varchar(100) DEFAULT NULL,
  `Cliente` varchar(100) DEFAULT NULL,
  `idMecanico` int(11) DEFAULT NULL,
  `medidas` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idOrden`),
  KEY `idMecanico` (`idMecanico`),
  CONSTRAINT `ordenProduccion_ibfk_1` FOREIGN KEY (`idMecanico`) REFERENCES `Mecanico` (`idMecanico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-12 15:51:30
