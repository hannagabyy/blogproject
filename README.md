
# BlogProject
![Badge concluido](http://img.shields.io/static/v1?label=STATUS&message=%20CONCLUIDO&color=GREEN&style=for-the-badge)

Este projeto simula um blog com um sistema de cadastro de usuários, publicação de conteúdo e a capacidade de adicionar amigos. Além disso, inclui um modo de depuração para que o administrador do sistema possa realizar testes e monitorar o progresso da rede social.

Algumas das funcionalidades que verá em nosso projeto:

1. sistema de cadastro de usuários permite que novos membros se inscrevam na plataforma, fornecendo informações básicas como e-mail, usuário e senha.

2. sistema permite que os usuários criem e compartilhem postagens de forma particular onde apenas o autor da postagem poderá ver ou pública onde seus amigos poderão reagir a mesma

3. Os usuários têm a capacidade de adicionar amigos.

4. Um modo de depuração para o admin do sistema poder fazer testes e acompanhar o andamento da rede social

Em resumo, este projeto oferece uma experiência simulada de rede social, com recursos de cadastro de usuários, publicação de conteúdo, interação entre membros e ferramentas de monitoramento e depuração para garantir seu bom funcionamento.



## Funcionalidades e Demonstração
# 🔨 Funcionalidades do projeto

- `Cadastrar Usuário` : 

  ![criando_usuario-gif](https://github.com/hannagabyy/blogproject/assets/48922227/6f0b92b9-2a84-4748-a7eb-cd1d8579733c)  
  Função padrão de cadastro de usuário

- `Login do Usuário` :
  
  ![login_usuario](https://github.com/hannagabyy/blogproject/assets/48922227/4ca3603e-fb44-4282-b1d2-0bc6d16aa2c9)   
  Função padrão de login de usuário

- `Cadastrar um post` :
  
![novo-post-gif](https://github.com/hannagabyy/blogproject/assets/48922227/7d961b58-bc46-49e1-a5ce-205ec27b843f)  
Funcionalidade na qual o usuário poderá adicionar um post de forma privada(visível apenas para o criador do post) ou pública(visível apenas para os amigos)

- `Apagar e editar um post` : 

![editar-apagar-gif](https://github.com/hannagabyy/blogproject/assets/48922227/99756f4d-4011-4fa3-838c-3a2f8829ea32)  
Funcionalidade na qual o usuário poderá apagar ou editar um post

- `Procurar e Adicionar amigos` : 

![add-amigo-gif](https://github.com/hannagabyy/blogproject/assets/48922227/3be46ae9-f920-4707-b1dd-f7777d92da7a)  
Funcionalidade na qual o usuário poderá adicionar amigos a sua conta ou desfazer amizades

- `Modo master` :
    - Um usuário admin pode listar todos os usuarios, lançar posts e reações para fins de teste no site acessando a url **`http://localhost/Blog_project/master/`**
    - Inserir o seguinte login:  `usuário: admin , senha: admin123`

## Tecnologias Utilizadas
**Front-end:** ``HTML5`` ``CSS3``  ``Javascript`` ``SweetAlert2`` ``Bootstrap`` ``Ajax``

**Back-end:** ``PHP`` ``MariaDB`` 


## Rodando localmente
### Requisitos
- É necessário ter um servidor Apache, no desenvolvimento do projeto foi utilizado xampp (https://www.apachefriends.org/pt_br/index.html)
- O banco de dados instalado

Banco de dados


Clone o projeto

```bash
  git clone https://github.com/hannagabyy/blogproject.git
```

Entre no diretório do projeto

```bash
  cd blog_project
```

Acesse o projeto em

```bash
  http://localhost/Blog_project
```

## Autores
- [@LFelipeSN](https://www.github.com/LFelipeSN) (responsável pelo back-end)
- [@hannagabyy](https://www.github.com/hannagabyy) (responsável pelo front-end)
