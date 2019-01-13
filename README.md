# condominio

**Premissas:** Ter o Docker e Docker-compose instalados

Clonar o repositório 

`git clone https://github.com/rmsaitam/condominio.git`

Acessar o diretório do repositório clonado 

`cd condominio`

Build do ambiente

`docker-compose build; docker-compose up -d`

Instalar o framework Laravel com composer dentro do container PHP

`docker exec -it php_condominio composer install`

Executar o migrations e seeds

```
docker exec -it php_condominio php artisan migrate
docker exec -it php_condominio php artisan db:seed
```

Gerar Key do projeto

`docker exec -it php_condominio php artisan key:generate`

No browser: http://localhost:8080
