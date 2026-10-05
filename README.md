# CVEGuard Server
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)
[![Laravel](https://img.shields.io/badge/Laravel-PHP-red)](https://laravel.com)

Laravel web server for **CVEGuard** — the vulnerability intelligence platform.
Serves the UI and API backed by the vulnerability data populated by
[cveguard-vulnerabilities-seeder](https://github.com/aavash-devkota/cveguard-vulnerabilities-seeder),
and consumed by [cveguard-client](https://github.com/aavash-devkota/cveguard-client).

## Requirements

- PHP 8.2+, Composer, Node.js, a database (MySQL/SQLite)

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install && npm run build
php artisan serve
```

## License

MIT
