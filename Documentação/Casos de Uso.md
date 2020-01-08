# Especificação de Casos de Uso

## CDU 01

- Cadastro de Alunos

**Atores:** Alunos

**Pré-requisitos:** Ser aluno do CIEP 404 - Clarice Lispector.

**Fluxo Principal:**

1. O aluno informa seus dados: nome, turma, e-mail, matrícula, senha e confirma a senha.

2. O sistema verifica se os dados são válidos. Caso os dados já estejam cadastrados no sistema, estejam incompletos ou errado, ele retornará para a própria página. Se os dados forem válidos, o sistema efetuará o cadastro do usuário como aluno.

3. O aluno é cadastrado por um professor.

## CDU 02

- Cadastro de Professores

**Atores:** Professores

**Pré-requisitos:** Ser Professor do CIEP 404 - Clarice Lispector.

**Fluxo Principal:**

1. Usuário informa nome, matrícula, email, senha e confirma a senha.

2. Sistema verifica se a matrícula realmwnte, é do professor e verifica se tem algum erro nos dados inseridos. Caso haja algum erro, o sistema retornará para o formulário. Se os dados forem válidos, o sistema efetuará o cadastro do usuário como professor. O usuário é cadastrado por ele mesmo, através da Matrícula saberemos se ele trabalha no Ciep.

## CDU 03

- Login dos Alunos 

**Atores:** Alunos 

**Pré-condições:** Ser cadastrado no sistema como Aluno

**Fluxo Principal:**

1. Usuários informam e-mail e senha. Se os dados informados estiverem de acordo com os registrados no sistema, o usuário recebe permissão de acesso, indo para a tela do perfil de alunos.

2. Caso o Usuário tenha esquecido sua senha, será redirecionado para a página de Recuperação.

## CDU 04

- Login dos Professores

**Atores:** Professores

**Pré-condições:** Ser cadastrado no sistema como Professor

**Fluxo Principal:**

1. Usuários informam e-mail e senha. Se os dados informados estiverem de acordo com os registrados no sistema, o usuário recebe permissão de acesso, indo para a tela do perfil de professores.

2. Caso o Usuário tenha esquecido sua senha, será redirecionado para a página de Recuperação.

## CDU 05

- Cadastro de Perguntas (Tarefas)

**Atores:** Professores 

**Pré-Condições:** Estar cadastrado e logado no sistema como Professor 

**Fluxo Principal:**

1. O professor deve informar seu nome, sua disciplina e quais são as perguntas que ele quer cadastraer.

2. Após o cadastramento das perguntas, as mesmas serão enviadas para os alunos.

## CDU 06

- Cadastro de Gabarito

**Atores:** Professores 

**Pré-Condições:** Estar cadastrado e logado no sistema como Professor 

**Fluxo Principal:**

1. O professor deve informar a resposta para cada uma das questões cadastradas.

2. Após o cadastramento do gabarito, o mesmo será enviado para os alunos.

## CDU 07

- Acesso as questões recebidas

**Atores:** Alunos 

**Pré-Condições:** Estar cadastrado e logado no sistema como Aluno 

**Fluxo Principal:**

1. O professor deve enviar as questões para os Alunos.

2. Após o envio das questões, os alunos poderão acessar as mesmas na página "Questão Recebida".

## CDU 07

- Acesso ao Gabarito recebido

**Atores:** Alunos 

**Pré-Condições:** Estar logado como aluno e estar na página de "Cantinho dos Gabaritos"

**Fluxo Principal:**

1. O professor deve enviar o gabarito das questões para os Alunos.

2. Após o envio das questões, os alunos poderão acessar as mesmas na página "Cantinho dos Gabaritos"
