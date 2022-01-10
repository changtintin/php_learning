<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlr01 extends Controller
{
    function calculate()
    {
        if (isset($_GET['square_input'])) {
            $sq = $_GET['square_input'];
            return view('homepage', [
                'square_output' => pow($sq, 2),
            ]);
        }
    }
}
