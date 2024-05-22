<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>All Farmer Data</h1>
                <table class="table table-bordered table-stripped">
                    @foreach ($farmer as $data )
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{$data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->city_name }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>