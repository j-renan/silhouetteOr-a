/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : silhouette

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-01 14:06:24
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `clientes`
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'carlos alberto', 'Rua Rodolfo Tozzi,    Parque ConceiÃ§Ã£o II', '13.412-406', '339.133.758-30', '(19) 3371-4642', 'Piracicaba', 'renan.celso@gmail.com', '0000-00-00');
INSERT INTO `clientes` VALUES ('2', 'jose da silva', 'Rua SalesÃ³polis,    Santa Terezinha', '13.411-153', '339.133.758-56', '(19) 3372-4739', 'Piracicaba', 'moises.44@yahoo.com.br', '0000-00-00');

-- ----------------------------
-- Table structure for `materiais`
-- ----------------------------
DROP TABLE IF EXISTS `materiais`;
CREATE TABLE `materiais` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `material` varchar(50) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of materiais
-- ----------------------------
INSERT INTO `materiais` VALUES ('15', 'Papel Color Plus', '0.90');
INSERT INTO `materiais` VALUES ('16', 'Papel Adesivo', '1.20');
INSERT INTO `materiais` VALUES ('17', 'Cordinha', '0.50');

-- ----------------------------
-- Table structure for `material_orcamento`
-- ----------------------------
DROP TABLE IF EXISTS `material_orcamento`;
CREATE TABLE `material_orcamento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `preco_unitario` decimal(20,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of material_orcamento
-- ----------------------------

-- ----------------------------
-- Table structure for `orcamento`
-- ----------------------------
DROP TABLE IF EXISTS `orcamento`;
CREATE TABLE `orcamento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `crianca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orcamento
-- ----------------------------
INSERT INTO `orcamento` VALUES ('1', '2018-11-28', '1', 'lula');
INSERT INTO `orcamento` VALUES ('2', '2018-11-28', '1', 'lula');
INSERT INTO `orcamento` VALUES ('3', '2018-11-28', '1', 'lula');

-- ----------------------------
-- Table structure for `produtos`
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('101', 'Caixa Milk', '1');

-- ----------------------------
-- Table structure for `produto_orcamento`
-- ----------------------------
DROP TABLE IF EXISTS `produto_orcamento`;
CREATE TABLE `produto_orcamento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `preco_unitario` decimal(20,2) NOT NULL,
  `qtde` int(5) NOT NULL,
  `percentual` int(5) NOT NULL,
  `total` decimal(20,2) NOT NULL,
  `orcamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of produto_orcamento
-- ----------------------------
