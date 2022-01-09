<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test02Controller extends Controller
{
    function hasNumber(){
        if(!isset($_GET['number'])) {
            return view('get_num');
        }
    
        $num = $_GET['number'];
        $result = "?";
        if(isset($num)) {
            if($num % 2 == 0) {
                $result = "even";
            }
            else {
                $result = "odd";
            }
            return view('get_num', [
                'n' => $num,
                'r' => $result,
            ]);
        }
    }
}
