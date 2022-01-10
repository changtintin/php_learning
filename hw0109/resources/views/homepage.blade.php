@extends('template.tem01')


@section('header')
    Welcome to my Homework!
@endsection

@section('div1')
    <h3>Simple Calculator</h3>
    
    <li>
        <form action="http://127.0.0.1:8001/home" method="GET">
            Square
            <input type="text" name="square_input" placeholder="Enter a number">
            <input type="submit" name="square_submit" class="submit_btn">
        </form>
    </li>

    <li>
        <form action="http://127.0.0.1:8001/home" method="GET">
            Square root
            <input type="text" name="root_input" placeholder="Enter a number">
            <input type="submit" name="root_submit" class="submit_btn">
        </form>
    </li>

    <li>
        <form action="http://127.0.0.1:8001/home" method="GET">
            Prime Factorization
            <input type="text" name="prime_input" placeholder="Enter a number">
            <input type="submit" name="prime_submit" class="submit_btn">
        </form>
    </li>
    
    <li>
        <h3 style="color: rgb(153, 84, 84)">
            Ans.
            @isset($square_output)
                {{$square_output}}
            @endisset

        </h3>
    </li>
@endsection

@section('footer')
    <h3>Well Done</h3>
    <p>made by Tintin Chang</p>
    <p>tin871001@fk.com</p>
    <p>Instagram/Facebook: changtintin</p>
@endsection

