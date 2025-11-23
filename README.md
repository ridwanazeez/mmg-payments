# MMG Payments Module

A Laravel module for integrating MMG Payments.

## Installation

### Prerequisites

Before installing this module, you need to install the following packages in your Laravel project:

1. **Laravel Modules** - Required for modular architecture:

```bash
composer require nwidart/laravel-modules
```

2. **Laravel Module Installer** - Ensures modules are installed in the correct `Modules/` directory:

```bash
composer require joshbrw/laravel-module-installer
```

For detailed setup instructions, see the [Laravel Modules documentation](https://github.com/nWidart/laravel-modules).

### Install the Module

Add the module to your Laravel project:

```bash
composer require ridwanazeez/mmg-module
```

For development/private repositories, add to your `composer.json`:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/ridwanazeez/mmg-module.git"
        }
    ],
    "require": {
        "ridwanazeez/mmg-module": "master"
    }
}
```

Then run:

```bash
composer update
```

### Enable the Module

After installation, enable the module:

```bash
php artisan module:enable MMG
```

### Run Migrations

Run the module migrations:

```bash
php artisan module:migrate MMG
```

### Seed Data (Optional)

If the module includes seeders:

```bash
php artisan module:seed MMG
```

## Configuration

Publish the module configuration (if available):

```bash
php artisan vendor:publish --tag=mmg-config
```

Add your MMG credentials to `.env`:

```env
BASE_URL=https://mmg-api-url.com
X_CLIENT_ID=your-client-id
MERCHANT_ID=your-merchant-id
MMG_SECRET_KEY=your-secret-key
```

**Required Environment Variables:**

-   `BASE_URL` - MMG API base URL
-   `X_CLIENT_ID` - Your MMG client ID
-   `MERCHANT_ID` - Your MMG merchant ID
-   `MMG_SECRET_KEY` - Your MMG secret key for authentication

## Usage

Documentation for using the MMG Payments integration will be added here.

## Development

### Testing

Run module tests:

```bash
php artisan test Modules/MMG/tests
```

### Publishing Updates

When making changes to this module:

1. Make your changes
2. Commit to Git:
    ```bash
    git add .
    git commit -m "Description of changes"
    ```
3. Push to repository:
    ```bash
    git push
    ```
4. Update version in consuming projects:
    ```bash
    composer update ridwanazeez/mmg-module
    ```

## Requirements

-   PHP 8.2 or higher
-   Laravel 12.x
-   nwidart/laravel-modules ^11.0

## License

MIT License. See LICENSE file for details.

## Author

**Ridwan Azeez**  
Email: ridwanazeez2000@gmail.com

## Contributing

Contributions are welcome! Please open an issue or submit a pull request on GitHub.
