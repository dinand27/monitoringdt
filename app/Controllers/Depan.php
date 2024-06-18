<?php

namespace App\Controllers;

class Depan extends BaseController
{
    public function index(): string
    {
        return view('depan/index');
    }
}
