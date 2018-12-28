/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : silhouette

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-27 22:03:44
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'carlos alberto', 'Rua Rodolfo Tozzi,    Parque ConceiÃ§Ã£o II', '13.412-406', '339.133.758-30', '(19) 3371-4642', 'Piracicaba', 'renan.celso@gmail.com', '0000-00-00');
INSERT INTO `clientes` VALUES ('2', 'jose da silva', 'Rua SalesÃ³polis,    Santa Terezinha', '13.411-153', '339.133.758-56', '(19) 3372-4739', 'Piracicaba', 'moises.44@yahoo.com.br', '0000-00-00');
INSERT INTO `clientes` VALUES ('3', 'jose da silva', 'Rua Rodolfo Tozzi,    Parque ConceiÃ§Ã£o II', '13.412-406', '339.133.758-30', '(19) 3425-5294', 'Piracicaba', 'desen.renan@gmail.com', '0000-00-00');
INSERT INTO `clientes` VALUES ('4', 'mateus oliveira', 'Rua SalesÃ³polis,    Santa Terezinha', '13.411-153', '339.133.758-56', '(19) 98810-1851', 'Piracicaba', 'renan.celso@gmail.com', '0000-00-00');

-- ----------------------------
-- Table structure for `materiais`
-- ----------------------------
DROP TABLE IF EXISTS `materiais`;
CREATE TABLE `materiais` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `material` varchar(50) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of materiais
-- ----------------------------
INSERT INTO `materiais` VALUES ('15', 'Papel Color Plus', '0.90');
INSERT INTO `materiais` VALUES ('16', 'Papel Adesivo', '1.20');
INSERT INTO `materiais` VALUES ('17', 'Cordinha', '0.50');
INSERT INTO `materiais` VALUES ('18', 'latinha', '1.50');

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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of material_orcamento
-- ----------------------------
INSERT INTO `material_orcamento` VALUES ('43', '1', '15', '0.90');
INSERT INTO `material_orcamento` VALUES ('44', '1', '16', '1.20');
INSERT INTO `material_orcamento` VALUES ('45', '1', '17', '0.50');
INSERT INTO `material_orcamento` VALUES ('46', '1', '18', '1.50');
INSERT INTO `material_orcamento` VALUES ('47', '3', '16', '1.20');
INSERT INTO `material_orcamento` VALUES ('48', '3', '17', '0.50');
INSERT INTO `material_orcamento` VALUES ('49', '1', '15', '0.90');
INSERT INTO `material_orcamento` VALUES ('50', '1', '16', '1.20');
INSERT INTO `material_orcamento` VALUES ('51', '1', '17', '0.50');
INSERT INTO `material_orcamento` VALUES ('52', '2', '17', '0.50');
INSERT INTO `material_orcamento` VALUES ('53', '2', '16', '1.20');

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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orcamento
-- ----------------------------
INSERT INTO `orcamento` VALUES ('50', '2018-12-28', '1', 'nenen');
INSERT INTO `orcamento` VALUES ('51', '2018-12-28', '1', 'carlos');

-- ----------------------------
-- Table structure for `produtos`
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('1', 'latinha', '1');
INSERT INTO `produtos` VALUES ('2', 'caixa milk', '1');
INSERT INTO `produtos` VALUES ('3', 'cofrinho', '1');
INSERT INTO `produtos` VALUES ('4', 'caixa acrilica', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of produto_orcamento
-- ----------------------------
INSERT INTO `produto_orcamento` VALUES ('27', '1', '4.10', '40', '50', '322.50', '50');
INSERT INTO `produto_orcamento` VALUES ('28', '3', '1.70', '30', '50', '322.50', '50');
INSERT INTO `produto_orcamento` VALUES ('29', '1', '2.60', '20', '40', '132.30', '51');
INSERT INTO `produto_orcamento` VALUES ('30', '2', '1.70', '25', '40', '132.30', '51');
