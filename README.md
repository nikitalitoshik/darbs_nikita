## Default DB is sqlite

### Prerequisite if you want to use with postgresql
[Docker](https://www.docker.com/products/docker-desktop/) - containers
for sqlite sudo apt install php-sqlite3
composer also needed

## Installing
Instruction to set up dev environment.
1. Clone this repo
2. cp .env.example .env -> php artisan key:generate

In case of sqlite

3. php artisan migrate --seed
4. php artisan optimize
5. npm i 
6. npm run dev
7. php artisan serve
8. go to localhost

In case of postgresql
3. `./vendor/bin/sail up`
4. configure alias `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`
5. `sail artisan migrate --seed`
6. go to localhost

User: test@example.com
pass: password
