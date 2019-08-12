CREATE TABLE  alunos (
    id INT,
    nome VARCHAR(60),
    email VARCHAR(60),
    senha VARCHAR(60),
    matricula VARCHAR(50),
    turma INT
    PRIMARY KEY (id);
)

CREATE TABLE professor (
    id INT,
    nome VARCHAR(60),
    email VARCHAR(60),
    matricula VARCHAR(60),
    senha VARCHAR(70)
    PRIMARY KEY (id);
)