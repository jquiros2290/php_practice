<!DOCTYPE html>
<html>
    <head>
        <title>Customers</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </thead>
                            @foreach ($users as $user)
                        <tr>
                                <td><a href="/customers/{{ $user->id }}">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</a></td>
                                <td>{{ $user->status->status}}</a></td>
                        </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>