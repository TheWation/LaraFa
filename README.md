# LaraFa

LaraFa is a Persian language files for Laravel. By using LaraFa, you can easily add Persian language support to your Laravel application.

## Getting Started

To use LaraFa, you need to first create the `lang` directory in your Laravel project by running the following command:

```bash
php artisan lang:publish
```

This command will create the `lang` directory in the root directory of your Laravel project. After that, you need to copy the contents of the `lang` directory from this repository to the `lang` directory in your Laravel project.

Once you have copied the contents of the `lang` directory to your Laravel project's `lang` directory, you need to set the default language to Persian in your `config/app.php` file:

```php
'locale' => 'fa',
```

After this, you can use the Laravel trans function to retrieve the Persian translations in your application code.

## Timezone

To change the timezone of your Laravel project, you can modify the timezone setting in the config/app.php file. By default, Laravel sets the timezone to UTC. To change it to a different timezone, follow these steps:

1. Open the config/app.php file in your Laravel project.

2. Find the timezone setting and update it to the desired timezone. For example, to set the timezone to Tehran (Iran), you can use the following setting:

```php
'timezone' => 'Asia/Tehran',
```

3. Save the changes to the config/app.php file.

After changing the timezone setting, all date and time related functions in your Laravel application will use the specified timezone. You can find a list of supported timezones in the PHP manual at https://www.php.net/manual/en/timezones.php.

## Contributing

If you find any issues with the Persian translations or wouldlike to contribute new translations, feel free to submit a pull request to this repository. We welcome all contributions!

## License

LaraFa is open source software licensed under the MIT license.