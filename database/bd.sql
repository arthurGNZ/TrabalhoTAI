-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para sisagenda
CREATE DATABASE IF NOT EXISTS `sisagenda` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `sisagenda`;

-- Copiando estrutura para tabela sisagenda.crudagenda
CREATE TABLE IF NOT EXISTS `crudagenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `data_inicio` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `hora_fim` time DEFAULT NULL,
  `local` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `descricao` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `convidado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_crudagenda_crudcontato` (`convidado_id`),
  CONSTRAINT `FK_crudagenda_crudcontato` FOREIGN KEY (`convidado_id`) REFERENCES `crudcontato` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela sisagenda.crudagenda: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `crudagenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `crudagenda` ENABLE KEYS */;

-- Copiando estrutura para tabela sisagenda.crudcontato
CREATE TABLE IF NOT EXISTS `crudcontato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) COLLATE utf8mb4_bin DEFAULT NULL,
  `sobrenome` varchar(250) COLLATE utf8mb4_bin DEFAULT NULL,
  `telefone1` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `tipo_tel1` varchar(50) COLLATE utf8mb4_bin DEFAULT 'Casa',
  `telefone2` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `tipo_tel2` varchar(50) COLLATE utf8mb4_bin DEFAULT 'Casa',
  `email` varchar(250) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela sisagenda.crudcontato: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `crudcontato` DISABLE KEYS */;
/*!40000 ALTER TABLE `crudcontato` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
