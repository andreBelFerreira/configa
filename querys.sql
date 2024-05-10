CREATE DATABASE congica;

DROP TABLE LIVROS;
CREATE TABLE `LIVROS` (
    `ID` INT NOT NULL AUTO_INCREMENT,
    `TITULO` VARCHAR(100) NULL DEFAULT NULL,
    `DESCRICAO` VARCHAR(250) NOT NULL DEFAULT '',
    `AUTOR` VARCHAR(50) NULL DEFAULT NULL,
    `URL` VARCHAR(250) NULL DEFAULT NULL,
    `FAVORITO` CHAR, 
    PRIMARY KEY (`ID`)
);
        
INSERT INTO LIVROS (`TITULO`, `DESCRICAO`, `AUTOR`, `URL`) 
VALUES ("O deus que destroi sonhos","O Deus cristão não pode ser domesticado Uma tentação constante que cerca a vida cristã é a inversão do chamado: a presunção de que Deus precisa abençoar o 
			meu caminho e me seguir em meus planos e sonhos.","Rodrigo Bibo","https://m.media-amazon.com/images/I/91VxtptiBgL._AC_UF1000,1000_QL80_DpWeblab_.jpg");
            
INSERT INTO LIVROS (`TITULO`, `DESCRICAO`, `AUTOR`, `URL`) 
VALUES ("A batalha de todo homem: Vencendo a tentação sexual, uma vitória por vez","Ao visitar sites pornográficos, admirar fotos em revistas eróticas ou despir com os olhos uma mulher diferente 
		daquela com a qual estabeleceu uma aliança diante do Senhor, o homem comete o pecado do adultério, mesmo que não leve nenhuma outra para a ","Fred Stoeker",
        "https://m.media-amazon.com/images/I/81GLT1ZpA3L._AC_UF1000,1000_QL80_.jpg");
        
INSERT INTO LIVROS (`TITULO`, `DESCRICAO`, `AUTOR`, `URL`) 
VALUES ("Para você eu conto","O primeiro amor é o mais marcante na vida de uma pessoa? Nesta obra, Juca conta a seu neto a emocionante história de sua primeira paixão: Marta, 
		uma professora que luta contra a repressão e contra os nazistas do Rio Grande.","Moacyr Scliar","https://m.media-amazon.com/images/I/81a8se4jzDL._AC_UF1000,1000_QL80_.jpg");
            
INSERT INTO LIVROS (`TITULO`, `DESCRICAO`, `AUTOR`, `URL`) 
VALUES ("A arte da guerra","A Arte da Guerra é um antigo tratado militar chinês que data do fim do período das Primaveras e Outonos. A obra, que é atribuída ao antigo estrategista 
		militar chinês Sun Tzu, é composta por treze capítulos.","Sun Tzu","https://m.media-amazon.com/images/I/51Fe45NGwkL._AC_UF1000,1000_QL80_.jpg");

SELECT 
    *
FROM
    livros;