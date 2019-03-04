<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Record</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    <form action="{{URL::to('')}}/data" method="get">
        <button class="btn btn-default navbar-btn float-sm-right">View Student Record</button>
    </form>
{{--for display add info message--}}
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        @endif
<div class="container">
    <h2 align="center">Student Record</h2>
    <form action="{{URL::to('')}}/insert" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @if($errors->has('name'))
                            @foreach($errors->get('name') as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        @endif

                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="age" class="form-control" id="age" placeholder="Enter age" name="age">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @if($errors->has('age'))
                            @foreach($errors->get('age') as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        @endif

                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="School">School:</label>
            <input type="school" class="form-control" id="school" placeholder="Enter school Name" name="school">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @if($errors->has('school'))
                            @foreach($errors->get('school') as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        @endif

                    </ul>
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</div>


</body>
</html>
