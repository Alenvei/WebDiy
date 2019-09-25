DROP DATABASE IF EXISTS `diy_corner`;

CREATE DATABASE `diy_corner`
CHARACTER SET UTF8 COLLATE utf8_general_ci;

/* POUZIVATEL, OPRAVNENIA + PREPOJENIA*/
CREATE TABLE `roles`(
    `id` INT AUTO_INCREMENT NOT NULL,
    `role` varchar(30) NOT NULL,
    
    PRIMARY KEY (`id`)
    ) ENGINE = INNODB DEFAULT CHARSET=utf8;
    
CREATE TABLE `users` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `name` varchar(50) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(50) NOT NULL,
    `img` varchar(100) DEFAULT NULL,
    `bio` TEXT DEFAULT NULL,
    `registration_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE (`email`)
    ) ENGINE =INNODB DEFAULT CHARSET= utf8;

CREATE TABLE `user_role` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `id_user` INT NOT NULL,
    `id_role` INT NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_user`) REFERENCES `users`(`id`),
    FOREIGN KEY (`id_role`) REFERENCES `roles`(`id`)
) ENGINE= INNODB DEFAULT CHARSET= utf8;

/*KATEGORIE
    -KATEGORIE SU ZJEDNODUSENE, NA SPRESNENIE
     VYHLADAVANIA BUDU SLUZIT TAGY
 */
CREATE TABLE `categories` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(50),
    PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE `posts` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `id_user` INT NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `img` VARCHAR(100) DEFAULT NULL, /* V IMAGE bude cesta */
    `post` TEXT NOT NULL,
    `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    `abstract` TEXT NOT NULL,
    `category` INT NOT NULL,
    `rating` INT NOT NULL, /* RATING si este niesom isty ci je dobre cez DB, tam 
                            by sme mohli pouzit JS */

    `checked` BOOLEAN, /* admin schvalenie */
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_user`) REFERENCES `users`(`id`),
    FOREIGN KEY (`category`) REFERENCES `categories`(`id`)
    ) ENGINE= INNODB DEFAULT CHARSET= utf8;

/* TAGY */
CREATE TABLE `tag` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(50),
    PRIMARY KEY (`id`)
) ENGINE = INNODB DEFAULT CHARSET=utf8;

CREATE TABLE `post_tag` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `id_post` INT NOT NULL,
    `id_tag` INT NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_post`) REFERENCES `posts`(`id`),
    FOREIGN KEY (`id_tag`) REFERENCES `tag`(`id`)
) ENGINE = INNODB DEFAULT CHARSET=utf8;


/*KOMENTARE-SUBKOMENTARE + PREPOJENIE */
CREATE TABLE `comments` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `id_user` INT NOT NULL,
    `comment` text NOT NULL,
    `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `id_post` INT NOT NULL,
    `parent` INT DEFAULT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_user`) REFERENCES `users`(`id`),
    FOREIGN KEY (`id_post`) REFERENCES `posts`(`id`),
    FOREIGN KEY (`parent`) REFERENCES `comments`(`id`)
)  ENGINE=INNODB DEFAULT CHARSET = utf8;

