<?php

//mysqli_connect

$connect = mysqli_connect('localhost', 'root', 'root', 'database1'  );

if (!$connect) {

    die('error connect to database');

}