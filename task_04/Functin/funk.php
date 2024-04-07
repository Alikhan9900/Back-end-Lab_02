<?php
function poww($x, $y) {
    if ($y == 0) {
        return 1;
    } else {
        return $x * pow($x, $y - 1);
    }
}
function sinus($x) {
    return sin($x);
}

function cosinus($x) {
    return cos($x);
}

function tg($x) {
    return tan($x);
}

function my_tg($x) {
    if ($x == 0) {
        return "Не визначено";
    } else {
        return sin($x) / cos($x);
    }
}

function factorial($x) {
    if ($x == 0) {
        return 1;
    } else {
        return $x * factorial($x - 1);
    }
}





