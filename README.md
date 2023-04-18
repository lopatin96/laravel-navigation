# Install
### View
#### Header
Replace content of *resource/views/layouts/header.blade.php* with:
```php
@include('laravel-navigation::navigation.header')
```

#### Footer
Replace content of *resource/views/layouts/footer.blade.php* with:
```php
@include('laravel-navigation::navigation.footer')
```

#### Navigation-menu

#### Policy

#### Terms


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