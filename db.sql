CREATE TABLE usuario(
    id int primary key auto_increment,
    username varchar(50) unique,
    password varchar(255),
    nombre varchar(25),
    apellido varchar(25)
);



CREATE TABLE `blog`.`publicacion` (
  `idPublicacion` INT NOT NULL AUTO_INCREMENT,
  `idAutor` INT NOT NULL,
  `fechaHora` DATETIME NOT NULL,
  `cuerpo` VARCHAR(2500) NOT NULL,
  PRIMARY KEY (`idPublicacion`));


  ALTER TABLE `blog`.`publicacion` 
ADD INDEX `idAutor_idx` (`idAutor` ASC);
;
ALTER TABLE `blog`.`publicacion` 
ADD CONSTRAINT `idAutor`
  FOREIGN KEY (`idAutor`)
  REFERENCES `blog`.`usuario` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;