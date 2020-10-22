USE `laravel`;

-- -----------------------------------------------------
-- Table `laravel`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '\n',
  `name` VARCHAR(300) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `active` TINYINT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `laravel`.`users_acess`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `laravel`.`users_acess` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `last_login` DATETIME NOT NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_acess_users_idx` (`users_id` ASC) ,
  CONSTRAINT `fk_users_acess_users`
    FOREIGN KEY (`Users_id`)
    REFERENCES `laravel`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


insert into `users` (`name`, `email`, `active`) values
('marcos', 'marcos@gmail.com', 1),
('lucas', 'luca@gmail.com', 1),
('amanda', 'amanda@gmail.com', 1),
('marcia', 'marcia@gmail.com', 1),
('jessica', 'jessica@gmail.com', 1),
('eduardo', 'eduardo@gmail.com', 1),
('patricia', 'paty@gmail.com', 1),
('ze', 'ze@gmail.com', 1),
('julia', 'julia@gmail.com', 1);
