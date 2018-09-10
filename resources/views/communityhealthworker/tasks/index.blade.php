@extends('communityhealthworker.layout.app')

@section('page_title', 'Community Health workers Tasks')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Tasks<a href="{{ url('communityhealthworker/tasks/create') }}" class="btn btn-info btn-sm pull-right m-b-10">Add New Tasks</a></h4>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><b>Task Title</b></th>
                                <th><b>Task Date</b></th>
                                <th><b>Created at</b></th>
                                <th><b>Action</b></th>
                            </tr>
                            </thead>
                            <tbody>
	                            @foreach($tasks as $task)
	                         <tr>
	                                <th scope="row">1</th>
	                                <td>{{ $task->task_title }}</td>
	                                <td>{{ $task->task_date }}</td>
	                                <td>{{ $task->created_at }}</td>
	                                <td>
	                               
	                                <a href="{{ url('communityhealthworker/tasks', $tasks->id) }}" class="btn btn-success btn-xs">Edit</a>

	                                <a href="javascript:void(0);" onclick="event.preventDefault();
	                                     document.getElementById('{{$tasks->id}}').submit();" class="btn btn-danger btn-xs">Delete</a>
	                                               
	                                	<form method="POST" id="{{$tasks->id}}" action="{{ url('communityhealthworker/tasks',$tasks->id) }}" accept-charset="UTF-8">
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
                           
	                             
	                                
                               
