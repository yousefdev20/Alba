<?php

if (! function_exists('view')) {
    function view(string $view, array $with = [])
    {
        include_once __DIR__ . "/../resources/views/$view.php";
    }
}