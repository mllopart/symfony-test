symfony-docker-template
=======================

[![Build Status](https://secure.travis-ci.org/eko/docker-symfony.png?branch=master)](http://travis-ci.org/eko/docker-symfony)

Basic Symfony Docker project to start your own one.

Inspired in https://github.com/eko/docker-symfony

# Installation

First, clone this repository:

```bash
$ git clone git@gitlab.com:larsnow/symfony-docker-template.git
```

Next, put your Symfony application into `symfony` folder and do not forget to add `symfony.dev` in your `/etc/hosts` file.

Make sure you adjust `database_host` in `parameters.yml` to the database container alias "db"

Then, run:

```bash
$ docker-compose up
```

You are done, you can visit your Symfony application on the following URL: `http://symfony.dev` (and access Kibana on `http://symfony.dev:81`)

_Note :_ you can rebuild all Docker images by running:

```bash
$ docker-compose build
```

# Read logs

You can access Nginx and Symfony application logs in the following directories on your host machine:

* `logs/nginx`
* `logs/symfony`

# Use Kibana!

You can also use Kibana to visualize Nginx & Symfony logs by visiting `http://symfony.dev:81`.

