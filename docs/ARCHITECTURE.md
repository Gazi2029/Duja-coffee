# Architecture Overview

This document describes the high-level structure visible in the current repository. It is intentionally limited to verified source-tree and dependency information. It is not a substitute for a full security or code audit.

## Application foundation

The application is built on Laravel 12 and PHP 8.2+. Composer manages backend packages and PSR-4 autoloading. The frontend build uses Laravel Mix, Vue 2.7, and Tailwind CSS.

## Main source areas

- `app/Console`: scheduled and operational commands, including database backup, subscription invoice generation, SMS reminders, and WooCommerce synchronization.
- `app/Events`: domain events for sales, purchases, returns, payments, expenses, and cash-register activity.
- `app/Exports`: export-related classes, including stock export.
- `app/Http`: HTTP controllers, middleware, requests, and related application interfaces.
- `config/`: Laravel and integration configuration.
- `database/`: database migrations, seeders, and factories.
- `resources/`: server-rendered views and frontend source assets.
- `routes/`: web and API route definitions.
- `tests/`: automated test code.

## Functional domains observed

The repository contains implementation areas for POS sales, purchasing, stock operations, payment and expense workflows, accounting operations, customer-facing store pages, checkout, customer accounts, subscriptions, and WooCommerce synchronization.

The presence of a class or route does not by itself guarantee that a feature is enabled or production-ready. Verify runtime configuration, permissions, migrations, and tests before relying on any workflow.

## Request and integration flow

1. HTTP requests enter through Laravel routes.
2. Route middleware and controllers handle access and request processing.
3. Application services, models, and domain events implement business operations.
4. Queued or scheduled console commands handle background and maintenance tasks where configured.
5. External integrations use their respective packages and configured credentials.

## Data and security considerations

- Keep secrets in environment configuration and never commit them.
- Review authorization and tenant/branch boundaries before deployment.
- Validate payment, messaging, and commerce webhook signatures.
- Back up databases securely and test restore procedures.
- Review migrations against a non-production database before applying them.
- Run automated tests and dependency/security checks before releases.

## Documentation maintenance

Update this document when the architecture materially changes. Keep descriptions aligned with the actual code and tested behavior. Do not add unsupported claims about scale, adoption, compliance, or security certification.
