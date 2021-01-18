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

## Database initialize

Get to **Redis** configuration: `REDIS_HOST=172.16.238.10` `.env`. 

Add MySQL credentials to `.env`: 
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

Run units:
```
docker container exec -it docker-solution-alna_full-stack_1 /bin/bash
cd laravel.app
./vendor/bin/phpunit
```

Don't get afraid *if it fails on some units*, because its *DDD* and *documentation* discrepancies.

Start queue processing:
```
docker container exec -it docker-solution-alna_full-stack_1 /bin/bash
cd laravel.app
php artisan queue:work
```

## Working with forms

Get to [http://localhost:2124/dashboard](Dashboard) on the browser.


Then navigate to the form and upload some data, e. g. *https://medium.com/swlh/fun-with-python-3-hacking-instagram-giveaways-35e5b1d51670*
& *article.meteredContent*. After a while - like a 1 min or so, click **Load Crawl Data** button on the grid and results will pop up.

You can try with the next one - *https://pbrilius.medium.com/laravel-docker-conversation-violations-on-compose-instance-for-example-8914a6cc23a3?sk=143bc131cccb93c082bb14fcfcb2cd06* *article.meteredContent*.

# FAQ

* Cannot append to log file - `sudo chmod -Rv 2777 full-stack/storage/logs`