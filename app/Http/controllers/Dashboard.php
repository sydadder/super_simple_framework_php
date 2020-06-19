<?php

namespace app\Http\controllers;

class Dashboard
{
    public function __construct()
    {
        //Construct
    }

    public function render(){
        $returnedValue = 896;
        require realpath(__DIR__."/../views/dashboard.php");
    }
}