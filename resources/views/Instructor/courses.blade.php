<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>SOPs  - Courses</title>

<link rel="shortcut icon" href="{{ asset('/img/SOPS.png') }} ">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('/plugins/feather/feather.css') }}">

<link rel="stylesheet" href="{{ asset('/plugins/icons/flags/flags.css') }}">

<link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href=" {{ asset('/plugins/datatables/datatables.min.css') }}">

<link rel="stylesheet" href=" {{ asset('/css/style32.css') }}">
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
                        <h3 class="page-title">Courses</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('instructor.dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Courses</li>
                            </ul>
                    </div>
                </div>
            </div>

            <div class="student-group-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by ID ...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Name ...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Class ...">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="search-student-btn">
                            <button type="btn" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">Courses</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                                        <a href="{{ route('instructor.add-course')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </th>
                                            <th>Course ID</th>
                                            <th>Course Name</th>
                                            <th>Course Rating</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="{{ $course->id }}">
                                                    </div>
                                                </td>
                                                <td>{{ $course->id }}</td>
                                                <td>{{ $course->name }}</td>
                                                <td>{{ $course->rating }}</td>
                                                <td class="text-end">
                                                    <!-- Add your actions here, e.g., edit and delete links/buttons -->
                                                    <!-- Edit button with icon and tooltip -->
                                                    <a href="{{ route('courses.edit', ['id' => $course->id]) }}" class="btn btn-primary text-white" data-bs-toggle="tooltip" title="Edit Course">
                                                            <i class="fas fa-edit"></i>
                                                        </a>

                                                        <!-- Delete button with icon and tooltip (conditionally shown) -->
                                                        @if(auth()->user()->name === $course->author)
                                                            <a href="{{ route('courses.destroy', ['id' => $course->id]) }}" class="btn btn-danger text-white" data-bs-toggle="tooltip" title="Delete Course">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        @endif

                                                        {{-- <a href="{{ route('courses.view', ['id' => $course->id]) }}" class="btn btn-danger text-white" data-bs-toggle="tooltip" title="View Course"> 
                                                            <i class="fas fa-eye"></i></a> --}}

                                                        <a href="{{ route('courses.view', ['id' => $course->id]) }}" class="btn btn-info text-white" data-bs-toggle="tooltip" title="View Course">
                                                                <i class="fas fa-eye"></i>
                                                            </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>Copyright © 2023 Rockstride.</p>
        </footer>

    </div>

</div>


<script src="{{ asset('/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('/js/feather.min.js')}}"></script>

<script src="{{ asset('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{ asset('/plugins/datatables/datatables.min.js')}}"></script>

<script src="{{ asset('/js/script.js')}}"></script>





</body>
</html>