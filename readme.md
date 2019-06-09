# SysCli - Docker
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Dockerized application example [SysCli](https://github.com/thelesson/Sistema-Clinico--com-Laravel)

## Getting Started

These instructions will cover usage information and for the Docker container.

### Prerequisites

In order to run this environment you'll need [Docker](https://docs.docker.com/get-started/) and [Docker-compose](https://docs.docker.com/compose/install/) installed.

### Installing

```
chmod +x first-run.sh
change .env file
```

### Usage

#### Run

Start Bash (this is the default when no command is specified):

```sh
docker-compose up -d --build && sleep 40 && ./first-run.sh
```

#### Volumes

* `/usr/share/nginx/app` work directory
* `/etc/nginx/nginx.conf` - NGINX config file
* `/var/lib/mysql` - database

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.