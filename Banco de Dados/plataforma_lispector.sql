CREATE DATABASE plataforma_lispector;   
     
CREATE TABLE alunos (

id INT (100) NOT  NULL AUTO_INCREMENT,
nome VARCHAR (60) NOT  NULL,
email VARCHAR (60) NOT  NULL,
senha  VARCHAR (60) NOT  NULL,
matricula VARCHAR (50) NOT  NULL,
turma VARCHAR (5) NOT  NULL,
PRIMARY KEY (id)
);

CREATE TABLE professor (

id INT (100) NOT NULL AUTO_INCREMENT,
nome VARCHAR (60) NOT  NULL,
email VARCHAR (60) NOT  NULL,
senha  VARCHAR (60) NOT  NULL,
matricula VARCHAR (50) NOT  NULL,
PRIMARY KEY (id)
);

CREATE TABLE tarefa (

id INT (100) NOT  NULL AUTO_INCREMENT,
nome VARCHAR (60) NOT  NULL,
id_professor INT (100),
PRIMARY KEY (id),
FOREIGN KEY (id_professor) REFERENCES professor
);

CREATE TABLE disciplina (

id INT (100) NOT  NULL AUTO_INCREMENT,
nome VARCHAR (60) NOT  NULL,
PRIMARY KEY (id)
);

CREATE TABLE questao (

id INT (100) NOT  NULL AUTO_INCREMENT,
pergunta VARCHAR (60) NOT  NULL,
resposta VARCHAR (60) NOT  NULL,
id_tarefa INT (100),
id_disciplica INT (100),
id_professor INT (100),
PRIMARY KEY (id),
FOREIGN KEY (id_tarefa) REFERENCES tarefa,
FOREIGN KEY (id_disciplina) REFERENCES disciplina,
FOREIGN KEY (id_professor) REFERENCES professor
);

CREATE TABLE aluno_questao (

id_aluno INT (100),
id_questao INT (100),
FOREIGN KEY (id_aluno) REFERENCES aluno,
FOREIGN KEY (id_questao) REFERENCES questao
);

CREATE TABLE aluno_tarefa (

id_aluno INT (10),
id_tarefa INT (10),
);

CREATE TABLE questao_tarefa (

id_tarefa INT (10),
id_questao INT (10),
);
