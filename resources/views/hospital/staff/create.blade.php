@extends('hospital.layout.app')

@section('page_title', 'Add Staff')

@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
    	<div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title text-center">Add Staff</h4>
                        <div class="row justify-content-center">
                        	<div class="col-md-8">
                        		<form method="POST" action="{{ url('hospital/staff') }}">
                        			{{ csrf_field() }}
                        			<div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="name" class="">Name</label>
			                                <input class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}" type="text" value="{{ old('name') }}" placeholder="Staff name" id="name" name="name">
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
			                                <input class="form-control {{ $errors->has('email') ? 'parsley-error' : '' }}" type="text" value="{{ old('email') }}"" type="email" placeholder="name@example.com" id="email" name="email">
			                                @if ($errors->has('email'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('email') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="phone">Phone</label>
			                                <input class="form-control {{ $errors->has('phone') ? 'parsley-error' : '' }}" type="text" value="{{ old('phone') }}"" type="tel" placeholder="0708153688" id="phone" name="phone">
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
