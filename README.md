# ProductIncludeShoptet

A multi-tenant Laravel back-end for importing product catalogues from [Shoptet](https://www.shoptet.cz/) e-shops via their XML product feeds. It is the foundation for product campaigns built on top of the imported catalogue.

**Status:** early-stage prototype (2023). The data model, queued import job, factories and tests are in place; the web UI is a placeholder.

## Features

- **Multi-tenancy** – every e-shop and product belongs to a tenant (`tenant_id`).
- **E-shops** – name, URL, active flag and time of the last import run.
- **Products** – Shoptet product ID, name, short and full description, price, manufacturer, adult flag, item type, URL and visibility.
- **Queued import** – each product from a feed is imported by the `ImportProducts` job, processed by Laravel queues and monitored with Laravel Horizon.
- **API authentication** – Laravel Sanctum.

## Tech stack

PHP 8.1+, Laravel 10, MySQL 8, Redis, Laravel Horizon, Sanctum, PHPUnit, Larastan (PHPStan), Laravel Sail (Docker).

## Getting started

```bash
cp .env.example .env
composer install
./vendor/bin/sail up -d          # MySQL and the app in Docker
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan queue:work   # queue worker (Horizon requires QUEUE_CONNECTION=redis)
```

Run the tests:

```bash
./vendor/bin/sail artisan test
```

GitHub Actions run the PHPUnit suite on every push to `master` (`.github/workflows/laravel.yml`).

## Project layout

```
app/Jobs/ImportProducts.php   queued import of one product
app/Models/                   Tenant, Eshop, Product, User
database/migrations/          products, eshops, jobs tables
database/factories/           Eshop, Product and User factories
tests/                        feature and unit tests
```

## Author

Developed by **Martin Pohorelský** ([martenech](https://github.com/martenech)).

## License

MIT, see [`LICENSE`](LICENSE).
