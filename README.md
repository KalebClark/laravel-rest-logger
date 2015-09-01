# Laravel Rest Logger
Laravel 5 middleware for logging all incoming requests. Intended for restful services

### Requirements
    Laravel >=5.1
    PHP >= 5.5.9 
    
## Installation

## Usage

This can be either global or per route.

### Global
Add the following to the app\Http\Kernel.php $middleware array

```php
        \KalebClark\RestLogger\RestLogger::class,
```

### Per Route
Add the following to the app\Http\Kernel.php routeMiddleware array

```php
        'route.log' => \KalebClark\RestLogger\RestLogger::class,
```

Create your routes with:

```php
Route::get('someroute', ['middleware' => 'route.log'], function()
{

}
```
OR a route group:

```php
Route::group(['middleware' => 'route.log'], function()
{
    Route::get('/', function()
    {

    }
}
```



##Author

<a href="http://abraxxus.net">Kaleb Clark</a>
