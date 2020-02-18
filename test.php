<?php

require_once(__DIR__.'/vendor/autoload.php');

use DivineOmega\PasswordCracker\Crackers\DictionaryCracker;

$hash = password_hash('secret', PASSWORD_BCRYPT);

$password = (new DictionaryCracker())->crack($hash);

/*
$password = (new DictionaryCracker())->crack($hash, function($passwordBeingChecked) {
    echo 'Checking password '.$passwordBeingChecked.'...'.PHP_EOL;
});
*/

echo 'Password found: '.$password.PHP_EOL;
