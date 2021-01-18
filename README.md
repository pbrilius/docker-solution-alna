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

Don't get afraid *if it fails on some units*, because its DDD and documentation discrepancies.
\
Start queue processing:
```
php artisan queue:work
```

Get to **Redis** configuration: `REDIS_HOST=172.16.238.10` `.env`. 

## Database initialize

Add credentials to `.env`: 
```
DB_USERNAME=docker_alna
DB_PASSWORD=TxuJAz
```

Initialize database and migrate:
```
docker container exec -it docker-solution-alna_full-stack_1 /bin/bash
cd laravel.app
cat dist/db-init.sql | mysql
exit
```


## Working with forms

Then navigate to the form and upload some data, e. g. *https://medium.com/swlh/fun-with-python-3-hacking-instagram-giveaways-35e5b1d51670*
& *article.meteredContent*. After a while - like a 1 min or so, click **Load Crawl Data** button on the grid and results will pop up.

# FAQ

* Cannot append to log file - `sudo chmod -Rv 2777 full-stack/storage/logs`