#!/bin/bash

(cd docker && docker-compose up -d nginx mysql phpmyadmin redis && docker-compose exec workspace sh -c 'cd api-ingresse && composer install && php artisan migrate && php artisan tinker bd.php && bash')
