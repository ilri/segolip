# SegoliP Unit
A website for the [ILRI SegoliP Unit](https://segolip.ilri.org/).

<p align="center">
  <img width="600" alt="Screenshot of SegoliP Unit website" src="screenshot.png">
</p>

## Runtime Dependencies

- MariaDB 10.5+
- PHP 7.x

## Setup
Assuming the dependencies have been installed and configured, the site can be set up and seeded with sample data like so:

```console
$ sudo mkdir -p /var/www/segolip.ilri.org
$ sudo chown -R provisioning:provisioning /var/www/segolip.ilri.org
$ cd /var/www/segolip.ilri.org
$ git clone https://github.com/ilri/segolip.git .
$ composer install
$ cp .env.example .env
$ vim .env # set URL, mail, and database parameters
$ php artisan key:generate
$ sudo chown -R nginx:provisioning storage/* bootstrap/cache
$ sudo find storage -type d -exec chmod 775 {} \; -type f -exec chmod 664 {} \;
$ sudo find bootstrap/cache/ -type d -exec chmod 775 {} \; -type f -exec chmod 664 {} \;
$ php artisan migrate:fresh --seed
```

You will have to adjust for your server environment (ie, Apache vs Nginx, and the user running the code).

Note: the `php artisan migrate:fresh --seed` should only be run once for the initial setup. Do not run this on a production server because it re-creates all users and services from scratch.

## License
This website uses the Laravel framework, which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
