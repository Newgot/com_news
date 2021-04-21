DROP TABLE IF EXISTS `#__news`;

CREATE TABLE IF NOT EXISTS `#__news` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` varchar(25) NOT NULL,
    `published` tinyint,
    `text` text NOT NULL,
    `images` vachar(1024) NOT NULL DEFAULT '',
    `publish_up` datetime,
    `alias` varchar(45)
)