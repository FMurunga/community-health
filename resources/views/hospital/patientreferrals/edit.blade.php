@extends('hospital.layout.app')

@section('page_title', 'Edit Patient Referral')

@section('content')
<div class="page-content-wrapper ">
    <div class="container-fluid">
    	<div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title text-center">Edit Patient Referral</h4>
                        <div class="row justify-content-center">
                        	<div class="col-md-8">
                        		<form method="POST" action="{{ url('hospital/patientreferrals', $referrals->id) }}">
                        			{{ csrf_field() }}
                        			{{ method_field('PATCH') }}
                        			<div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="name" class="">Name</label>
			                                <input class="form-control {{ $errors->has('name') ? 'parsley-error' : '' }}" type="text" value="{{ $patients->name, old('name') }}" placeholder="Patient name" id="name" name="name">
			                                @if ($errors->has('name'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('name') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="phone">Phone</label>
			                                <input class="form-control {{ $errors->has('phone') ? 'parsley-error' : '' }}" type="text" value="{{ $patients->phone, old('phone') }}"" type="tel" placeholder="0708153688" id="phone" name="phone">
			                                @if ($errors->has('phone'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('phone') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                        <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="notes">Notes</label>
			                                <input class="form-control {{ $errors->has('notes') ? 'parsley-error' : '' }}" type="text" value="{{ $patients->notes, old('notes') }}"" type="text" placeholder="health condition" id="notes" name="notes">
			                                @if ($errors->has('notes'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('notes') }}.</li>
			                                    </ul>
			                                @endif
			                            </div>
			                        </div>
			                      <div class="form-group row">
			                            <div class="col-sm-12">
			                            	<label for="date">Referral Date</label>
			                                <input class="form-control {{ $errors->has('refferal_date') ? 'parsley-error' : '' }}" type="date" value="{{ $refferals->referral_date, old('refferal_date') }}"" type="date" placeholder="refferal date" id="refferal_date" name="refferal_date">
			                                @if ($errors->has('notes'))
			                                    <ul class="parsley-errors-list filled">
			                                        <li class="parsley-required">{{ $errors->first('refferal_date') }}.</li>
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
