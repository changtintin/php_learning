<div class="container">
    <div class="row">
        <div class="col" style="background-color: rgba(165, 134, 99, 0.712);padding:30px;">
            <h2>Fill in your information</h2>
            <p>We sincerely invite you to help us in developing our working envirment.</p>
            <p>This survey will be used in a non-profit way only.</p>
        </div>
        <div class="col-9">
            <form action="{{route('survey.create')}}">
                @csrf
                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="name" name="name" placeholder="__">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="email" class="form-control" id="email" name="email" placeholder="__">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-4 ">
                    <input type="text" class="form-control" id="salary" name="salary" placeholder="__">
                    <label for="salary">Salary</label>
                </div>
                <div class="form-floating mb-4 ">
                    <input type="text" class="form-control" id="personality" name="personality" placeholder="__">
                    <label for="personality">Personality</label>
                </div>
                <input type="submit" value="Submit" class="btn btn-outline-dark">
            </form>
        </div>
    </div>
</div>