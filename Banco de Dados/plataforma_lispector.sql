CREATE TABLE alunos (

id_aluno INT (100) NOT  NULL AUTO_INCREMENT,
nome VARCHAR (60) NOT  NULL,
email VARCHAR (60) NOT  NULL,
senha  VARCHAR (255) NOT  NULL,
matricula VARCHAR (50) NOT  NULL,
turma VARCHAR (5) NOT  NULL,
PRIMARY KEY (id_aluno)
);

CREATE TABLE professor (

id_professor INT (100) NOT NULL AUTO_INCREMENT,
nome VARCHAR (60) NOT  NULL,
email VARCHAR (60) NOT  NULL,
senha  VARCHAR (255) NOT  NULL,
matricula VARCHAR (50) NOT  NULL,
PRIMARY KEY (id_professor)
);

CREATE TABLE disciplina (

id_disciplina INT (100) NOT  NULL AUTO_INCREMENT,
nome VARCHAR (60) NOT  NULL,
PRIMARY KEY (id_disciplina)
);

CREATE TABLE tarefa (

id_tarefa INT (100) NOT  NULL AUTO_INCREMENT,
nome VARCHAR (60) NOT  NULL,
id_professor INT (100),
PRIMARY KEY (id_tarefa),
FOREIGN KEY (id_professor) REFERENCES professor (id_professor)
);

CREATE TABLE questao (

id_questao INT (100) NOT  NULL AUTO_INCREMENT,
pergunta VARCHAR (60) NOT  NULL,
resposta VARCHAR (60) NOT  NULL,
id_tarefa INT (100),
id_disciplina INT (100),
id_professor INT (100),
PRIMARY KEY (id_questao),
FOREIGN KEY (id_tarefa) REFERENCES tarefa (id_tarefa),
FOREIGN KEY (id_disciplina) REFERENCES disciplina (id_disciplina),
FOREIGN KEY (id_professor) REFERENCES professor (id_professor)
);

CREATE TABLE aluno_questao (

id_aluno INT (100),
id_questao INT (100),
FOREIGN KEY (id_aluno) REFERENCES aluno (id_aluno),
FOREIGN KEY (id_questao) REFERENCES questao (id_questao)
);

CREATE TABLE aluno_tarefa (

id_aluno INT (100),
id_tarefa INT (100),
FOREIGN KEY (id_aluno) REFERENCES aluno (id_aluno),
FOREIGN KEY (id_tarefa) REFERENCES tarefa (id_tarefa)
);

CREATE TABLE questao_tarefa (

id_tarefa INT (100),
id_questao INT (100),
FOREIGN KEY (id_tarefa) REFERENCES tarefa (id_tarefa),
FOREIGN KEY (id_questao) REFERENCES questao (id_questao)
);