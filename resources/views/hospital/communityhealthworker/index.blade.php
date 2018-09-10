@extends('hospital.layout.app')

@section('page_title', 'Community Health Worker')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Community Health Workers<a href="{{ url('hospital/communityhealthworker/create') }}" class="btn btn-info btn-sm pull-right m-b-10">Add Health Worker</a></h4>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><b>Name</b></th>
                                <th><b>Email</b></th>
                                <th><b>Phone</b></th>
                                <th><b>Type</b></th>
                                <th><b>Created</b></th>
                                <th><b>Action</b></th>
                            </tr>
                            </thead>
                            <tbody>
	                            @foreach($communityhealthworker as $health_worker)
	                            <tr>
	                                <th scope="row">1</th>
	                                <td>{{ $health_worker->name }}</td>
	                                <td>{{ $health_worker->email }}</td>
	                                <td>{{ $health_worker->phone }}</td>
	                                <td>{{ $health_worker->chwtype->name }}</td>
	                                <td>{{ $health_worker->created_at }}</td>
	                                <td>
	                                	<a href="{{ url('hospital/communityhealthworker/edit', $health_worker->id) }}" class="btn btn-success btn-xs">Edit</a>

	                                	<a href="javascript:void(0);" onclick="event.preventDefault();
	                                                document.getElementById('{{$health_worker->id}}').submit();"
	                                                class="btn btn-danger btn-xs">Delete</a>
	                                	<form method="POST" id="{{$health_worker->id}}" action="{{ url('hospital/communityhealthworker',$health_worker) }}" accept-charset="UTF-8">
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
