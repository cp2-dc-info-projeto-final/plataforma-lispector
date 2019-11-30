# Especificação de Casos de Uso

## CDU 01

- Cadastro de Alunos

**Atores:** Professores

**Pré-requisitos:** Ser aluno do CIEP 404 - Clarice Lispector.

**Fluxo Principal:**
1. O usuário informa nome, turma, e-mail, matrícula, senha e confirma a senha.
2. Sistema verifica se os dados são válidos. Caso os dados já estejam cadastrados no sistema, estejam incompletos ou errado, ele retornará um erro. Se os dados forem válidos, o sistema efetuará o cadastro do usuário como aluno. O usuário é cadastrado por um professor.

## CDU 02

- Cadastro de Professores

**Atores:** Professores

**Pré-requisitos:** Ser Professor do CIEP 404 - Clarice Lispector.

**Fluxo Principal:**

1. Usuário informa nome, matrícula, email, senha e cconfirma a senha.
2. Sistema verifica se a matrícula realmwnte, é do professor e verifica se tem algum erro nos dados inseridos. Caso haja algum erro, o sistema retornará para o formulário. Se os dados forem válidos, o sistema efetuará o cadastro do usuário como professor. O usuário é cadastrado por ele mesmo, através da Matrícula saberemos se ele trabalha no Ciep.

## CDU 03

- Login

**Atores:** Alunos e professores

**Pré-condições:** Ser cadastrado no sistema

**Fluxo Principal:**

1. Usuários informam e-mail e senha. Se os dados informados estiverem de acordo com os registrados no sistema, o usuário recebe permissão de acesso de acordo com o cadastro, indo para a tela individual do perfil de cada um.

+ Alunos recebem as permissões de acesso de Aluno;
+ Professores recebem as permissões de acesso de Professor.

2. Caso o Usuário tenha esquecido sua senha, será redirecionado para a página de Recuperação.

## CDU 04

- Gerenciamento de Cadastros

**Atores:** Funcionários

**Pré-Condições:** Ser cadastrado no sistema como Funcionário e estar logado

**Fluxo Principal:**
1. Sistema disponibiliza a opção de um funcionário cadastrar um aluno


## CDU 05

- Entrega de Documentos aos Alunos 

**Atores:** Professores e Alunos

**Pré-Condições:** Estar cadastrado e logado no sistema como Professor ou Aluno

**Fluxo Principal:**
1. O professor enviará tarefas aos alunos;
2. Os alunos recebem as tarefas;