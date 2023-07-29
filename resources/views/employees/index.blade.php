<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees Information Table</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Employees Information</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employeeList as $employee)
                    <tr>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->role}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->salary}}</td>
                    </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
