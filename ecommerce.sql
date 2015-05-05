-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema eccomerce_project
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema eccomerce_project
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `eccomerce_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `eccomerce_project` ;

-- -----------------------------------------------------
-- Table `eccomerce_project`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Admin` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `pasword` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eccomerce_project`.`Customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Customers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eccomerce_project`.`Card`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Card` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `CC_number` INT NULL,
  `Card_name` VARCHAR(45) NULL,
  `security_code` INT NULL,
  `expiration` INT NULL,
  `Customers_id` INT NOT NULL,
  `salt` VARCHAR(60) NULL,
  PRIMARY KEY (`id`, `Customers_id`),
  INDEX `fk_Card_Customers1_idx` (`Customers_id` ASC),
  CONSTRAINT `fk_Card_Customers1`
    FOREIGN KEY (`Customers_id`)
    REFERENCES `eccomerce_project`.`Customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eccomerce_project`.`Orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Qty` INT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `Users_id` INT NOT NULL,
  `Card_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Users_id`, `Card_id`),
  INDEX `fk_Orders_Users1_idx` (`Users_id` ASC),
  INDEX `fk_Orders_Card1_idx` (`Card_id` ASC),
  CONSTRAINT `fk_Orders_Users1`
    FOREIGN KEY (`Users_id`)
    REFERENCES `eccomerce_project`.`Customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Orders_Card1`
    FOREIGN KEY (`Card_id`)
    REFERENCES `eccomerce_project`.`Card` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eccomerce_project`.`Categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cat_name` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eccomerce_project`.`Addresses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Addresses` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Street` VARCHAR(45) NULL,
  `City` VARCHAR(45) NULL,
  `State` VARCHAR(45) NULL,
  `zip_code` INT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `Customers_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Customers_id`),
  INDEX `fk_Addresses_Customers1_idx` (`Customers_id` ASC),
  CONSTRAINT `fk_Addresses_Customers1`
    FOREIGN KEY (`Customers_id`)
    REFERENCES `eccomerce_project`.`Customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eccomerce_project`.`Products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `price` INT NULL,
  `Description` TEXT(1000) NULL,
  `Inventory_qty` VARCHAR(45) NULL,
  `products_sold` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eccomerce_project`.`Categories_has_Products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Categories_has_Products` (
  `Categories_id` INT NOT NULL,
  `Products_id` INT NOT NULL,
  PRIMARY KEY (`Categories_id`, `Products_id`),
  INDEX `fk_Categories_has_Products_Products1_idx` (`Products_id` ASC),
  INDEX `fk_Categories_has_Products_Categories1_idx` (`Categories_id` ASC),
  CONSTRAINT `fk_Categories_has_Products_Categories1`
    FOREIGN KEY (`Categories_id`)
    REFERENCES `eccomerce_project`.`Categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Categories_has_Products_Products1`
    FOREIGN KEY (`Products_id`)
    REFERENCES `eccomerce_project`.`Products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eccomerce_project`.`Dashboard_orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Dashboard_orders` (
  `Orders_id` INT NOT NULL,
  `Products_id` INT NOT NULL,
  `Status` VARCHAR(45) NULL,
  `Admin_id` INT NOT NULL,
  PRIMARY KEY (`Orders_id`, `Products_id`, `Admin_id`),
  INDEX `fk_Orders_has_Products_Products1_idx` (`Products_id` ASC),
  INDEX `fk_Orders_has_Products_Orders1_idx` (`Orders_id` ASC),
  INDEX `fk_Orders_has_Products_Admin1_idx` (`Admin_id` ASC),
  CONSTRAINT `fk_Orders_has_Products_Orders1`
    FOREIGN KEY (`Orders_id`)
    REFERENCES `eccomerce_project`.`Orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Orders_has_Products_Products1`
    FOREIGN KEY (`Products_id`)
    REFERENCES `eccomerce_project`.`Products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Orders_has_Products_Admin1`
    FOREIGN KEY (`Admin_id`)
    REFERENCES `eccomerce_project`.`Admin` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eccomerce_project`.`Images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eccomerce_project`.`Images` (
  `id` INT NOT NULL,
  `image_title` VARCHAR(45) NULL,
  `Products_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Products_id`),
  INDEX `fk_Images_Products1_idx` (`Products_id` ASC),
  CONSTRAINT `fk_Images_Products1`
    FOREIGN KEY (`Products_id`)
    REFERENCES `eccomerce_project`.`Products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
