/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : silhouette

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-08-29 20:39:16
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('3', 'jose da silva', 'Rua Pedro Morato Krahembuhl,    JaraguÃ¡', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('4', 'mateus oliveira', 'Rua SalesÃ³polis,    Santa Terezinha', '', '', '', '', '', '1888-09-05');
INSERT INTO `clientes` VALUES ('6', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('7', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('8', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('10', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('11', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('12', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('13', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('14', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('15', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('16', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('17', '', '', '', '', '', '', '', '0000-00-00');
INSERT INTO `clientes` VALUES ('18', 'moises olimpio', 'Rua Pedro Morato Krahembuhl,    JaraguÃ¡', '13403023', '339.133.758-30', '44336677', 'piracicaba', 'valquiriagalves@yahoo.com.br', '1986-09-15');

-- ----------------------------
-- Table structure for `materiais`
-- ----------------------------
DROP TABLE IF EXISTS `materiais`;
CREATE TABLE `materiais` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `material` varchar(50) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of materiais
-- ----------------------------
INSERT INTO `materiais` VALUES ('4', 'caixa acrilica branca', '4.34');
INSERT INTO `materiais` VALUES ('6', 'caixa acrilica', '1.00');
INSERT INTO `materiais` VALUES ('7', 'cofrinho', '1.00');
INSERT INTO `materiais` VALUES ('9', 'papel higienico', '1.98');
INSERT INTO `materiais` VALUES ('10', 'cofrinho423432', '1.00');
INSERT INTO `materiais` VALUES ('12', 'caixa grande azuk', '2.45');
INSERT INTO `materiais` VALUES ('13', 'caixa grande bbb', '3.55');
INSERT INTO `materiais` VALUES ('14', 'papel color plus rrrr', '0.89');

-- ----------------------------
-- Table structure for `produtos`
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('96', 'caixa milk23', '1');
INSERT INTO `produtos` VALUES ('97', 'cofrinho44', '1');
INSERT INTO `produtos` VALUES ('99', 'caixa acrilica', '1');
INSERT INTO `produtos` VALUES ('100', 'latinhavcbgfdbfd', '1');
