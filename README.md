Objetivo de desenvolvimento desse projeto foi Implementar LiveWire para validação de input dentro de modal entre outras Libs complementares como Alpine Js e criar Componentes , e claro entender como o LiveWire trata as view e request ;)<br /> <br /> 
Uma aplicação web simulando um cadastro de pessoas. As informações necessárias para o cadastro serão -> DADOS PESSOAIS -> nome, cpf ou cnpj, identidade(RG), data de nascimento, estado civil. ENDEREÇO -> cep, rua, estado, bairro, complemento. TELEFONES -> tipo(cel ou fixo), numero com dd.

Regras de negócio

Para este teste foi necessário criar um CRUD onde seja possivel (Adicionar, Editar, Listar e Excluir). Os campos cpf, cnpj, identidade(RG) e telefone devem conter as mascaras respectivas. Em endereço o campo cep deve preencher automaticamente os outros campos (Ultilizar API Viacep) https://viacep.com.br Todos os campos são obrigatórios. Criar uma função para validar o cpf. Os campos de telefones devem ser dinâmicos.

Vá ate o repositorio do projeto 
```dosini
https://github.com/GuilhermeAlamino/laravel-livewire
```

Utilize o terminal e vá até a sua pasta "htdocs" se estiver usando o *xampp* se não, pode ir até a pasta do seu *Ambiente de desenvolvimento* e Execute o comando abaixo:

```sh
*git clone https://github.com/GuilhermeAlamino/laravel-livewire.git* 
```
Ou usando a interface do Git-Hub :

```sh
Se quiser baixar a paste, e colar no seu ambiente de desenvolvimento também ira funcionar.
```

Agora abre seu editor, vá até a pasta que normalmente seria *laravel-livewire*, e atualize as variáveis de ambiente do arquivo (*laravel-livewire/.env*) *(Obs: pode seguir as *Configurações* da maneira que está sendo feita aqui :)*)


```sh
Não esqueça de criar o seu Banco de dados, com o nome que vai ficar na variavel de ambiente DB_DATABASE; 
```

```dosini
APP_NAME="laravel-livewire"
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel-livewire
DB_USERNAME=root
DB_PASSWORD=
```

Certifique se que tenha composer instalado, se não tiver baixe, pode executar no terminal o comando para verificar -> *composer -v*.
```sh
https://getcomposer.org/Composer-Setup.exe
```

Agora vai precisar usar comandos em seu *terminal* que ele pode ser de sua preferencia, caminhe até dentro da pasta criara *laravel-livewire*, após isso rode o comando no *terminal*, *Rode o comando para instalar as dependências no seu *terminal*.
```sh
*Composer install*
```

Rode o comando para Gerar a key do projeto ainda no *terminal*.
```sh
php artisan key:generate
```

Execute a migrate para executar as migrações do Banco de dados.
```sh
php artisan migrate
```

Execute o projeto com o seguinte comando.
```sh
php artisan serve
```

Agora é só acessar a url.
[http://127.0.0.1:8000/](http://127.0.0.1:8000/)

