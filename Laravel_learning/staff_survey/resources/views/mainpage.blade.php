@extends('template.temp01')

<div style="background-image:url(https://images.unsplash.com/photo-1525193612562-0ec53b0e5d7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80);  height: 500px;
background-position: center;background-repeat: no-repeat;background-size: cover;position: relative;">
    <h1>Staff <br>Information</h1>
</div>
    @section('div')
        @include('create')
    @endsection

    @section('div2')
        
        {{-- 想要把這個表單接收的數字變成show顯示項目的id --}}
        <form action="{{ route('show_bridge')}}">
            <div class="form-floating mb-4 ">
                <input type="text" class="form-control" id="id" name="id"  placeholder="__">
                <label for="id">id</label>
            </div>
            <input type="submit" value="Submit" class="btn btn-outline-dark">
        </form>

        <div style="padding: 20px"></div>

        {{-- 如果沒有3就沒有變數 會報錯 --}}
        <a href="{{ route('survey.show',3) }}" class="btn btn-outline-dark" >show the data of selected id</a>
        @include('show')
        <div style="padding: 20px"></div>

        <a href="{{route('show_all')}}" class="btn btn-outline-dark" >show all</a>
        <div style="padding: 10px"></div>
        @include('show_all')

        <form action="{{route('delete')}}" method="get">
            <input type="text" id="delete" name="delete" placeholder="delete id">
            <input type="submit" name="submit" id="submit">
        </form>


        @isset($result)
            {{$result}}
        @endisset
        
        @isset($error)
            {{$error}}
        @endisset
    
        

    @endsection

    
