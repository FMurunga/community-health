@extends('hospital.layout.auth')


@section('content')
<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h4 class="text-muted text-center font-18"><b>Facility Registeration</b></h4>

                <div class="p-3">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/hospital/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? 'parsley-error' : '' }}" name="name" value="{{ old('name') }}" placeholder="Facility Name" autofocus>
                           
                            @if ($errors->has('name'))
                                <ul class="parsley-errors-list filled">
                                    <li class="parsley-required">{{ $errors->first('name') }}.</li>
                                </ul>
                            @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? 'parsley-error' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address">

                                
                             @if ($errors->has('email'))
                                <ul class="parsley-errors-list filled">
                                    <li class="parsley-required">{{ $errors->first('email') }}.</li>
                                </ul>
                            @endif
                                   
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-12">
                                <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'parsley-error' : '' }}" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <ul class="parsley-errors-list filled">
                                        <li class="parsley-required">{{ $errors->first('password') }}.</li>
                                    </ul>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="col-12">
                                <input id="password-confirm" type="password" class="form-control {{ $errors->has('password_confirmation') ? 'parsley-error' : '' }}" name="password_confirmation" placeholder="confirm password">

                                @if ($errors->has('password_confirmation'))
                                    <ul class="parsley-errors-list filled">
                                        <li class="parsley-required">{{ $errors->first('password_confirmation') }}.</li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                         <div class="form-group text-center">
                            <div class="col-12 col-md-offset-4">
                                <button type="submit" class="btn btn-info btn-block waves-effect waves-light">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection