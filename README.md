# Laravel Plugin for Tidsbanken API Integration

This Laravel plugin enables easy integration with the Tidsbanken API. Tidsbanken provides various functionalities related to employee time tracking and management. For detailed information on using the Tidsbanken API, refer to [Tidsbanken Developer Documentation](https://developer.tidsbanken.net).

## Installation

Install the plugin via Composer:

```bash
composer require eeappdev/tidsbanken
```

## Configuration

Publish the configuration file to customize your Tidsbanken API settings:

```bash
php artisan vendor:publish --provider="Eeappdev\Tidsbanken\TidsbankenServiceProvider"
````

After publishing, you'll find the tidsbanken.php configuration file in your config directory. Update the following environment variables in your .env file with your Tidsbanken API credentials:

```dotenv
TIDSBANKEN_BASEURL=
TIDSBANKEN_TB_KEY=
TIDSBANKEN_SUBSCRIPTION_KEY=
TIDSBANKEN_API_VERSION=
```

## Usage

Use the Http::tidsbanken() macro to make requests to the Tidsbanken API:

```php
use Illuminate\Support\Facades\Http;

$response = Http::tidsbanken()->get('ansatt/ansatt?$select=Id,Fornavn&$top=2');

```

Replace the endpoint and request parameters according to your API needs. Consult the [Tidsbanken API documentation](https://developer.tidsbanken.net) for detailed information on available endpoints and request formats.