<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlr01 extends Controller
{

    function square()
    {
        if (isset($_GET['square_input'])) {
            $sq = $_GET['square_input'];
            return view('homepage', [
                'square_output' => pow($sq, 2),
            ]);
        } else {
            return view('homepage');
        }
    }

    function root()
    {
        if (isset($_GET['root_input'])) {
            $rt = $_GET['root_input'];
            return view('homepage', [
                'root_output' => sqrt($rt),
            ]);
        } else {
            return view('homepage');
        }
    }

    function prime()
    {
        if (isset($_GET['prime_input'])) {
            $rt = $_GET['prime_input'];
            $num = $rt;
            $ans = "";
            $cnt = 0;
            $result = strval($rt) . " = ";

            for ($div = 2; $div <= $rt; $div++) {
                while ($num % $div == 0) {
                    $num = $num / $div;
                    $cnt++;
                }
                if ($cnt > 1) {
                    $ans = $ans . $div . "^" . $cnt . " X ";
                } elseif ($cnt == 1) {
                    $ans = $ans . $div . " X ";
                }

                $cnt = 0;
            }
            // $ans = "--" . substr($ans, 0, 0) . "--";
            $ans = substr($ans, 0, -2);
            return view('homepage', [
                'prime_output' => $result . $ans,
            ]);
        } else {
            return view('homepage');
        }
    }
}
