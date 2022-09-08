<?php

function message(string $informasi): string
{
$message = PHP_EOL . "------------------------------" . PHP_EOL;
$message .= $informasi;
$message .= PHP_EOL . "------------------------------" . PHP_EOL;
return $message;
}