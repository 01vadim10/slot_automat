DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`login` VARCHAR(12) NULL DEFAULT NULL,
	`pass` VARCHAR(12) NULL DEFAULT NULL,
	`cash` DECIMAL(12,2) NULL DEFAULT '0.00',
	PRIMARY KEY (`id`),
	UNIQUE INDEX `login` (`login`)
)
COLLATE='utf8_general_ci'
ENGINE=innoDB
ROW_FORMAT=DEFAULT;

INSERT INTO `users` (`id`, `login`, `pass`, `cash`) VALUES (1, 'varl', '12345', 3000);
INSERT INTO `users` (`id`, `login`, `pass`, `cash`) VALUES (2, 'dima', '12345', 0.00);
