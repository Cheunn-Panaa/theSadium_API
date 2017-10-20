-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema the_stadium
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `the_stadium` ;

-- -----------------------------------------------------
-- Schema the_stadium
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `the_stadium` DEFAULT CHARACTER SET utf8 ;
USE `the_stadium` ;

-- -----------------------------------------------------
-- Table `the_stadium`.`sexe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`sexe` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(255) NOT NULL,
  `lastname` VARCHAR(255) NOT NULL,
  `birthdate` DATE NULL,
  `profile_picture` VARCHAR(255) NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `creation_date` DATETIME NOT NULL,
  `type` INT NOT NULL,
  `sexe_id` INT NOT NULL,
  `login_provider` VARCHAR(255) NULL,
  `token` VARCHAR(255) NULL,
  `private_token` VARCHAR(255) NULL,
  `unique_id` VARCHAR(255) NULL,
  `last_login` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_sexe_idx` (`sexe_id` ASC),
  CONSTRAINT `fk_user_sexe`
    FOREIGN KEY (`sexe_id`)
    REFERENCES `the_stadium`.`sexe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`category` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(255) NOT NULL,
  `age` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`division`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`division` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`season`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`season` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `start_year` YEAR NOT NULL,
  `end_year` YEAR NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`club`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`club` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `creation_date` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `city` VARCHAR(255) NULL,
  `zip_code` VARCHAR(255) NULL,
  `adress` VARCHAR(255) NULL,
  `profile_picture` VARCHAR(255) NULL,
  `cover_photo` VARCHAR(255) NULL,
  `training_hours` TEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`team`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`team` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sexe_id` INT NULL,
  `category_id` INT NOT NULL,
  `division_id` INT NOT NULL,
  `season_id` INT NOT NULL,
  `club_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_team_sexe1_idx` (`sexe_id` ASC),
  INDEX `fk_team_category1_idx` (`category_id` ASC),
  INDEX `fk_team_division1_idx` (`division_id` ASC),
  INDEX `fk_team_season1_idx` (`season_id` ASC),
  INDEX `fk_team_club1_idx` (`club_id` ASC),
  CONSTRAINT `fk_team_sexe1`
    FOREIGN KEY (`sexe_id`)
    REFERENCES `the_stadium`.`sexe` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_team_category1`
    FOREIGN KEY (`category_id`)
    REFERENCES `the_stadium`.`category` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_team_division1`
    FOREIGN KEY (`division_id`)
    REFERENCES `the_stadium`.`division` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_team_season1`
    FOREIGN KEY (`season_id`)
    REFERENCES `the_stadium`.`season` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_team_club1`
    FOREIGN KEY (`club_id`)
    REFERENCES `the_stadium`.`club` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`team_has_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`team_has_user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `team_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `start_date` DATE NOT NULL,
  `end_date` DATE NULL,
  `status_id` INT NOT NULL,
  INDEX `fk_team_has_user_user1_idx` (`user_id` ASC),
  INDEX `fk_team_has_user_team1_idx` (`team_id` ASC),
  INDEX `fk_team_has_user_status1_idx` (`status_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_team_has_user_team1`
    FOREIGN KEY (`team_id`)
    REFERENCES `the_stadium`.`team` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_team_has_user_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `the_stadium`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_team_has_user_status1`
    FOREIGN KEY (`status_id`)
    REFERENCES `the_stadium`.`status` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`position`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`position` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`player`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`player` (
  `user_id` INT NOT NULL,
  `height` DECIMAL(3,2) NULL,
  `weight` DECIMAL(5,2) NULL,
  `goals_nbr` INT NULL,
  `pass_nbr` INT NULL,
  `birthdate` DATE NOT NULL,
  `position_id` INT NOT NULL,
  PRIMARY KEY (`user_id`),
  INDEX `fk_player_Position1_idx` (`position_id` ASC),
  INDEX `fk_player_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_player_Position1`
    FOREIGN KEY (`position_id`)
    REFERENCES `the_stadium`.`position` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_player_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `the_stadium`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`notification`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`notification` (
  `id` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `type` VARCHAR(255) NULL,
  `element_id` INT NULL,
  `vue` TINYINT(1) NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_notification_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_notification_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `the_stadium`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`post_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`post_type` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`post` (
  `id` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `creation_date` DATETIME NULL,
  `content` TEXT NOT NULL,
  `goals_nbr` INT NULL,
  `pass_nbr` INT NULL,
  `post_type_id` INT NULL,
  `user_id` INT NULL,
  `team_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_post_post_type1_idx` (`post_type_id` ASC),
  INDEX `fk_post_user1_idx` (`user_id` ASC),
  INDEX `fk_post_team1_idx` (`team_id` ASC),
  CONSTRAINT `fk_post_post_type1`
    FOREIGN KEY (`post_type_id`)
    REFERENCES `the_stadium`.`post_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `the_stadium`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_team1`
    FOREIGN KEY (`team_id`)
    REFERENCES `the_stadium`.`team` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`media` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `path` VARCHAR(255) NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `main_media` TINYINT(1) NOT NULL,
  `post_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_media_post1_idx` (`post_id` ASC),
  CONSTRAINT `fk_media_post1`
    FOREIGN KEY (`post_id`)
    REFERENCES `the_stadium`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`comments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `contenu` VARCHAR(255) NOT NULL,
  `creation_date` DATETIME NOT NULL,
  `user_id` INT NOT NULL,
  `post_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comments_user1_idx` (`user_id` ASC),
  INDEX `fk_comments_post1_idx` (`post_id` ASC),
  CONSTRAINT `fk_comments_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `the_stadium`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_post1`
    FOREIGN KEY (`post_id`)
    REFERENCES `the_stadium`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_shares_post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_shares_post` (
  `post_share_id` INT NOT NULL,
  `user_share_id` INT NOT NULL,
  `creation_date` DATETIME NOT NULL,
  INDEX `fk_post_has_user_user1_idx` (`user_share_id` ASC),
  INDEX `fk_post_has_user_post1_idx` (`post_share_id` ASC),
  PRIMARY KEY (`post_share_id`, `user_share_id`),
  CONSTRAINT `fk_post_has_user_post1`
    FOREIGN KEY (`post_share_id`)
    REFERENCES `the_stadium`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_has_user_user1`
    FOREIGN KEY (`user_share_id`)
    REFERENCES `the_stadium`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_follows_player`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_follows_player` (
  `user_follow_id` INT NOT NULL,
  `player_follow_id` INT NOT NULL,
  INDEX `fk_user_has_player_player1_idx` (`player_follow_id` ASC),
  INDEX `fk_user_has_player_user1_idx` (`user_follow_id` ASC),
  PRIMARY KEY (`user_follow_id`, `player_follow_id`),
  CONSTRAINT `fk_user_has_player_user1`
    FOREIGN KEY (`user_follow_id`)
    REFERENCES `the_stadium`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_player_player1`
    FOREIGN KEY (`player_follow_id`)
    REFERENCES `the_stadium`.`player` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_like`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_like` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `creation_date` DATETIME NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_like_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_like_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `the_stadium`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_like_post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_like_post` (
  `user_like_id` BIGINT NOT NULL,
  `post_id` INT NOT NULL,
  PRIMARY KEY (`user_like_id`),
  INDEX `fk_user_like_has_post_post1_idx` (`post_id` ASC),
  INDEX `fk_user_like_has_post_user_like1_idx` (`user_like_id` ASC),
  CONSTRAINT `fk_user_like_has_post_user_like1`
    FOREIGN KEY (`user_like_id`)
    REFERENCES `the_stadium`.`user_like` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_like_has_post_post1`
    FOREIGN KEY (`post_id`)
    REFERENCES `the_stadium`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_like_media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_like_media` (
  `user_like_id` BIGINT NOT NULL,
  `media_id` INT NOT NULL,
  PRIMARY KEY (`user_like_id`),
  INDEX `fk_user_like_has_media_media1_idx` (`media_id` ASC),
  INDEX `fk_user_like_has_media_user_like1_idx` (`user_like_id` ASC),
  CONSTRAINT `fk_user_like_has_media_user_like1`
    FOREIGN KEY (`user_like_id`)
    REFERENCES `the_stadium`.`user_like` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_like_has_media_media1`
    FOREIGN KEY (`media_id`)
    REFERENCES `the_stadium`.`media` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_like_team`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_like_team` (
  `user_like_id` BIGINT NOT NULL,
  `team_id` INT NOT NULL,
  PRIMARY KEY (`user_like_id`),
  INDEX `fk_user_like_has_team_team1_idx` (`team_id` ASC),
  INDEX `fk_user_like_has_team_user_like1_idx` (`user_like_id` ASC),
  CONSTRAINT `fk_user_like_has_team_user_like1`
    FOREIGN KEY (`user_like_id`)
    REFERENCES `the_stadium`.`user_like` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_like_has_team_team1`
    FOREIGN KEY (`team_id`)
    REFERENCES `the_stadium`.`team` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_share`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_share` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `creation_date` DATETIME NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_share_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_share_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `the_stadium`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_share_post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_share_post` (
  `user_share_id` BIGINT NOT NULL,
  `post_id` INT NOT NULL,
  PRIMARY KEY (`user_share_id`),
  INDEX `fk_user_share_has_post_post1_idx` (`post_id` ASC),
  INDEX `fk_user_share_has_post_user_share1_idx` (`user_share_id` ASC),
  CONSTRAINT `fk_user_share_has_post_user_share1`
    FOREIGN KEY (`user_share_id`)
    REFERENCES `the_stadium`.`user_share` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_share_has_post_post1`
    FOREIGN KEY (`post_id`)
    REFERENCES `the_stadium`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_share_media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_share_media` (
  `user_share_id` BIGINT NOT NULL,
  `media_id` INT NOT NULL,
  PRIMARY KEY (`user_share_id`),
  INDEX `fk_user_share_has_media_media1_idx` (`media_id` ASC),
  INDEX `fk_user_share_has_media_user_share1_idx` (`user_share_id` ASC),
  CONSTRAINT `fk_user_share_has_media_user_share1`
    FOREIGN KEY (`user_share_id`)
    REFERENCES `the_stadium`.`user_share` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_share_has_media_media1`
    FOREIGN KEY (`media_id`)
    REFERENCES `the_stadium`.`media` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_like_post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_like_post` (
  `user_like_id` BIGINT NOT NULL,
  `post_id` INT NOT NULL,
  PRIMARY KEY (`user_like_id`),
  INDEX `fk_user_like_has_post_post1_idx` (`post_id` ASC),
  INDEX `fk_user_like_has_post_user_like1_idx` (`user_like_id` ASC),
  CONSTRAINT `fk_user_like_has_post_user_like1`
    FOREIGN KEY (`user_like_id`)
    REFERENCES `the_stadium`.`user_like` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_like_has_post_post1`
    FOREIGN KEY (`post_id`)
    REFERENCES `the_stadium`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_like_team`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_like_team` (
  `user_like_id` BIGINT NOT NULL,
  `team_id` INT NOT NULL,
  PRIMARY KEY (`user_like_id`),
  INDEX `fk_user_like_has_team_team1_idx` (`team_id` ASC),
  INDEX `fk_user_like_has_team_user_like1_idx` (`user_like_id` ASC),
  CONSTRAINT `fk_user_like_has_team_user_like1`
    FOREIGN KEY (`user_like_id`)
    REFERENCES `the_stadium`.`user_like` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_like_has_team_team1`
    FOREIGN KEY (`team_id`)
    REFERENCES `the_stadium`.`team` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_like_media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_like_media` (
  `user_like_id` BIGINT NOT NULL,
  `media_id` INT NOT NULL,
  PRIMARY KEY (`user_like_id`),
  INDEX `fk_user_like_has_media_media1_idx` (`media_id` ASC),
  INDEX `fk_user_like_has_media_user_like1_idx` (`user_like_id` ASC),
  CONSTRAINT `fk_user_like_has_media_user_like1`
    FOREIGN KEY (`user_like_id`)
    REFERENCES `the_stadium`.`user_like` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_like_has_media_media1`
    FOREIGN KEY (`media_id`)
    REFERENCES `the_stadium`.`media` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_share_post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_share_post` (
  `user_share_id` BIGINT NOT NULL,
  `post_id` INT NOT NULL,
  PRIMARY KEY (`user_share_id`),
  INDEX `fk_user_share_has_post_post1_idx` (`post_id` ASC),
  INDEX `fk_user_share_has_post_user_share1_idx` (`user_share_id` ASC),
  CONSTRAINT `fk_user_share_has_post_user_share1`
    FOREIGN KEY (`user_share_id`)
    REFERENCES `the_stadium`.`user_share` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_share_has_post_post1`
    FOREIGN KEY (`post_id`)
    REFERENCES `the_stadium`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `the_stadium`.`user_share_media`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `the_stadium`.`user_share_media` (
  `user_share_id` BIGINT NOT NULL,
  `media_id` INT NOT NULL,
  PRIMARY KEY (`user_share_id`),
  INDEX `fk_user_share_has_media_media1_idx` (`media_id` ASC),
  INDEX `fk_user_share_has_media_user_share1_idx` (`user_share_id` ASC),
  CONSTRAINT `fk_user_share_has_media_user_share1`
    FOREIGN KEY (`user_share_id`)
    REFERENCES `the_stadium`.`user_share` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_share_has_media_media1`
    FOREIGN KEY (`media_id`)
    REFERENCES `the_stadium`.`media` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
