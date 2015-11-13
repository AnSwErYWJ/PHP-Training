/*数据库*/
CREATE DATABASE guestBook DEFAULT CHARSET utf8 COLLATE utf8_general_ci;

/*留言表 Table*/
CREATE TABLE `guestbook` (
  `id` int(10) unsigned PRIMARY KEY AUTO_INCREMENT,
  `nickname` char(16) NOT NULL DEFAULT '',
  `email` varchar(60) DEFAULT NULL,
  `content` text NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `reply` text DEFAULT NULL,
  `replytime` int(10) unsigned DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

/*用户表 Table*/
CREATE TABLE User(
    `uid` INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `nickname` varchar(30) NOT NULL,
    `password` varchar(32) NOT NULL,
    `createtime` INT(10) unsigned NOT NULL,
    `level` TINYINT(1) unsigned DEFAULT '0'
)ENGINE=MyISAM CHARSET=utf8 AUTO_INCREMENT=1;