<?php

    /*
    |   Variable System
    |   Variable built in PHP
    */
    echo $_SERVER["DOCUMENT_ROOT"];


    /*
    |   Variable User 
    |   variable uang di buat oleh user
    */
    echo '<br><br>';

    $name = 'Alifah';
    $age = 19;
    $weight = 48.5;

    $name = 'Akmal';

    echo 'Nama saya adalah ' .$name;

    /*
    |   Variable konstan
    |   Variable yang tidak bisa di ubah nilainya
    |   1. menggunakan define()     | define('fuit', 'Apel');
    |   2. menggunakan const        | const fruit = 'Apel';
    */
    echo '<br><br>';

    define("SITE_NAME", "Elena");
    const BASE_URL = "elene.nurulfikri.ac.id";

    echo SITE_NAME;
    echo '<br>';
    echo BASE_URL;
?>