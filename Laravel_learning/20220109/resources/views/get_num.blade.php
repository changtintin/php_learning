@extends('template.template3')

@section('title')
    xin big big
@endsection

@section('divv')
    @isset($n)
        number {{ $n }}, is an {{ $r }} number.
    @else
        input number onto url.
    @endisset
    
@endsection
<div style="height= 2px;"></div>
@section('footer')
    i've done a greatest program ~ <br>
    <h1>i am tintin chang.</h1>
@endsection
