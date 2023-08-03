<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Management Form</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Case Management</h2>
                <form action="{{ route('cases.update', ['case' => $case]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="case_name">Name:</label>
                        <input type="text" class="form-control" id="case_name" name="case_name" required value="{{$case->case_name}}">
                    </div>
                    <div class="form-group">
                        <!-- <label>Gender:</label> -->
                        <div class="form-check">
                            <input type="hidden" class="form-check-input" id="lawyer" name="role" value="Lawyer" required
                            {{$case->role == "Lawyer" ? "checked" : ""}}
                            >
                            <!-- <label class="form-check-label" for="lawyer">Lawyer</label> -->
                        </div>
                        <div class="form-check">
                            <input type="hidden" class="form-check-input" id="admin" name="role" value="Admin" required
                            {{$case->role == "Admin" ? "checked" : ""}}
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
                        <input type="hidden" class="form-control" id="case_descrition" name="case_descrition" required value="{{$case->case_descrition}}">
                    </div>
                    <div class="form-group">
                        <!-- <label for="fees">Status:</label> -->
                        <input type="hidden" class="form-control" id="case_status" name="case_status" required value="{{$case->case_status}}">
                    </div>
                    <div class="form-group">
                        <!-- <label for="assigned_lawyer_id">Lawyer:</label> -->
                        <input type="hidden" class="form-control" id="assigned_lawyer_id" name="assigned_lawyer_id" required value="{{$case->assigned_lawyer_id}}">
                    </div>
                    <div class="form-group">
                        <label for="fees">Fees:</label>
                        <input type="numeric" class="form-control" id="case_fees" name="case_fees" required value="{{$case->case_fees}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
