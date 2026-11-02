# Duja Coffee

Duja Coffee is a web-based business management and point-of-sale platform maintained by Gazi2029.

The repository contains a Laravel application with a Vue-based frontend and supporting services for retail operations, inventory, finance, and online-store workflows.

## Technology

- **Backend:** PHP 8.2+ and Laravel 12
- **Frontend:** Vue 2.7, Laravel Mix, JavaScript, and Tailwind CSS
- **Authentication and API:** Laravel Passport
- **Build tools:** Composer and npm

## Project areas

The current source tree includes code for:

- Point of sale and sales transactions
- Purchases, purchase returns, sales returns, and payments
- Products, stock, and inventory exports
- Expenses and accounting workflows
- Cash-register events
- Customer-facing online-store routes, checkout, and account pages
- Subscription invoice generation and SMS reminders
- WooCommerce product and stock synchronization
- Database backup and scheduled maintenance commands
- PDF and spreadsheet-related integrations

Feature availability and configuration depend on the application setup and enabled modules.

## Repository layout

```text
app/          Application code, controllers, events, commands, and services
bootstrap/    Laravel application bootstrap
config/       Application and package configuration
database/     Migrations, factories, and seeders
public/       Public web assets and entry point
resources/    Frontend assets, views, and language resources
routes/       Web and API route definitions
tests/        Automated tests
```

## Requirements

- PHP 8.2 or later
- Composer
- Node.js and npm
- A database supported by the configured Laravel connection
- A web server configured to serve the Laravel `public/` directory

Required PHP extensions depend on the packages enabled in `composer.json`.

## Local development

1. Clone the repository.
2. Install PHP dependencies with `composer install`.
3. Copy `.env.example` to `.env` and configure the application and database values.
4. Generate an application key with `php artisan key:generate`.
5. Run database migrations only after reviewing the configured database and migration set.
6. Install frontend dependencies with `npm install`.
7. Build frontend assets with `npm run development` or `npm run production`.
8. Start the local server with `php artisan serve`.

Do not commit real environment files, credentials, API tokens, customer data, database dumps, or production backups.

## Configuration and integrations

Third-party integrations are configured through environment variables and application settings. Review the relevant configuration before enabling payment, messaging, storage, or commerce integrations. Never publish live credentials.

## Project status

This repository is under active maintainer preparation. Documentation and setup instructions may evolve as the project is reviewed and tested.

## Maintainer

Maintained by [Gazi2029](https://github.com/Gazi2029).

## License

No repository-wide open-source license is declared here. A license should be added only after confirming that the maintainer has the right to license every included component and dependency. Until then, do not assume that this repository grants permission to reuse, modify, or redistribute its contents.
