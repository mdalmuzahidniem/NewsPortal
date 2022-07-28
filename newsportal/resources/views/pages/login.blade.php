@extends('layout.topnav')
@section('content')

<style>
    #frm{
        width: 500px;
        margin: 0px 450px;
        height: 450px;
        padding:50px 100px;
        border-radius: 5px;
        box-shadow: 0px 0px 30px blue;
        background-color: transparent; 
        color: #34495e;
    
      }
    #txt{
	width: 250px;
	height: 35px;
	font-size:20px;
	border-radius:5px;
}
</style>
<form class="col-md-5 form group" id="frm" method="post" action="">
<div  class="col-md-5 form group">
<input type="text" id="txt" name="username" value="{{old('username')}}" class="form control" placeholder="Username">
</div>
<br>
<br>
<div class="col-md-5 form group">
<input type="text" id="txt" name="password" value="{{old('password')}}" class="form control" placeholder="Password">
</div>
<br>
<div class="col-md-5 form group">
<input style="width:250px;	font-size:20px;" class="btn btn-primary" type="submit" value="Login" name="submit">
</div>
<br>
<hr>
<h4 style="color:red; text-align:center;">Don't have account yet?</h4>
    <div class="col-md-5 form-group">
        
        <a style="width:250px; font-size:20px;" href="" class="btn btn-info" >Sign Up</a>
    </div>

</form>
@endsection