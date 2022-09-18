<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo 'Only Post Request Allowed Here';
    die();
}

include_once './../../vendor/autoload.php';

use Project\Controllers\Student;

$student = new Student();

if (!$student->StoreProduct($_POST)) {
    header('Location: ./createproduct.php');
} else {
    header('Location: ./admin.php');
}

