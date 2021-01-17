# project-alna

Add the correct *permissions*:

```
chmod -Rv o+rw full-stack/storage
```

Run launching up docker compose `docker-compose up -d`.

Install the assets
```
cd fullstack-alna;
composer install;
php artisan key:generate;
npm install;
```

Get to [http://localhost:2124/dashboard](Dashboard)

Run units:
```
./vendor/bin/phpunit
```
