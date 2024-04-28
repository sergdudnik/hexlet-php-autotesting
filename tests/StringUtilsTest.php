<?php

// Подключение автозагрузки через composer
require __DIR__ . '/../vendor/autoload.php';

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

require("src/StringUtils.php");

// В строке ниже eq означает equal
Assert::eq(capitalize(''), '');
// Первый параметр actual – то, что пришло
// Второй параметр expected – то, что ожидает тест
// Правильный порядок аргументов имеет большое значение при анализе ошибки
Assert::eq(capitalize('hello'), 'Hello');
// Assert::eq(capitalize('hello'), 'hello'); // error
