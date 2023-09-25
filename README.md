# About this PHP MVC Application

This is the skeleton application for custom PHP MVC Framework, designed for learning purposes. While this framework may
not be production-ready, it serves as a valuable educational resource for understanding the fundamentals of MVC and web
development in PHP.

> **Note:** You may find Custom PHP MVC Framework core, using following
> link: https://github.com/TDarkCoder/php-mvc-framework

> If you want to contribute, feel free to do so.

## Features

- **MVC Architecture:** Separation of concerns for better code organization.
- **Controller:** Create controllers to handle user requests and interact with models.
- **View:** Implement views for rendering user interfaces.
- **Routing:** Define routes to control how URLs are handled.
- **Middleware:** Implement middleware to process requests before they reach the controller.
- **Request Handler:** Handle incoming HTTP requests and route them to the appropriate controller.
- **Form Constructor:** Easily create forms for user input and validation.
- **Model:** Implement models to interact with the database and perform CRUD operations.

## Installations

```bash
composer install
copy .env .env.example
```

## Migration commands

To run migrations

```bash
php migrations.php up  
```

To rollback migrations

```bash
php migrations.php down
```

To reset entire database

```bash
php migrations.php refresh
```