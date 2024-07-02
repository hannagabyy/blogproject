# BlogProject

Este projeto simula um blog com um sistema de cadastro de usuários, publicação de conteúdo e a capacidade de adicionar amigos. Além disso, inclui um modo de depuração para que o administrador do sistema possa realizar testes e monitorar o progresso da rede social.

Algumas das funcionalidades que verá em nosso projeto:

1. sistema de cadastro de usuários permite que novos membros se inscrevam na plataforma, fornecendo informações básicas como e-mail, usuário e senha.

2. sistema permite que os usuários criem e compartilhem postagens de forma particular onde apenas o autor da postagem poderá ver ou pública onde seus amigos poderão reagir a mesma

3. Os usuários têm a capacidade de adicionar amigos.

4. Um modo de depuração para o admin do sistema poder fazer testes e acompanhar o andamento da rede social

Em resumo, este projeto oferece uma experiência simulada de rede social, com recursos de cadastro de usuários, publicação de conteúdo, interação entre membros e ferramentas de monitoramento e depuração para garantir seu bom funcionamento.

![Badge concluido](http://img.shields.io/static/v1?label=STATUS&message=%20EM%20FINALIZADO&color=GREEN&style=for-the-badge)

## Indice
- [Funcionalidades e Demonstração](#funcionalidades-e-demonstração)

- [Modo Master](#modo-master)

- [Tecnologias Utilizadas](#tecnologias-utilizadas)

- [Rodando localmente](#rodando-localmente)

- [Autores](#autores)

## Funcionalidades e Demonstração
### 🔨 Funcionalidades do projeto

- `Cadastrar Usuário` : 

  ![cadastre_se](https://github.com/hannagabyy/blogproject/assets/88946180/1b2f9ad8-3d09-4b7c-b186-3076c4b69771)

  ![cadastre_se_mobile](https://github.com/hannagabyy/blogproject/assets/88946180/37b32c27-cc1b-4ddd-8c18-f5302b4f0553)

  Função padrão de cadastro de usuário

- `Login do Usuário` :
  
  ![login_usuario](https://github.com/hannagabyy/blogproject/assets/48922227/4ca3603e-fb44-4282-b1d2-0bc6d16aa2c9)   
  Função padrão de login de usuário

- `Cadastrar um post` :
  
![novo-post-gif](https://github.com/hannagabyy/blogproject/assets/48922227/7d961b58-bc46-49e1-a5ce-205ec27b843f)  
Funcionalidade na qual o usuário poderá adicionar um post de forma privada(visível apenas para o criador do post) ou pública(visível apenas para os amigos)

A caixa de texto é feita a partir do CKEditor e após clicar no botão "postar" a postagem é sanitizada e validada pelo php para posteriormente ser salva no banco


- `Apagar e editar um post` : 

![editar-apagar-gif](https://github.com/hannagabyy/blogproject/assets/48922227/99756f4d-4011-4fa3-838c-3a2f8829ea32)  
Funcionalidade na qual o usuário poderá apagar ou editar um post

- `Procurar e Adicionar amigos` : 

![add-amigo-gif](https://github.com/hannagabyy/blogproject/assets/48922227/3be46ae9-f920-4707-b1dd-f7777d92da7a)  
Funcionalidade na qual o usuário poderá adicionar amigos a sua conta ou desfazer amizades

Pesquisa feita utilizando resquisições assíncronas sem a nescessidade de recarregar a página, o mesmo acontece ao adicionar o amigo

## Modo Master
  - Usuado para testes e acompanhamento
  - Um usuário admin pode listar todos os usuarios, lançar posts e reações para fins de teste no site
  - Inserir o seguinte login:  `usuário: admin , senha: admin123`
    
 ### Como entrar
![entrando_adm](https://github.com/hannagabyy/blogproject/assets/88946180/93ccd555-04cb-4ca5-966c-7c4af4b06e1d)
acessando a url **`http://localhost/Blog_project/master/`**

### Funcionalidades do Modo Master
![listar_usuarios](https://github.com/hannagabyy/blogproject/assets/88946180/9a0b45b4-5749-434f-a84d-f074068cc381)
listando usuários no sistema

![listar_amizades](https://github.com/hannagabyy/blogproject/assets/88946180/1e622e72-aa95-489c-b7f8-6fa2873af075)
listando amizades no sistema

![lancar_publicacoes](https://github.com/hannagabyy/blogproject/assets/88946180/034147eb-35b4-4a13-a348-9faba54fa0d0)
lançando publicações para povoar o blog e realizar testes
      
![lançar reações](https://github.com/hannagabyy/blogproject/assets/88946180/94c0a452-2c04-43ff-9b26-08667928de86)
lançando reações em posts existentes para povoar o blog e realizar testes, caso os usuários não sejam amigos um erro irá aparecer

![listar_todos_posts](https://github.com/hannagabyy/blogproject/assets/88946180/e1ba6589-1c92-443c-b72e-55ba2a4937f1)
listando todos os posts lançados até o momento


## Tecnologias Utilizadas
**Front-end:** ``HTML5`` ``CSS3`` ``Javascript`` ``Bootstrap``

**Back-end:** ``PHP`` ``MariaDB`` 

**Outros:**  ``Ajax`` ``CKEditor 5`` ``SweetAlert2``


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
