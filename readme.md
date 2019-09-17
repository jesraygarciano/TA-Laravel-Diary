## Environment
- Creating Database

- `cp .env.example .env`

- Changed .env file for app
```
DB_DATABASE={DB_NAME}
DB_USERNAME={DB_USER}
DB_PASSWORD={DB_PASSWORD}
DB_SOCKET=/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock   //XAMPPを使用する場合のみ追記
```

- `composer install`

- `php artisan key:generate`

- `php artisan migrate:fresh --seed`

- `php artisan serve`

Hello World!!