@extends('master.index')

@section('title')
	Gifts
@endsection

@section('content')
	
<div class="user-data">
    <div class="table-data">
        <table class="table">
            <thead>
                <tr>
                    <td>categories</td>
                    <td><span class="pull-right">action</span></td>
                </tr>
            </thead>
            <tbody>
            	<tr>
                	<td>
                        <div class="table-data__info">
                            <span>
                                <i class="zmdi zmdi-cake"></i> 
                            </span>
                            <h6>Cakes</h6>  
                        </div>
                    </td>
                    <td>
                        <div class="btn-group pull-right">
                    		<a href="{{ URL::to('gift_details') }}" class="btn-sm btn-info">View</a>
                		</div> 
                    </td>
                </tr>
                <tr>
                	<td>
                        <div class="table-data__info">
                            <span>
                                <i class="zmdi zmdi-coffee"></i> 
                            </span>
                            <h6>Coffee Cups</h6>  
                        </div>
                    </td>
                    <td>
                        <div class="btn-group pull-right">
                    		<a href="{{ URL::to('gift_details') }}" class="btn-sm btn-info">View</a>
                		</div> 
                    </td>
                </tr>
                <tr>
                	<td>
                        <div class="table-data__info">
                            <span>
                                <i class="zmdi zmdi-flower"></i> 
                            </span>
                            <h6>Flowers</h6>  
                        </div>
                    </td>
                    <td>
                        <div class="btn-group pull-right">
                    		<a href="{{ URL::to('gift_details') }}" class="btn-sm btn-info">View</a>
                		</div> 
                    </td>
                </tr>
                <tr>
                	<td>
                        <div class="table-data__info">
                            <span>
                                <i class="zmdi zmdi-card"></i> 
                            </span>
                            <h6>Love Cards</h6>  
                        </div>
                    </td>
                    <td>
                        <div class="btn-group pull-right">
                    		<a href="{{ URL::to('gift_details') }}" class="btn-sm btn-info">View</a>
                		</div> 
                    </td>
                </tr> 
                <tr>
                    <td>
                        <div class="table-data__info">
                            <span>
                                <i class="zmdi zmdi-image"></i> 
                            </span>
                            <h6>Picture Frames</h6>  
                        </div>
                    </td>
                    <td>
                        <div class="btn-group pull-right">
                    		<a href="{{ URL::to('gift_details') }}" class="btn-sm btn-info">View</a>
                		</div> 
                    </td>
                </tr>
                <tr>
                	<td>
                        <div class="table-data__info">
                            <span>
                                <i class="zmdi zmdi-toys"></i> 
                            </span>
                            <h6>Toys</h6>  
                        </div>
                    </td>
                    <td>
                        <div class="btn-group pull-right">
                    		<a href="{{ URL::to('gift_details') }}" class="btn-sm btn-info">View</a>
                		</div> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="table-data__info">
                            <span>
                                <i class="zmdi zmdi-watch"></i> 
                            </span>
                            <h6>watches</h6>  
                        </div>
                    </td>
                    <td>
                        <div class="btn-group pull-right">
                    		<a href="{{ URL::to('gift_details') }}" class="btn-sm btn-info">View</a>
                		</div> 
                    </td>
                </tr>   
            </tbody>
        </table>
     </div>
 </div>

@endsection