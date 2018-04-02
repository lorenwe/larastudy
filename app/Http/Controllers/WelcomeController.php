<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return '<h1>控制器成功!!!</h1>';
    }
}