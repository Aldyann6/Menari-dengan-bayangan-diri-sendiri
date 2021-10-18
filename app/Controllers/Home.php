<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('/tema/header');
        echo view('/tema/body');
        echo view('/tema/footer');
    }
}
