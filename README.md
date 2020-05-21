# Dealer Sites - Test

## Requisitos:
- [Lando](https://docs.lando.dev/basics/installation.html) -> https://docs.lando.dev/basics/installation.html
- - Lando é uma abstração de **DOCKER** que facilita a vida de usuários iniciantes e Devs avançados é mais fácil de usar do que o **Docker Compose**
- [Docker](https://www.digitalocean.com/community/tutorials/como-instalar-e-usar-o-docker-no-ubuntu-18-04-pt) -> https://www.digitalocean.com/community/tutorials/como-instalar-e-usar-o-docker-no-ubuntu-18-04-pt
- [Docker-compose](https://docs.docker.com/compose/install/) -> https://docs.docker.com/compose/install/
- Usar framework Bootstrap
- Usar algum framerwork PHP (Laravel, Symfony, Cake PHP etc). Neste teste, estamos disponibilizando uma aplicação em laravel pronta para rodar a rota home ao qual será necessário criar o layout da página home que será o seu teste.
- Além disso, será gerado um banco de dados com algumas tabelas com informações já populadas para uso no teste. 
- Embora o banco de dados esteja pronto e disponível, você terá que criar os relacionamentos no framework para buscar esses dados e passar para sua view no front-end. Use da forma que achar melhor.
- Caso deseje usar outro framework em seu teste, sinta-se a vontade. O SQL com o banco de dados e os dados necessários estão na pasta **sql** na raiz do teste. As imagens com o layout estão no diretório **layout-template** localizada também na raiz do projeto.

## Configurando o ambiente: 
- Após a instalação do **Lando**, **Docker** e **Docker-compose**
- Crie uma pasta no seu diretório Documentos chamada **projetos**
- Dentro da pasta projetos execute o comando `git clone https://github.com/stephencamilo/apitest.git`
- Entre na pasta apitest
- Dentro da pasta apiteste execute o comando `lando start && lando composer install`, aguarde o lando montar o ambiente de desenvolvomento
- Apos o setup o lando te dará algumas opções de URL entre elas deve estar [http://apitest.lndo.site/](http://apitest.lndo.site/)
- - Essa página estará vazia pois ainda não criamos dados de test no bando
- Para criar e polular o banco de dados (que já foi criado pelo lando) com dados dummy execute o seguinte comando:
- - `lando php artisan migrate:fresh && lando php artisan test`
- - ***(Esse comando cria um teste automático que executa uma Factory usando o Faker Generator para gerar dados no banco de dados)***
- PRONTO agora o site pode ser visualizado na URL [http://apitest.lndo.site/](http://apitest.lndo.site/)

## Escopo:
- Codificar a página HOME baseada na imagem de layout nos seguintes diretórios:
    - Desktop -> "layout-template/Home.png"
    - Mobile -> "layout-template/mobile/Home.png"
- O página HOME deve ser desenvolvida para telas desktop e mobile conforme imagens das pastas acima
- O formulário deve ter validação com javascript (Frameworks JS são permitidos) para campos vazios e ou inválidos. Outros requisitos sobre os campos do formulário:
    - Campo nome completo deve conter ao menos 2 palavras para ser válido
    - Campo telefone deve ter ao menos todos caracteres de um telefone válido
    - Campo telefone deve ter máscará para telefones com e ou sem o digito 9
    - Campo CNPJ ou CPF deve ter validação de número válido
    - Enviar o formulário via XHR Request (Ajax, Axios etc) para o endpoint "/contact"
    - Exibir a mensagem de sucesso no formulário após retorno da request. Não é necessário nenhuma trativa no back-end. Já existe a rota definada no framework para responder para a request.
- Os seletores no topo da página são itens em dropdown que devem puxar as informações a partir do banco de dados. Requisitos:
    - Seletor de loja deve puxar o cadastro de lojas da tabela **lojas** no banco de dados
    - Seletor de telefones deve exibir os telefones cadastrado para as lojas na tabela **loja_telefones**
- Os menus devem ser exibidos de acordo com os dados cadastros na tabela **menus**. Requisitos:
    - Em se tratando de menu pai com menu filho, deve ser gerado um menu no estilo dropdown conforme imagem **SubMenu.png**
- A seção de dados da loja conforme imagem **SectionLoja.png**, deve ser uma tab vertical que exibe os dados de cada loja. Essas informações podem ser obtidas nas tabelas **lojas**, **loja_telefones** e **loja_enderecos**.
    - Renderizar o mapa usando os embed do google maps conforme cadastrado nas tabelas acima citadas
    - Ao clicar na tab da loja desejada, deve exibir os dados da loja em questão



