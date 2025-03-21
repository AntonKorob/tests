<?php
require __DIR__ . ("/../vendor/autoload.php");
require __DIR__ . ("/../src/StringUtils.php");
use Webmozart\Assert\Assert;

// Assert::notEq(true, false);

// if (StringUtils\capitalize('hello') !== 'Hello') {
//     throw new \Exception('Функция работает неверно!');
// }
Assert::notEq(StringUtils\capitalize('hello'), 'Hello');
Assert::notEq(StringUtils\capitalize(''), '');

// if (StringUtils\capitalize('') !== '') {
//     throw new \Exception('Функция работает неверно!');
// }

echo 'Все тесты пройдены!';