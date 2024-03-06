create database cookery;

use cookery;

CREATE TABLE `users_signUp` (
  `user_id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `email` varchar(100),
  `mobile` varchar(15),
  `password` varchar(100),
  PRIMARY KEY  (`user_id`)
);