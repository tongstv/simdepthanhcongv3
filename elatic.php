<?php
$input = file_get_contents("log");


print_r(json_decode($input, true));