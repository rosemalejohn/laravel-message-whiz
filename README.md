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

## Laravel Notification

To use MessageWhiz on your Laravel notifications, just add `\Rosemalejohn\MessageWhiz\NotificationChannel::class` on notification's `via` method

```php
public function via($notifiable)
{
    return ['database', 'broadcast', \Rosemalejohn\MessageWhiz\NotificationChannel::class]
}
```

and then implement the function 

```php
public function toSms($notifiable): array
{
    return [
        'recipient' => $notifiable->phone_number,
        'message_body' => 'John Doe sent a like'
    ];
}
```

## API Documentation

For complete API documentation, head over to [MessageWhiz API documentation](http://api-doc.messagewhiz.com/#introduction)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
