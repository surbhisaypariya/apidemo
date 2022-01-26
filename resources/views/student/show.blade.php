<html>  
<title>Student</title>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div><a class="btn btn-success" href="{{ route('students.create') }}">Add Student</a></div>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Course</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->course }}</td>
                            <td>
                                <div class="btn btn-group">
                                    <a class="btn btn-info" href=" {{ route('students.edit',[$student->id]) }} ">Edit </a>
                                    <form method="POST" action="{{ route('students.destroy',[$student->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>