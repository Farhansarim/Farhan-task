<!DOCTYPE html>
<html>
<head>
    <title>Student Record</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Student Record</title>
</head>
<body>

<h1>View Student Record</h1>
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