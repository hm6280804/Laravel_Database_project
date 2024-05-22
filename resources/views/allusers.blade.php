<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Employees Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        nav .w-5{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>All Employees Data</h1>
                <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New</a>
                    <table class="table table-bordered table-stripped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>View</th>
                            <th>Update</th>
                        </tr>
                        @foreach ($data as $id => $user )
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }} </td>
                                <td> {{ $user->email }}</td>
                                <td> {{ $user->age }}  </td>
                                <td>{{ $user->city }}</td>   
                                <td><a href="{{ route('view.user', $user->id) }}" class="btn btn-primary btn-sm">View</a></td>
                                <td><a href="{{ route('update.page', $user->id) }}" class="btn btn-warning btn-sm">Update</a></td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="mt-5">
                        {{ $data->links('pagination::bootstrap-5') }} 
                    </div>
            </div>
        </div>
    </div>
</body>
</html>