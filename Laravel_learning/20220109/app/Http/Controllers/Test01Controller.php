<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//TestController 繼承 Controller
class Test01Controller extends Controller
{
    function hasName()
    {
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            return view('get_name', [
                'username' => $name,
            ]);
        } else {
            return view('get_name');
        }
    }
}
