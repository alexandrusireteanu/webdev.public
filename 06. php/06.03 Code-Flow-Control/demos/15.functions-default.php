<?php
function sum () {
    echo func_num_args(); // count
    echo "<br />";
    echo func_get_arg(0); // 0 -> value
}
sum(1,2,3,4,5);