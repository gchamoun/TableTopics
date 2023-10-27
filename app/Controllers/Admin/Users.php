<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController; 

class Users extends BaseController
{
    public function index()
    {
       echo '<H2>This is a users area</H2>';     
    }


    public function getAllUsers(){
    echo '<h2>Show all users<h2>';
    }




}
