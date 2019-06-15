
CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR( 50 ) NOT NULL ,
    `endereço` varchar(30) NOT NULL,
    `cpf` varchar(11) NOT NULL,
    `rg` varchar(10) NOT NULL,
    `email` VARCHAR( 100 ) NOT NULL ,
    `usuario` VARCHAR( 25 ) NOT NULL ,
    `senha` VARCHAR( 40 ) NOT NULL ,
    `cadastro` DATETIME NOT NULL ,
    PRIMARY KEY (`id`),
    UNIQUE KEY `usuario` (`usuario`),
    KEY `nivel` (`nivel`)
  ) ENGINE=MyISAM ;