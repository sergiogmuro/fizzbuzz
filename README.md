# PHP Laravel Lumen Micro Framework

Minimal Lumen with: Nginx 

## Requirements

* [Docker Engine](https://docs.docker.com/installation/)
* [Docker Compose](https://docs.docker.com/compose/)

## Prerequisite: Install docker-compose on CoreOS

Use the following convenient script to do frequent operation around Lumen app.
(check if it is not necessary)

```sh
$ sudo su -
$ curl -L https://github.com/docker/compose/releases/download/1.7.1/docker-compose-`uname -s`-`uname -m` > /opt/bin/docker-compose
$ chmod +x /opt/bin/docker-compose
```

## Running Server

Use the following convenient script to do frequent operation around Lumen app.

```sh
$ ./lumen help
Usage:
         down           : Stop Lumen app.
         e, enter       : Enter Lumen container.
         up             : Launch Lumen app.
```

# Run with console
```
$ ./lumen e
$ cd /var/www/src
$ php artisan fizzbuzz:run -- -50 50
```

# Run with web browser
```
$ http://localhost:8000/fizzbuzz/-50/50/
```

# Run tests in console
```
$ ./lumen e
$ vendor/bin/phpunit
```