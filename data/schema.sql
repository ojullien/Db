-- -----------------------------------------------------
-- Ophp Framework.
--
-- This script creates the mysql schema for tests
--
-- @package   Db
-- @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
-- -----------------------------------------------------

REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'ophpdb.adm'@'%','ophpdb.user'@'%';
DROP USER 'ophpdb.adm'@'%','ophpdb.user'@'%';
FLUSH PRIVILEGES;

DROP SCHEMA IF EXISTS `ophpdb` ;
CREATE SCHEMA IF NOT EXISTS `ophpdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ophpdb`;

DROP TABLE IF EXISTS `ophpdb`.`test` ;
CREATE TABLE IF NOT EXISTS `ophpdb`.`test` (
  `id` TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` CHAR(25) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE USER 'ophpdb.adm'@'%' IDENTIFIED BY 'ophpdb.adm.pwd';
GRANT ALL PRIVILEGES ON `ophpdb`.* TO 'ophpdb.adm'@'%';
CREATE USER 'ophpdb.user'@'%' IDENTIFIED BY 'ophpdb.user.pwd';
GRANT SELECT,INSERT,UPDATE,DELETE ON TABLE `ophpdb`.`test` TO 'ophpdb.user'@'%';
FLUSH PRIVILEGES;
