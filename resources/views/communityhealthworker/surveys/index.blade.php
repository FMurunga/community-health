@extends('communityhealthworker.layout.app')

@section('page_title', 'Community Health Surveys')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Surveys<a href="{{ url('communityhealthworker/surveys/create') }}" class="btn btn-info btn-sm pull-right m-b-10">Add New survey</a></h4>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><b>Survey Title</b></th>
                                <th><b>Survey Date</b></th>
                                <th><b>Created at</b></th>
                                <th><b>Action</b></th>
                            </tr>
                            </thead>
                            <tbody>
	                            @foreach($surveys as $survey)
	                            <tr>
	                                <th scope="row">1</th>
	                                <td>{{ $survey->survey_title }}</td>
	                                <td>{{ $survey->survey_date }}</td>
	                                <td>{{ $survey->created_at }}</td>
	                                <td>
	                                <a href="{{ url('communityhealthworker/surveys', $survey->id) }}" class="btn btn-success btn-xs">Edit</a>

	                                	<a href="javascript:void(0);" onclick="event.preventDefault();
	                                                document.getElementById('{{$survey->id}}').submit();"
	                                                class="btn btn-danger btn-xs">Delete</a>
	                                	<form method="POST" id="{{$survey->id}}" action="{{ url('communityhealthworker/surveys',$survey->id) }}" accept-charset="UTF-8">
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
                           
	                             
	                                
                               
