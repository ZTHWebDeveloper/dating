@extends('master.index')

@section('title')
	Recieve Request
@endsection

@section('content')

<div class="user-data">
    <div class="table-data">
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Profile Image</th>
                <th>View</th>
            </thead>
            <tbody>
                @if(count($bookshows) > 0)
                   @foreach($bookshows as $bookshow)
                        <tr>
                            <td>{{$bookshow->id}}</td>
                            <td><img class="img img-125 rounded-circle d-block" src="{{ asset('/uploads/'.$bookshow->profile) }}" alt=""></td>
                            <td><a href="{{action('ProfileController@bookdetail',$bookshow->profile_id)}}">Detail</a></td>
                        </tr>
                    @endforeach    
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection