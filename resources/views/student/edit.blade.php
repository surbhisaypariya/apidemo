<html>  
<title>Student</title>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3" >
                <div class="card-header">Add Student</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('students.update',[$student->id]) }}">
                        @method('PATCH')
                        @csrf
                        <div style="padding-top : 2px;">
                            <input class="form-control @error('name') is-invalid @enderror" value="{{ $student->name }}" name="name"/>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div style="padding-top : 5px;">
                            <input class="form-control @error('course') is-invalid @enderror" value="{{ $student->course }}" name="course" />
                            @error('course')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div style="padding-top : 2px;">
                            <input type="submit" value="UPDATE" class="btn btn-sm btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>