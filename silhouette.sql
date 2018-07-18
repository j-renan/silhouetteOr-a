/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : silhouette

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-07-17 22:10:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `produtos`
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES ('79', 'latinha', '1');
INSERT INTO `produtos` VALUES ('80', 'caixa milk', '1');
INSERT INTO `produtos` VALUES ('81', 'teste produto', '1');
INSERT INTO `produtos` VALUES ('82', 'cofrinho', '1');
INSERT INTO `produtos` VALUES ('83', 'caixa acrilica', '1');
