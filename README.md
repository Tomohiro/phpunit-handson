PHPUnit Hands-on
================================================================================

[![Build Status](https://img.shields.io/travis/Tomohiro/phpunit-handson.svg?style=flat-square)](https://travis-ci.org/Tomohiro/phpunit-handson)


Requirements
--------------------------------------------------------------------------------

- Docker for Mac


Environment
--------------------------------------------------------------------------------

- PHP 7
- PHPUnit 6.0.7


Getting Started
--------------------------------------------------------------------------------

Clone this repository:

```
$ git clone https://github.com/Tomohiro/phpunit-handson
```

Initialize:

```sh
$ ./script/setup  # Setup dependency docker container and composer packages
```


Testing
--------------------------------------------------------------------------------

Run phpunit:

```sh
$ ./bin/phpunit -c phpunit.xml
```
