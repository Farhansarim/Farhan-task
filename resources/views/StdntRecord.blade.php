<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Record</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
</head>
<body>

<h1 align="center">View Student Record</h1>
<table class="table table-striped">
    <tr>

        <th>Name</th>
        <th>Age</th>
        <th>School</th>
    </tr>
@foreach($record as $data)
    <tr>
        {{--<td>{{$data['id']}}</td>--}}
        <td>{{$data['name']}}</td>
        <td>{{$data['age']}}</td>
        <td>{{$data['school']}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>