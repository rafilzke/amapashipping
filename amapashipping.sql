-- MySQL Script generated by MySQL Workbench
-- Sun Aug 22 21:04:27 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`financeiro_escritorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`financeiro_escritorio` (
  `idfinanceiro_escritorio` INT NOT NULL AUTO_INCREMENT,
  `tipodentrada` VARCHAR(45) NULL,
  `entrada` DECIMAL(10,2) NULL,
  `tiposaida` VARCHAR(45) NULL,
  `saida` DECIMAL(10,2) NULL,
  `datalancamento` DATETIME NULL,
  `usuario` VARCHAR(45) NULL,
  PRIMARY KEY (`idfinanceiro_escritorio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NULL,
  `nome` VARCHAR(45) NULL,
  `sobrenome` VARCHAR(45) NULL,
  `senha` VARCHAR(255) NULL,
  `email` VARCHAR(100) NULL,
  `tipo` VARCHAR(45) NULL,
  `ativo` VARCHAR(45) NULL,
  `novasenha` VARCHAR(45) NULL,
  `financeiro_escritorio_idfinanceiro_escritorio` INT NOT NULL,
  PRIMARY KEY (`idusuario`),
  INDEX `fk_usuario_financeiro_escritorio1_idx` (`financeiro_escritorio_idfinanceiro_escritorio` ASC) VISIBLE,
  CONSTRAINT `fk_usuario_financeiro_escritorio1`
    FOREIGN KEY (`financeiro_escritorio_idfinanceiro_escritorio`)
    REFERENCES `mydb`.`financeiro_escritorio` (`idfinanceiro_escritorio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `razaosocial` VARCHAR(100) NULL,
  `endereco` VARCHAR(200) NULL,
  `cidade` VARCHAR(200) NULL,
  `pais` VARCHAR(200) NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`navio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`navio` (
  `idnavio` INT NOT NULL AUTO_INCREMENT,
  `vesselname` VARCHAR(200) NULL,
  `type` VARCHAR(200) NULL,
  `portofregistry` VARCHAR(200) NULL,
  `officialno` VARCHAR(200) NULL,
  `imo` VARCHAR(200) NULL,
  `mmsino` VARCHAR(200) NULL,
  `class` VARCHAR(45) NULL,
  `callsign` VARCHAR(45) NULL,
  `builders` VARCHAR(200) NULL,
  `yearbuilt` VARCHAR(45) NULL,
  `keellaid` VARCHAR(45) NULL,
  `dateofdelivery` VARCHAR(45) NULL,
  `buildersno` VARCHAR(45) NULL,
  `registeredowners` VARCHAR(200) NULL,
  `management` VARCHAR(200) NULL,
  `summerdwt` VARCHAR(45) NULL,
  `summerdraft` VARCHAR(45) NULL,
  `summerfreeboard` VARCHAR(45) NULL,
  `summerdisplacement` VARCHAR(45) NULL,
  `tpc` VARCHAR(45) NULL,
  `lightweight` VARCHAR(45) NULL,
  `grosstonnage` VARCHAR(45) NULL,
  `netttonnage` VARCHAR(45) NULL,
  `loa` VARCHAR(45) NULL,
  `lbp` VARCHAR(45) NULL,
  `distbowtobridge` VARCHAR(45) NULL,
  `diststerntobridge` VARCHAR(45) NULL,
  `breadthmouded` VARCHAR(45) NULL,
  `depthmoulded` VARCHAR(45) NULL,
  `htabovekeel` VARCHAR(45) NULL,
  `capbulk` VARCHAR(45) NULL,
  `capbale` VARCHAR(45) NULL,
  `capwaterballast` VARCHAR(45) NULL,
  `naviocol` VARCHAR(200) NULL,
  `capfreshwater` VARCHAR(45) NULL,
  `capfo` VARCHAR(45) NULL,
  `capdo` VARCHAR(45) NULL,
  `caplubeoil` VARCHAR(45) NULL,
  `hatchcovertype` VARCHAR(200) NULL,
  `cranes` VARCHAR(200) NULL,
  `grabsnoxcapacity` VARCHAR(200) NULL,
  `windlass` VARCHAR(200) NULL,
  `mooringwinch` VARCHAR(200) NULL,
  `mainengine` VARCHAR(200) NULL,
  `auxiliarengine` VARCHAR(200) NULL,
  `steeringgear` VARCHAR(200) NULL,
  `vsattelno` VARCHAR(200) NULL,
  `email` VARCHAR(200) NULL,
  `anchors` VARCHAR(200) NULL,
  `cliente_idcliente` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idnavio`),
  INDEX `fk_navio_cliente_idx` (`cliente_idcliente` ASC) VISIBLE,
  INDEX `fk_navio_usuario1_idx` (`usuario_idusuario` ASC) VISIBLE,
  CONSTRAINT `fk_navio_cliente`
    FOREIGN KEY (`cliente_idcliente`)
    REFERENCES `mydb`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_navio_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`documentacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`documentacao` (
  `iddocumentacao` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `imagem` VARCHAR(45) NULL,
  PRIMARY KEY (`iddocumentacao`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pratico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pratico` (
  `idpratico` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `registro` VARCHAR(45) NULL,
  `valor` DECIMAL(10,2) NULL,
  PRIMARY KEY (`idpratico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`viagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`viagem` (
  `idviagem` INT NOT NULL AUTO_INCREMENT,
  `datasaida` DATETIME NULL,
  `pais` VARCHAR(45) NULL,
  `portochegada` VARCHAR(45) NULL,
  `datachegada` DATETIME NULL,
  `iniciopraticagem` DATETIME NULL,
  `fimpraticagem` DATETIME NULL,
  `status` VARCHAR(45) NULL,
  `navio_idnavio` INT NOT NULL,
  `documentacao_iddocumentacao` INT NOT NULL,
  `pratico_idpratico` INT NOT NULL,
  PRIMARY KEY (`idviagem`, `documentacao_iddocumentacao`),
  INDEX `fk_viagem_navio1_idx` (`navio_idnavio` ASC) VISIBLE,
  INDEX `fk_viagem_documentacao1_idx` (`documentacao_iddocumentacao` ASC) VISIBLE,
  INDEX `fk_viagem_pratico1_idx` (`pratico_idpratico` ASC) VISIBLE,
  CONSTRAINT `fk_viagem_navio1`
    FOREIGN KEY (`navio_idnavio`)
    REFERENCES `mydb`.`navio` (`idnavio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_viagem_documentacao1`
    FOREIGN KEY (`documentacao_iddocumentacao`)
    REFERENCES `mydb`.`documentacao` (`iddocumentacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_viagem_pratico1`
    FOREIGN KEY (`pratico_idpratico`)
    REFERENCES `mydb`.`pratico` (`idpratico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`proposta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`proposta` (
  `idproposta` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  `imgaem` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  `dataporposta` DATETIME NULL,
  `valortotal` DECIMAL(10,2) NULL,
  `navio_idnavio` INT NOT NULL,
  PRIMARY KEY (`idproposta`),
  INDEX `fk_proposta_navio1_idx` (`navio_idnavio` ASC) VISIBLE,
  CONSTRAINT `fk_proposta_navio1`
    FOREIGN KEY (`navio_idnavio`)
    REFERENCES `mydb`.`navio` (`idnavio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '							';


-- -----------------------------------------------------
-- Table `mydb`.`financeiro_navio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`financeiro_navio` (
  `idfinanceiro_navio` INT NOT NULL AUTO_INCREMENT,
  `tipoentrada` VARCHAR(45) NULL,
  `entrada` DECIMAL(10,2) NULL,
  `tiposaida` VARCHAR(45) NULL,
  `saida` DECIMAL(10,2) NULL,
  `datalancamento` DATETIME NULL,
  `usuario` VARCHAR(45) NULL,
  `navio_idnavio` INT NOT NULL,
  PRIMARY KEY (`idfinanceiro_navio`),
  INDEX `fk_financeiro_navio_navio1_idx` (`navio_idnavio` ASC) VISIBLE,
  CONSTRAINT `fk_financeiro_navio_navio1`
    FOREIGN KEY (`navio_idnavio`)
    REFERENCES `mydb`.`navio` (`idnavio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`status` (
  `idstatus` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  `cor` VARCHAR(45) NULL,
  `viagem_idviagem` INT NOT NULL,
  `viagem_documentacao_iddocumentacao` INT NOT NULL,
  PRIMARY KEY (`idstatus`),
  INDEX `fk_status_viagem1_idx` (`viagem_idviagem` ASC, `viagem_documentacao_iddocumentacao` ASC) VISIBLE,
  CONSTRAINT `fk_status_viagem1`
    FOREIGN KEY (`viagem_idviagem` , `viagem_documentacao_iddocumentacao`)
    REFERENCES `mydb`.`viagem` (`idviagem` , `documentacao_iddocumentacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
