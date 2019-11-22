# Especificação de Casos de Uso

## CDU 01
- Cadastro de Alunos

**Atores:** Funcionários

**Pré-requisitos:** Ser aluno do CIEP 404 - Clarice Lispector.

**Fluxo Principal:**
1. O usuário informa Matrícula, Nome, Turma, E-mail e uma Senha.
2. Sistema verifica se o e-mail é válido; caso o e-mail já esteja cadastrado no sistema, ele retornará um erro; se o e-mail for válido o sistema efetuará o cadastro do usuário como aluno. O usuário é cadastrado por um funcionário.

## CDU 02

- Cadastro de Professores

**Atores:** Professores

**Pré-requisitos:** Ser Professor do CIEP 404 - Clarice Lispector.

**Fluxo Principal:**
1. Usuário informa Nome, Matrícula e Email.
2. Sistema verifica se o e-mail é válido; caso o e-mail já esteja cadastrado no sistema, ele retornará um erro; se o e-mail for válido o sistema efetuará o cadastro da pessoa como Professor.

## CDU 03

- Cadastro de Funcionários

**Atores:** Funcionários

**Pré-requisitos:** Ser funcionário do CIEP 404 - Clarice Lispector.

**Fluxo Principal:**
1. Usuário informa o Nome e Email
2. Sistema verifica se o e-mail é valido; caso o e-mail já esteja cadastrado no sistema, ele retornará um erro; se o e-mail for válido o sistema efetuará o cadastro da pessoa como Funcionário.

## CDU 04

- Login

**Atores:** Alunos, Professores e Funcionários

**Pré-condições:** Ser cadastrado no sistema

**Fluxo Principal:**

1. Usuário informa e-mail e senha. Se os dados informados estiverem de acordo com os registrados no sistema, o usuário recebe permissão de acesso de acordo com o cadastro, indo para a tela inicial equivalente a seus respectivos status.
+ Alunos recebem as permissões de acesso de Aluno;
+ Professores recebem as permissões de acesso de Professor;
+ Funcionários recebem as permissões de acesso de Funcionário.

2. Caso o Usuário tenha esquecido sua senha, será redirecionado para a página de Recuperação através do email informado.

## CDU 05

- Gerenciamento de Cadastros

**Atores:** Funcionários

**Pré-Condições:** Ser cadastrado no sistema como Funcionário e estar logado

**Fluxo Principal:**
1. Sistema disponibiliza a opção de um funcionário cadastrar um aluno

## CDU 06

- Elaboração de Calendário de Avaliações futuras

**Atores:** Professores

**Pré-Condições:** Ser cadastrado no sistema como Professor e estar logado

**Fluxo Principal:**
1. O Professor elabora um calendário para cientificação dos alunos quanto às datas das avaliações que estão por vir.

## CDU 07

- Confecção do Mural de Notícias

**Atores:** Funcionários

**Pré-Condições:** Ser cadastrado no sistema como Funcionário e estar logado

**Fluxo Principal:**
1. Funcionário informa os eventos previstos da instituição ou avisos, seja referente à escola, seja referente à plataforma.

## CDU 08

- Entrega de Documentos aos Alunos 

**Atores:** Professores e Alunos

**Pré-Condições:** Estar cadastrado e logado no sistema como Professor ou Aluno

**Fluxo Principal:**
1. O professor tem acesso às informações do Aluno (nome e turma, apenas), envia os documentos aos alunos;
2. Os alunos recebem os documentos;


