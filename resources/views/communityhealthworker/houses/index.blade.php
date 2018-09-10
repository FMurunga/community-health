@extends('communityhealthworker.layout.app')

@section('page_title', 'Community House Holds')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <!--<h4 class="mt-0 header-title">All Houses<a href="{{ url('hospital/houses') }}" class="btn btn-info btn-sm pull-right m-b-10">Add Staff</a></h4>-->
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Head Of Household</th>
                                <th>Community Health Worker</th>
                               <!-- <th>Location</th>-->
                                <th>Number of Children</th>
                                <th>Number of Adults</th>
                                
                            </tr>
                            </thead>
                            <tbody>
	                            @foreach($houses as $house)
	                            <tr>
	                                <th scope="row">1</th>
	                                <td>{{ $house->head_of_household }}</td>
	                                <td>{{ $house->communityhealthworker->chw_id}}</td>
	                                <td>{{ $house->number_of_children }}</td>
	                                <td>{{ $house->number_of_adults }}</td>
	                                <td>
	                                	<a href="{{ url('communityhealthworker/houses', $house->id) }}" class="btn btn-success btn-xs">Edit</a>

	                                	<a href="javascript:void(0);" onclick="event.preventDefault();
	                                                document.getElementById('{{$houses->id}}').submit();"
	                                                class="btn btn-danger btn-xs">Delete</a>
	                                	<form method="POST" id="{{$house->id}}" action="{{ url('communityhealthworker/houses',$house->id) }}" accept-charset="UTF-8">
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
