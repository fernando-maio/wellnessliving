## Software Developer (Laravel) Screening Task - Wellnessliving

* For this test I tried to follow the instructions sent by email, keeping it as a simple solution but at the same time I tried to show some organization
with a simple MVC framework built using composer and splitting the responsibilities between layers.
As a simple challenge, I decided not to use layers "Contracts", "Controllers", and "Entities", but I included them in case of escalation.
I created 3 files on the root path with the answers to the challenges
    - firstCase.php: A file to be executed on a terminal (It can be used increasing array on a terminal, or just using a sample array provided);
    - secondCase.sql: A query to return a response of a challenge proposed (This file includes a test case scenario);
    - thirdCase.txt: A file describing a solution for a challenge proposed.

* Paths for the structure
    - composer.json : A dependency manager 
    - app
        - Contracts : Files interface;
        - Controller : Files to handle the requests from index;
        - Entities : Object structures;
        - Servives : Business logic layer;
    - tests : Unit tests path;
    - vendor : Dependencies libraries path.

* Used Stack:
    - Ubuntu 22.04
    - PHP 8.1.8
    - Composer
    - PHPUnit

## How to test?

    * To set the environment, run from the root directory:
        - composer install

    * To test the first challenge, run from the root directory:
        - php firstCase.php

    * To run the unit tests, run from the root directory:
        - ./vendor/bin/phpunit tests

### Thank You!