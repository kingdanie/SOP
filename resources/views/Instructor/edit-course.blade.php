<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>SOPS - COurses</title>

<link rel="shortcut icon" href="{{ asset('/img/SOPS.png') }}">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('/plugins/feather/feather.css') }}">

<link rel="stylesheet" href="{{ asset('/plugins/icons/flags/flags.css') }}">

<link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('/css/style32.css') }}">
</head>
<body>

    <div class="main-wrapper">
            <!--Header Navbar Start-->
         @include('layouts.instructornav')
         <!--Header Navbar End-->
 
         {{-- Sidebar Start --}}
         @include('layouts.instructorside')
         {{-- Sidebar Ends --}}
 
        <div class="page-wrapper">
            <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Course</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('instructor.courses') }}">Course</a></li>
                            <li class="breadcrumb-item active">Edit Course</li>
                        </ul>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('courses.update', ['id' => $course->id])}}" method="post">
                                @csrf
                                @method('PUT') <!-- Add this line to set the form method to PUT -->

                                    <div class="row">
                                        <div class="col-12">
                                        <h5 class="form-title"><span>Course Information</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                        <label>Course ID <span class="login-danger">*</span></label>
                                        <input readonly type="text" class="form-control" value="{{ $course['id']}}">
                                        </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                        <label> Course Name <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" value="{{ $course['name']}}">
                                        </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                        <label>Price <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control" name="price" value="{{ $course['price']}}">
                                        </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                        <label>Course Aurthor <span class="login-danger">*</span></label>
                                        <input readonly type="text" name="author" class="form-control" value="{{ $course['author']}}">
                                        </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                        <label> Course Rating <span class="login-danger">*</span></label>
                                        <input type="text" readonly class="form-control" name="rating" value="{{ $course['rating']}}">
                                        </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                        <label>Course Status <span class="login-danger">*</span></label>
                                        <select disabled class="form-control" name="status">
                                            <option value="inactive" {{ $course['status'] === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                            <option value="active" {{ $course['status'] === 'active' ? 'selected' : '' }}>Active</option>
                                        </select>
                                        </div>
                                        <div class="col-12">
                                        <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/js/feather.min.js') }}"></script>

    <script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>