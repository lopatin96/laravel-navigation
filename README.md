# Install
### View
#### Header
Replace content of *resource/views/layouts/header.blade.php* with:
```php
@include('laravel-navigation::navigation.header')
```

and add import to *resources/js/app.js*:

```js
import '../../vendor/lopatin96/laravel-navigation/resources/js/anchor-scroller';
```

#### Footer
Replace content of *resource/views/layouts/footer.blade.php* with:
```php
@include('laravel-navigation::navigation.footer')
```

#### Navigation-menu
Replace content of *resource/views/navigation-menu.blade.php* with:
```php
@include('laravel-navigation::navigation.navigation-menu')
```

and add gates to *app/Providers/AppServiceProvider.php*:
```php
public function boot(): void
{
    …

    Gate::define('admin_area', static function (User $user) {
        return $user->isAdmin();
    });

    Gate::define('pro_area', static function (User $user) {
        return $user->subscribed();
    });

    Gate::define('true_area', static function (User $user) {
        return true;
    });

    Gate::define('false_area', static function (User $user) {
        return false;
    });
}
```


# Publishing
### Localization
```php
php artisan vendor:publish --tag="laravel-navigation-lang"
```

### Views
```php
php artisan vendor:publish --tag="laravel-navigation-views"
```

### Config
```php
php artisan vendor:publish --tag="laravel-navigation-config"
```