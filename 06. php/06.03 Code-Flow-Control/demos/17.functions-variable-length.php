<?php

function sum() {
    if (is_array(func_get_arg(0))) {
        return array_sum(func_get_arg(0));
    }

    $res = 0;
    for ($i = 0, $n = func_num_args(); $i < $n; $i++)
        $res += func_get_arg($i);
    return $res;
}

function runQueries() {
    for ($i = 0, $n = func_num_args(); $i < $n; $i++) {
        mysql_query(func_get_arg($i));
    }
}

runQueries("SELECT * FROM Students", 
        "DELETE FROM students WHERE id = 1", 
        "UPDATE Students SET name = 'Rado' WHERE id = 1");

echo sum(4, 5, 6);

echo "<br />";

echo sum(7, 8, 10, 15, 20);

echo "<br />";

echo sum(range(1, 100));
