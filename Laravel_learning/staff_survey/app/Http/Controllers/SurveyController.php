<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            "name" => $_GET['name'], //key要對應column欄位值
            "salary" => $_GET['salary'],
            "email" => $_GET['email'],
            "personality" => $_GET['personality'],
        ];

        $data = Survey::create($data);
        $data = $data->refresh();
        return view('mainpage', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Survey::create($request->all());
        $data = $data->refresh();
        return response($data, Response::HTTP_CREATED);
    }

    //    想要把這個表單接收的數字變成show顯示項目的id 
    public function show_bridge(Request $num)
    {

        return  $num->input();

        // $input = isset($_GET['id']);
        // $id = Survey::get($input);
        // return view('mainpage', [
        //     "br_output" => $id,
        // ]);
    }

    public function show_all()
    {
        $data = Survey::all();
        return view(
            'mainpage',
            [
                'output' => $data,
            ]
        );
    }

    public function show(Survey $survey)
    {
        if (isset($survey)) {
            $data = Survey::find($survey);
            if ($data) {
                return view(
                    'mainpage',
                    [
                        'show_output' => $data,
                    ]
                );
            } else {
                $string = "Try else";
                return view('mainpage', ["error" => $string,]);
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        $survey->delete();
        return Response(Survey::get(), Response::HTTP_OK);
    }
    public function delete()
    {
        if (isset($_GET['delete'])) {
            $input = $_GET['delete'];
            $output = Survey::where('id', $input)->delete();
            return view('mainpage', [
                'result' => $output,
            ]);
        }
    }
}
