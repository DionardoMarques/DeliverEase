# DeliverEase - Brudam
<p>Este é um sistema de gerenciamento de pedidos de entregas baseado em Laravel que permite a criação e visualização destes registros.</p>

![DeliverEase_Brudam](https://github.com/DionardoMarques/DeliverEase/assets/65215542/d3f133d2-fbeb-4494-941b-d8f8fc209a44)

## Pré-requisitos

Para rodar o projeto, são necessárias as seguintes tecnologias:

- [PHP 8.2.6](https://www.php.net/downloads.php)
- [Laravel Framework 10.13.1](https://laravel.com/)
- [Composer 2.4.7](https://getcomposer.org/download/)
- [MySQL 8.0.33](https://dev.mysql.com/downloads/installer/)

## Configuração

1. Clone o repositório para sua máquina local:

    `git clone https://github.com/DionardoMarques/DeliverEase`
    
2. Navegue até o diretório do projeto:

    `cd DeliverEase`
    
3. Instale as dependências do projeto usando o Composer:

    `composer install`
    
4. Crie uma cópia do arquivo .env.example e renomeie-o para .env:

    `cp .env.example .env`
    
5. Gere uma nova chave para a aplicação:

    `php artisan key:generate`
    
6. Abra o arquivo .env e atualize a conexão do banco de dados de acordo com a configuração do seu MySQL:
    
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```
    
 7. Crie o banco de dados MySQL para a aplicação.
 8. Execute as migrations para criação das tabelas necessárias no banco de dados:

    `php artisan migrate`
    
 9. Para a tabela de clientes (customers), é necessário popular com dados, portanto, utilize o script abaixo dentro de algum gerenciador do MySQL (por exemplo: MySQL Workbench):

    ```
    INSERT INTO `localhost`.`customers`
    (`name`, `created_at`, `updated_at`)
    VALUES
    ('Cliente 1', NOW(), NOW()),
    ('Cliente 2', NOW(), NOW()),
    ('Cliente 3', NOW(), NOW()),
    ('Cliente 4', NOW(), NOW()),
    ('Cliente 5', NOW(), NOW());
    ```
10. Inicie o servidor de desenvolvimento e acesse a url no navegador:

    `php artisan serve`
    
    http://localhost:8000

## Uso da Aplicação

- Criar pedidos de entrega para clientes;
- Armazenar pedidos no banco de dados;
- Visualizar pedidos de entrega existentes.

## Licença

Este projeto é um software de código aberto licenciado sob a [MIT license](https://opensource.org/licenses/MIT).
