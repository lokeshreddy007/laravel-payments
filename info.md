### Basic commands

```bash
laravel new laravel-payments
npm install && npm run dev
composer require laravel/ui
php artisan ui vue --auth
```

## Model

```bash
php artisan make:model PaymentPlatform -m
php artisan make:model Currency -m
```

## Seeder

```bash
php artisan make:seeder PaymentPlatsformTableSeeder
php artisan make:seeder CurrenciesTableSeeder

```

## refresh

```php

php artisan migrate:fresh --seed
```
