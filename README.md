# RPG-Toolkit


### Setup Instructions
1. Copy .env.example file and rename as .env 
2. Fill DB variables on .env file, put DB_DATABASE=rpgtoolkit
3. Create database on mysql/mariadb `CREATE DATABASE rpgtoolkit`
4. Open a new session on console and move to 'api' folder  
5. Run `composer install`
6. Run tests `vendor/bin/phpunit`
5. On console run migrations `php artisan migrate`
and after run seeders `php db:seed`
6. Execute web service `php -S localhost:8081 -t public`
7. Open a new session on console and move to 'app' folder 
8. Run `npm install`
9. Run `npm run serve -- --port 8080`
10. Open a web browser [http://localhost:8080](http://localhost:8080)

===========================================

[API REST Documentation](api/README.md)
