# Devbox

## Features

A local development environment designed to make WordPress development easy:

|Package|Version|
|---|---|
|Nginx|`1.18.0`|
|PHP-FPM|`7.3`|
|MariaDB|`10.4.15`|
|Redis|`5.0.9`|
|Xdebug|`2.7`|
|NodeJS|`12.18.4`|
|NPM|`6.14.6`|

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

## Credentials

|Service|Username|Password|
|---|---|---|
|MySQL|`wordpress`|`wordpress`|
|WordPress|`admin`|`password`|