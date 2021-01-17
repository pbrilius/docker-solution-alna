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
npm install
npm install --save vue jquery;
```
Run `npm run dev` and with the installation, run it again till it's finished.

Get to [http://localhost:2124/dashboard](Dashboard) on the browser.

Run units:
```
./vendor/bin/phpunit
```

# FAQ
======

* Cannot append to log file - `sudo chmod -Rv 2777 full-stack/storage/logs`