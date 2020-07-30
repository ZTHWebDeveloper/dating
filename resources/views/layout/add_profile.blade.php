@extends('master.index')

@section('title')
    Profile
@endsection

@section('content')
   <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Change</strong> Profile
            </div>
            <form class="form-horizontal m-t-15" role="form" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="Choose">Choose File *</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="zmdi zmdi-camera"></i>
                                </div>
                                <input class="file_upload form-control" type="file" name="profile" accept="image/*" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info btn-sm" name="add">
                        ADD PROFILE
                    </button>
                </div>
            </form>   
        </div> 
    </div>          
@endsection  