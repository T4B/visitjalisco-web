# Visit Jalisco

## Project

**Agency:** Sarape Social

**Customer:** Visit Jalisco

## Quick start

Install **composer** and then:

```ssh
$ git clone git@github.com:beebmx/visitjalisco-web.git
$ cp .env.example .env
$ composer install
$ php artisan key:generate
$ php artisan storage:link
```

### For Algolia

To seed Algolia:

```ssh
php artisan scout:import
```

To flush (delete) all the Algolia data:

```ssh
php artisan scout:flush
```

Sync all the Algolia configurations

```ssh
php artisan scout:sync
```

Check the current models with Algolia

```ssh
php artisan scout:status
```
