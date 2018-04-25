# :nova

## Install

Via Composer

``` bash
$ composer require "maria/nova":"0.1.*"

in composer.json  
"require": {
        "maria/nova":"0.1.*"
    },
"repositories":[
    {
        "type": "git",
        "url": "git@github.com:MarijaAngeli/mypackage.git",
        "options": {
        "symlink": true
        }
    }
```

## Usage

``` php
composer update
php artisan migrate
```