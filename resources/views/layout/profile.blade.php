@extends('master.index')

@section('title')
    Profile
@endsection

@section('content')

@if(session('updated'))
    <p class="alert alert-success"> {{ session('updated') }} </p>
@endif
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Profile</strong>
        </div>
        <div class="card-body col-md-12">
            <div class="row">
                <div class="col-md-12 acc-cover">
                    <img class="img img-125 rounded-circle mx-auto d-block" src="{{ asset('/uploads/'.$profile->profile) }}" alt="">
                    @if ( Auth::user()->id == $profile->id)
                    <div class="text-center m-t-5">
                        <a href="{{ URL::to('add_profile/'.Auth::user()->id) }}" class="btn btn-light">
                           Change <i class="zmdi zmdi-camera m-r-5"></i>
                        </a>
                    </div>
                    @endif
                    <h3 class="h3 text-center">{{ $profile->name }}</h3>
                </div>
            </div><br>
            @if ( Auth::user()->id == $profile->id)
            <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <a href="#" class="btn btn-light col-md-3 col-sm-3 col-xs-3">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                    <a href="#" class="btn btn-light col-md-3 col-sm-3 col-xs-3">
                        <i class="zmdi zmdi-calendar"></i>
                    </a>
                    <a href="#" class="btn btn-light col-md-3 col-sm-3 col-xs-3">
                        <i class="zmdi zmdi-collection-image"></i>
                    </a>
                    <a href="#" class="btn btn-light col-md-3 col-sm-3 col-xs-3">
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </div>
            </div>
            @else
            <div class="btn-group col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <a href="#" class="btn btn-light col-md-3 col-sm-3 col-xs-3">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                    <a href="#" class="btn btn-light col-md-3 col-sm-3 col-xs-3">
                        <i class="zmdi zmdi-mail-send"></i>
                    </a>
                    <a href="#" class="btn btn-light col-md-3 col-sm-3 col-xs-3">
                        <i class="zmdi zmdi-collection-image"></i>
                    </a>
                    <a href="{{action('ProfileController@bookmarks',$profile->id)}}" class="btn btn-light col-md-3 col-sm-3 col-xs-3">
                        <i class="zmdi zmdi-bookmark-outline"></i>
                    </a>
                   
                </div>
            </div>
            @endif
        </div>
    </div> 
<div class="user-data">
    <h4 class="h4 m-l-15"><i class="zmdi zmdi-account"></i> About</h4>
    <div class="table-data">
        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <strong>Gender</strong>
                    </td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->gender }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Interest</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->interest }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Birth</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->birth }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Looking</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->looking }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>City</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->city}}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Country</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->country }}
                        </div> 
                    </td>
                </tr>   
                <tr>
                    <td><strong>Height</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->height }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Body</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->body }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Looks</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->looks }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Hair</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->hair }}
                        </div> 
                    </td>
                </tr>

                <tr>
                    <td><strong>Eye</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->eye }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Relationship</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->relationship }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Have child</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->havechild }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Want child</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->wantchild }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Diet</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->diet }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Drinking</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->drinking }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Smoking</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->smoking }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Education</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->education }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Occupation 1</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->occupation1 }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Occupation 2</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->occupation2 }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Income</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->income }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Religion</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->religion }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Ethincity</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->ethincity }}
                        </div> 
                    </td>
                </tr>

                <tr>
                    <td><strong>Home language</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->homelang }}
                        </div> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Other language</strong></td>
                    <td>
                        <div class="btn-group pull-right">
                           {{ $profile->otherlang }}
                        </div> 
                    </td>
                </tr>
            </tbody>
        </table>
     </div>
</div>                 
@endsection
