# tests_unitaires

## Install dependencies
```
$ docker run --rm -w /home/exo -v ${PWD}:/home/exo composer:latest install
```

## Run the test with other dependancies (load the autoload file)
```
$ docker run --rm -w /home/exo -v ${PWD}:/home/exo php:latest ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests
```

## Run the test without dependancies
```
$ docker run --rm -w /home/exo -v ${PWD}:/home/exo php:latest ./vendor/bin/phpunit tests
```