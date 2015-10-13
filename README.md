# silex-turbolinks
Service provider for [Helthe's Turbolinks](https://github.com/helthe/Turbolinks)

## Installation

Using composer:
`$ composer require flagshipcompany/silex-turbolinks`

in your `app.php` add the following:

```
use Flagship\Components\Turbolinks\TurbolinksServiceProvider;

$app->register(new TurbolinksServiceProvider());
```

* Copy the turbolink javascript provided by helthe in `vendor/helthe/turbolinks/Resources/public/js/turbolinks.js` to your `public` directory
* Include it in the `<head>` tag.

