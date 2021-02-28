See https://github.com/phpstan/phpstan-symfony/issues/136

    composer install
    php bin/console
    ./vendor/bin/phpstan analyse -c phpstan.neon

   :

    5/5 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100% 
     ------ -----------------------------------------------------------
    Line   tests/WebTestCase.php
     ------ -----------------------------------------------------------
    14     Service "http_client" is not registered in the container.
     ------ -----------------------------------------------------------
    [ERROR] Found 1 error
