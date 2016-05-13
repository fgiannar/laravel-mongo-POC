# laravel-mongo Proof Of Concept

## Installation

### Server Requirements

See [here](https://laravel.com/docs/5.2)

A working installation of Apache 2.4 or higher with PHP 5.6 or higher.
The MongoDB PHP driver installed. You can find installation instructions [here](http://php.net/manual/en/mongodb.installation.php)

__WARNING__: The old mongo PHP driver is not supported anymore in versions >= 3.0.

### Installing the project

__Install Composer__ if you don't have it installed already.

    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer

__Clone__ to a directory accessible by the web server. eg. `/var/www`

    git clone https://github.com/fgiannar/laravel-mongo-POC.git

__Set up database__

Run on a MongoDB shell:

    use mongovel
    db.createUser(
        {
          user: "mongovel",
          pwd: "mongovel",
          roles: [ "readWrite", "dbAdmin" ]
        }
    )

__Install dependencies, configure permissions, and configure database__

To avoid any issues with the `artisan` cli tool, the `.env` mongodb host should be
set to `127.0.0.1` instead of 'localhost'. If the mongodb is installed on a separate
server this is not required.

    cd laravel-mongo-POC
    composer install
    chmod -R 777 storage
    cp .env.example .env
    vi .env # set at least database values
    php artisan key:generate
    php artisan migrate:refresh --seed

__Configure Web Server__ to proper root directory

At this point the application is ready. All we need is to point our web server
to the correct directory, eg `/var/www/laravel-mongo-POC/public`, and restart our web server.

Last thing is to make sure that Apache's `mod_rewrite` is enabled and that
`AllowOverride` is set to `All` for our directory.

    a2enmod rewrite
    service apache2 restart
