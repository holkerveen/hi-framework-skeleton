# My DIY PHP Framework Application

This is a project built with [Hi Framework](https://github.com/holkerveen/hi-framework).

## Getting Started

### 1. Install Dependencies

```bash
composer install
```

### 2. Configure Database

Edit `src/config/doctrine-bootstrap.php` to configure your database connection.

The default is SQLite with the database file at `db.sqlite`.

### 3. Start Development Server

```bash
composer run serve
```

Visit [http://localhost:8000](http://localhost:8000)

## Project Structure

```
.
├── public/             # Web root (document root)
│   └── index.php      # Application entry point
├── src/
│   ├── Controllers/   # Your controllers
│   ├── Entity/        # Doctrine entities
│   └── config/        # Configuration files
├── templates/         # Twig templates
└── vendor/            # Composer dependencies
```

## Documentation

For framework documentation, see the [Hi Framework README](https://github.com/holkerveen/hi-framework).
