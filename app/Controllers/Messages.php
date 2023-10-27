<?php

namespace App\Controllers;

class Messages extends BaseController
{
    public function index(): string
    {
        return view('messages');
    }
}
