<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController; 

class Config extends BaseController
{
    public function index()
    {
       echo '<H2>This is a protected area</H2>';     
    }


    public function prompt($type, $intention){
    echo '<h2>This is a admin prompt<h2>';
    }


    

