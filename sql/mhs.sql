CREATE TABLE `Users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

CREATE TABLE `Post` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

CREATE TABLE `Comment` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(20) NOT NULL,
  `messages` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;