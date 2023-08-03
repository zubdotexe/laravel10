<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cases Information Table</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="text-right">
            <a href="employee/create" class="btn btn-dark">Add case</a>
        </div>
        <h2>Cases Information</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Assigned Lawyer</th>
                    <th>Fees</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($caseList as $caseIte)
                    <tr>
                        <td>{{$caseIte->case_name}}</td>
                        <td>{{$caseIte->case_description}}</td>
                        <td>{{$caseIte->case_status}}</td>
                        <td>{{$caseIte->assigned_lawyer_id}}</td>
                        <td>{{$caseIte->case_fees}}</td>
                        
                    
                    <td>
                        <a href="{{route('cases.edit', ['case' => $caseIte])}}" class="btn btn-primary mr-3">Edit</a> 
                        <a href="{{route('cases.delete', ['case' => $caseIte])}}" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
