Ajude.me - Projeto CMS I
=======================================

Versões utilizadas
----------------------

- PHP 7.4
- MySQL 8.0

Como montar o ambiente
----------------------

- Clonar o repositório para o ambiente local
- Acessar o repositório

```bash
cd ajudeme
```

- Definir que o Git ignore a alteração das permissões dos arquivos

```bash
git config core.fileMode false
```

- Montar o container Docker

```bash
docker-compose up -d
```

- Criar arquivo .env

```bash
docker exec -it ajudeme-www bash
cp .env.example .env
```

- Executar o composer dentro do container e configurar o Laravel

```bash
docker exec -it ajudeme-www bash
composer install
npm install

php artisan key:generate

php artisan migrate
```

- Após a conclusão da montagem do ambiente:
    - Acessar: http://localhost/
    - Efetuar registro
    - Utilizar o sistema!