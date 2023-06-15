<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>Arman</div>
    
    {{--  <h1>{{$val->name}}</h1>  --}}
 
    <table class="table table-bordered mb-5">
        <thead>
            <tr class="table-danger">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">DOB</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas ?? '' as $val)
            
            <tr>
                <th scope="row">{{ $val->id }}</th>
                <td>{{ $val->name }}</td>
                <td>{{ $val->email }}</td>
                <td>{{ $val->phone_number }}</td>
                <td>{{ $val->dob }}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

        
   
</body>
</html>