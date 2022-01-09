@extends('template.template4')
@section('div')
    <h1> Welcome to this website</h1>
    <h3>Your dream will never come ture.</h3>
    <h2>
        Your name is : 
            @isset($username)
                @section('username')
                    {{ $username }}
                @endsection
            @endif
    </h2>
@endsection

@php
    echo "fuck u";
@endphp

@section('footer')
    <h3>Support by XXOO company and DPP party.</h3>
    <h4>2F No.56 Anshun 4th Str. Beitun dist. Taichill city </h4>
    <h4>asiaboyfuckurface@hwawei.roc.com</h4>
@endsection