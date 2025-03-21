<?php
/*
Нажмите кнопку run чтобы запустить тесты.
Попробуйте изменять код функции / тестов, запуская проверки заново.
*/

require __DIR__ . ("/../vendor/autoload.php");

use Webmozart\Assert\Assert;

// Assert::notEq(true, false);
function take($collection, $length = 1)
{
    return array_slice($collection, 0, $length);
}

// Напишите тесты для функции take($items, $n), которая возвращает первые n элементов из массива. По умолчанию n равен 1.

// take([], 2); // []
// take([1, 2, 3]); // [1]
// take([1, 2, 3], 2); // [1, 2]
// take([4, 3], 9); // [4, 3]

Assert::eq(take([], 2), $message = []);
Assert::eq(take([1, 2, 3]), $message = [1]);
Assert::eq(take([1, 2, 3], 2), $message = [1,2]);
Assert::eq(take([4, 3], 9), $message = [4,3]);
