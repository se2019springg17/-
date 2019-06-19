/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50556
Source Host           : localhost:3306
Source Database       : shushe

Target Server Type    : MYSQL
Target Server Version : 50556
File Encoding         : 65001

Date: 2019-06-16 12:24:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(12) CHARACTER SET utf8 NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('admin', 'admin');

-- ----------------------------
-- Table structure for apply
-- ----------------------------
DROP TABLE IF EXISTS `apply`;
CREATE TABLE `apply` (
  `id` tinyint(123) NOT NULL AUTO_INCREMENT,
  `title` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` varchar(2143) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `writer` varchar(1234) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '12',
  `shijian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pic` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lanmu` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `user` varchar(124) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of apply
-- ----------------------------
INSERT INTO `apply` VALUES ('102', 'test', 'test', '陈传岭', '2019-06-16 10:18:35', 'xs2.jpg', '图书资讯', '1', 'ccl');
INSERT INTO `apply` VALUES ('103', 'test3', 'test3', '陈传岭', '2019-06-16 11:06:35', 'xs1.jpg', '最新图书', '0', 'ccl');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` tinyint(123) NOT NULL AUTO_INCREMENT,
  `title` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` varchar(2143) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `writer` varchar(1234) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '12',
  `shijian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pic` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lanmu` varchar(123) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('94', '《打开一颗心》', '“我经手过12000颗心脏。”作者在心外科暨胸外科从业数十年，手术成绩卓著。本书即汇集了作者经历的一些经典案例（多数发生在1970年代至2000年代之间），也剖白了作者的心路历程。', '管理', '2018-12-29 21:35:57', 'dkykx2.jpg', '图书资讯');
INSERT INTO `product` VALUES ('95', '《国宴与家宴》', '家宴曾是被寄托了最多情感心绪的味觉记忆，也是一种回不去的集体记忆与中国传统生活美学的独特风景。2018年终岁尾，中信出版·大方重磅推出台湾作家、美食家王宣一女士（1955-2015）的文化随笔《国宴与家宴》', '管理', '2018-12-29 21:37:27', 'gyjy.jpg', '图书资讯');
INSERT INTO `product` VALUES ('96', '《神奇动物：格林德沃之罪》', '和上一部剧本《神奇动物在哪里》中文版不同的是，这一次人民文学出版社早在《神奇动物：格林德沃之罪》电影上映前一个月就已经拿到剧本，并且紧急开始了翻译和编辑工作。', '管理', '2018-12-29 21:38:59', 'sqdw.jpg', '图书资讯');
INSERT INTO `product` VALUES ('97', '《黄河十四走》', '这部传世作品是徐悲鸿弟子、中央美院原民间艺术系创始人杨先让自1986年春节至1989年9月带领考察团，历时四年、十四次走黄河，通过考察当地的民间艺术种类、艺术风格、民间艺人、节庆习俗而成的呕心沥血之作', '新浪读书', '2018-12-29 21:40:22', 'hhzx.jpg', '最新图书');
INSERT INTO `product` VALUES ('99', '《我只知道人是什么》', '作为当代中国文学走出去的代表人物，随着《兄弟》《活着》《许三观卖血记》《第七天》等作品在美、英、法、意、日、韩等全球四十多个国家和地区不断出版，近年来余华频繁受邀世界各国的演讲与活动', '新浪读书 ', '2018-12-29 21:43:39', 'zdshms.jpg', '图书资讯');
INSERT INTO `product` VALUES ('100', '《使女的故事》', '黄昱宁介绍说，《使女的故事》出版之后曾经引起比较大的反响，也曾被改编成很多形式，比如像电影、戏剧、歌剧，甚至芭蕾舞剧，但是它在2017年又再次成为一个“爆款”', '新浪读书 ', '2018-12-29 21:49:19', 'sygs.jpg', '最新图书');
INSERT INTO `product` VALUES ('104', 'test', 'test', '陈传岭', '2019-06-16 10:53:49', 'xs2.jpg', '图书资讯');
INSERT INTO `product` VALUES ('105', 'test2', 'testpic', '陈传岭', '2019-06-16 10:55:16', 'testpic.jpg', '图书资讯');

-- ----------------------------
-- Table structure for replay
-- ----------------------------
DROP TABLE IF EXISTS `replay`;
CREATE TABLE `replay` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `pid` varchar(123) COLLATE utf8_bin NOT NULL,
  `uname` varchar(123) COLLATE utf8_bin NOT NULL,
  `nr` varchar(123) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hot` int(11) DEFAULT '0',
  `top` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of replay
-- ----------------------------
INSERT INTO `replay` VALUES ('1', '98', '张三', '很好很不错', '2019-05-26 10:25:25', '1', '0');
INSERT INTO `replay` VALUES ('2', '98', '张三', '我很喜欢', '2019-05-26 17:40:45', '2', '0');
INSERT INTO `replay` VALUES ('3', '94', 'ccl', '132465', '2019-05-31 20:16:43', '3', '0');
INSERT INTO `replay` VALUES ('4', '99', 'ccl', '212145', '2019-06-01 11:27:45', '32', '0');
INSERT INTO `replay` VALUES ('6', '96', 'ccl', '13213212', '2019-06-01 14:01:37', '5', '0');
INSERT INTO `replay` VALUES ('7', '96', 'ccl', '1111', '2019-06-01 14:06:16', '6', '0');
INSERT INTO `replay` VALUES ('8', '96', 'ccl', '1', '2019-06-01 14:20:07', '8', '0');
INSERT INTO `replay` VALUES ('9', '96', 'ccl', '2323', '2019-06-01 14:20:16', '8', '1');
INSERT INTO `replay` VALUES ('11', '96', 'ccl', '拉时代峻峰', '2019-06-10 20:29:17', '1', '0');
INSERT INTO `replay` VALUES ('12', '96', 'ccl', '水电费啊', '2019-06-10 20:30:18', '3', '0');
INSERT INTO `replay` VALUES ('13', '96', 'ccl', '阿斯蒂芬', '2019-06-10 20:39:25', '2', '0');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` tinyint(124) NOT NULL AUTO_INCREMENT,
  `yhm` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mm` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` varchar(124) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `info` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('56', '李四', '111111', '123123124@qq.com', '13393207019', null);
INSERT INTO `users` VALUES ('55', '张三', '111111', '123213@qq.com', '13123213', null);
INSERT INTO `users` VALUES ('50', '小王', '111111', '123123124@qq.com', '15227280199', null);
INSERT INTO `users` VALUES ('57', '黎明', '111111', '123123124@qq.com', '12321321321312', null);
INSERT INTO `users` VALUES ('58', 'ccl', '111111', '343115098@qq.com', '13023683120', '爱上了对方就卡死了机房');
INSERT INTO `users` VALUES ('59', '13246', '222222', '121212@2121', '13023683120', null);
