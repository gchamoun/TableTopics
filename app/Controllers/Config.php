<?php

namespace App\Controllers;

class Config extends BaseController
{
    public function index(): string
    {
        return view('config');
    }

  public function update_completed() {
    $completed_todos = $this->input->post('completed');
      echo 'The todo with id = ' . $completed_todos
        . ' is marked as completed.<br>';
    }
  }

    public function prompt($selected ='Favorite Food', $intention = 'friend'){
    echo '<h2>The choosen prompt was '.$selected.' and they are looking for '.$intention.'</h2>';
    }


    protected function adminCheck(){
       echo 'This is a protected area';     
    }



}
