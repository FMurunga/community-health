@extends('hospital.layout.app')

@section('page_title', 'Edit Survey')

@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
    	<div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title text-center">Edit Survey</h4>
                        <div class="row justify-content-center">
                        	<div class="col-md-8">
                        		<form method="POST" action="{{ url('hospital/survey', $surveys->id) }}">
                        			{{ csrf_field() }}
                        			{{ method_field('PATCH') }}
                        			<div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="title" class="">Survey Title</label>
			                                <input class="form-control {{ $errors->has('survey_title') ? 'parsley-error' : '' }}" type="text" value="{{ old('survey_title') }}" placeholder="Survey Title" id="survey_title" name="survey_title">
			                                @if ($errors->has('survey_title'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('survey_title') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="date">Survey Date</label>
			                                <input class="form-control {{ $errors->has('survey_date') ? 'parsley-error' : '' }}" type="text" value="{{ old('survey_date') }}"" type="survey_date" placeholder="dd.mm.yy" id="survey_date" name="survey_date">
			                                @if ($errors->has('survey_date'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('survey_date') }}.</li>
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
			                        
			                       
			                       
