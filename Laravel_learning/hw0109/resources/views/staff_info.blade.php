@extends('template.tem02')

<div style="background-image:url(https://images.unsplash.com/photo-1525193612562-0ec53b0e5d7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80);  height: 500px;
background-position: center;background-repeat: no-repeat;background-size: cover;position: relative;">
    <h1>Staff <br>Information</h1>
</div>
@section('div')
    <div class="container">
        <div class="row">
            <div class="col" style="background-color: rgba(165, 134, 99, 0.712);padding:30px;">
                <h2>Fill in your information</h2>
                <p>We sincerely invite you to help us in developing our working envirment.</p>
                <p>This survey will be used in a non-profit way only.</p>
            </div>
            <div class="col-9">
                <form action="">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="name_input" name="name_input" placeholder="__">
                        <label for="name_input">Name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" id="floatingInput" placeholder="__">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-4 ">
                        <input type="text" class="form-control" id="salary_input" id="salary_input" placeholder="__">
                        <label for="salary_input">Salary</label>
                    </div>
                    <div class="form-floating mb-4 ">
                        <input type="text" class="form-control" id="personality_input" name="personality_input" placeholder="__">
                        <label for="personality_input">Personality</label>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

@endsection

    
