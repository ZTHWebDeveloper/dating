@extends('master.index')

@section('title')
	Home
@endsection

@section('content')
	<div class="row" id="acc">
        @foreach($users as $u)
        <div class="col-md-4">
            <div class="card">
				<div class="card-header">
						<strong class="card-title">Profile</strong>
                </div>
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="img img-125 rounded-circle mx-auto d-block" src="{{ asset('/uploads/'.$u->profile) }}" alt="">
                        <h5 class="text-center m-t-15 m-b-15">{{ $u->name }}</h5>
                        <div class="location text-center">
                            <i class="zmdi zmdi-star"></i>
                            Popularity : 33 %
                        </div>
                       	<div class="location text-center">
                        <i class="zmdi zmdi-city"></i>
                            Myingyan, Myanmar
                        </div>
                    </div>
                    <hr>
                    <div class="card-text text-center">
                        <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <a href="#" class="btn btn-light col-md-4 col-sm-4 col-xs-4">
                                    <i class="zmdi zmdi-favorite-outline"></i>
                                </a>
                                <a href="#" class="btn btn-light col-md-4 col-sm-4 col-xs-4">
                                    <i class="zmdi zmdi-mail-send"></i>
                               	</a>
                               	<a href="{{ URL::to('profile/'.$u->id) }}" class="btn btn-light col-md-4 col-sm-4 col-xs-4">
                                    <i class="zmdi zmdi-eye"></i>
                                </a>
                            </div>
                    	</div>
                	</div>
            	</div>
        	</div>
    	</div>
        @endforeach
	</div>
@endsection

@section('btn')

<div class="pre-nxt col-md-12 col-sm-12 col-xs-12">
    <div class="row" id="acc-pagination">
        <div  class="pre col-md-6 col-sm-6 col-xs-6">
            <a href="#" class="btn btn-md btn-secondary" id="acc-previous">Prev</a>
        </div>
        <div  class="nxt col-md-6 col-sm-6 col-xs-6">
            <a href="#" class="btn btn-md btn-secondary pull-right" id="acc-next">Next</a>
        </div>
    </div>
</div>

@endsection 