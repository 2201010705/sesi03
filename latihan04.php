<?php
     // model 1
    //$cars = array("volvo","BNW","Toyota")

    //model 2
    $cars[0] = "volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";

    print_r($cars);


    header('content-Type: applicattion/json; charset=utf-8');
    echo  json_encode($cars);

