<?php
/*
Нажмите кнопку run чтобы запустить тесты.
Попробуйте изменять код функции / тестов, запуская проверки заново.
*/

require __DIR__ . ("/../vendor/autoload.php");

use Webmozart\Assert\Assert;

Assert::notEq(true, false);