@extends('template.template4')
@section('div')
    <h1> Welcome to this website</h1>
    <h3>Your dream will never come ture here.</h3>
    <h2>
        @section('username')
            @isset($n)
                Hello, {{ $n }} 
                {{-- 兩個大括號是laravel echo 變數的方法 --}}
            @else
                
                    <form action="/postname" method="POST">
                        @csrf
                        <input type="text" name="input_name">
                        <input type="submit" name="name_submit">
                    </form> 
                
            @endisset
        @endsection
    </h2>
@endsection

@section('footer')
    <h3>Support by XXOO company and DPP party.</h3>
    <h4>2F No.56 Anshun 4th Str. Beitun dist. Taichill city </h4>
    <h4>asiaboyfuckurface@hwawei.roc.com</h4>
@endsection