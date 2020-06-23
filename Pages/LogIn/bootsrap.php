<?php
session_start();

$data = [
    ['name'=>'Petras', 'pasword' => md5('123')],
    ['name'=>'Jonas', 'pasword' => md5('321')]
];

file_put_contents(__DIR__.'/data.json' , json_encode($data));


_dc($data);