@extends('admin.main')
@section('content')
<div class="pagetitle">
    <h1>Course</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item active">Course</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
          <a href="/admin/course/create" class="btn btn-primary my-4">+ Course</a>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Desc</th>
                    <th>Action</th>
                </tr>
                @foreach ($course as $crs)
                    <tr>
                        <td>1</td>
                        <td>{{ $crs-> name}}</td>
                        <td>{{ $crs-> category}}</td>
                        <td>{{ $crs-> desc}}</td>
                        <td>
                          <a href="/admin/course/edit/{{$crs->id}}" class="btn btn-warning me-2">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
   
                    </tr>

                @endforeach
            </table>
        </div>
    </div>
  </section>
    
@endsection
