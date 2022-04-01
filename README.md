# Laravel Message Whiz

## Installation

You can install the package via composer:

```bash
composer require rosemalejohn/laravel-message-whiz
```

The package will automatically register itself.

You can publish the configurations files with:

```bash
php artisan vendor:publish --provider="Rosemalejohn\MessageWhiz\MessageWhizServiceProvider"
```

To use MessageWhiz on your Laravel notifications, just add this on notification's `via` method

```php
public function via($notifiable)
{
    return ['database', 'broadcast', \Rosemalejohn\MessageWhize\NotificationChannel::class]
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.