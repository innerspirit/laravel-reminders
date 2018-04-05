# Laravel Reminders
Add reminder to your Eloquent models.

## Installation
1. You can install the package via composer:

```bash
composer require mahdinickdel/laravel-reminders
```

The package will automatically register itself.

2. You can publish the migration with:

```bash
php artisan vendor:publish --provider="Mahdinickdel\Reminders\RemindersServiceProvider" --tag="migrations"
```

After the migration has been published you can create the reminders table by running the migrations:

```bash
php artisan migrate
```

## Usage
```php
namespace App;

...
use Mahdinickdel\Reminders\Remindable;
...

class EloquentModelName extends Model
{
    use Remindable;
}

```

## License
This package is released under the MIT license (MIT).
