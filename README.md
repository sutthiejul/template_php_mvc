# PHP MVC Template

A simple yet powerful MVC (Model-View-Controller) template for building PHP applications.

## Features

✅ Clean MVC Architecture
✅ Simple Routing System
✅ Reusable Templates
✅ Lightweight & Fast
✅ Perfect for Learning PHP
✅ Easy to Customize

## Project Structure

```
php-mvc-template/
├── public/
│   └── index.php              (Entry point)
├── app/
│   ├── controllers/
│   │   └── HomeController.php
│   ├── models/
│   │   └── BaseModel.php
│   └── views/
│       ├── header.php
│       ├── footer.php
│       ├── home.php
│       ├── about.php
│       └── contact.php
├── config/
│   └── config.php
└── README.md
```

## Installation

### Clone the repository
```bash
git clone https://github.com/sutthiejul/template_php_mvc.git
cd template_php_mvc
```

## Usage

### Run the PHP Development Server
```bash
php -S localhost:8000 -t public/
```

Then open your browser and navigate to:
```
http://localhost:8000
```

## Navigation

- **Home**: `?page=home`
- **About**: `?page=about`
- **Contact**: `?page=contact`

## How It Works

1. All requests go through `public/index.php` (entry point)
2. The router checks the `page` query parameter
3. Appropriate view is loaded based on the page
4. Header and footer are included automatically

## Security Notes

- Always use `htmlspecialchars()` when outputting user data
- Validate and sanitize all user inputs
- Use prepared statements for database queries
- Keep sensitive data in `.env` or configuration files

## License

MIT License - Feel free to use this template for your projects!