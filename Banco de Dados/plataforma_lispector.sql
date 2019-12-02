CREATE DATABASE plataforma_lispector;   
     
CREATE TABLE alunos (

id int ( 1) NOT  NULL AUTO_INCREMENT,
nome VARCHAR ( 60 ) NOT  NULL,
email VARCHAR ( 60 ) NOT  NULL,
senha  VARCHAR ( 60 ) NOT  NULL,
matricula VARCHAR ( 50 ) NOT  NULL,
turma VARCHAR ( 5 ) NOT  NULL,
PRIMARY KEY (ID)
);

 CREATE TABLE professor (

id int (1) NOT NULL AUTO_INCREMENT,
nome VARCHAR ( 60 ) NOT  NULL,
email VARCHAR ( 60 ) NOT  NULL,
senha  VARCHAR ( 60 ) NOT  NULL,
matricula VARCHAR ( 50 ) NOT  NULL,
PRIMARY KEY (ID)
);

CREATE TABLE tarefa (

id int (1) NOT  NULL AUTO_INCREMENT,
nome VARCHAR ( 60 ) NOT  NULL,
PRIMARY KEY (ID),
FOREING KEY (id_professor) REFERENCES professor
);

CREATE TABLE disciplina (

id int ( 60 ) NOT  NULL AUTO_INCREMENT,
nome VARCHAR ( 60 ) NOT  NULL,
PRIMARY KEY (ID)
);

CREATE TABLE questao (

id int ( 60 ) NOT  NULL AUTO_INCREMENT,
pergunta VARCHAR ( 60 ) NOT  NULL,
resposta VARCHAR ( 60 ) NOT  NULL,
PRIMARY KEY (ID),
FOREIGN KEY (id_tarefa) REFERENCES tarefa,
FOREIGN KEY (id_disciplina) REFERENCES disciplina,
FOREIGN KEY (id_professor) REFERENCES professor
);

CREATE TABLE aluno_questao (

id_aluno INT ( 10 ),
id_questao INT ( 10 ),
).

CREATE TABLE aluno_tarefa (

id_aluno INT ( 10 ),
id_tarefa INT ( 10 ),
);

CREATE TABLE questao_tarefa (

id_tarefa INT ( 10 ),
id_questao INT ( 10 ),
);
