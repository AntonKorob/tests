<?php
require __DIR__ . ("/../vendor/autoload.php");
require __DIR__ . ("/../src/StringUtils.php");

use Webmozart\Assert\Assert;

// Assert::notEq(true, false);

Assert::eq(StringUtils\capitalize('hello'), 'Hello');
Assert::eq(StringUtils\capitalize(''), '');

// Assert::notEq(StringUtils\capitalize('hello'), 'Hello');
// Assert::notEq(StringUtils\capitalize(''), '');

// if (StringUtils\capitalize('hello') !== 'Hello') {
//     throw new \Exception('Функция работает неверно!');
// }

// if (StringUtils\capitalize('') !== '') {
//     throw new \Exception('Функция работает неверно!');
// }
// Assert::string( 1, 'string');


echo 'Все тесты пройдены!';