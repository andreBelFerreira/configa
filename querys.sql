CREATE DATABASE congica;

DROP TABLE LIVROS;
CREATE TABLE
    `LIVROS` (
        `ID` INT NOT NULL AUTO_INCREMENT,
        `TITULO` VARCHAR(100) NULL DEFAULT NULL,
        `DESCRICAO` VARCHAR(250) NOT NULL DEFAULT '',
        `AUTOR` VARCHAR(50) NULL DEFAULT NULL,
        `URL` VARCHAR(250) NULL DEFAULT NULL,
        PRIMARY KEY (`ID`));
        
INSERT INTO LIVROS (`TITULO`, `DESCRICAO`, `AUTOR`, `URL`) 
VALUES ("O deus que destroi sonhos","O Deus cristão não pode ser domesticado Uma tentação constante que cerca a vida cristã é a inversão do chamado: a presunção de que Deus precisa abençoar o 
			meu caminho e me seguir em meus planos e sonhos.","Rodrigo Bibo","/aplication/includes/img/DeusQueDestroiSonhos.jpg")

SELECT *
FROM
    livros;