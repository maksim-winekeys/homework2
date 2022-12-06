<?php
/**
 * @param bool $return
 * @param array $strings
 */
function task1(array $strings, bool $return = true)
{
    $result = implode("\n", array_map(function (string $str) {
        return "<p>$str</p>";
    }, $strings));

    if ($return) {
        return $result;
    }

    echo $result;
}


function task2(string $action, ...$args)
{
    foreach ($args as $n => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $n . 'is not integer or float');
            return 'ERROR: wrong argument';
        }
    }
    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return  array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $n => $arg) {
                if ($arg == 0) {
                    trigger_error('division by zero on argument #' . ($n + 1));
                    return 'ERROR:division by zero';
                }
                $result = $result / $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }
            return $result;

        default:
            return 'ERROR: unknown actions';
    }
}

function task3($a, $b)
{
    if (!is_int($a)) {
        trigger_error('A is not integer');
        return false;
    }
    if (!is_int($b)) {
        trigger_error('B is not integer');
        return false;
    }
    if ($a < 0 || $b < 0) {
        trigger_error('Argument must be positive');
        return false;
    }
    $result = '<table>';
    for ($i = 1; $i < $a; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $b; $j++) {
            $result .= '<td>' . $i * $j . '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}


function my_file_get_contents(string $filename)
{
    $f_open = fopen($filename, 'r');
    if (!$f_open) {
        return false;
    }
    $str = '';
    while (!feof($f_open)) {
        $str .= fgets($f_open, '1024');
    }
    echo $str;
}

function task4()
{
    date_default_timezone_set('Europe/Moscow');
    echo date('d.m.Y H:i');
    echo '<br>';
    echo strtotime('24.02.2016 00:00:00');
    echo '<br>';
    echo date('Y-m-d H:i:s', 1456261200);
    echo '<br>';
}

function task5()
{
    $string = 'Карл у Клары украл Кораллы';
    echo str_replace('К', '', $string);
    echo '<br>';
    $string = 'Две бутылки лимонада';
    echo str_replace('Две', 'Три', $string);
}

function task6()
{
    echo '<br>';
    file_put_contents('test.txt', 'Hello again!');
    my_file_get_contents('test.txt');
}
