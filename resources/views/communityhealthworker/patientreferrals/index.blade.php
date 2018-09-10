@extends('communityhealthworker.layout.app')

@section('page_title', 'Patient Referrals')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                       <!-- <h4 class="mt-0 header-title">All Staff<a href="{{ url('hospital/staff/create') }}" class="btn btn-info btn-sm pull-right m-b-10">Add Staff</a></h4>-->
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><b>Patient Name</b></th>
                               <!--<th>Household</th>-->
                                <th><b>Phone</b></th>
                                <th><b>Referral Date</b></th>
                                <th><b>Health Condition</b></th>
                            </tr>
                            </thead>
                            <tbody>
	                            @foreach($referrals as $patient_referral)
	                            <tr>
	                                <th scope="row">1</th>
	                                <td>{{ $patient->patient->name }}</td>
	                                <!--<td>{{ $patient->household->households_id }}</td>-->
	                                <td>{{ $patient->patient->phone}}</td>
	                                <td>{{ $patient->patient->notes}}</td>
	                                <td>{{ $patient_referral->referral_date }}</td>
	                                <td>
	                                	<a href="{{ url('communityhealthworker/patientreferrals', $patient_referral->id) }}" class="btn btn-success btn-xs">Edit</a>

	                                	<a href="javascript:void(0);" onclick="event.preventDefault();
	                                       document.getElementById('{{$patient_referral->id}}').submit();"
	                                                class="btn btn-danger btn-xs">Delete</a>
	                                	<form method="POST" id="{{$patient_referral->id}}" action="{{ url('communityhealthworker/patientreferrals',$patient_referral->id) }}" accept-charset="UTF-8">
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
