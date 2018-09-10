@extends('hospital.layout.app')

@section('page_title', 'Edit Health Worker')

@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
    	<div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title text-center">Edit Health Worker</h4>
                        <div class="row justify-content-center">
                        	<div class="col-md-8">
                        		<form method="POST" action="{{ url('hospital/communityhealthworker', $worker->id) }}">
                        			{{ csrf_field() }}
                        			{{ method_field('PATCH') }}
                        			<div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="name" class="">Name</label>
			                                <input class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}" type="text" value="{{ $worker->name, old('name') }}" placeholder="Health Worker name" id="name" name="name">
			                                @if ($errors->has('name'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('name') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="email">Email</label>
			                                <input class="form-control {{ $errors->has('email') ? 'parsley-error' : '' }}" type="text" value="{{ $worker->email, old('email') }}"" type="email" placeholder="name@example.com" id="email" name="email">
			                                @if ($errors->has('email'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('email') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="health worker">Health Worker Type</label>
			                            	<select name="chw_type_id" class="form-control {{ $errors->has('chw_type_id') ? 'parsley-error' : '' }}">
			                            		@foreach($chw as $type)
			                            		<option value="{{ $type->id }}" {{ $worker->chw_type_id == $type->id ? 'selected' : ''}}>{{ $type->name }}</option>
			                            		@endforeach
			                            	</select>
			                              
			                                @if ($errors->has('chw_type_id'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('chw_type_id') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="phone">Phone</label>
			                                <input class="form-control {{ $errors->has('phone') ? 'parsley-error' : '' }}" type="text" value="{{ $worker->phone, old('phone') }}"" type="tel" placeholder="0708153688" id="phone" name="phone">
			                                @if ($errors->has('phone'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('phone') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="password">Password</label>
			                                <input class="form-control {{ $errors->has('password') ? 'parsley-error' : '' }}" type="password" value="{{ old('password') }}"" type="password" id="password" name="password">
			                                @if ($errors->has('password'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('password') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="password">Confirm Password</label>
			                                <input class="form-control {{ $errors->has('confirm') ? 'parsley-error' : '' }}" type="password" value="{{ old('confirm') }}"" type="password" id="password" name="confirm">
			                                @if ($errors->has('confirm'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('confirm') }}.</li>
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
