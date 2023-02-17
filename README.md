Objetivo de desenvolvimento desse projeto foi 
```dosini
Uma aplicação web simulando um cadastro de pessoas. As informações necessárias para o cadastro serão -> DADOS PESSOAIS -> nome, cpf ou cnpj, identidade(RG), data de nascimento, estado civil. ENDEREÇO -> cep, rua, estado, bairro, complemento. TELEFONES -> tipo(cel ou fixo), numero com dd.

Regras de negócio

Para este teste será necessário criar um CRUD onde seja possivel (Adicionar, Editar, Listar e Excluir). Os campos cpf, cnpj, identidade(RG) e telefone devem conter as mascaras respectivas. Em endereço o campo cep deve preencher automaticamente os outros campos (Ultilizar API Viacep) https://viacep.com.br Todos os campos são obrigatórios. Criar uma função para validar o cpf. Os campos de telefones devem ser dinâmicos.
```

Vá ate o repositorio do projeto 
```dosini
https://github.com/GuilhermeAlamino/ZrSystem
```
Atualize as variáveis de ambiente do arquivo ( pode seguir da maneiras que está sendo feita aqui :) ) .env
```dosini
APP_NAME="ZrSystem"
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=zrsystem
DB_USERNAME=root
DB_PASSWORD=root
```

Certifique se que tenha composer instalado, se não tiver baixe.
```sh
https://getcomposer.org/Composer-Setup.exe
```

Após ter o composer instalado, caminhe até a sua pasta "htdocs" se estiver usando o *xampp* se não pode ir até a pasta do seu *Ambiente de desenvolvimento* e crie uma pasta chamada *ZrSystem*.

Agora vai precisar usar comandos em seu *terminal* de preferencia, caminhe até dentro da pasta criara *ZrSystem*, após isso rode o comando  no *terminal* abaixo.

```sh
composer create-project laravel/laravel:^8.0 ZrSystem
```

Rode o comando para Gerar a key do projeto Laravel ainda no *terminal*.
```sh
php artisan key:generate
```

Execute a migrate para carregar a Estrutura do Banco de dados.
```sh
php artisan migrate
```

Execute o projeto com o seguinte comando.

```sh
php artisan serve
```

Agora é só acessar a url.

```sh
php artisan serve
```
[http://127.0.0.1:8000/](http://127.0.0.1:8000/)
