-- 01. Criando o banco de dados 'cadastro'.
-- CREATE DATABASE cadastro;

-- 02. Selecionando o banco de dados 'cadastro':
-- USE cadastro; 

-- 03. Criando a tabela 'pessoas' no banco de dados 'cadastro'.
/*
CREATE TABLE IF NOT EXISTS pessoas (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NOT NULL,
  data_nascimento DATE NULL,
  sexo CHAR(1) NOT NULL,
  ativo TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`)
);
*/

/* ---------- INSERINDO DADOS --------------- 

INSERT INTO pessoas (nome, data_nascimento, sexo, ativo)
VALUES ('João da Silva', '1910-10-25', 'M', 1);

INSERT INTO pessoas (nome, data_nascimento, sexo, ativo)
VALUES ('Maria da Silva', '1920-11-02', 'F', 1);

INSERT INTO pessoas (nome, data_nascimento, sexo, ativo)
VALUES ('Pedro Monteiro da Silva de Souza', '1930-08-22', 'M', 0);
*/

/*---------- SELECIONANDO/BUSCANDO DADOS ---------------

SELECT * FROM pessoas;

SELECT * FROM pessoas WHERE id = 1;
SELECT * FROM pessoas WHERE nome = 'João da Silva';
SELECT nome as Nome, id as Identificador FROM pessoas;

SELECT * 
FROM pessoas 
WHERE nome LIKE '%MONTEIRO%';

*/

/*---------- ATUALIZANDO DADOS ---------------

UPDATE pessoas
SET nome = 'Pedrinho Monteiro de Sousa'
WHERE id = 3;

*/

/*---------- EXCLUINDO LINHAS DA TABELA ---------------

DELETE FROM pessoas WHERE id = 1;

*/







