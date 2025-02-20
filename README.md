**Install**

Copy file
`.env.example to .env`

Build project
`docker-compose up -d`

New laravel project 

`docker-compose run --rm composer create-project laravel/laravel ./`

`docker-compose run  --rm artisan key:generate`

`docker-compose run --rm composer install`

`sudo chmod 777 ./src/storage -R`

Edit Laravel .env file

`DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=password`

