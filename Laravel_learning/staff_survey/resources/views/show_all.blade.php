@isset($output)
    <table class="table table-striped table-dark" >
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">salary</th>
            <th scope="col">personality</th>
            <th scope="col">option</th>
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
                <td>
                    <form action="{{route('survey.destroy', $info -> id)}}" method="get">
                        <input type="hidden" name="method" value="delete">
                        <button type="submit" name="id" value="{{$info['id']}}">Delete</button>
                    </form>
                    
                </td>
            </tr>
        </tbody>
    @endforeach
    </table>
@endisset


    

