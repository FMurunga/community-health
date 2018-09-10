@extends('staff.layout.auth')

@section('content')
<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h4 class="text-muted text-center font-18"><b>Facility Staff Log In</b></h4>

            <div class="p-3">
                <form class="form-horizontal m-t-20" role="form" method="POST" action="{{ url('/staff/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="email" type="email" placeholder="Email Address" class="form-control {{ $errors->has('email') ? 'parsley-error' : '' }}" name="email" value="{{ old('email') }}" autofocus>

                            @if ($errors->has('email'))
                                <ul class="parsley-errors-list filled">
                                    <li class="parsley-required">{{ $errors->first('email') }}.</li>
                                </ul>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <input id="password" type="password" placeholder="password" class="form-control {{ $errors->has('password') ? 'parsley-error' : '' }}" name="password" autofocus>

                            @if ($errors->has('password'))
                                <ul class="parsley-errors-list filled">
                                    <li class="parsley-required">{{ $errors->first('password') }}.</li>
                                </ul>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember">
                                <label class="custom-control-label" for="remember">Remember me</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center row m-t-20">
                        <div class="col-12">
                            <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-10 mb-0 row">
                        <div class="col-sm-7 m-t-20">
                            <a href="{{ url('/staff/password/reset') }}" class="text-muted"><i class="mdi mdi-lock    "></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 m-t-20">
                            <a href="{{ url('/staff/register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection