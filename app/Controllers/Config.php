<?php

namespace App\Controllers;

class Config extends BaseController
{
    public function index(): string
    {
        return view('config');
    }


    public function prompt($selected ='Favorite Food', $intention = 'friend'){
    echo '<h2>The choosen prompt was '.$selected.' and they are looking for '.$intention.'</h2>';
    }


    protected function adminCheck(){
       echo 'This is a protected area';     
    }



}
