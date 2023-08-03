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
        <div class="text-right">
            <a href="employee/create" class="btn btn-dark">Add employee</a>
        </div>
        <h2>Employees Information</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Action</th>
                    <!-- <th></th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($employeeList as $employeeIte)
                    <tr>
                        <td>{{$employeeIte->name}}</td>
                        <td>{{$employeeIte->role}}</td>
                        <td>{{$employeeIte->email}}</td>
                        <td>${{$employeeIte->salary}}</td>
                        <td>
                            <a href="{{route('employees.edit', ['employee' => $employeeIte])}}" class="btn btn-primary mr-3">Edit</a>
                            <a href="{{route('employees.delete', ['employee' => $employeeIte])}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
