CREATE DATABASE plataforma_lispector;   
     
CREATE TABLE alunos (

id int ( 60 ) NOT  NULL,
nome VARCHAR ( 60 ) NOT  NULL,
email VARCHAR ( 60 ) NOT  NULL,
senha  VARCHAR ( 60 ) NOT  NULL,
matricula VARCHAR ( 50 ) NOT  NULL,
turma VARCHAR ( 5 ) NOT  NULL,
PRIMARY KEY (ID)
)

CREATE TABLE professor (

id int ( 60 ) NOT  NULL,
nome VARCHAR ( 60 ) NOT  NULL,
email VARCHAR ( 60 ) NOT  NULL,
senha  VARCHAR ( 60 ) NOT  NULL,
matricula VARCHAR ( 50 ) NOT  NULL,
PRIMARY KEY (ID)
)

CREATE TABLE tarefa (

id int ( 60 ) NOT  NULL,
nome VARCHAR ( 60 ) NOT  NULL,
PRIMARY KEY (ID)
)

CREATE TABLE disciplina (

id int ( 60 ) NOT  NULL,
nome VARCHAR ( 60 ) NOT  NULL,
PRIMARY KEY (ID)
)

CREATE TABLE questao (

id int ( 60 ) NOT  NULL,
pergunta VARCHAR ( 60 ) NOT  NULL,
pergunta VARCHAR ( 60 ) NOT  NULL,
PRIMARY KEY (ID)
)

CREATE TABLE aluno_questao (

id_aluno INT ( 10 ),
id_questao INT ( 10 ),
)

CREATE TABLE aluno_tarefa (

id_aluno INT ( 10 ),
id_tarefa INT ( 10 ),

CREATE TABLE questao_tarefa (

id_tarefa INT ( 10 ),
id_questao INT ( 10 ),
/* Professor, eu gostaria de saber se as tabelas estão corretas e gostaria de saber onde e como eu coloco a Chave Estrangeira. Eu sei que o senhor disse que o professor Fernando vai dar orientações na segunda, mas eu quis começar a fazer para tentar adiantar. */