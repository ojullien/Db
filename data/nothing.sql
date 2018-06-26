-- -----------------------------------------------------
-- Ophp framework
--
-- @package Db
-- @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
-- -----------------------------------------------------
USE `ophpdb`;
DELIMITER $$
DROP PROCEDURE IF EXISTS `ophpdb`.`nothing`$$

/**
 * Do nothing.
 *
 */
CREATE PROCEDURE `ophpdb`.`nothing`()
    SQL SECURITY INVOKER
BEGIN
 -- Do nothing
END $$

DELIMITER ;
