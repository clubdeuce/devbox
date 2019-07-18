# Devbox

## Features

A local development environment designed to make WordPress development easy:

|Package|Version|
|---|---|
|Nginx|`1.17`|
|PHP-FPM|`7.3`|
|MySQL|`5.6`|
|Redis|`5.0`|
|Xdebug|`2.7`|

This box supports debugging via Xdebug, and includes a configuration for VSCode.

## Local Development

This project supports local development through a number of different means:

### Vagrant

You can use [Vagrant](https://www.vagrantup.com) with the included `Vagrantfile`. In order to use this method, you will need the following:

+ Vagrant >= 2.0
+ [Virtual Box](https://www.virtualbox.org/)
+ Plugins:
  + [vagrant-alpine](https://github.com/maier/vagrant-alpine)
  + [vagrant-hostsupdater](https://github.com/cogitatio/vagrant-hostsupdater)

Install the plugins using `vagrant plugin install vagrant-alpine && vagrant plugin install vagrant-hostsupdater`.

Once you have the above requirements, simply type `vagrant up` on the command line in the root directory of the project _(i.e. the directory containing `Vagrantfile`)_. The project will be accessible via browser [here](http://dev.box).

### Docker

If you wish to use Docker, you will need [Docker Desktop Community Edition](https://www.docker.com/products/docker-desktop).

Once installed, simply type `docker-compose up` from the command line in the root directory of this project _(i.e. the directory containing `docker-compose.yml`)_. The project will be accessible via browser [here](http://localhost).

To stop running the project, type `docker-compose stop`. You can remove the project containers  by using `docker-compose down`. _**Please note**_: this step will not delete the persistent data. To remove the data, execute `docker system prune --volumes`. [More information on docker system prune](https://docs.docker.com/engine/reference/commandline/system_prune/).

_**A word of caution:**_ using this approach, you can have only one project running at a time.

### WAMP/MAMP

+ Clone repository to local: _e.g. `C:\Users\foo\project` (Windows) or `/Users/foo/project` (Mac)_
+ point the MAMP/WAMP web doc root to the www folder of the working copy _e.g. `C:\Users\foo\project\www` or `/Users/foo/project/www`_.
+ create database
+ create a `wp-config-local.php` with the correct db credentials within the same directory as the Git wp-config.php file. **DO NOT ADD TO REPOSITORY**
+ open terminal/cmd and go to the project root (same as the composer.json file)
+ run `php ~/composer.phar install` (check to make sure in the directory)
+ now open project in browser. finish WordPress install
+ The wp-config file now loads what normally would be in the wp-content folder to the same /content folder.
You will see your theme, mu-plugins, plugins, etc.

## Credentials

Regardless of which development environment you use, the credentials are as follows:

|Service|Username|Password|
|---|---|---|
|MySQL|`wordpress`|`wordpress`|
|WordPress|`admin`|`password`|