<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information Table</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Customer Information</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Date of Birth</th>
                    <th>Pointss</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customersview as $customer)
                    <tr>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->gender}}</td>
                        <td>{{$customer->dob}}</td>
                        <td>{{$customer->address}}</td>
                        <td>{{$customer->state}}</td>
                        <td>{{$customer->city}}</td>
                        <td>{{$customer->points}}</td>
                        <td>
                            @if($customer->status == "1")
                            Active
                            @else
                            Inactive
                            @endif
                        </td>
                        <td>
                            <!-- using normal way -->
                            <!-- <a href="{{url('/customer/delete')}}/{{$customer->customer_id}}"><button class="btn btn-danger">Delete</button></a> --> 
                            
                            <!-- using named route -->
                            <a href="{{route('customer.delete', ['id'=> $customer->customer_id])}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
                    <!-- Add more rows for additional customers -->
            </tbody>
        </table>
    </div>
</body>
</html>
