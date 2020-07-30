@extends('master.index')

@section('title')
    About Me
@endsection

@section('content')

@php
    $gender=array("Any","Female","Male","Other");

    $interest=array("Any","Female","Male","Other");

    $looking=array("Any","Just Online Friends","Activity Partners","Friends","Short Term","Long Term","Opening","Marriage");

    $city=array("Any","Mandalay","Meiktila","Myingyan","Nay Pyi Taw","Yangon","Other");

    $country=array("Any","Brunei","Cambodia","Indonesia","Loas","Malaysia","Myanamr","Philippines","Singapore","Thailand","Thailand","Vietnam","Other");

    $height=array("Any","4 ft, 0 in","4 ft, 6 in","5 ft, 0 in","5 ft, 6 in","6 ft, 0 in","6 ft, 6 in","7 ft, 0 in","Higher 7 ft");

    $body=array("Any","Slim","Average","Athletic","Curvaceous","A Few Extra Pounds","Full Figured","Large","Disable","Other");

    $eye=array("Any","Black","Blue","Blue-Green","Brown","Green","Grey","Hazel");

    $havechild=array("Any","No","Yes, not living with me","Yes, living with me","Yes, living with me sometimes");

    $wantchild=array("Any","No","Yes","Maybe");

    $relationship=array("Any","Single","Partnered","Married","Separated","Divorced","Windowed","It's Complicated");

    $diet=array("Any","Things","Healthily","Vegetarian","Vegan","Kosher","Halaal","Hindu Diet");

    $drinking=array("Any","Non-Driker","Occasional Drinker","Regular Drinker","Heavy Drinker");

    $looks=array("Any","Beauty Contest Winner","Attractive","Above Average","Average","Below Average");

    $smoking=array("Any","Non-Smoking","Occasional Smoker","Regular Smoker","Heavy Smoker","E-Cigarette User","Trying to Quit");

    $education=array("Any","Haven't Completed High/Secondary School","High/Secondary School","Current University/College Student","Some University/College","Technical Diploma","Associate Degree","Bachelor Degree","Post Graduate Degree");

    $hair=array("Any","Auburn","Balding","Black","Blonde","Dark Blonde","Dark Brown","Dark Brown","Greying","Light Brown","None(Bald)","Often Changes","Red","Shaved","White","Other");

    $occupation1=array("Any","Agriculture","Education","Finance","Food Services","Legal","Medical/Dental","Retired","Self Employed","Student","Other");

    $occupation2=array("Any","Administrative/Secretarial","Artistic/Musical/Writer","Executive/Management","Government","Labour/Contruction","Political","Sales and Marketing","Technical/Science/Engingeering","Transportation","Other");

    $income=array("Any","On Welfare/Benefits","Struggling","Solvent","Enough","Comfortable","Wealthy","Fat Cat");

    $religion=array("Any","Agnostic","Atheist","Buddish/Taoist","Christian/Catholic","Christian/Orthodox","Christian/Protestant","Christian/Other","Hindu","Islamic","Jewish","Sikh","Spiritual, but not religious","Other");

    $ethincity=array("Any","Asian","Black/African","Indian","Latino","Middle Eastern","Mixed","White/Caucasian","Other");

    $homelang=array("Any","English","Local","Other");

    $otherlang=array("Any","English","Local","Other");                                  
@endphp

@if(session('error_gender'))
    <p class="alert alert-warning">{{ session('error_gender') }}</p>

@elseif(session('error_place'))
    <p class="alert alert-warning">{{ session('error_place') }}</p>
@elseif(session('error_rs'))
    <p class="alert alert-warning">{{ session('error_rs') }}</p>
