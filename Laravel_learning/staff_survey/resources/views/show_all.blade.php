@isset($output)
    <table class="table table-striped table-dark" >
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">salary</th>
            <th scope="col">personality</th>
            </tr>
        </thead>
    @foreach ($output as $info)
        <tbody>
            <tr>
                <th scope="row">{{$info['id']}}</th>
                <td>{{$info['name']}}</td>
                <td>{{$info['email']}}</td>
                <td>{{$info['salary']}}</td>
                <td>{{$info['personality']}}</td>
            </tr>
        </tbody>
    @endforeach
    </table>
@endisset


    

