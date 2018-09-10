@extends('communityhealthworker.layout.app')

@section('page_title', 'Add Task')

@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
    	<div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title text-center">Add New Task</h4>
                        <div class="row justify-content-center">
                        	<div class="col-md-8">
                        		<form method="POST" action="{{ url('communityhealthworker/tasks') }}">
                        			{{ csrf_field() }}
                        			<div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="title" class="">TaskTitle</label>
			                                <input class="form-control {{ $errors->has('task_title') ? 'parsley-error' : '' }}" type="text" value="{{ old('task_title') }}" placeholder="Task Title" id="task_title" name="task_title">
			                                @if ($errors->has('name'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('task_title') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="date">Task Date</label>
			                                <input class="form-control {{ $errors->has('task_date') ? 'parsley-error' : '' }}" type="text" value="{{ old('task_date') }}"" type="task_date" placeholder="dd.mm.yy" id="task_date" name="task_date">
			                                @if ($errors->has('task_date'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('task_date') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<button class="btn btn-info" type="submit">Save</button>
			                            </div>
			                        </div>
                        		</form>
                        	</div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->

@endsection
