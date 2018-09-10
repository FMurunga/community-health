@extends('hospital.layout.app')

@section('page_title', 'Facility Staff')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">All Staff<a href="{{ url('hospital/staff/create') }}" class="btn btn-info btn-sm pull-right m-b-10">Add Staff</a></h4>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><b>Name</b></th>
                                <th><b>Email</th>
                                <th><b>Phone</b></th>
                                <th><b>Created</b></th>
                                <th><b>Action</b></th>
                            </tr>
                            </thead>
                            <tbody>
	                            @foreach($staffs as $staff)
	                            <tr>
	                                <th scope="row">1</th>
	                                <td>{{ $staff->name }}</td>
	                                <td>{{ $staff->email }}</td>
	                                <td>{{ $staff->phone }}</td>
	                                <td>{{ $staff->created_at }}</td>
	                                <td>
	                                	<a href="{{ url('hospital/staff', $staff->id) }}" class="btn btn-success btn-xs">Edit</a>

	                                	<a href="javascript:void(0);" onclick="event.preventDefault();
	                                                document.getElementById('{{$staff->id}}').submit();"
	                                                class="btn btn-danger btn-xs">Delete</a>
	                                	<form method="POST" id="{{$staff->id}}" action="{{ url('hospital/staff',$staff->id) }}" accept-charset="UTF-8">
											{{ csrf_field() }}
	                        				{{ method_field('DELETE') }}
										</form>
	                                </td>
	                            </tr>
	                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->

		</div>        

    </div><!-- container -->

</div> <!-- Page content Wrapper -->

@endsection
