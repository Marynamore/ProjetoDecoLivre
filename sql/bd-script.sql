-- MySQL Script generated by MySQL Workbench
-- Thu Oct 20 16:42:43 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`passagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`passagens` (
  `id_passagens` INT NOT NULL AUTO_INCREMENT,
  `link_pass` VARCHAR(45) NULL,
  `origem_pass` VARCHAR(45) NULL,
  `destino_pass` VARCHAR(45) NULL,
  `valor_pass` INT NULL,
  `dt_inicio_pass` DATETIME NULL,
  `dt_fim_pass` DATETIME NULL,
  `internacional_pass` VARCHAR(45) NULL DEFAULT 'Falso',
  `situacao_pass` VARCHAR(15) NULL DEFAULT 'Ativo',
  `curtir_pass` TINYINT NULL DEFAULT 0,
  `avaliacao_pass` INT NULL DEFAULT 0 COMMENT '0 - nao avaliado\n1 a 5 = estrelas',
  `img_pass` VARCHAR(150) NULL,
  PRIMARY KEY (`id_passagens`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuarios` (
  `id_usuarios` INT NOT NULL,
  `nome_usu` VARCHAR(80) NULL,
  `email_usu` VARCHAR(150) NULL,
  `senha_usu` VARCHAR(50) NULL,
  `perfil_usu` VARCHAR(45) NULL COMMENT 'Cliente\nAdministrador\nEmpresa Aerea',
  `situacao_usu` VARCHAR(12) NULL COMMENT 'Ativo\nInativo\nBloqueado\nBanido',
  PRIMARY KEY (`id_usuarios`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pontos_turisticos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pontos_turisticos` (
  `id_pontur` INT NOT NULL,
  `selecionar_pontur` VARCHAR(45) NULL,
  `nome_pontur` VARCHAR(80) NULL,
  `cidade_pontur` VARCHAR(80) NULL,
  `pais_pontur` VARCHAR(80) NULL,
  `img_pontur1` VARCHAR(150) NULL,
  `img_pontur2` VARCHAR(150) NULL,
  `img_pontur3` VARCHAR(150) NULL,
  `fk_usuarios_id_usuarios` INT NOT NULL,
  PRIMARY KEY (`id_pontur`, `fk_usuarios_id_usuarios`),
  INDEX `fk_pontos_turisticos_usuarios1_idx` (`fk_usuarios_id_usuarios` ASC),
  CONSTRAINT `fk_pontos_turisticos_usuarios1`
    FOREIGN KEY (`fk_usuarios_id_usuarios`)
    REFERENCES `mydb`.`usuarios` (`id_usuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Comentarios` (
  `id_comentarios` INT NOT NULL,
  `texto_com` VARCHAR(150) NULL,
  `tipo_com` VARCHAR(45) GENERATED ALWAYS AS () VIRTUAL COMMENT 'Elogio\nCritica\nSugestoes\nPergunta',
  `situacao_com` VARCHAR(15) NULL COMMENT 'A situação do comentario pode se: \nAtivo\nInativo\nBloqueado\nDenunciando\nEstrelas\n',
  `fk_passagens_id_passagens` INT NOT NULL,
  `fk_pontos_turisticos_id_pontur` INT NOT NULL,
  `pontos_turisticos_usuarios_id_usuarios` INT NOT NULL,
  PRIMARY KEY (`id_comentarios`, `fk_passagens_id_passagens`, `fk_pontos_turisticos_id_pontur`, `pontos_turisticos_usuarios_id_usuarios`),
  INDEX `fk_Comentarios_passagens1_idx` (`fk_passagens_id_passagens` ASC),
  INDEX `fk_Comentarios_pontos_turisticos1_idx` (`fk_pontos_turisticos_id_pontur` ASC, `pontos_turisticos_usuarios_id_usuarios` ASC),
  CONSTRAINT `fk_Comentarios_passagens1`
    FOREIGN KEY (`fk_passagens_id_passagens`)
    REFERENCES `mydb`.`passagens` (`id_passagens`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comentarios_pontos_turisticos1`
    FOREIGN KEY (`fk_pontos_turisticos_id_pontur` , `pontos_turisticos_usuarios_id_usuarios`)
    REFERENCES `mydb`.`pontos_turisticos` (`id_pontur` , `fk_usuarios_id_usuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Comentarios_has_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Comentarios_has_usuarios` (
  `Comentarios_passagens_idpassagens` INT NOT NULL,
  PRIMARY KEY (`Comentarios_passagens_idpassagens`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios_acessa_passagens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuarios_acessa_passagens` (
  `usuarios_id_usuarios` INT NOT NULL,
  `passagens_id_passagens` INT NOT NULL,
  PRIMARY KEY (`usuarios_id_usuarios`, `passagens_id_passagens`),
  INDEX `fk_usuarios_has_passagens_passagens1_idx` (`passagens_id_passagens` ASC),
  INDEX `fk_usuarios_has_passagens_usuarios1_idx` (`usuarios_id_usuarios` ASC),
  CONSTRAINT `fk_usuarios_has_passagens_usuarios1`
    FOREIGN KEY (`usuarios_id_usuarios`)
    REFERENCES `mydb`.`usuarios` (`id_usuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_passagens_passagens1`
    FOREIGN KEY (`passagens_id_passagens`)
    REFERENCES `mydb`.`passagens` (`id_passagens`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios_publica_Comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuarios_publica_Comentarios` (
  `usuarios_id_usuarios` INT NOT NULL,
  `Comentarios_id_comentarios` INT NOT NULL,
  `Comentarios_fk_passagens_id_passagens` INT NOT NULL,
  `Comentarios_pontos_turisticos_id_pontur` INT NOT NULL,
  `Comentarios_pontos_turisticos_usuarios_id_usuarios` INT NOT NULL,
  PRIMARY KEY (`usuarios_id_usuarios`, `Comentarios_id_comentarios`, `Comentarios_fk_passagens_id_passagens`, `Comentarios_pontos_turisticos_id_pontur`, `Comentarios_pontos_turisticos_usuarios_id_usuarios`),
  INDEX `fk_usuarios_has_Comentarios_Comentarios1_idx` (`Comentarios_id_comentarios` ASC, `Comentarios_fk_passagens_id_passagens` ASC, `Comentarios_pontos_turisticos_id_pontur` ASC, `Comentarios_pontos_turisticos_usuarios_id_usuarios` ASC),
  INDEX `fk_usuarios_has_Comentarios_usuarios1_idx` (`usuarios_id_usuarios` ASC),
  CONSTRAINT `fk_usuarios_has_Comentarios_usuarios1`
    FOREIGN KEY (`usuarios_id_usuarios`)
    REFERENCES `mydb`.`usuarios` (`id_usuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_Comentarios_Comentarios1`
    FOREIGN KEY (`Comentarios_id_comentarios` , `Comentarios_fk_passagens_id_passagens` , `Comentarios_pontos_turisticos_id_pontur` , `Comentarios_pontos_turisticos_usuarios_id_usuarios`)
    REFERENCES `mydb`.`Comentarios` (`id_comentarios` , `fk_passagens_id_passagens` , `fk_pontos_turisticos_id_pontur` , `pontos_turisticos_usuarios_id_usuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;