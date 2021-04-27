CREATE TABLE IF NOT EXISTS `#__news` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` varchar(25) NOT NULL,
    `published` tinyint,
    `text` text NOT NULL,
    `images` varchar(1024) NOT NULL DEFAULT '',
    `publish_up` datetime,
    `alias` varchar(45)
    ) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci