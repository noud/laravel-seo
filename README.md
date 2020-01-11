# Laravel SEO Google Structured data

Laravel SEO package.

## Requirements

* PHP 7.2+
* Laravel 5.6+

## Installation

Install the package by running this command in your terminal/cmd:
```
composer require noud/laravel-seo
```

## Usage

You can now use all SEO aspects from
- [Google Structured data](https://github.com/noud/laravel-seo-google-structured-data)
- [Google indexing API](https://github.com/noud/laravel-seo-google-indexing-api)
- [Schema.org](https://github.com/noud/laravel-seo-schema-org)
- [slug](https://github.com/noud/laravel-seo-slug)

## Development

Put this package directory beside your project directory.

In ```conmposer.json``` of the target project add
```
    "require": {
        "noud/laravel-seo": "*"
    },
    "repositories": [
        {
            "type": "path",
            "url": "../laravel-seo"
        }
    ]
```
In ```.env``` of the target project i set the database to an alternative database
```
DB_DATABASE=seo-seo
#DB_DATABASE=seo
```

## Development migration

I migrate just this schema like so in the target project:
```
php artisan migrate --realpath --path=/var/www/laravel-seo/src/database/migrations
```

## Development models generation

In the target project set the path and namespace in ```config/models.php```
```
        'path' => app_path('Models-seo-seo'),
        'namespace' => 'SEO\Models',
```
I generate the models from this schema like so in the target project:
```
php artisan code:models --schema=seo-seo
```

Then copy everything from ```app/Models-seo-seo``` to the package.