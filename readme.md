# Laravel Language ID
Laravel 5.4.* Laravel Language ID

Package Laravel ini untuk kebutuhan localization bahasa indonesia default untuk laravel 5.4.*

## Instalasi

### Install dan Daftarkan Package
`composer require ferdhika31/laravel-lang-id`

Tambahkan Service Provider pada `config.app`

```
'providers' => [

    // ...

    /*
       * Localization Service Providers
       */
    Ferdhika31\LaravelLangID\LangIDServiceProvider::class,

]
```

### Publish config
```
php artisan vendor:publish --provider="Ferdhika31\LaravelLangID\LangIDServiceProvider"