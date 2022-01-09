<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test03Controller extends Controller
{
    function getName()
    {
        return view("post_name");
    }

    function postName()
    {
        if (isset($_POST['name_submit'])) {
            $ns = $_POST['input_name'];
            return view("post_name", [
                'n' => $ns,
            ]);
        }
    }
}
