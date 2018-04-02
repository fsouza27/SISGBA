#CRIA O BANCO sisgba_db#
CREATE DATABASE IF NOT EXISTS sisgba_db
default character set utf8
default collate utf8_general_ci;

/*TABELA ALUNOS */
CREATE TABLE IF NOT EXISTS alunos
(id INT AUTO_INCREMENT primary key,
 nome VARCHAR(60) NOT NULL,
 ra INT(12) NOT NULL unique,
 email VARCHAR(60) NOT NULL unique,
 CURSO VARCHAR(60) NOT NULL)
 default charset=utf8;

 #COLOCAR O NOME DA COLUNA CURSO EM minusculas#
 ALTER TABLE alunos CHANGE CURSO curso VARCHAR(60) NOT NULL;
 #Inclui a coluna senha#
 ALTER TABLE alunos ADD senha VARCHAR(20) NOT NULL;

 #Insere um aluno#
 INSERT INTO alunos(nome,email,ra,curso,senha) VALUES('ANDRÉ','andre@gmail.com',22232425,'ADS','1234');