@endif

    <div class="login-content">
        <form class="form-horizontal" role="form" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
               <label>Basic Information</label>
            </div>  
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Gender:</label>
                <select class="js-select2 selectpicker" name="gender">
                    @foreach($gender as $g)
                        @if($user->gender == $g)
                            <option value="{{$g}}" selected="selected">{{$g}}</option>
                        @else
                            <option value="{{$g}}">{{$g}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Interested In:</label>
                <select class="js-select2 selectpicker" name="interest">
                    @foreach($interest as $i)
                        @if($user->interest == $i)
                            <option value="{{$i}}" selected="selected">{{$i}}</option>
                        @else
                            <option value="{{$i}}">{{$i}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group">
                <label>Birth Date:</label>
                <input class="au-input au-input--full" type="date" data-date="" date-date-format="" name="birth" value="{{$user->birth}}" required>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Looking For:</label>
                <select class="js-select2 selectpicker" name="looking">
                    @foreach($looking as $l)
                        @if($user->looking == $l)
                            <option value="{{$l}}" selected="selected">{{$l}}</option>
                        @else
                            <option value="{{$l}}">{{$l}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group">
               <label>Location</label>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>City:</label>
                <select class="js-select2 selectpicker" name="city">
                    @foreach($city as $c)
                        @if($user->city == $c)
                            <option value="{{$c}}" selected="selected">{{$c}}</option>
                        @else
                            <option value="{{$c}}">{{$c}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Country:</label>
                <select class="js-select2 selectpicker" name="country">
                    @foreach($country as $c)
                        @if($user->city == $c)
                            <option value="{{$c}}" selected="selected">{{$c}}</option>
                        @else
                            <option value="{{$c}}">{{$c}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group">
               <label>Physical Descriptions</label>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Height:</label>
                <select class="js-select2 selectpicker" name="height">
                    @foreach($height as $h)
                        @if($user->height == $h)
                            <option value="{{$h}}" selected="selected">{{$h}}</option>
                        @else
                            <option value="{{$h}}">{{$h}}</option>
                        @endif
                    @endforeach 
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Body Type:</label>
                <select class="js-select2 selectpicker" name="body">
                    @foreach($body as $b)
                        @if($user->body == $b)
                            <option value="{{$b}}" selected="selected">{{$b}}</option>
                        @else
                            <option value="{{$b}}">{{$b}}</option>
                        @endif
                    @endforeach 
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Looks:</label>
                <select class="js-select2 selectpicker" name="looks">
                    @foreach($looks as $l)
                        @if($user->looks == $l)
                            <option value="{{$l}}" selected="selected">{{$l}}</option>
                        @else
                            <option value="{{$l}}">{{$l}}</option>
                        @endif
                    @endforeach 
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Hair Colour:</label>
                <select class="js-select2 selectpicker" name="hair">
                    @foreach($hair as $h)
                        @if($user->hair == $h)
                            <option value="{{$h}}" selected="selected">{{$h}}</option>
                        @else
                            <option value="{{$h}}">{{$h}}</option>
                        @endif
                    @endforeach 
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Eye Colour:</label>
                <select class="js-select2 selectpicker" name="eye">
                    @foreach($eye as $e)
                        @if($user->eye == $e)
                            <option value="{{$e}}" selected="selected">{{$e}}</option>
                        @else
                            <option value="{{$e}}">{{$e}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
             <div class="form-group">
               <label>Lifestyle</label>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Relationship Status:</label>
                <select class="js-select2 selectpicker" name="relationship">
                    @foreach($relationship as $r)
                        @if($user->relationship == $r)
                            <option value="{{$r}}" selected="selected">{{$r}}</option>
                        @else
                            <option value="{{$r}}">{{$r}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Have Children:</label>
                <select class="js-select2 selectpicker" name="havechild">
                    @foreach($havechild as $h)
                        @if($user->have == $h)
                            <option value="{{$h}}" selected="selected">{{$h}}</option>
                        @else
                            <option value="{{$h}}">{{$h}}</option>
                        @endif
                    @endforeach
                 </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Want Children:</label>
                <select class="js-select2 selectpicker" name="wantchild">
                    @foreach($wantchild as $w)
                        @if($user->wantchild == $w)
                            <option value="{{$w}}" selected="selected">{{$w}}</option>
                        @else
                            <option value="{{$w}}">{{$w}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Daily Diet:</label>
                <select class="js-select2 selectpicker" name="diet">
                    @foreach($diet as $d)
                        @if($user->diet == $d)
                            <option value="{{$d}}" selected="selected">{{$d}}</option>
                        @else
                            <option value="{{$d}}">{{$d}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Drinking:</label>
                <select class="js-select2 selectpicker" name="drinking">
                    @foreach($drinking as $d)
                        @if($user->drinking == $d)
                            <option value="{{$d}}" selected="selected">{{$d}}</option>
                        @else
                            <option value="{{$d}}">{{$d}}</option>
                        @endif
                    @endforeach 
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Smoking:</label>
                <select class="js-select2 selectpicker" name="smoking">  
                    @foreach($smoking as $s)
                        @if($user->smoking == $s)
                            <option value="{{$s}}" selected="selected">{{$s}}</option>
                        @else
                            <option value="{{$s}}">{{$s}}</option>
                        @endif
                    @endforeach  
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Education:</label>
                <select class="js-select2 selectpicker" name="education">
                    @foreach($education as $e)
                        @if($user->education == $e)
                            <option value="{{$e}}" selected="selected">{{$e}}</option>
                        @else
                            <option value="{{$e}}">{{$e}}</option>
                        @endif
                    @endforeach 
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Occupation 1:</label>
                <select class="js-select2 selectpicker" name="occupation1">
                    @foreach($occupation1 as $o)
                        @if($user->occupation1 == $o)
                            <option value="{{$o}}" selected="selected">{{$o}}</option>
                        @else
                            <option value="{{$o}}">{{$o}}</option>
                        @endif
                    @endforeach  
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Occupation 2:</label>
                <select class="js-select2 selectpicker" name="occupation2">
                    @foreach($occupation2 as $o)
                        @if($user->occupation2 == $o)
                            <option value="{{$o}}" selected="selected">{{$o}}</option>
                        @else
                            <option value="{{$o}}">{{$o}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Income:</label>
                <select class="js-select2 selectpicker" name="income">   
                    @foreach($income as $i)
                        @if($user->income == $i)
                            <option value="{{$i}}" selected="selected">{{$i}}</option>
                        @else
                            <option value="{{$i}}">{{$i}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Religion:</label>
                <select class="js-select2 selectpicker" name="religion">
                        
                    @foreach($religion as $r)
                        @if($user->religion == $r)
                            <option value="{{$r}}" selected="selected">{{$r}}</option>
                        @else
                            <option value="{{$r}}">{{$r}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Ethnicity:</label>
                <select class="js-select2 selectpicker" name="ethincity">
                    @foreach($ethincity as $e)
                        @if($user->ethincity == $e)
                            <option value="{{$e}}" selected="selected">{{$e}}</option>
                        @else
                            <option value="{{$e}}">{{$e}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Home Languages:</label>
                <select class="js-select2 selectpicker" name="homelang">
                    @foreach($homelang as $h)
                        @if($user->homelang == $h)
                            <option value="{{$h}}" selected="selected">{{$h}}</option>
                        @else
                            <option value="{{$h}}">{{$h}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="form-group rs-select2--dark rs-select2--md  rs-select2--border">
                <label>Other Languages:</label>
                <select class="js-select2 selectpicker" name="otherlang">
                    @foreach($otherlang as $o)
                        @if($user->otherlang == $o)
                            <option value="{{$o}}" selected="selected">{{$o}}</option>
                        @else
                            <option value="{{$o}}">{{$o}}</option>
                        @endif
                    @endforeach
                </select>
                <div class="dropDownSelect2"></div>
            </div>      
            <div class="form-group"> 
                <input class="btn btn-info col-md-12" type="submit" name="save" value="SAVE INFO">   
            </div>
        </form>
    </div>                    

    
@endsection 
                