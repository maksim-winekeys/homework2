<?php
include "../src/functions.php";
/**
 *  *
 * Задание #1
 *
 * Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
 * Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной объединенной строки.
 */
echo task1(["строка1","строка2","строка3"]);
/**
 * Задание #2

Функция должна принимать переменное число аргументов.
Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
Остальные аргументы это целые и/или вещественные числа.

Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
Результат: 1 + 2 + 3 + 5.2 = 11.2

 */
echo task2('+', 1, 2, 4);
echo '<br>';
echo task2('*', 1, 2, 4);
echo '<br>';
/**
 * Задание #3 (Использование рекурсии не обязательно)

Функция должна принимать два параметра – целые числа.
Если в функцию передали 2 целых числа, то функция должна отобразить
таблицу умножения размером со значения параметров, переданных в функцию.
(Например если передано 8 и 8, то нарисовать от 1х1 до 8х8).
Таблица должна быть выполнена с использованием тега <table>
В остальных случаях выдавать корректную ошибку.
 */
echo task3(8,8);
echo task3(4,-7);
echo '<br>';
/**
 * Задание #4 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)

Выведите информацию о текущей дате в формате 31.12.2016 23:59
Выведите unixtime время соответствующее 24.02.2016 00:00:00.
 */

echo task4();
echo '<br>';

/**
 * Задание #5 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)

Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”.
 */

echo task5();
echo '<br>';

/**
 * Задание #6 (выполняется после просмотра модуля “ВСТРОЕННЫЕ ВОЗМОЖНОСТИ ЯЗЫКА”)

Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.
 */
echo task6();
