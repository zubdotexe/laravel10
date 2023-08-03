<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management Form</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Employee Management</h2>
                <form action="{{ route('employees.update', ['employee' => $employee]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{$employee->name}}">
                    </div>
                    <div class="form-group">
                        <!-- <label>Gender:</label> -->
                        <div class="form-check">
                            <input type="hidden" class="form-check-input" id="lawyer" name="role" value="Lawyer" required
                            {{$employee->role == "Lawyer" ? "checked" : ""}}
                            >
                            <!-- <label class="form-check-label" for="lawyer">Lawyer</label> -->
                        </div>
                        <div class="form-check">
                            <input type="hidden" class="form-check-input" id="admin" name="role" value="Admin" required
                            {{$employee->role == "Admin" ? "checked" : ""}}
                            >
                            <!-- <label class="form-check-label" for="admin">Admin</label> -->
                        </div>
                        <!-- <div class="form-check">
                            <input type="radio" class="form-check-input" id="other" name="gender" value="Other" required>
                            <label class="form-check-label" for="other">Other</label>
                        </div> -->
                    </div>
                    <div class="form-group">
                        <!-- <label for="email">Email:</label> -->
                        <input type="hidden" class="form-control" id="email" name="email" required value="{{$employee->email}}">
                    </div>
                    <div class="form-group">
                        <!-- <label for="password">Password:</label> -->
                        <input type="hidden" class="form-control" id="password" name="password" required value="{{$employee->password}}">
                    </div>
                    <div class="form-group">
                        <label for="salary">Salary:</label>
                        <input type="numeric" class="form-control" id="salary" name="salary" required value="{{$employee->salary}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
